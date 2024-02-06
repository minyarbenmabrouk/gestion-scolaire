import viewEtudiant from './components/etudiants/viewEtudiant.vue';
import addEtudiant from './components/etudiants/addEtudiant.vue';
import Accueil from './components/accueil.vue';
export const routes = [
    
    {
    name: viewEtudiant,
    path: '/listetd',
    component: viewEtudiant
    },
    {
        name:"addEtudiant",
        path:"/addetudiant",
        component:addEtudiant
        }
    ];