<template>

    <!-- start section -->
    <section>
        <!-- banner -->
        <Jumbotron />
       
        <!-- start container -->
        <div class="container my_container" >

            <!-- cards wrapper container -->
            <div class="cards_wrapper_container">
            

                <!-- principal_and_underlay_cards_container -->
                <div class="principal_and_underlay_cards_container">

                    <!-- start underlay -->
                    <div class="underlay_container">

                        <!-- start underlay card -->
                        <div class="card underlay_card">

                            <div class="card-body text-center">

                                <h6 class="card-text justify-content-center ">Questo ristorante è tra i più amati in questo momento</h6>
                                <p>Stiamo ricevendo molti ordini - i tempi per la consegna potrebbero essere più lunghi del solito</p>
                           
                            </div>

                        </div>
                        <!-- end card underlay card -->
                        
                    </div>
                    <!-- end card underlay card -->
        
                    <!-- start principal card -->
                    <div class="card my_card_wrapper">
                        <div class="card my_card box_shadow">
                            <!-- start img container -->
                            <div class="img_container">

                                <div class="img_box">

                                    <img :src="restaurant.image" :alt="restaurant.name">

                                </div>

                            </div>
                            <!-- end img container -->
                            
                            <!-- start card content restaurant container -->
                            <div class="card-body text-center">

                                <h2 class="card-name">{{restaurant.name}}</h2>
                                <p class="card-text justify-content-center ">Categoria 1 - Categoria 2</p>
                                <p class="card-text justify-content-center ">Rating stars</p>
                                <p class="card-text justify-content-center "></p>

                                <!-- start grey card container -->
                                <div class="card-body text-center grey_card">

                                    <div class="d-flex justify-content-between flex-wrap grey_card_text">

                                        <p class="card-text justify-content-center ">Consegna:</p>
                                        <p class="card-text justify-content-center ">Voglio ritirare</p>

                                    </div>

                                    <div class="d-flex justify-content-between mt-3 flex-wrap grey_card_text">

                                        <p class="card-text justify-content-center">Consegna gratuita:</p>
                                        <p class="card-text justify-content-center d-flex flex-wrap">
                                            <strong>20€</strong> ordine minimo
                                        </p>

                                    </div>

                                </div>
                                <!-- end grey card container -->

                            </div>
                            <!-- end card content restaurant container -->
                        </div>
                        <!-- start card menu e info -->
                        <div class="card my_card my-3 box_shadow">

                            <div class="menu_info">

                                <h6 class="menu_style">Menu</h6>
                                <h6 class="info_style">Info</h6>

                            </div>

                        </div>
                        <!-- start card menu e info -->

                        <!-- start menu list container -->
                        <div class="menu_list_container">

                            <h3>Menu</h3>

<<<<<<< HEAD
=======
                                    <div
                                    v-for="(plate, index) in restaurant.plates"
                                    :key="index"
                                    class="card my_card my-3 p-3 box_shadow"
                                    >
>>>>>>> cecf30ed999850a3308140ea5969d9d2e93fbdea

                                <div
                                v-for="(plate, index) in restaurantMenu"
                                :key="index"
                                class="card my_card my-3 p-1"
                                >

                                    <div class="plate_wrapper">

                                        <div class="plate_content">
                                            <h3 :id="plate.name">{{plate.name}}</h3>
                                            <p>da: {{plate.price}}</p>
                                        </div>

                                        <div class="plate_image">
                                            <img style="max-height: 150px" :src="plate.image" :alt="plate.name">
                                        </div>

                                    </div>


                                </div>

                        </div>
                        <!-- end menu list container -->

                    </div>
                    <!-- end card principal card -->

                </div>
                <!-- end principal and order cards container -->

                <!-- start order card container -->
                <div class="order_card_container">

                    <!-- start order card -->
                    <div class="order_card mx-3 card box_shadow">


                        <!-- start card content restaurant container -->
                        <div class="card-body text-center">

                            <h3 class="card-text justify-content-center ">Il tuo ordine</h3>
                            
                            <p>
                            
                                <i class="fa-solid fa-circle-exclamation"></i>
                                Se hai un'allergia o un'intolleranza alimentare (o
                                se una persona per la quale stai effettuando un
                                ordine ne ha), clicca qui.
                            </p>
                            <button class="btn payment_btn">
                                Vai al pagamento
                            </button>
                            <div class="button_container">
                                <button class="btn btn_delivery_special_btn">
                                    <i class="fas fa-motorcycle"></i>
                                    consegna
                                </button>
                                <button class="btn btn_take_away_special_btn">
                                    ritira
                                </button>
                            </div>

                        </div>
                        <!-- end card content restaurant container -->
                    
                    </div>
                    <!-- start order card -->
                
                </div>
                <!-- end order card container -->

            </div>
            <!-- cards wrapper container -->

            

        </div>
        <!-- end container -->

    </section>
    <!-- end section -->

