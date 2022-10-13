import { createRouter, createWebHistory } from "vue-router";
import About from "../pages/About.vue";
import Home from "../pages/Home.vue";
import Services from "../pages/Services.vue";
import Labs from "../pages/Labs.vue";
import Appointment from "../pages/Appointment.vue";
import Contact from "../pages/Contact.vue";
const routes = [
    {
        path: '/about',
        name: "About",
        component: About,
        meta : {
            title: "About"
        }
    },
    {
        path: '/services',
        name: "Services",
        component: Services,
        meta: {
            title: "Services",
            publicRoute: true
        }
    },
    {
        path: '/labs',
        name: "Labs",
        component: Labs,
        meta: {
            title: "Labs",
        }
    },
    {
        path: '/appointment',
        name: "Appointment",
        component: Appointment,
        meta: {
            title: "Appointment",
        }
    },
    {
        path: '/contact',
        name: "Contact",
        component: Contact,
        meta: {
            title: "Contact",
        }
    },
    {
        path: '/',
        name: "Home",
        component: Home,
        meta: {
            title: "Home",
        }
    }
];
const router = createRouter({
    history: createWebHistory(),
    routes
});
router.beforeEach((to, from, next) =>{
    document.title = `${to.meta ? to.meta.title : "Laboratory"}`;
    next();
});
export default router;
