<template>

    <!-- start section -->
    <section>
       
        <!-- start container -->
        <div class="container my_container">

            <!-- payment page title -->
            <div class="payment_title my-5">
                <h1>Controlla il tuo ordine da nome ristorante</h1>
            </div>
            
            <!-- start cards wrapper container -->
            <div class="cards_wrapper">
            
                <!-- Contact informations contact and payment methods cards box -->
                <div class="info_and_payment_cards_box">
        
                    <!-- Contact informations card -->
                    <div class="card my_card_wrapper mb-3 box_shadow">
                    
                        <!-- start card body -->
                        <div class="card-body">

                            <!-- start left column content -->
                            <div class="left_column">

                                <!-- card title -->
                                <h4 class="card-name">
                                    Informazioni di contatto
                                </h4>

                                <!-- form -->
                                <form >

                                    <label for="" class="col-form-label-sm">Nome Cognome</label>
                                    <div class="mb-3 d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-user"></i>
                                        <input type="text" class="form-control ml-2" placeholder="Nome Cognome" aria-label="name">
                                    </div>

                                    <label for="" class="col-form-label-sm">Email</label>
                                    <div class="mb-3 d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-envelope"></i>
                                        <input type="text" class="form-control ml-2" placeholder="example@mail.com" aria-label="email">
                                    </div>

                                    <label for="" class="col-form-label-sm">Indirizzo di consegna</label>
                                    <div class="row g-3">
                                        <div class="col-sm-7 d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <input type="text" class="form-control ml-2" placeholder="Città" aria-label="Città">
                                        </div>

                                        <div class="col-sm">
                                            <input type="text" class="form-control" placeholder="regione" aria-label="regione">
                                        </div>

                                        <div class="col-sm">
                                            <input type="text" class="form-control" placeholder="CAP" aria-label="Cap">
                                        </div>
                                        
                                    </div>
                                    
                                </form>
                            
                            </div>
                            <!-- end left body contact -->

                        </div>
                        <!-- end card body -->

                    </div>
                    <!-- end contact informations card -->

                    <!-- PAYMENT METHODS card -->
                    <div class="card my_card_wrapper my-4 box_shadow">

                        <!-- start card body -->
                        <div class="card-body">

                            <h4 class="card-name">Metodo di pagamento</h4>

                            <!-- start Bootstrap inspired Braintree Hosted Fields part 1 -->
                            <div class="bootstrap-basic">

                                <!-- start form -->
                                <form class="needs-validation" novalidate="">

                                    <!-- start row 1 -->
                                    <div class="row">

                                        <div class="col-sm-6 mb-3">
                                            <label for="cc-name">Nome intestatario della carta</label>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-id-card"></i>
                                                <div class="form-control  ml-2" id="cc-name"></div>
                                            </div>
                                            
                                            
                                            <small class="text-muted">Nome completo come scritto sulla carta</small>
                                            <div class="invalid-feedback">
                                                Il nome del proprietario della carta è obbligatorio
                                            </div>

                                        </div>

                                        <div class="col-sm-6 mb-3">

                                            <label for="email">Email</label>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <i class="fas fa-mail-bulk"></i>
                                                <input type="email" class="form-control ml-2" id="email" placeholder="you@example.com">
                                            </div>
                                            <div class="invalid-feedback">
                                                Perfavore immettere un valido indirizzo email.
                                            </div>

                                        </div>

                                    </div>
                                    <!-- end row 1 -->

                                    <!-- start row 2 -->
                                    <div class="row">

                                        <div class="col-sm-6 mb-3">

                                            <label for="cc-number">Numero carta</label>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <i class="fas fa-credit-card"></i>
                                                <div class="form-control ml-2" id="cc-number"></div>
                                            </div>
                                            
                                            <div class="invalid-feedback">Il numero della carta è obbligatorio</div>

                                        </div>

                                        <div class="col-sm-3 mb-3">

                                            <label for="cc-expiration">Data di scadenza</label>
                                            <div class="form-control" id="cc-expiration"></div>
                                            <div class="invalid-feedback">La data di scadenza è obbligatoria</div>

                                        </div>

                                        <div class="col-sm-3 mb-3">

                                            <label for="cc-expiration">CVV</label>
                                            <div class="form-control" id="cc-cvv"></div>
                                            <div class="invalid-feedback">Security code required</div>

                                        </div>

                                    </div>
                                    <!-- end row 2 -->

                                    <hr class="mb-4">

                                    <div class="text-center">

                                        <button class="btn btn-primary btn-lg" type="submit">

                                            Paga con 
                                            <span id="card-brand">Carta</span>

                                        </button>
                                    
                                    </div>

                                </form>
                                <!-- end form -->

                            </div>
                            <!-- end Bootstrap inspired Braintree Hosted Fields part 1 -->

                            <!-- start Bootstrap inspired Braintree Hosted Fields part 2 -->
                            <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">

                                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">

                                    <div class="toast-header">

                                        <strong class="mr-auto">Success!</strong>
                                        <small>Just now</small>
                                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>

                                    <div class="toast-body">
                                        Next, submit the payment method nonce to your server.
                                    </div>

                                </div>

                            </div>
                            <!-- end Bootstrap inspired Braintree Hosted Fields part 2 -->

                        </div>
                        <!-- end card body -->

                    </div>
                    <!-- END PAYMENT METHODS card -->

                </div>
                <!-- end contact informations contact and payment methods cards box -->

                <!-- Order card container -->
                <div class="order_card_container">

                    <!-- start order card -->
                    <div class="order_card card box_shadow">

                        <!-- start card body -->
                        <div class="card-body">

                            <h3 class="card-text justify-content-center ">Riepilogo del tuo ordine</h3>
                            
                            <div class="border-bottom">
                                <p>nome ristorante e via</p>
                            </div>

                            <div >
                                <h5>Carrello</h5>
                                <div class="cart-product border-bottom">

                                    <div class="d-flex justify-content-between ">
                                        <p>
                                            <strong>x1</strong>
                                            prodotto 1
                                        </p>
                                        <p>10€</p>
                                    </div>

                                    <div class="d-flex justify-content-between ">
                                        <p>
                                            <strong>x1</strong>
                                            prodotto 1
                                        </p>
                                        <p>10€</p>
                                    </div>
                                   
                                </div>

                            </div>

                            <div >
                                <div class="d-flex justify-content-between">
                                    <h5>Subtotale</h5>
                                    <h5>20€</h5>
                                </div>
                                
                                <div class="cart-product border-bottom d-flex justify-content-between"> 
                                    <p>Spese di consegna</p>
                                    <p>2€</p>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between ">
                                <h4>Totale:</h4>
                                <h4>10€</h4>
                            </div>

                        </div>
                        <!-- end card boy -->
                    
                    </div>
                    <!-- start order card -->
                
                </div>
                <!-- end order card container -->

            </div>
            <!-- end cards wrapper container -->

        </div>
        <!-- end container -->

    </section>
    <!-- end section -->

</template>

<script>
export default {
    name: 'Payment',
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

    .info_and_payment_cards_box{
        width: 65%;
    }

    .img_container {
        display: flex;
        justify-content: center;
    }

    .my_container {
        margin: 100px auto 40px auto;
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
        margin: 0 0 -50px 0;
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


    .cards_wrapper {
        display: flex;
        justify-content: space-between;
        width: inherit;
    }
   
    @media screen and (max-width: 650px) {
        .cards_wrapper {
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

    /* Uses Bootstrap stylesheets for styling, see linked CSS*/
body {
  background-color: #fff;
  padding: 15px;
}

.toast {
  position: fixed;
  top: 15px;
  right: 15px;
  z-index: 9999;
}

.bootstrap-basic {
  background: white;
}

/* Braintree Hosted Fields styling classes*/
.braintree-hosted-fields-focused {
  color: #495057;
  background-color: #fff;
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.braintree-hosted-fields-focused.is-invalid {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

   
    
   
</style>






