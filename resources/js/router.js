import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home.vue';
import AdvanceResearch from './pages/AdvanceResearch.vue';
import RestaurantDetails from './pages/RestaurantDetails.vue';
import Payment from './pages/Payment.vue';

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        {
            path: "/advanceResearch",
            name: "advanceResearch",
            component: About
        },
        {
            path: "/payment",
            name: "payment",
            component: Blog
        },
        {
            path: "/*",
            name: "not-found",
            component: NotFound
        }
        
        
    ]
});
export default router;