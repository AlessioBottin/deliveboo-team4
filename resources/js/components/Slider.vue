<template>
   
        <vueper-slides
            :fixed-height="isFixed"
            style="border-radius: 20px; padding: 30px 0 30px 0; overflow:visible"
            class="no-shadow"
            :visible-slides="6"
            :arrows="false"
            :bullets="false"
            slide-multiple
            :gap="3"
            :slide-ratio="1 / 8"
            :dragging-distance="200"
            :breakpoints="{ 800: { visibleSlides: 2, slideMultiple: 2, } }">
            <vueper-slide v-for="(slide, i) in slides" :key="i" :title="slide.title"
            :image="slide.image"
            :link="slide.link"
            style="background-size: 100% auto; background-position: center; background-repeat: no-repeat;"
            />
            <!-- <div class="text">
                <p v-for="(slide, i) in slides" :key="i + 'title'">Ciao</p>
            </div> -->
            
             
        </vueper-slides>
    
</template>

<script>
import { VueperSlides, VueperSlide } from 'vueperslides'
import 'vueperslides/dist/vueperslides.css'

export default {
    name: 'Slider',
    components: { 
        VueperSlides, 
        VueperSlide 
    },
    data: function() {
        return {
            viewportWidth: 0,
            isFixed: false,
            slides: [
                {
                    title: '<p class="title" style="position: absoulte;bottom: -16px;left: 0px;position: absolute;background-color: #ffce08;border-radius: 0 0 20px 20px;width: 100%;">Categoria</p>',
                    content: 'Category',
                    // You can also provide a URL for the image.
                    image: 'https://banner2.cleanpng.com/20180424/cgw/kisspng-mcdonald-s-big-mac-hamburger-big-n-tasty-cheesebu-mcdonalds-5adef6fb6fd888.4092768115245616594581.jpg',
                    // Il link aggiunge al url di base cio' che viene scritto qua dentro, verrai reindirizzato a deliveboo/google.com 
                    link: 'google.com'
                },
                {
                    title: '<p class="title" style="position: absoulte;bottom: -16px;left: 0px;position: absolute;background-color: #ffce08;border-radius: 0 0 20px 20px;width: 100%;">Categoria</p>',
                    content: 'Category',
                    // You can also provide a URL for the image.
                    image: 'https://banner2.cleanpng.com/20180424/cgw/kisspng-mcdonald-s-big-mac-hamburger-big-n-tasty-cheesebu-mcdonalds-5adef6fb6fd888.4092768115245616594581.jpg',
                    // Il link aggiunge al url di base cio' che viene scritto qua dentro, verrai reindirizzato a deliveboo/google.com 
                    link: 'google.com'
                },
                {
                    title: '<p class="title" style="position: absoulte;bottom: -16px;left: 0px;position: absolute;background-color: #ffce08;border-radius: 0 0 20px 20px;width: 100%;">Categoria</p>',
                    content: 'Category',
                    // You can also provide a URL for the image.
                    image: 'https://banner2.cleanpng.com/20180424/cgw/kisspng-mcdonald-s-big-mac-hamburger-big-n-tasty-cheesebu-mcdonalds-5adef6fb6fd888.4092768115245616594581.jpg',
                    // Il link aggiunge al url di base cio' che viene scritto qua dentro, verrai reindirizzato a deliveboo/google.com 
                    link: 'google.com'
                },
                {
                    title: '<p class="title" style="position: absoulte;bottom: -16px;left: 0px;position: absolute;background-color: #ffce08;border-radius: 0 0 20px 20px;width: 100%;">Categoria</p>',
                    content: 'Category',
                    // You can also provide a URL for the image.
                    image: 'https://banner2.cleanpng.com/20180424/cgw/kisspng-mcdonald-s-big-mac-hamburger-big-n-tasty-cheesebu-mcdonalds-5adef6fb6fd888.4092768115245616594581.jpg',
                    // Il link aggiunge al url di base cio' che viene scritto qua dentro, verrai reindirizzato a deliveboo/google.com 
                    link: 'google.com'
                },
                {
                    title: '<p class="title" style="position: absoulte;bottom: -16px;left: 0px;position: absolute;background-color: #ffce08;border-radius: 0 0 20px 20px;width: 100%;">Categoria</p>',
                    content: 'Category',
                    // You can also provide a URL for the image.
                    image: 'https://banner2.cleanpng.com/20180424/cgw/kisspng-mcdonald-s-big-mac-hamburger-big-n-tasty-cheesebu-mcdonalds-5adef6fb6fd888.4092768115245616594581.jpg',
                    // Il link aggiunge al url di base cio' che viene scritto qua dentro, verrai reindirizzato a deliveboo/google.com 
                    link: 'google.com'
                },
                {
                    title: '<p class="title" style="position: absoulte;bottom: -16px;left: 0px;position: absolute;background-color: #ffce08;border-radius: 0 0 20px 20px;width: 100%;">Categoria</p>',
                    content: 'Category',
                    // You can also provide a URL for the image.
                    image: 'https://banner2.cleanpng.com/20180424/cgw/kisspng-mcdonald-s-big-mac-hamburger-big-n-tasty-cheesebu-mcdonalds-5adef6fb6fd888.4092768115245616594581.jpg',
                    // Il link aggiunge al url di base cio' che viene scritto qua dentro, verrai reindirizzato a deliveboo/google.com 
                    link: 'google.com'
                },
                {
                    title: '<p class="title" style="position: absoulte;bottom: -16px;left: 0px;position: absolute;background-color: #ffce08;border-radius: 0 0 20px 20px;width: 100%;">Categoria</p>',
                    content: 'Category',
                    // You can also provide a URL for the image.
                    image: 'https://banner2.cleanpng.com/20180424/cgw/kisspng-mcdonald-s-big-mac-hamburger-big-n-tasty-cheesebu-mcdonalds-5adef6fb6fd888.4092768115245616594581.jpg',
                    // Il link aggiunge al url di base cio' che viene scritto qua dentro, verrai reindirizzato a deliveboo/google.com 
                    link: 'google.com'
                },
                {
                    title: '<p class="title" style="position: absoulte;bottom: -16px;left: 0px;position: absolute;background-color: #ffce08;border-radius: 0 0 20px 20px;width: 100%;">Categoria</p>',
                    content: 'Category',
                    // You can also provide a URL for the image.
                    image: 'https://banner2.cleanpng.com/20180424/cgw/kisspng-mcdonald-s-big-mac-hamburger-big-n-tasty-cheesebu-mcdonalds-5adef6fb6fd888.4092768115245616594581.jpg',
                    // Il link aggiunge al url di base cio' che viene scritto qua dentro, verrai reindirizzato a deliveboo/google.com 
                    link: 'google.com'
                },
                {
                    title: '<p class="title" style="position: absoulte;bottom: -16px;left: 0px;position: absolute;background-color: #ffce08;border-radius: 0 0 20px 20px;width: 100%;">Categoria</p>',
                    content: 'Category',
                    // You can also provide a URL for the image.
                    image: 'https://banner2.cleanpng.com/20180424/cgw/kisspng-mcdonald-s-big-mac-hamburger-big-n-tasty-cheesebu-mcdonalds-5adef6fb6fd888.4092768115245616594581.jpg',
                    // Il link aggiunge al url di base cio' che viene scritto qua dentro, verrai reindirizzato a deliveboo/google.com 
                    link: 'google.com'
                },
                
            ]
        }
    },
    methods: {
        getDeviceHeight: function() {
            this.viewportWidth = screen.width;
            console.log(this.viewportWidth);
            if (this.viewportWidth < 768) {
                this.isFixed = true;
            }
            
        }
    },
    created: function() {
        this.getDeviceHeight();
    }
}
</script>

<style lang="scss" scoped>
@import '../../sass/app';
// .prova {
//     position: relative;
// }
// .text {
//     width: 100%;
//     position: absolute;
//     top: 0;
//     left: 0;
//     display: flex;
//     justify-content: space-between;

//     p {
//         width: 14.1667%;
//         margin-right: 3%;
//     }
// }
a {
    border-radius: 20px;
    -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.17);
    -moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.17);
    box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.17);
    margin: 5px 0 5px 0;
   

    &:hover {
        cursor: pointer;
        -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.37);
        -moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.37);
        box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.37);

    }

    @media screen and (max-width: 768px) {
        margin: -5px 0 5px 0;
    }
}

.vueperslides--fixed-height { 
        height: 220px;
}

</style>

