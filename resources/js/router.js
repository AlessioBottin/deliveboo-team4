import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

<<<<<<< HEAD
// import Home from './pages/Home.vue';
// import RestaurantList from './pages/RestaurantList.vue';
import RestaurantDetails from './pages/RestaurantDetails.vue';
// import Payment from './pages/Payment.vue';
=======
import Home from './pages/Home.vue';
import RestaurantList from './pages/RestaurantList.vue';
<<<<<<< HEAD
=======
import RestaurantDetails from './pages/RestaurantDetails.vue';
>>>>>>> a4c66ea4040c4a4c899f4d923ef37e75917d6734
import Payment from './pages/Payment.vue';
>>>>>>> 9244e61d3b30667740d5b38e5e2c6e684879b533
import NotFound from './pages/NotFound.vue';

const router = new VueRouter({
    mode: "history",
    routes: [
<<<<<<< HEAD
        // {
        //     path: "/",
        //     name: "home",
        //     component: Home
        // },
        // {
        //     path: "/restaurant-list",
        //     name: "restaurant-list",
        //     component: AdvanceResearch
        // },
=======
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
>>>>>>> 9244e61d3b30667740d5b38e5e2c6e684879b533
        {
            path: "/restaurant-details",
            name: "restaurant-details",
            component: RestaurantDetails
        },
        // {
        //     path: "/payment",
        //     name: "payment",
        //     component: Payment
        // },
        {
            path: "/*",
            name: "not-found",
            component: NotFound
        }
        
        
    ]
});
export default router;