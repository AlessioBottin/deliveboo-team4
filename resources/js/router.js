import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home.vue';
import AdvanceResearch from './pages/AdvanceResearch.vue';
import Payment from './pages/Payment.vue';
import NotFound from './pages/NotFound.vue';

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
            component: AdvanceResearch
        },
        {
            path: "/payment",
            name: "payment",
            component: Payment
        },
        {
            path: "/*",
            name: "not-found",
            component: NotFound
        }
        
        
    ]
});
export default router;