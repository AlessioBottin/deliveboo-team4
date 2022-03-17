<template>
    <header>
        <div class="container-md">
            <div class="d-flex justify-content-between align-items-center">
                <div class=" ">
                    <h1 class="logo">DELIVEBOO</h1>
                </div>

                <div class="">
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

    .logo {
        font-size: 50px;
    }
    
    .title {
        font-size: 24px;
        margin: 0 10px;
    }

    }



</style>