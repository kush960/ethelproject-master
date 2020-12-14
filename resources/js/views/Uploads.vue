<template>
<div>
   <h1>Media Uploads</h1>
   <UploadsDone />
   <UploadsToDo />
   </div>
</template>

<script>


import UploadsDone from '../components/uploads/done'
    import UploadsToDo from '../components/uploads/todo'

export default {
    name: 'Uploads',
    components: {
        UploadsDone,
        UploadsToDo
    }
    
}
</script>