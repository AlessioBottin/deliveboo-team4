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
                                <form class="was-validated">
                                    <!-- Name  -->
                                    <label for="name" class="col-form-label-sm">Nome Cognome</label>
                                        <div class="mb-3 d-flex">
                                            <div class="icon_container d-flex justify-content-start align-items-start mt-2 mr-1">
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                            <div class="d-flex flex-column w-100">
                                                <input type="text" class="form-control" placeholder="Nome Cognome" aria-label="name" id="name" name="name" v-model="userName" required>
                                                <div class="valid-feedback">Compilato correttamente!</div>
                                                <div class="invalid-feedback">Per favore compila questo campo.</div>
                                            </div>                                       
                                        </div>                                      
                                    

                                    <!-- Email  -->
                                    <label for="email" class="col-form-label-sm">Email</label>
                                        <div class="mb-3 d-flex">
                                            <div class="icon_container d-flex justify-content-start align-items-start mt-2 mr-1">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <div class="d-flex flex-column w-100">
                                                <input type="text" class="form-control" placeholder="example@mail.com" aria-label="email" id="email" name="email" v-model="userEmail" required>
                                                <div class="valid-feedback">Compilato correttamente!</div>
                                                <div class="invalid-feedback">Per favore compila questo campo.</div>
                                            </div>                                       
                                        </div>  
                                    

                                    <!-- Address  -->
                                    <label for="address" class="col-form-label-sm">Indirizzo di consegna</label>
                                    
                                    <div class="mb-3 d-flex">
                                        <div class="icon_container d-flex justify-content-start align-items-start mt-2 mr-1">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <div class="d-flex flex-column w-100">
                                            <input type="text" class="form-control" placeholder="Indirizzo di consegna" aria-label="Indirizzo" id="address" name="address" v-model="userAddress" required>
                                            <div class="valid-feedback">Compilato correttamente!</div>
                                            <div class="invalid-feedback">Per favore compila questo campo.</div>
                                        </div>                                                                        
                                    </div>


                                    <!-- Phone number -->
                                    <label for="phone" class="col-form-label-sm">Numero di telefono</label>
                                    <div class="mb-3 d-flex">
                                        <div class="icon_container d-flex justify-content-start align-items-start mt-2 mr-1">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <div class="d-flex flex-column w-100">
                                            <input type="text" class="form-control" aria-label="phone" id="phone" name="phone" v-model="userPhone" placeholder="Numero di telefono" required>
                                            <div class="valid-feedback">Compilato correttamente!</div>
                                            <div class="invalid-feedback">Per favore compila questo campo.</div>
                                        </div>                                                                        
                                    </div>  

                                    <div class="form-group form-check mt-5 ml-3">
                                    <label class="form-check-label mr-3">
                                        <input class="form-check-input" type="checkbox" name="checkbox" required> Accetto Termini e Condizioni.
                                        <div class="valid-feedback">Selezionato.</div>
                                        <div class="invalid-feedback">Seleziona per proseguire.</div>
                                    </label>
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

                                    <div class="">
                                        <PaymentForm 
                                        :authToken='token' 
                                        :userCart="cart" 
                                        :userForm="{
                                            customer_name: this.userName,
                                            customer_address: this.userAddress,
                                            customer_email: this.userEmail,
                                            customer_phone: this.userPhone
                                        }"
                                        v-if="paymentIsReady"
                                        />                                
                                    </div>

                                </form>
                                <!-- end form -->

                            </div>
                            <!-- end Bootstrap inspired Braintree Hosted Fields part 1 -->

                           

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

                                    <div v-for="(product,index) in cart" :key="index" class="d-flex justify-content-between ">
                                        <p>
                                            <strong>x{{product.quantity}}</strong>
                                            {{product.name}}
                                        </p>
                                        <p>{{(product.price * product.quantity).toFixed(2)}}€</p>
                                    </div>
                                   
                                </div>

                            </div>

                            <div >
                                <div class="d-flex justify-content-between">
                                    <h5>Subtotale</h5>
                                    <h5>{{totalPrice.toFixed(2)}}€</h5>
                                </div>
                                
                                <div class="cart-product border-bottom d-flex justify-content-between"> 
                                    <p>Spese di consegna</p>
                                    <p>2€</p>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between ">
                                <h4>Totale:</h4>
                                <h4>{{(totalPrice + 2).toFixed(2)}}€</h4>
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
import PaymentForm from '../components/PaymentForm.vue';

export default {
    name: 'PaymentPage',
    components: {
        PaymentForm
    },
    data: function() {
        return {
            currentPage: 0,
            token: '',
            cart: this.$route.params.cart,
            paymentIsReady: false,
            userName: '',
            userAddress: '',
            userEmail: '',
            userPhone: '',
            totalPrice: 0,
        };
    },
    methods: {
        getToken: function() {
            axios.get('/api/orders/generate')
            .then((response) => {
                this.token = response.data.token;
                this.paymentIsReady = true;
            })
        } ,
        getTotalPrice: function(){
            this.cart.forEach(element => {
                this.totalPrice += element.price * element.quantity;
            });
        }     
    },
    created: function() {
        this.getToken();
        this.getTotalPrice();
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
        .info_and_payment_cards_box{
            width: 95%;
        }
        h1 {
            font-size: 24px;
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

.icon_container {
    width: 5%;
}

   
    
   
</style>






