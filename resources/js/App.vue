<template>
    <div>
        <h1>Ethel</h1>
        <p>
            <router-link :to="{ name: 'home' }">Home</router-link> | 
            <router-link :to="{ name: 'about' }">About</router-link> | 
            <router-link :to="{ name: 'uploads' }">Media Uploads</router-link> | 
            <router-link :to="{ name: 'medicines' }">Medications</router-link>
        </p>

        <div class="container">

            <router-view></router-view>
            

        </div>
    </div>

</template>

