<template>

    <!-- start section -->
    <section>
        <!-- banner -->
        <Jumbotron />
       
        <!-- start container -->
        <div v-if="restaurant && restaurantMenu.length > 0" class="container my_container" >

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

                            </div>
                            <!-- end card content restaurant container -->
                        </div>

                        <!-- start menu list container -->
                        <div class="menu_list_container mt-4">

                            <h2 class="text-center">Menu</h2>


                                <div
                                v-for="(plate, index) in restaurantMenu"
                                :key="index"
                                class="card my_card my-3 p-1"
                                >

                                    <div class="plate_wrapper">

                                        <div class="plate_content">
                                            <h3 :id="plate.name">{{plate.name}}</h3>
                                            <p>Prezzo: <b>{{plate.price}}€</b></p>

                                            <div @click="addProductToCart(plate)" class="btn btn-outline-warning">
                                                Aggiungi al Carrello
                                            </div>
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
                    <div class="order_card card box_shadow">


                        <!-- start card content restaurant container -->
                        <div class="card-body text-center">

                            <h3 class="card-text justify-content-center ">Il tuo ordine</h3>
                            
                            <p>
                            
                                <i class="fa-solid fa-circle-exclamation"></i>
                                Se hai un'allergia o un'intolleranza alimentare (o
                                se una persona per la quale stai effettuando un
                                ordine ne ha), clicca qui.
                            </p>
                            <!-- CART WITH ALL THE PLATES -->
                            <div v-for="(product,index) in cart" :key="index">
                                <div class="cart-product text-center">
                                    <img :src="product.image" style="width:60px; height:60px" class="mx-4" :alt="product.name">
                                    <div>
                                        <h4>{{product.name}}</h4>
                                        <div class="mt-2 position-relative">
                                            <i class="fa-solid fa-circle-minus quantity-changer" :class="{disabled: (product.isBtnDisabled)}" @click="decreaseQuantity(product)"></i>
                                            <span class="quantity">{{product.quantity}}</span>
                                            <i class="fa-solid fa-circle-plus quantity-changer" @click="increaseQuantity(product)"></i>
                                            <i class="fa-solid fa-trash delete-product" @click="deleteProductFromCart(product)"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div v-if="cart.length > 0">
                                <h5>Totale: {{totalPrice.toFixed(2)}}€</h5>
                            </div>
                            <!-- END CART WITH ALL THE PLATES -->

                            <button class="btn payment_btn">
                                Vai al pagamento
                            </button>

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

        <div v-else class="container">
            <h1 class="text-center mt-5">Non abbiamo trovato ciò che cercavi</h1>
            <h5 class="text-center">
                <router-link :to="{name:'home'}">Torna alla homepage</router-link>
            </h5>
        </div>

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
            cart:[],
            totalPrice: 0,
        };
    },
    methods:{
        changeLocalstorageCart: function(){
            localStorage.cart = JSON.stringify(this.cart);
        },
        // Function that returns an API with the specific restaurant
        getRestaurant: function(){
            axios.get('http://127.0.0.1:8000/api/restaurant/' + this.$route.params.slug)
            .then((response)=>{
                this.restaurant = response.data;
            })
        },
        // Function that returns an API with the menu of the restaurant
        getRestaurantMenu: function(){
            axios.get('http://127.0.0.1:8000/api/restaurant-list/' + this.$route.params.slug)
            .then((response)=>{
                this.restaurantMenu = response.data;
            })
        },
        // IF at the click on a specific product, this is already in the cart,
        // increase its quantity.
        // Otherwise add the new clicked product at the cart
        addProductToCart: function(product){
            let check = this.cart.some(element => element.name == product.name);
            if(check){
                this.cart.forEach(e => {
                    if (e.name == product.name){
                        e.quantity ++;
                        e.isBtnDisabled = false;
                    }
                });
            }else{
                let newProduct = {
                    name: product.name,
                    price: product.price,
                    image: product.image,
                    quantity: 1,
                    isBtnDisabled: true
                };
                this.cart.push(newProduct);
            };
            this.totalPrice = this.totalPrice + parseFloat(product.price);

            // ! Adding cart to local storage
            // TODO this.changeLocalstorageCart();
        },
        // Delete the product from the cart
        // Reassigning cart's values, with the exception of the product with the name of the clicked one
        deleteProductFromCart: function(product){
            let quantityOfProduct = this.cart.filter(element => element.name === product.name)[0].quantity;
            this.cart = this.cart.filter(element => element.name !== product.name);
            this.totalPrice = this.totalPrice - (parseFloat(product.price) * quantityOfProduct);
            // ! Adding cart to local storage
            // TODO this.changeLocalstorageCart();
        },
        // Increase quantity for the specified product, and activate the "-" button
        increaseQuantity: function(product){
            product.quantity++;
             this.totalPrice = this.totalPrice + parseFloat(product.price);
            product.isBtnDisabled = false;
            // ! Adding cart to local storage
            // TODO this.changeLocalstorageCart();
        },
        // If the quantity is greater than 1, decrease the value
        // Otherwise don't, and also disable the "-" button
        decreaseQuantity: function(product){
            if (product.quantity > 1){
                product.quantity--;
                this.totalPrice = this.totalPrice - parseFloat(product.price);
                // ! Adding cart to local storage
                // TODO this.changeLocalstorageCart();
            }
            if(product.quantity == 1){
                product.isBtnDisabled = true
            }
            
        }
    },
    created: function() {
        this.getRestaurant();
        this.getRestaurantMenu();
        // this.cart = JSON.parse(localStorage.getItem("cart"));
        // console.log(localStorage.getItem("cart"));
    }
};
</script>

<style scoped lang="scss">
    .cart-product{
        padding: 20px 0;
    }
    .quantity{
        font-size: 22px;
    }
    .quantity-changer{
        font-size: 20px;
        margin: 0 10px;
        cursor: pointer;
    }
    .disabled{
        color: gray;
    }
    .delete-product{
        cursor: pointer;
        position: absolute;
        right: 70px;
        top: 8px;
        font-size: 20px;
        &:hover{
            color: red;
        }
    }

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
    @media screen and (max-width: 650px) {
        .order_card{
            margin: 50px auto;
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
