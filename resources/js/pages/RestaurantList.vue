<template>
    <section>

        <div class="container">
            <!-- Categories  -->
            <div class="categories">
                <!-- <Slider/> -->
            </div>

            <!-- List  -->
            <div class="restaurant-list">

                <!-- Advanced research  -->
                <div class="advanced-research d-md-flex justify-content-md-between">

                    <!-- User Location  -->
                    <div class="user-location d-sm-flex d-md-block justify-content-sm-between">
                        <i class="fas fa-map-marker-alt"></i> <span>Via Corso, Roma 00187</span>
                        <router-link class="change-zone" :to="{ name: 'home' }">Aree Coperte</router-link>
                    </div>

                    <!-- Input  -->
                    <div class="responsive-container">
                        <div class="research-input position-relative">
                            <i class="fas fa-search"></i>
                            <input type="text" @keydown="filterRestaurants()" v-model="researchInput" placeholder="Cerca per cucina o ristorante">
                        </div>          
                    </div>
                   
                </div>

                <!-- Content  -->
                <div class="content d-md-flex justify-content-md-between">

                    <!-- Filters  -->
                    <div class="filters d-none d-md-block">
                        <h4 class="mb-4">Filtri</h4>

                        <!-- IMPORTANTE Aggiungere con l API la richiesta di categorie e 
                        fare la scrematura delle piu' importanti con il js cosi i calcoli li fa il pc dello user  -->
                        <ul class="categories-aside">
                            <li v-for="(category,n) in categories" :key="n" @click="test(category)" class="category mb-4 d-flex justify-content-between">
                                <!-- Al click sulla categoria deve essere settato il filtro  -->
                                <!-- La classe active sull'icona della spunta deve essere implementata quando si aggiunge il filtro  -->
                                
                                <span>{{ category.name }}</span>
                                <span class="check"><i class="fa-solid fa-check"></i></span>
                            </li>
                        </ul>

                    </div>

                    <!-- results -->
                    <div class="research-results">

                        <!-- Results Info  -->
                        <div class="results-info d-flex justify-content-between">
                            <!-- <span class="n-results">{{restaurantsList.length}} ristoranti aperti</span> -->
                            <div class="order">
                                <span class="order-by">Ordina per: Rating</span>
                                <span class="order-by-icon"><i class="fas fa-sort-amount-down"></i></span>
                            </div>
                        </div>



                        <!-- list  -->
                        <ul class="list">
                            <li class="restaurant-card container-fluid" v-for="(restaurant, index) in restaurantsList" :key="index">
                                <router-link :to="{ name: 'restaurant-details', params: { slug: restaurant.slug } }">
                                    <div v-if="restaurant.visibility === true"  class="row">

                                        <!-- Img  -->
                                        <div class="col-sm-12 col-md-2 mb-sm-1 mb-md-0 restaurant-img"><img :src="restaurant.image" :alt="restaurant.name"></div>
                                        
                                        <!-- Restaurant Info  -->
                                        <div class="col-sm-12 col-md-6 restaurant-info">
                                            <h4 class="mb-0">{{restaurant.name}}</h4>
                                            <span class="restaurant-categories">Categorie: Dolci, Gelato</span>
                                            <div class="rating d-flex">
                                                <span class="stars d-inline-block" v-for="star in ratingForTesting" :key="star"><i class="fa-solid fa-star"></i></span>
                                                <span class="gray-stars d-inline-block" v-for="star in (5 - ratingForTesting)" :key="star+restaurant.name"><i class="fa-solid fa-star"></i></span>
                                                <span class="voters ml-2">2345</span>
                                            </div>
                                        </div>
                                        
                                        <!-- Delivery Info  -->
                                        <div class="col-sm-12 col-md-4 delivery-info">
                                            <p>Consegna: <span class="delivery">2€</span></p>
                                        </div>
                                    </div>
                                </router-link>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </section>
</template>

<script>
import Slider from '../components/Slider.vue';

