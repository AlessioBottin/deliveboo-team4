<template>

    <!-- start section -->
    <section>
        <!-- banner -->
        <div class="banner_container">

            <img :src="restaurants[currentPage].image_banner" :alt="restaurants[currentPage].name">

        </div>
       
        <!-- start container -->
        <div class="container my_container" >

            <!-- cards wrapper container -->
            <div class="cards_wrapper_container">
                
                <div class="left_menu_list_container">
            
                    <h6 class="text-uppercase">Novità e promozioni</h6>
                    <div v-for="(restaurant, index) in restaurants" :key="index">

                        <div v-if="currentPage == restaurant.id - 1">

                            <div
                            v-for="(plate, index) in restaurant.plates"
                            :key="index"
                            >

                                <ul class="plate_wrapper">
                                    
                                    <li>
                                        <a :href="'#' + plate.name">
                                            {{plate.name}}
                                        </a>
                                        
                                    </li>

                                </ul>


                            </div>

                        </div>

                    </div>

                </div>

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
                        <div class="card my_card">
                            <!-- start img container -->
                            <div class="img_container">

                                <div class="img_box">

                                    <img :src="restaurants[currentPage].image_logo" :alt="restaurants[currentPage].title">

                                </div>

                            </div>
                            <!-- end img container -->
                            
                            <!-- start card content restaurant container -->
                            <div class="card-body text-center">

                                <h2 class="card-name">{{restaurants[currentPage].name}}</h2>
                                <p class="card-text justify-content-center ">Categoria 1 - Categoria 2</p>
                                <p class="card-text justify-content-center ">Rating stars</p>
                                <p class="card-text justify-content-center "></p>

                                <!-- start grey card container -->
                                <div class="card-body text-center grey_card">

                                    <div class="d-flex justify-content-between flex-wrap">

                                        <p class="card-text justify-content-center ">Consegna:</p>
                                        <p class="card-text justify-content-center ">Voglio ritirare</p>

                                    </div>

                                    <div class="d-flex justify-content-between mt-3">

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
                        <div class="card my_card my-3">

                            <div class="menu_info">

                                <h6 class="menu_style">Menu</h6>
                                <h6 class="info_style">Info</h6>

                            </div>

                        </div>
                        <!-- start card menu e info -->

                        <!-- start slider -->
                       
                        <!-- end slider -->

                        <!-- start menu list container -->
                        <div class="menu_list_container">

                            <h3>Novità e promozioni</h3>

                            <div v-for="(restaurant, index) in restaurants" :key="index">

                                <div v-if="currentPage == restaurant.id - 1">

                                    <div
                                    v-for="(plate, index) in restaurant.plates"
                                    :key="index"
                                    class="card my_card my-3 p-3"
                                    >

                                        <div class="plate_wrapper">

                                            <div class="plate_content">
                                                <h3 :id="plate.name">{{plate.name}}</h3>
                                                <p>da: {{plate.price}}</p>
                                            </div>

                                            <div class="plate_image">
                                                <img :src="plate.image" :alt="plate.name">
                                            </div>

                                        </div>


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
                    <div class="order_card mx-3 card">


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
export default {
    name: 'RestaurantDetails',
    data: function() {
        return {
            currentPage: 0,
            restaurants: [
                {
                    id: 1,
                    email: 'spizzico@gmail.com',
                    password: '12345678',
                    name: 'Spizzico',
                    address: 'via Roma 1',
                    VAT: '1234567890',
                    image_banner: 'https://fastly.4sqi.net/img/general/600x600/538579_ydRLp3WexwBwLLmft97aYO-kN9LCXMi1h9f2J7ICsR0.jpg',
                    image_logo: 'https://upload.wikimedia.org/wikipedia/commons/2/2b/Spizzico-logo-new.png',
                    categories: [1],
                    plates: [
                        {
                            name: 'margherita',
                            description: 'pizza',
                            price: '10 euro',
                            visibility: true ,
                            image: 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                        },
                        {
                            name: 'diavola',
                            description: 'pizza',
                            price: '10 euro',
                            visibility: true ,
                            image: 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                        },
                        {
                            name: 'salsiccia',
                            description: 'pizza',
                            price: '10 euro',
                            visibility: true ,
                            image: 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                        },
                        {
                            name: 'stagioni',
                            description: 'pizza',
                            price: '10 euro',
                            visibility: true ,
                            image: 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                        },
                        {
                            name: 'capricciosa',
                            description: 'pizza',
                            price: '10 euro',
                            visibility: true ,
                            image: 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                        },
                        {
                            name: 'gamberetti',
                            description: 'pizza',
                            price: '10 euro',
                            visibility: true ,
                            image: 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
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
                    image_banner: 'https://www.google.com/maps/uv?pb=!1s0x477f318225a09569%3A0x1d06b766063ff887!3m1!7e115!4shttps%3A%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipPeVySOa5sMQr6MTA1zA8ErulQVItIqrfVfaIwi%3Dw284-h250-k-no!5szushi%20-%20Cerca%20con%20Google!15sCgIgAQ&imagekey=!1e10!2sAF1QipPeVySOa5sMQr6MTA1zA8ErulQVItIqrfVfaIwi&hl=it&sa=X&ved=2ahUKEwj517mMot32AhWJzKQKHY5dDmoQoip6BAgmEAM#',
                    image_logo: 'https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,f_auto,q_auto,w_1600,h_350,d_it:cuisines:hamburger-3.jpg/v1/it/restaurants/241983.jpg',
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
                    image_banner: '',
                    image_logo: '',
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
                    image_banner: '',
                    image_logo: '',
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
                    image_banner: '',
                    image_logo: '',
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
                    image_banner: '',
                    image_logo: '',
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

        };
    },
    created: function() {

    }
};
</script>

<style scoped lang="scss">


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

    .left_menu_list_container {
        margin: 350px 40px 0 10px;
        
    }

    .plate_wrapper > li:hover {
        border-left: solid 3px gray;
        cursor: pointer;
    }

    .button_container {
        display: inline-block;
        background-color: #8a8786;
        padding: 3px;
        display: flex;
        justify-content: space-between;
        border-radius: 30px;
        width: 200px;
        margin: 15px auto;
    }

    *[class$="_special_btn"]:hover {
        color: #8a8786;
        background-color: #efedea;

    }
    *[class$="_special_btn"] {
        border-radius: 30px;
        background-color: #8a8786;
        color: black;
        
    }

   
</style>
