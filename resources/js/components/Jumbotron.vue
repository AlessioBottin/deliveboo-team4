<template>
    <div class="bg-jumbo">
        <div class="overlay"></div>
    </div>
</template>

<script>
export default {
    name: 'Jumbotron'
}
</script>

<style lang="scss" scoped>
    @import '../../sass/app';
  
    .bg-jumbo {
        height: 600px;
        background-image: url('~/images/meat-wallpaper.jpg');
        background-position-y: bottom;
        background-size: cover;
        
    }
    .overlay {
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0);
        background: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 65%);

    }


</style>