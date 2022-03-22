<template>
    <section>

        <div class="container">
            <!-- Categories  -->
            <div class="categories">
                Categorie
            </div>

            <!-- List  -->
            <div class="restaurant-list">

                <!-- Advanced research  -->
                <div class="advanced-research d-md-flex justify-content-md-between">

                    <!-- User Location  -->
                    <div class="user-location d-sm-flex d-md-block justify-content-sm-between">
                        <i class="fas fa-map-marker-alt"></i> <span>Via Corso, Roma 00187</span>
                        <router-link class="change-zone" :to="{ name: 'home' }">Cambia Zona</router-link>
                    </div>

                    <!-- Input  -->
                    <div class="responsive-container">
                        <div class="research-input position-relative">
                            <i class="fas fa-search"></i>
                            <input type="text" v-model="researchInput" placeholder="Cerca per cucina o ristorante">
                        </div>          
                    </div>
                   
                </div>

                <!-- Content  -->
                <div class="content d-flex justify-content-between">

                    <!-- Filters  -->
                    <div class="filters">
                        Filtri
                    </div>

                    <!-- results -->
                    <div class="research-results">

                        <!-- Results Info  -->
                        <div class="results-info d-flex justify-content-between">
                            <span class="n-results">5 ristoranti aperti</span>
                            <div class="order">
                                <span class="order-by">Ordina per: Rating</span>
                                <span class="order-by-icon"><i class="fas fa-sort-amount-down"></i></span>
                            </div>
                        </div>

                        <!-- list  -->
                        <ul class="list">
                            <li class="restaurant-card container-fluid" v-for="(restaurant, index) in restaurants" :key="index">
                                <div class="row row-cols-sm-1 row-cols-md-3">
                                    <!-- Img  -->
                                    <div class="col"><img src="https://www.villacrespi.it/wp-content/uploads/2018/10/Villa-Crespi-San-Valentino-1-uai-1000x666.jpg" :alt="restaurant.name"></div>
                                    <!-- Restaurant Info  -->
                                    <div class="col">
                                        <h4>{{restaurant.name}}</h4>
                                    </div>
                                    <!-- Delivery Info  -->
                                    <div class="col">
                                        <p>Consegna GRATIS</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </section>
</template>

