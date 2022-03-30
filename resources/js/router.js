import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home.vue';
import RestaurantList from './pages/RestaurantList.vue';
import RestaurantDetails from './pages/RestaurantDetails.vue';
import Payment from './pages/Payment.vue';
import NotFound from './pages/NotFound.vue';
import Thankyou from './pages/Thankyou.vue';

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        {
            path: "/restaurant-list/:slug",
            name: "restaurant-list",
            component: RestaurantList
        },
        {
            path: "/restaurant-details/:slug",
            name: "restaurant-details",
            component: RestaurantDetails
        },
        {
            path: "/payment",
            name: "payment",
            component: Payment
        },
        {
            path: "/thankyou",
            name: "thankyou",
            component: Thankyou
        },
        {
            path: "/*",
            name: "not-found",
            component: NotFound
        }
        
        
    ]
});
export default router;