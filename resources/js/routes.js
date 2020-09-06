import AllMeekouser1s from './components/AllMeekouser1s.vue';
import AddMeekouser1 from './components/AddMeekouser1.vue';
import EditMeekouser1 from './components/EditMeekouser1.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllMeekouser1s
    },
    {
        name: 'add',
        path: '/add',
        component: AddMeekouser1
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditMeekouser1
    }
];