<script>
export default {
    name: 'RestaurantList',
    data: function() {
        return {
            researchInput: '',
            restaurants: [ 
                {
                    id: 1,
                    email: 'spizzico@gmail.com',
                    password: '12345678',
                    name: 'Spizzico',
                    address: 'via Roma 1',
                    VAT: '1234567890',
                    image: 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fmedia-cdn.tripadvisor.com%2Fmedia%2Fphoto-s%2F1a%2F16%2F32%2Fe3%2Fwine-room-dari-ristorante.jpg&imgrefurl=https%3A%2F%2Fwww.tripadvisor.it%2FRestaurant_Review-g187871-d1639024-Reviews-Dari_Ristorante_Enoteca-Verona_Province_of_Verona_Veneto.html&tbnid=C39mc5lxO1HOLM&vet=12ahUKEwje3bGyu8_2AhUL1eAKHQXhAioQMygAegUIARDUAQ..i&docid=t7q50BKp_f7gPM&w=550&h=366&q=ristorante&ved=2ahUKEwje3bGyu8_2AhUL1eAKHQXhAioQMygAegUIARDUAQ',
                    categories: [1],
                    plates: [
                        {
                            name: 'margherita',
                            description: 'pizza',
                            price: '10 euro',
                            visibility: true ,
                            image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.vanityfair.it%2Fgallery%2F10-trend-della-pizza-spiegati-in-10-pizze&psig=AOvVaw34S-jjr8s2Y7dwzN789Bxn&ust=1647686198568000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPCb_8e7z_YCFQAAAAAdAAAAABAD',
                        },
                        {
                            name: 'diavola',
                            description: 'pizza',
                            price: '10 euro',
                            visibility: true ,
                            image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.vanityfair.it%2Fgallery%2F10-trend-della-pizza-spiegati-in-10-pizze&psig=AOvVaw34S-jjr8s2Y7dwzN789Bxn&ust=1647686198568000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPCb_8e7z_YCFQAAAAAdAAAAABAD',
                        },
                        
                    ]
                },            
                {
                    id: 2,
                    email: 'zushi@gmail.com',
                    password: '12345678',
                    name: 'Zushi',
                    address: 'via Milano 1',
                    VAT: '1234567890',
                    image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.tripadvisor.it%2FRestaurant_Review-g187872-d1097319-Reviews-Zushi_Japanese_Restaurant-Vicenza_Province_of_Vicenza_Veneto.html&psig=AOvVaw2t9SDjNP5zkliY6fIJBeHj&ust=1647686321413000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCMjhxoK8z_YCFQAAAAAdAAAAABAD',
                    categories: [2, 3],
                    plates: [
                        {
                        name: 'uramaki',
                        description: 'sushi',
                        price: '20 euro',
                        visibility: true ,
                        image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fblog.giallozafferano.it%2Fdulcisinforno%2Furamaki-california-maki-roll-sushi%2F&psig=AOvVaw2Fm9P54Zyp7CID36mQwbuK&ust=1647686298875000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOin2_e7z_YCFQAAAAAdAAAAABAJ',
                        },
                        {
                            name: 'poke',
                            description: 'poke',
                            price: '5 euro',
                            visibility: true ,
                            image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Framonaincucina.com%2F2020%2F10%2F02%2Fpan-poke-street-food-tra-panini-e-poke%2F&psig=AOvVaw1Ls_lakDpw_nyBOHxL4KaU&ust=1647686440215000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJjBqLu8z_YCFQAAAAAdAAAAABAJ',
                        },
                    
                    ]
                },
                {
                    id: 3,
                    email: 'panpoke@gmail.com',
                    password: '12345678',
                    name: 'Panpoke',
                    address: 'via Genova 1',
                    VAT: '1234567890',
                    image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fms-my.facebook.com%2FPaniniePoke%2Fposts%2F311712480647862&psig=AOvVaw1Ls_lakDpw_nyBOHxL4KaU&ust=1647686440215000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJjBqLu8z_YCFQAAAAAdAAAAABAD',
                    categories: [3],
                    plates: [
                        {
                            name: 'poke',
                            description: 'poke',
                            price: '5 euro',
                            visibility: true ,
                            image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Framonaincucina.com%2F2020%2F10%2F02%2Fpan-poke-street-food-tra-panini-e-poke%2F&psig=AOvVaw1Ls_lakDpw_nyBOHxL4KaU&ust=1647686440215000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJjBqLu8z_YCFQAAAAAdAAAAABAJ',
                        },
                    
                    ]
                },
                {
                    id: 4,
                    email: 'fiveguys@gmail.com',
                    password: '12345678',
                    name: 'Five guys',
                    address: 'via Torino 1',
                    VAT: '1234567890',
                    image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Frestaurants.fiveguys.it%2Froma-termini&psig=AOvVaw0SB2Jcmj_EcHc1C8XdhMBS&ust=1647686534196000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCNiXl-i8z_YCFQAAAAAdAAAAABAD',
                    categories: [4],
                    plates: [
                    {
                        name: 'menu hamburger',
                        description: 'hamburger e patatine',
                        price: '15 euro',
                        visibility: true ,
                        image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Froma.fanpage.it%2Ffive-guys-a-roma-rimandata-lapertura-del-primo-fast-food-in-citta-prevista-per-oggi%2F&psig=AOvVaw0SB2Jcmj_EcHc1C8XdhMBS&ust=1647686534196000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCNiXl-i8z_YCFQAAAAAdAAAAABAP',
                    },
                    
                    ]
                },
                {
                    id: 5,
                    email: 'venchi@gmail.com',
                    password: '12345678',
                    name: 'Venchi',
                    address: 'via Alessandria 1',
                    VAT: '1234567890',
                    image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.comunicaffe.it%2Fvenchi-cioccolato-storia-azienda%2F&psig=AOvVaw107WrcyMXqs1tFoZRPZa_P&ust=1647686630525000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPD16JW9z_YCFQAAAAAdAAAAABAD',
                    categories: [5],
                    plates: [
                        {
                            name: 'pistacchio',
                            description: 'gelato',
                            price: '5 euro',
                            visibility: true ,
                            image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.davidezambelli.com%2Fricette%2Fgelato-al-pistacchio-senza-gelatiera%2F&psig=AOvVaw2fz_J9cMfxRX0cYadN3dz9&ust=1647686674883000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJDgjqu9z_YCFQAAAAAdAAAAABAD',
                        },
                        {
                            name: 'cioccolato',
                            description: 'gelato',
                            price: '5 euro',
                            visibility: true ,
                            image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.davidezambelli.com%2Fricette%2Fgelato-al-pistacchio-senza-gelatiera%2F&psig=AOvVaw2fz_J9cMfxRX0cYadN3dz9&ust=1647686674883000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJDgjqu9z_YCFQAAAAAdAAAAABAD',
                        },
                        {
                            name: 'limone',
                            description: 'gelato',
                            price: '5 euro',
                            visibility: true ,
                            image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.davidezambelli.com%2Fricette%2Fgelato-al-pistacchio-senza-gelatiera%2F&psig=AOvVaw2fz_J9cMfxRX0cYadN3dz9&ust=1647686674883000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJDgjqu9z_YCFQAAAAAdAAAAABAD',
                        },
                    
                    ]
                },
                {
                    id: 6,
                    email: 'donerkebab@gmail.com',
                    password: '12345678',
                    name: 'Doner kebab',
                    address: 'via venezia 1',
                    VAT: '1234567890',
                    image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FDoner_kebab&psig=AOvVaw0y83sKkdr6EwbGlZP5gAkW&ust=1647686788395000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCNi1meG9z_YCFQAAAAAdAAAAABAD',
                    categories: [6],
                    plates: [
                    {
                        name: 'kebab',
                        description: 'kebab',
                        price: '5 euro',
                        visibility: true ,
                        image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fit.m.wikipedia.org%2Fwiki%2FFile%3AD%25C3%25B6ner_Kebab%2C_Berlin%2C_2010_(01).jpg&psig=AOvVaw0y83sKkdr6EwbGlZP5gAkW&ust=1647686788395000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCNi1meG9z_YCFQAAAAAdAAAAABAJ',
                    },
                    
                    ]
                }
            ]
        }
    }
}
</script>

<style lang="scss" scoped>
@import '../../sass/app';

section {
    margin-top: 98px;
    .container {

        // Categories 
        .categories {
            height: 200px;
            background-color: lightblue; //!TEST 
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
                        width: 100%;

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
                    background-color: lightcoral;
                    width: 22%;
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
                        }
                    }
                }
            }
        }
    }
}   


</style>