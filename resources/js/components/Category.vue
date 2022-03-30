<template>
    <div class="container">

        <div class="row-container d-flex">      
            <div v-for="(category,index) in categories" :key="index" class="col mt-2">
                <div class="card" style="width: 10rem;">
                    <router-link :to="{name: 'restaurant-list', params:{slug: category.slug}}">
                        <img :src="category.image" class="card-img-top" :alt="category.name">
                        <div class="card-body p-0 m-0" style="height: 2rem;">
                            <p class="card-title text-center font-weight-bold text-capitalize">{{category.name}}</p>
                        </div>
                    </router-link>
                </div>
            </div>


        </div>
    </div>
    
</template>

<script>

export default {
    name: 'Category',
    props:{
        categories: Array
    }
    
}
</script>

<style lang="scss" scoped>
@import '../../sass/app';
// ! Scrollbar customization
::-webkit-scrollbar{
    height: 10px;
}
::-webkit-scrollbar-track{
    background: white;
    border-radius: 15px;
}

::-webkit-scrollbar-thumb{
    background: lighten(#ffce08, 10%);
    border-radius: 15px;
    border: 1px solid white;
}

::-webkit-scrollbar-thumb:hover{
    background: darken(#ffce08, 5%);
}
// ! End scrollbar customization

.container {
    overflow-x: hidden;
    overflow-x: scroll;  
}

.row-container {
    width: 95%;
    margin: 10px;
}

.container::-webkit-scrollbar {
    // display: none;
    color: white white;
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.17);
    -moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.17);
    box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.17);
    .card-img-top{
        height: 100px;
    }
}

.card:hover {
    cursor: pointer;
    -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.37);
    -moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.37);
    box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.37);

}


</style>