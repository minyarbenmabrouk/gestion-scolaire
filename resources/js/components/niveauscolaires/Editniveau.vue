<template>
    <div class="col-md-6 offset-md-3 border rounded p-4 mt-2 shadow">
        <h4 align="center">Modifier Niveau scolaire</h4>
<form @submit.prevent="modifierniveau">
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
<button type="submit" className="btn btn-outline-primary">
<i class="fa-solid fa-floppy-disk"></i>Enregister
</button>
<router-link to="/listniv" class="btn btn-outline-danger mx-2">
<i class="fa-solid fa-xmark"></i>Cancel
</router-link>

</form>
</div>
</template>

<script setup>
import { ref,onMounted } from "vue"
import { useRouter,useRoute } from 'vue-router';


const router = useRouter() ;
const route = useRoute();
import axios from 'axios';
const etudiants = ref([]);
const niveau_scolaires = ref({});
const fetchNiveau= async()=> {
await
axios.get(`http://localhost:8000/api/niveau_scolaires/${route.params.id}`).then((res)=> {

    niveau_scolaires.value = res.data;
})
.catch((err) => {console.error(err)})
}
const getetudiants=()=>{

axios.get('http://localhost:8000/api/etudiants').then(res => {
etudiantss.value = res.data;
}).catch(error => {
console.log(error)
});

}

const modifierniveau=()=>{
axios.put(`http://localhost:8000/api/niveau_scolaires/${route.params.id}`,niveau
.value)

.then(() => {
router.push('/niveau_scolaires')})
.catch(error => {
    console.error("There was an error!", error);})

}
onMounted(() => {
    getetudiants();
    fetchNiveau()
}

);
</script>
<style scoped>

</style>