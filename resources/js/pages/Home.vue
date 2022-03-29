<template>
    <div class="position-relative">
        <Header />
        <Jumbotron />

        <SearchBanner />

        <div class="container">
            <h3 class="title">Le cucine più amate</h3>
            <p class="text">Trova le cucine più amate dai ristoranti nella tua zona e ordina online a domicilio.</p>
        </div>


        <!-- <Slider /> -->

        <Category :categories="categoriesArray"/>
        
    </div>
</template>

<script>
// import axios from 'Axios';
import Header from '../components/Header.vue';
import Jumbotron from '../components/Jumbotron.vue';
import SearchBanner from '../components/SearchBanner.vue';

import Category from '../components/Category.vue';
import Slider from '../components/Slider.vue';


export default {
    name: 'Home',
    components: {
        Header,
        Jumbotron,
        SearchBanner,
        Category,
        Slider,
    },
    data: function(){
        return {
            categoriesArray: []
        }
    },
    methods:{
        getCategories: function(){
            axios.get('http://127.0.0.1:8000/api/categories')
            .then((response)=>{
                this.categoriesArray = response.data;
            })
        }
    },
    created: function(){
        this.getCategories();
    }
}
</script>

<style lang="scss" scoped>
@import '../../sass/app';

.container {
    margin-top: 80px;
}
</style>