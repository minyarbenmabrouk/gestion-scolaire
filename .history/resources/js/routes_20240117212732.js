import ViewEtudiant from './components/etudiants/ViewEtudiant.vue';
import addEtudiant from './components/etudiants/addEtudiant.vue';
import Accueil from './components/accueil.vue';
export const routes = [
    {
        name: 'accueil',
        path: '/',
        component: Accueil
    },
    {
    name: ViewEtudiant,
    path: '/etudiants',
    component: ViewEtudiant
    },
    {
        name:addEtudiant,
        path:'/addetudiant',
        component:addEtudiant
        }
    ];