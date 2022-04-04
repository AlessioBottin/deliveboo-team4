<template>
    <div>
        <div class="container">
            <div class="text-center thanks_text d-flex flex-column">
                <AnimationThanks/>
                <h4 class="mt-5">
                    <span>Ti abbiamo spedito un'email con i dettagli dell'ordine
                        
                    </span>
                </h4>
                <h5>Il tuo ordine è stato segnalato</h5>
                <div class="animation_container d-flex  justify-content-center align-items-center">
                    <div class="fa-3x">
                        <i class="fa-solid fa-envelope fa-fade" style="--fa-animation-duration: 2s; --fa-fade-opacity: 0.1;" ></i>
                    </div>
                    <div class="animated_mail ">
                        <marquee behavior="" direction="right">
                            <i class="fa-solid fa-envelope"></i>
                        </marquee>                
                    </div>
                    <div class="fa-3x">
                        <i class="fa-solid fa-envelope fa-shake" style="--fa-animation-duration: 3.1s; --fa-animation-delay: 3.1s" ></i>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</template>

<script>
import AnimationThanks from '../components/AnimationThanks.vue';

export default {
    name:'Thankyou',
    components:{
        AnimationThanks
    }
}
</script>

<style lang="scss" scoped>

.thanks_text{
    margin-top: 100px;
    padding: 90px 0 30px;
    .logo{
        color: #ffce08;
        position: relative;
        top: 3px;
    }
}

.animated_mail {

    width: 200px;
}
.animation_container {
    width: 100%;
}
</style>