<template>
    <div>
        <Jumbotron />

        <div class="container">
            <div class="text-center thanks_text">
                <h1>Grazie per aver acquistato su <router-link :to="{name:'home'}"><span class="logo">Deliveboo</span></router-link></h1>

                <h4 class="mt-5">
                    <i class="fa-solid fa-envelope"></i>
                    <span>Ti abbiamo spedito un'email con i dettagli dell'ordine</span>
                </h4>
            </div>
        </div>
    </div>
</template>

<script>
import Jumbotron from '../components/Jumbotron.vue';

export default {
    name:'Thankyou',
    components:{
        Jumbotron
    }
}
</script>

<style lang="scss" scoped>
.thanks_text{
    padding: 80px 0 30px;
    .logo{
        color: #ffce08;
        position: relative;
        top: 3px;
    }
}
</style>