<template>
    <section>
        <v-braintree 
            :authorization="authToken"
            locale="it_IT"
            @success="onSuccess"
            @error="onError"
        >
        </v-braintree>
    </section>
</template>

<script>
export default {
    name: 'PaymentForm',
    props: {
        authToken: {
            type: String,
            required: true
        },
        userCart: {
            type: Array,
            required: true
        },
        userForm: {
            type: Object,
            required: true
        }
    },  
    data: function() {
        return {
            cart: this.userCart
        }
    },
    methods: {
        onSuccess (payload) {
            let nonce = payload.nonce;
            // Do something great with the nonce...
            axios.post('/api/orders/make/payment', 
            {
                "token" : nonce,
                "cart" : this.cart,
                "form" : this.userForm
            }).then((response) => {
                console.log(response);
                if (response.data.success) {
                    this.$router.push("thankyou");
                };
                localStorage.removeItem('cart');
            })
        },
        onError (error) {
        let message = error.message;
        // Whoops, an error has occured while trying to get the nonce
        console.log(message);
        }
    },
}
</script>


<style lang="scss" >
@import '../../sass/app';
// test
.btn-primary {
    background-color: $main_color;
    border: 1px solid $main_color;
    color: black;
    width: 100%;
}

.btn-primary:hover {
    background-color: $main_color;
    border: 1px solid $main_color;
    color: white;
    width: 100%;
}
</style>