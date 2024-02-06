<template>
    <div class="col-md-6 offset-md-3 border rounded p-4 mt-2 shadow">
      <form @submit.prevent="addEtudiant">
        <div class="mb-3">
          <label for="nometd" class="form-label">Nom etudiant</label>
          <input type="text" class="form-control" id="nometudiant" v-model="etudiant.nometudiant">
        </div>
        <div class="mb-3">
          <label for="imageetd" class="form-label">Image</label>
          <input type="texte" class="form-control" id="imageetudiant" v-model="etudiant.imageetudiant">
        </div>
        <button type="submit" class="btn btn-outline-primary">Enregistrer</button>
        <router-link to="/etudiants" class="btn btn-outline-danger mx-2">Cancel</router-link>
      </form>
    </div>
  </template>
  
  <script setup>
  import { ref } from "vue";
  import { useRouter } from 'vue-router';
  const router = useRouter();
  import axios from 'axios';
  
  const etudiant = ref({
    nometudiant: "",
    imageetudiant: ""
  });
  
  const addEtudiant = async () => {
    await axios.post("http://localhost:8000/api/etudiants/", etudiant.value)
      .then(() => (
        router.push({ name: 'ViewEtudiant' })
      ))
      .catch(err => console.log(err));
  };
  </script>
  
  <style scoped>
  </style>
  