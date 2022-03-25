<template>
    <div class="container">

        <div class="row row-lg-cols-5 row-md-cols-3 row-sm-cols-2 flex-wrap">
            
            <div v-for="(category,index) in categories" :key="index" class="col mt-4">
                <div class="card" style="width: 10rem;">
                    <router-link :to="{name: 'restaurant-list', params:{slug: category.slug}}">
                        <img :src="category.image" class="card-img-top" :alt="category.name">
                        <div class="card-body p-0" style="height: 2rem;">
                            <p class="card-title text-center">{{category.name}}</p>
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


.card {
    border-radius: 10px;
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