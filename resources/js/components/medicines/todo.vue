<!--    ******************************************
        Form to Schedule New Medications
        ****************************************** -->
<template>    

    <div>

        <h2>Schedule New Medication </h2>  

        <!-- Display form to schedule medications -->
        <form @submit="formSubmit">

        <div class="form-group">
            <label for="reference">Reference</label>
            <input type="text" name="reference" id="reference" class="form-control" v-model="reference"
                placeholder="For your reference - this text is not displayed to client" >
        </div>

        <div class="form-group">
            <label for="instruction">Instructions</label>
            <input type="text" name="instruction" id="instruction" class="form-control" v-model="instruction"
                placeholder="For client reference - this text will appear onscreen for the client">
        </div>

        <div class="form-group">
            <label for="prompt_time">Prompt Time</label>
            <input type="time" name="prompt_time" id="prompt_time" class="form-control" v-model="prompt_time">
        </div>

        <div class="form-group">
            <label for="start_date">Starting Date</label>
        <input type="date" name="start_date" id="start_date" class="form-control" v-model="start_date">
        </div>

        <div class="form-group">
            <label for="end_date">Last Date</label>
            <input type="date" name="end_date" id="end_date" class="form-control" v-model="end_date">
        </div>

        <div class="form-group">
            <label for="repeat">Repeatation</label>
            <select name="repeat" id="repeat" class="form-control" v-model="repeat">
                <option value="Never">Never</option>
                <option value="Daily">Daily</option>
                <option value="Every Other Day">Every Other Day</option>
                <option value="Weekly">Weekly</option>
            </select>
        </div>

        <div class="form-group">
            <label for="use_alert">Alert Missed</label>
            <input type="checkbox" name="use_alert" id="use_alert" class="form-control" v-model="use_alert">
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
                instruction: '',
                prompt_time: '',
                start_date: '',
                end_date: '',
                repeat: '',
                use_alert: '',
                output: ''
            };
        },

       methods: {
            formSubmit(e){
                e.preventDefault();
                
                let currentObj = this;

                axios.post('/medication_schedules', {
                    reference: this.reference,
                    instruction: this.instruction,
                    prompt_time: this.prompt_time,
                    start_date: this.start_date,
                    end_date: this.end_date,
                    repeat: this.repeat,
                    use_alert: this.use_alert
                })
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