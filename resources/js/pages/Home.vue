<template>
    <div>
        <Header />
        <Jumbotron />

        <div class="container mt-5">
            <h3 class="title">Le cucine più amate</h3>
            <p class="text">Trova le cucine più amate dai ristoranti nella tua zona e ordina online a domicilio.</p>
        </div>

        <Slider />

        <Category />
        
    </div>
</template>

<script>
import Header from '../components/Header.vue';
import Jumbotron from '../components/Jumbotron.vue';
import Category from '../components/Category.vue';
import Slider from '../components/Slider.vue';


export default {
    name: 'Home',
    components: {
        Header,
        Jumbotron,
        Category,
        Slider
    }
}
</script>