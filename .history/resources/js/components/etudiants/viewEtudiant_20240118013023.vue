<template>
    <div>
        <div v-if="isLoading">
<h2> Loading .... </h2>
</div>
        <div class="py-6">
          
        
<table class="table table-striped shadow">
<thead>
<tr>
<td>Image</td>
<td>Nom étudiant</td>
<td class="navbar navbar-expand-lg navbar-dark bg-success">
<router-link to="/addetudiant" class="btn btn-outline-light">New Etudiant</router-link></td>
<td>Action</td>
</tr>
</thead>
<tbody>
<tr v-for="etudiant in etudiants" :key="etudiant.id">
<td><img :src="etudiant.imageetudiant" width="70"

height="80"/> </td>

<td>{{ etudiant.nometudiant }}</td>



<td>
    <div class="btn-group" role="group">
        <router-link :to="{name: 'editEtudiant', params: { id:

etudiant.id }}" class="btn btn-success">Edit</router-link>    <button class="btn btn-danger mx-2"
@click="deleteetudiant(etudiant.id)">Delete</button></div></td>
</tr>
</tbody>
</table>

</div>
    </div>
</template>

<script setup>
import { ref,onMounted } from 'vue';
import axios from 'axios';
const etudiants=ref([])
const getetudiants=async()=>{
await axios.get("http://localhost:8000/api/etudiants")
.then(res=>{
etudiants.value=res.data

console.log(etudiants.value)
isLoading.value=false
})
.catch(error=>{
console.log(error)
})
}
onMounted(() => {
getetudiants();
});
const deleteetudiant=async(id)=>{
if (window.confirm("Etes-vous sûr de vouloir supprimer ?")) {
try {
await axios.delete(`http://localhost:8000/api/etudiants/${id}`)

getetudiants()
} catch (error) {
console.log(error)
}
}}

</script>

<style lang="scss" scoped>

</style>