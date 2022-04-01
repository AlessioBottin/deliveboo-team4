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
                this.$router.push("thankyou");
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
// test
.btn-primary {
    background-color: red;
    border: 1px solid red;
}
</style>