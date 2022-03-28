<template>
    <section class="not_found_page">
        <div class="container">
            <div class="not_found_message_container">
                <h1>OOPS! Pagina non trovata!</h1>
                <button class="btn btn-outline-warning">return-test</button>
            </div>
            
            <!-- <router-link class="nav-link" :to="{ name: 'blog' }">Torna al blog per leggere contenuti interessanti</router-link> -->
            
        </div>
    </section>
</template>

<script>
export default {
    name: 'NotFound'
}
</script>

<style scoped >
.container {
    margin-top: 98px;
    background-image: url('~/images/404_page.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    height: 600px;
    position: relative;
}

.not_found_message_container {
    position: absolute;
    transform: translate(-50%, -50%);
    bottom: 0;
    left: 50%;
    text-align: center;
}

</style>
