import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home.vue';
import RestaurantList from './pages/RestaurantList.vue';
import RestaurantDetails from './pages/RestaurantDetails.vue';
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
            path: "/restaurant-list",
            name: "restaurant-list",
            component: AdvanceResearch
        },
        {
            path: "/restaurant-details",
            name: "restaurant-details",
            component: RestaurantDetails
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