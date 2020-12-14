<!--    ******************************************
        Form to Upload New Media Files
        ****************************************** -->
<template>    

    <div>

        <h1>Add New Media </h1>  

        <!-- Display form to upload media files -->

        <form @submit="formSubmit">

        <div class="form-group">
            <label for="reference">Reference</label>
            <input type="text" name="reference" id="reference" class="form-control" v-model="reference"
                placeholder="ref" >
        </div>

        <div class="form-group">
            <label for="instruction">File</label>
            <input type="file" name="file_upload" id="file_upload" class="form-control">
                
        </div>

        <button type="submit" class="btn btn-default">Add To Schedule</button>

     </form>     

        Output: {{ output }}
    
       
           
    </div>

</template>


<script>

    const default_layout = "default";

    import axios from 'axios';

    export default {

        data() {
            return {
                reference: '',
                file_upload: '',
                output: ''
            };
        },

       methods: {
            formSubmit(e){
                e.preventDefault();
                
                let currentObj = this;

                axios.post('/uploads', {
                    reference: this.reference,
                    file_upload: this.file_upload               
                },
            
                )
                .then(response =>{
                    currentObj.output = response.data;
                })
                .catch(function (error) {
                    currentObj.output = error;
                });
            }
        }    
        

}

</script>