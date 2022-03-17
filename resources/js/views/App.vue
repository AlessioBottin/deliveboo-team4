<template>
    <div>
        <Header />
        <Jumbotron />
    </div>
</template>

<script>
import Header from '../components/Header.vue';
import Jumbotron from '../components/Jumbotron.vue';


export default {
    name:'App',
    components: {
        Header,
        Jumbotron
    }
}
</script>

<style lang="scss">
   

</style>