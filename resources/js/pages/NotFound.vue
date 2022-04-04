<template>
    <section class="not_found_page">
        <div class="container">
            <div class="not_found_message_container">
                <h1>
                    <i class="fa-solid fa-cog fa-spin" style="--fa-animation-duration: 15s;"></i>
                    OOPS! Pagina non trovata!
                </h1>
                <router-link class="change-zone" :to="{ name: 'home' }">
                    <button class="btn btn-warning">Ritorna alla Home</button>
                </router-link>
                
            </div>  
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

h1 {
    display: inline-block;
}

.btn-warning:hover {
    background-color: white;
   
}

</style>
