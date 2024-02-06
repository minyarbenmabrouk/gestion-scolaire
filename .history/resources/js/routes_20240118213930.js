import ViewEtudiant from './components/etudiants/ViewEtudiant.vue';
import addEtudiant from './components/etudiants/addEtudiant.vue';
import editEtudiant from './components/etudiants/editEtudiant.vue';
import Viewniveaux from './components/niveauscolaires/Viewniveaux.vue';
import Addniveau from './components/niveauscolaires/Addniveau.vue';
import Editniveau from './components/niveauscolaires/Editniveau.vue';
import Accueil from './components/accueil.vue';
import Login from './components/authentification/login.vue'
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
        path: '/listniv',
        component: Viewniveaux
   },
   {
    name:"Addniveau",
    path:"/addniv",
    component:Addniveau
    },
    {

        name:"Editniveau",
        path:"/editniv/:id",
        component:Editniveau
        },
        {
            name: "login",
            path: "/login",
            component: Login,
            },
    ];