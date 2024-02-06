<template>
    <div class="col-md-6 offset-md-3 border rounded p-4 mt-2 shadow">
    <h4 align="center">Ajout Niveau scolaire</h4>
    <form @submit.prevent="addNiveau">
        <div class="row">
<div class="col-md-6">.
<label for="imagesetudiant" class="form-label">Description</label>

<input type="text" class="form-control" id="imagesetudiant" v-model="niveau_scolaires.imagesetudiant">

</div>
<div class="col-md-6 ms-auto">
<label for="nomsetudiant" class="form-label">Niveau scolaire</label>

<input type="text" class="form-control" id="nomsetudiant" v-model="niveau_scolaires.nomsetudiant">

</div>
</div>
<div class="row">
<div class="col-md-6">.
<label for="etudiantID" class="form-label">ID etudiant</label>

<input type="text" class="form-control" id="etudiantID" v-model="niveau_scolaires.etudiantID">

</div>
</div>
<button type="submit" class="btn btn-outline-primary">
<i class="fa-solid fa-floppy-disk"></i>Enregister

</button>
<router-link to="/listniv" class="btn btn-outline-danger

mx-2">

<i class="fa-solid fa-xmark"></i>Cancel
</router-link>
</form>
</div>
</template>
<script setup>
import { ref } from "vue"
import { useRouter } from 'vue-router';
const router = useRouter()
import axios from 'axios';
const niveau_scolaires=ref({
    imagesetudiant:"",
    nomsetudiant:"",
    etudiantID:"",

})
const addNiveau=async()=>{
await axios.post("http://localhost:8000/api/niveau_scolaires/",niveau.value)
.then(() => (

router.push({ name: 'Viewniveaux' })
))

.catch(err => console.log(err))

}


</script>
<style scoped>
</style>