export default {
    name: 'RestaurantList',
    components: {
        Slider
    },
    data: function() {
        return {
            ratingForTesting: 4,
            researchInput: '',
            restaurantsList: [],
            categories: [],
        }
    },
    methods:{
        getRestaurantsList: function(){
            axios.get('http://127.0.0.1:8000/api/restaurants/' + this.$route.params.slug)
            .then((response)=>{
                this.restaurantsList = response.data;
                this.restaurantsList.forEach(element => {
                    element['visibility'] = true;
                });
            })
        },
        test: function(category){
            this.$router.push({name:'restaurant-list', params: {slug: category.slug}}); 
            this.getRestaurantsList();
        },
        getCategoriesForSlider: function(){
            axios.get('http://127.0.0.1:8000/api/categories')
            .then((response)=>{
                this.categories = response.data;
            })
        },
        filterRestaurants: function(){ 
            this.restaurantsList.forEach(element => {
                if(!element.name.toLowerCase().includes(this.researchInput.toLowerCase())){
                    element.visibility = false;
                }else{
                    element.visibility = true;
                }
            });
        }
    },
    created: function(){
        this.getRestaurantsList();
        this.getCategoriesForSlider();
    }
}
</script>

<style lang="scss" scoped>
@import '../../sass/app';

section {
    margin-top: 98px;

    @media screen and (max-width: 768px) {
        margin-top: 125px;
    }
    .container {

        .d_none{
            display: none;
        }

        // Cateogries Slider
        .categories {
            padding: 30px 0;
        }

        // Restaurant List 
        .restaurant-list {
            padding: 20px 0; 
            
            // Advanced Research 
            .advanced-research {

                .user-location {
                    padding: 10px 20px;
                    border-radius: 20px;
                    background-color: $main_color;
                    width: 22%;
    
                    a {
                        text-decoration: underline;
                        color: inherit;
                    }

                    // Media Query 
                    @media screen and (max-width: 768px) {
                        width: 100%;
                    }
                }

                
                .responsive-container {
                    width: 75%;

                    .research-input { 
                        width: 100%;
                        input {
                            padding: 25px 50px;  
                            border-radius: 20px;
                            border: none;
                            width: 100%;
                            outline: none;
                            -webkit-box-shadow: 0px -1px 15px -3px #000000;
                            -moz-box-shadow: 0px -1px 15px -3px #000000;
                            -o-box-shadow: 0px -1px 15px -3px #000000;
                            box-shadow: 0px -1px 15px -3px #000000; 
                            
                            &:focus {
                                border: 1px solid $main_color;
                            }
                        }
        
                        i {
                            position: absolute;
                            top: 50%;
                            left: 20px;
                            transform: translate(0, -50%);
                            color: $main_color;
                            font-size: 24px;
                        }
                    }

                    // Media Query 
                    @media screen and (max-width: 768px) {
                        position: absolute;
                        top: 100px;
                        left: 50%;
                        transform: translate(-50%);
                        width: 80%;

                        .research-input {
                            
                            input {
                                padding: 10px 50px;
                            }
                        }
                    }
                }

                margin-bottom: 30px;
            }

            // Content
            .content {

                // Filters 
                .filters {
                    width: 22%;

                    // Categories list aside 
                    .categories-aside {
                        .category {
                            padding: 5px 10px;
                            border-radius: 15px;
                            border: 1px solid $main_color; 
                            display: inline-block;

                            &:hover {
                                background-color: $main_color;
                                color: white;
                    
                            }

                            .check {
                                color: $main_color;
                                display: none;

                                &.active {
                                    display: inline-block;
                                }
                            }
                        }
                    }
                    
                }

                // Results 
                .research-results {
                    width: 75%;

                    // Info 
                    .results-info {

                        .n-results { 
                            margin-bottom: 20px;
                            font-weight: bold;
                        }

                        .order-by-icon {
                            color: $main_color;
                        }
                    }

                    // List 
                    ul {
                        li {
                            width: 100%;
                            border-radius: 20px;
                            padding: 5px;
                            -webkit-box-shadow: 0px -1px 15px -5px #000000;
                            -moz-box-shadow: 0px -1px 15px -5px #000000;
                            -o-box-shadow: 0px -1px 15px -5px #000000;
                            box-shadow: 0px -1px 15px -5px #000000;
                            margin-bottom: 20px;
                            
                            // Image 
                            .restaurant-img {        
                                img {
                                    width: 100%;
                                    display: inline-block;
                                    border-radius: 10px;                            
                                }
                            }

                            // Restaurant info 
                            .restaurant-info {
                                
                                .rating {
                                    .stars { 
                                        color: $main_color;                                
                                    }

                                    .gray-stars { 
                                        color: gray;
                                        
                                    }
                                }
                            }

                            // Delivery nfo 
                            .delivery-info {
                                .delivery {
                                    font-weight: bold;
                                }
                            }
                        }
                    }

                    @media screen and (max-width: 768px) {
                        width: 100%;
                    }
                }
            }
        }
    }
}   


</style>