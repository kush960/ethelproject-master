<template>
<div>
   <h1>Medications</h1>
   <MedicinesDone />
   <MedicinesToDo />
   </div>
</template>

<script>


import MedicinesDone from '../components/medicines/done'
    import MedicinesToDo from '../components/medicines/todo'

export default {
    name: 'Medicines',
    components: {
        MedicinesDone,
        MedicinesToDo
    }
    
}
</script>