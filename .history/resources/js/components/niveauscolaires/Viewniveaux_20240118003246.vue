<template>
    <div >
    <div v-if="isLoading">
    <h2> Loading .... </h2>
    </div>
    <div v-else class="py-6">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
<div class="container-fluid">

<router-link :to="{name: 'Addniveau'}" class="btn btn-
outline-light">

<i class="fa-solid fa-square-plus"></i> New Niveau
</router-link>

</div>
</nav>
    <table class="table table-striped shadow">
    <thead>
    <tr>
    <th scope="col">Niveau scolaire</th>
    <th scope="col">Description</th>
    <th scope="col">ID etudiant</th>
    <th scope="col">Modifier</th>
    <th scope="col">Supprimer</th>
    </tr>
    </thead>
    <tbody>
<tr v-for="nv in niveau_scolaires" :key="nv.id">
    

<td>{{ nv.nomsetudiant }}</td>
<td>{{ nv.imagesetudiant }}</td>
<td>{{ nv.etudiantID }}</td>
<td><button class="btn btn-outline-primary mx-2">
<i class="fa-solid fa-pen-to-square"></i>
Edit</button></td>
<td><button class="btn btn-outline-danger mx-2"

@click="deleteniveau(nv.id)">

<i class="fa-solid fa-trash-can"></i>
Delete
</button></td>
</tr>
</tbody>
</table>

</div>
</div>
</template>
<script setup>
import { ref,onMounted } from 'vue';
import axios from 'axios';
const niveau_scolaires=ref([])
const isLoading=ref(true)
const getniveaux=async()=>{
await axios.get("http://localhost:8000/api/niveau_scolaires")
.then(res=>{
    niveau_scolaires.value=res.data
  isLoading.value=false

})
.catch(error=>{
console.log(error)
})
}
onMounted(() => {
getniveaux();
});
const deleteniveau=async(id)=>{
try {
    await axios.delete(`http://localhost:8000/api/niveau_scolaires/${id}`)

    getniveaux()
} catch (error) {
console.log(error)
}
}
</script>
<style lang="scss" scoped>
</style>
