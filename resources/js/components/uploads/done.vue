<!--    ******************************************
        Display Previously Uploaded Media Files
        ****************************************** -->
<template>    

    <div>

        <h1>Uploaded Media</h1>  

        <!-- Display message if no files have been uploaded -->

        <h3 v-if="my_uploads.length === 0">
            You have no uploaded media files
        </h3>

        <!-- Display table with uploaded media files -->

        <table v-if="my_uploads.length > 0">
         
            <tr>
                <th>Reference</th>
                <th>id</th>
                <th>tablet id</th>
                <th>Image</th>
                <th>Actions</th>        
            </tr>

            <tr v-for="upload in my_uploads" :key="upload.id">
                <td>    {{ upload.reference }} </td>
                <td>    {{ upload.id }} </td>
                <td>{{ upload.tablet_users_id }}</td>
                <td><img v-bind:src="upload.image_thumb" /></td>      
                <td> Edit / Delete</td>
            </tr>

        </table>
           
    </div>

</template>


<script>

    const default_layout = "default";

    import axios from 'axios';

    export default {

        data(){
            return {
                my_uploads:[]
            }  
        },

        mounted(){
            this.getUploaded();
        },

        methods: {
            getUploaded(){
                axios.get('/uploads/')
                .then(response =>{
                    this.my_uploads = response.data;
                });
            }
        }

}

</script>