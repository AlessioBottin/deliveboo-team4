<template>
    <div>
        <Header />
        <Jumbotron />
        <Category />
        
    </div>
</template>

<script>
import Header from '../components/Header.vue';
import Jumbotron from '../components/Jumbotron.vue';
import Category from '../components/Category.vue';

export default {
    name: 'Home',
    components: {
        Header,
        Jumbotron,
        Category,
    }
}
</script>