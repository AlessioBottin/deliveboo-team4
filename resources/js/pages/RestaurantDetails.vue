<template>
    <section>
        <div>
            <Jumbotron />
        </div>
        <div class="container">
            <div class="card">
                <div class="img_container">
                    <div class="img_box">  
                        <img src="../../../img-test/download.png" class="card-img-top " alt="...">
                    </div>
                </div>
                
                <div class="card-body text-center">
                    <h2 class="card-title">Card title</h2>
                    <p class="card-text justify-content-center ">Categoria 1 - Categoria 2</p>
                    <p class="card-text justify-content-center ">Rating stars</p>
                    <p class="card-text justify-content-center ">Via fasulla 123</p>
                    
                    <div class="card-body text-center grey_card">
                        <div class="d-flex justify-content-between">
                            <p class="card-text justify-content-center ">Consegna</p>
                            <p class="card-text justify-content-center ">Voglio ritirare</p>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <p class="card-text justify-content-center ">Consegna gratuita</p>
                            <p class="card-text justify-content-center "> <strong>20€</strong> ordine minimo</p>
                        </div>
                    </div>
                </div>

            </div>
            
            <!-- <h1>{{ post.title }}</h1>
            <div v-if="post.category">Category: {{ post.category.name }}</div>
            <div v-if="post.tags && post.tags.length > 0">
                <router-link 
                    v-for="tag in post.tags" 
                    :key="tag.id" 
                    class="badge bg-warning text-dark mx-1"
                    :to="{ name: 'tag-details', params: { slug: tag.slug } }"
                >
                    {{ tag.name }}
                </router-link>
            </div>

            <p>{{ post.content }}</p> -->
        </div>
    </section>
</template>

<script>
import Jumbotron from '../components/Jumbotron.vue'
export default {
    name: 'RestaurantDetails',
    components: {
        Jumbotron
    }
}
// export default {
//     name: 'PostDetails',
//     data: function() {
//         return {
//             post: {}
//         };
//     },
//     methods: {
//         getPost() {
//             axios.get('/api/posts/' + this.$route.params.slug)
//             .then((response) => {
//                 if(response.data.success) {
//                     this.post = response.data.results;
                
//                 } else {
//                     this.$router.push({ name: 'not-found'});
//                 }
//             });
//         }
//     },
//     created: function() {
//         this.getPost();
//     }
// }
</script>

<style scoped>
    li {
        display: flex;
        justify-content: center;
    }

    .img_container {
        display: flex;
        justify-content: center;
    }  

    .container {
        margin: -150px auto 40px auto;
        width: 700px;
       
    }
    
    .img_box {
        margin: -50px 0 0 0;
        width: 100px;
        border: solid white 4px;
        border-radius: 20px;
        overflow: hidden;
    }

    .card {
        border-radius: 15px;
    }
   
    .grey_card {
        width: 65%;
        margin: auto;
        background-color: #f5f3f1;
        border-radius: 10px;
    }

    

   
</style>