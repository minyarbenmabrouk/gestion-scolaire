<template>
    <div>
        <div class="py-6">
<table class="table table-striped shadow">
<thead>
<tr>
<td>Image</td>
<td>Nom étudiant</td>
<td>Modifier</td>
<td>Supprimer</td>
</tr>
</thead>
<tbody>
<tr v-for="etd in etudiants" :key="etd.id">
<td><img :src="etd.imageetudiant" width="70"

height="80"/> </td>

<td>{{ etd.nometudiant }}</td>

<td><button class="btn btn-warning mx-
2">Modifier</button></td>

<td><button class="btn btn-danger mx-2"
@click="deleteetudiant(etd.id)">Supprimer</button></td>
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
})
.catch(error=>{
console.log(error)
})
}
onMounted(() => {
getetudiants();
});

</script>

<style lang="scss" scoped>

</style>