</template>

<script>
import Jumbotron from '../components/Jumbotron.vue';
export default {
    name: 'RestaurantDetails',
    components:{
        Jumbotron
    },
    data: function() {
        return {
            currentPage: 0,
            restaurantMenu: [],
            restaurant: false,
        };
    },
    methods:{
        getRestaurant: function(){
            axios.get('http://127.0.0.1:8000/api/restaurant/' + this.$route.params.id)
            .then((response)=>{
                this.restaurant = response.data;
            })
        },
        getRestaurantMenu: function(){
            axios.get('http://127.0.0.1:8000/api/restaurant-list/' + this.$route.params.id)
            .then((response)=>{
                this.restaurantMenu = response.data;
            })
        }
    },
    created: function() {
        this.getRestaurant();
        this.getRestaurantMenu();
    }
};
</script>

<style scoped lang="scss">
    .principal_and_underlay_cards_container{
        width: 100%;
    }

    .img_container {
        display: flex;
        justify-content: center;
    }

    .my_container {
        margin: -300px auto 40px auto;
        width: 100%; 
    }

    .img_box {
        margin: -50px 0 0 0;
        height: 100px;
        width: 100px;
        border: solid whitesmoke 4px;
        border-radius: 20px;
        overflow: hidden;
        background-color: white;
        display: flex;
        img {
            object-fit: contain;
        }
    }

    .my_card {
        border-radius: 15px;
    }

    .my_card_wrapper {
        border: none;
        border-radius: 15px;
    }

    .grey_card {
        width: 65%;
        margin: auto;
        background-color: #f5f3f1;
        border-radius: 10px;
    }


   .banner_container {
    line-height: 150px;
    height: 400px;
    object-position: center;
        img {
            height: inherit;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }
    }

    .menu_info {
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 10px 0;
    }

    *[class$="_style"]:hover {

        text-decoration: underline;
        text-underline-offset: 17px;
        text-decoration-thickness: 4px;
        text-decoration-color: #ffce08;

    }

    .plate_wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;

        .plate_image {
            width: 25%;
            border-radius: 10px;
            overflow: hidden;
        }
    }

    .order_card {
        position: sticky;
        top: -100px;
        border-radius: 15px;
        margin: 140px 0 -50px 50px;
        width: 100%;
        
        p {
            font-size: 13px;
        }

    }
    

    .underlay_container {
        position: sticky;
        top: 0;
        margin-bottom: 1px;
    }

    .underlay_card {
        border-radius: 15px;
        height: 190px;
        margin-bottom: -50px;
        background-color: rgba($color: #f75e28, $alpha: .9);
        color: white;
        
        p {
            font-size: 13px;
        }
    }


    .cards_wrapper_container {
        display: flex;
        justify-content: center;
        width: inherit;
    }
   
    @media screen and (max-width: 650px) {
        .cards_wrapper_container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: inherit;
        }
    }


    .payment_btn {
        border-radius: 30px;
        color: #8a8786;
        background-color: #efedea;
        width: 100%;
    }

    .payment_btn:hover {
        background-color: #ffce08;
        color: white;
    }

    .left_menu_list_container {
        margin: 350px 40px 0 10px;
        
    }

    .plate_wrapper > li:hover {
        border-left: solid 3px gray;
        cursor: pointer;
    }

    .button_container {
        display: inline-block;
        background-color: #efedea;
        padding: 3px;
        display: flex;
        justify-content: space-between;
        border-radius: 30px;
        width: 100%;
        margin: 15px auto;
    }

    *[class$="_special_btn"]:hover {
        color: white;
        background-color: #ffce08;

    }
    *[class$="_special_btn"] {
        border-radius: 30px;        
    }

    *[class$="box_shadow"] {
        box-shadow: 0px -1px 15px -3px #000000;
    }

    @media screen and (max-width: 1230px) {
        *[class$="grey_card_text"] {
            justify-content: center !important;
        }
    }

    
   
</style>
