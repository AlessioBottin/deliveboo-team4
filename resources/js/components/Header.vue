<template>
    <header>
        <!-- header -->
        <div class="container-md">
            <div class="d-flex justify-content-between align-items-center position-relative">

                <div class="burger-icon d-block d-md-none">
                    <i class="fa-solid fa-bars main-color"></i>
                </div>

                <div class="flex-grow-1">
                    <h1 class="logo">DELIVEBOO</h1>
                </div>

                <div class="d-md-block d-none">
                    <span class="title main-color">
                        Accedi
                    </span>
                    <span class="title main-color">
                        Registrati
                    </span>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: 'Header'
}
</script>

<style lang="scss" scoped>
@import '../../sass/app';

header {
    width: 100%;
    position: absolute;
    top: 0;
    left:0;

    padding: 15px;
    .burger-icon{
        font-size: 40px;
        position: absolute;
        top: -1.5px;
        left: 0px;
    }
    .logo {
        font-size: 50px;
    }
    .title {
        font-size: 24px;
        margin: 0 10px;
    }
}
@media screen and (max-width: 768px) {
    header{
        padding-top: 30px;
    }
    .logo{
        text-align: center;
        font-size: 60px;
    }
}
</style>