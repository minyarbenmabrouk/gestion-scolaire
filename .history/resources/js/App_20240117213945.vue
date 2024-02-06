<template>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse">
    <div class="navbar-nav">
    
    
    
    <router-link to="/etudiants" class="nav-item nav-
    link">Etudiants</router-link>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">

    <div class="container-fluid">

    <router-link to="/addetudiant" class="btn btn-outline-light">New Etudiant</router-link>
</div>
</nav>
    
    </div>
    </div>
    </nav>
    <router-view> </router-view>
    </div>
    </template>
    <script>
    export default {}
    </script>