import Home from './components/Home.vue';
import Allposts from './components/AllPosts.vue';
import Createpost from './components/CreatePost.vue';
import Editpost from './components/EditPost.vue';
import Viewpost from './components/ViewPost.vue';
import Deletepost from './components/DeletePost.vue';

export const routes = [
    {
        path: '/',
        component: Home,
        name: 'Home'
    },
    {
        path: '/all',
        component: Allposts,
        name: 'AllPosts',
    },
    {
        name: 'CreatePost',
        path: '/create-post',
        component: Createpost
    },
    {
        name: 'EditPost',
        path: '/edit/:id',
        component: Editpost
    },
    {
        name: 'ViewPost',
        path: '/view-post/:id',
        component: Viewpost
    },
    {
        name: 'DeletePost',
        path: '/delete/:id',
        component: Deletepost
    }

];