import ViewEtudiant from './components/etudiants/ViewEtudiant.vue';
import Accueil from './components/accueil.vue';
export const routes = [
    {
        name: 'accueil',
        path: '/',
        component: Accueil
    },
    {
    name: ViewEtudiant,
    path: '/listetd',
    component: ViewEtudiant
    }
    ];