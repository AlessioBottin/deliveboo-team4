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
        }
    },  
    methods: {
        onSuccess (payload) {
            let nonce = payload.nonce;
            // Do something great with the nonce...
            axios.post('/api/orders/make/payment', 
            {
                "token" : "fake-valid-nonce",
                "plate" : [
                    {
                        "id" : 3,
                        "quantity" : 10
                    },
                    {
                        "id" : 2,
                        "quantity" : 1
                    }
                ]
            }).then((response) => {
                console.log(response);
            })
        },
        onError (error) {
        let message = error.message;
        // Whoops, an error has occured while trying to get the nonce
        }
    },
}
</script>