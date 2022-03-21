import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home.vue';
import RestaurantList from './pages/RestaurantList.vue';
<<<<<<< HEAD
=======
import RestaurantDetails from './pages/RestaurantDetails.vue';
>>>>>>> a4c66ea4040c4a4c899f4d923ef37e75917d6734
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
            component: RestaurantList
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