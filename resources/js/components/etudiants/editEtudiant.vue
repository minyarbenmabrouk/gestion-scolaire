<template>
    <div>
    <h3 class="text-center">Edit Etudiant</h3>
    <div class="row">
    <div class="col-md-6">
    <form @submit.prevent="updateEtudiant">
    <div class="form-group">
    <label>Name</label>
    
    <input type="text" class="form-control" v-model="etudiant.nometudiant">
    
    </div>
    <div class="form-group">
    <label>Image</label>
    
    <input type="text" class="form-control" v-model="etudiant.imageetudiant">
    
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
    </div>
    </div>
    </template>
    <script setup>
    import axios from 'axios';
    import { useRouter,useRoute } from 'vue-router';
    const router = useRouter() ;
    const route = useRoute();
    import { ref, onMounted } from 'vue';
    const etudiant = ref({});
    const fetchEtudiant= async()=> {
await axios
.get(`http://localhost:8000/api/etudiants/${route.params.id}`)
.then((res) => {
etudiant.value = res.data;
})
.catch((err) => {console.error(err)})

}
const updateEtudiant= async()=> {
await axios.patch(`http://localhost:8000/api/etudiants/${route.params.id

}`, etudiant.value).then(() => {
router.push({ name: 'homeEtudiants' });
})
.catch((err) => {console.error(err)})
}

onMounted(async() => {
await fetchEtudiant();
});
</script>