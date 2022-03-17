<template>
    <div>
        <Header />
        <Jumbotron />
        <Footer />
    </div>
</template>

<script>
import Header from '../components/Header.vue';
import Jumbotron from '../components/Jumbotron.vue';
import Footer from '../components/Footer.vue';


export default {
    name:'App',
    components: {
        Header,
        Jumbotron,
        Footer
    }
}
</script>

<style lang="scss">
   

</style>