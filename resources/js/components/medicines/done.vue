<!--    ******************************************
        Display Previously Scheduled Medications
        ****************************************** -->
<template>    

    <div>

        <h2>Scheduled Medications</h2>  

        <!-- Display message if no medications have been scheduled -->

        <h3 v-if="my_uploads.length === 0">
            You have no scheduled medications
        </h3>

        <!-- Display table with scheduled medications -->

        <table v-if="my_uploads.length > 0">
         
            <tr>
                
                <th>id</th>
                <th>tablet id</th>
                <th>Reference</th>
                <th>Instructions</th>
                <th>Prompt Time</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Repeat</th>
                <th>Use Alert</th>
                <th>Scheduled By</th>
                <th>Actions</th>        
            </tr>

            <tr v-for="upload in my_uploads" :key="upload.id">
                
                <td><small>{{ upload.id }}</small></td>
                <td><small>{{ upload.tablet_users_id }}</small></td>
                <td>{{ upload.reference }} </td>
                <td>{{ upload.instruction}}</td>    
                <td>{{ upload.prompt_time }} </td>
                <td>{{ upload.start_date }}</td>
                <td>{{ upload.end_date }} </td>
                <td>{{ upload.repeat}}</td> 
                <td>{{ upload.use_alert}}</td>
                <td><small>{{ upload.scheduled_by}}</small></td>
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
                axios.get('/medication_schedules/')
                .then(response =>{
                    this.my_uploads = response.data;
                });
            }
        }

}

</script>