<template>
    <div class="d-flex justify-content-lg-center">

        <div class="row row-xl-cols-6 row-md-cols-3 row-sm-cols-2">
            <div class="col test">
                <div class="card" style="width: 9rem;">
                    <img src="https://banner2.cleanpng.com/20180424/cgw/kisspng-mcdonald-s-big-mac-hamburger-big-n-tasty-cheesebu-mcdonalds-5adef6fb6fd888.4092768115245616594581.jpg" class="card-img-top" alt="">
                    <div class="card-body p-0" style="height: 2rem;">
                        <p class="card-title text-center">Categoria</p>
                    </div>
                </div>
            </div>

            <div class="col test">
                <div class="card" style="width: 9rem;">
                    <img src="https://banner2.cleanpng.com/20180424/cgw/kisspng-mcdonald-s-big-mac-hamburger-big-n-tasty-cheesebu-mcdonalds-5adef6fb6fd888.4092768115245616594581.jpg" class="card-img-top" alt="">
                    <div class="card-body p-0" style="height: 2rem;">
                        <p class="card-title text-center">Categoria</p>
                    </div>
                </div>
            </div>

            <div class="col test">
                <div class="card" style="width: 9rem;">
                    <img src="https://banner2.cleanpng.com/20180424/cgw/kisspng-mcdonald-s-big-mac-hamburger-big-n-tasty-cheesebu-mcdonalds-5adef6fb6fd888.4092768115245616594581.jpg" class="card-img-top" alt="">
                    <div class="card-body p-0" style="height: 2rem;">
                        <p class="card-title text-center">Categoria</p>
                    </div>
                </div>
            </div>    

            <div class="col test">
                <div class="card" style="width: 9rem;">
                    <img src="https://banner2.cleanpng.com/20180424/cgw/kisspng-mcdonald-s-big-mac-hamburger-big-n-tasty-cheesebu-mcdonalds-5adef6fb6fd888.4092768115245616594581.jpg" class="card-img-top" alt="">
                    <div class="card-body p-0" style="height: 2rem;">
                        <p class="card-title text-center">Categoria</p>
                    </div>
                </div>
            </div>

            <div class="col test">
                <div class="card" style="width: 9rem;">
                    <img src="https://banner2.cleanpng.com/20180424/cgw/kisspng-mcdonald-s-big-mac-hamburger-big-n-tasty-cheesebu-mcdonalds-5adef6fb6fd888.4092768115245616594581.jpg" class="card-img-top" alt="">
                    <div class="card-body p-0" style="height: 2rem;">
                        <p class="card-title text-center">Categoria</p>
                    </div>
                </div>
            </div>

            <div class="col test">
                <div class="card" style="width: 9rem;">
                    <img src="https://banner2.cleanpng.com/20180424/cgw/kisspng-mcdonald-s-big-mac-hamburger-big-n-tasty-cheesebu-mcdonalds-5adef6fb6fd888.4092768115245616594581.jpg" class="card-img-top" alt="">
                    <div class="card-body p-0" style="height: 2rem;">
                        <p class="card-title text-center">Categoria</p>
                    </div>
                </div>
            </div>   

        </div>
    </div>
    
</template>

<script>

export default {
    name: 'Category',
    props:{
        Categories: Array
    }
    
}
</script>

<style lang="scss" scoped>
@import '../../sass/app';


.test {
    margin-top: 20px;
    display: flex;
    justify-content: center;
}

.card {
    border-radius: 10px;
    -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.17);
    -moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.17);
    box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.17);
}

.card:hover {
    cursor: pointer;
    -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.37);
    -moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.37);
    box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.37);

}


</style>