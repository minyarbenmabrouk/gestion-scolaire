import ViewEtudiant from './components/etudiants/ViewEtudiant.vue';
import addEtudiant from './components/etudiants/addEtudiant.vue';
import editEtudiant from './components/etudiants/editEtudiant.vue';
import Viewniveaux from './components/niveauscolaires/Viewniveaux.vue';
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
        },
        {
            name: 'editEtudiant',
            path: '/editEtudiant/:id',
            component: editEtudiant
       },
       {
        name: 'Viewniveaux',
        path: '/listniveaux',
        component: Viewniveaux
   }
    ];