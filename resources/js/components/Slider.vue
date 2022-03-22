<template>
    <div>
        <vueper-slides
        class="no-shadow"
        :visible-slides="6"
        :slide-ratio="1 / 8"
        :dragging-distance="70">
        <vueper-slide v-for="i in 9" :key="i" :title="i.toString()" />
        </vueper-slides>
    </div>
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
}
</script>