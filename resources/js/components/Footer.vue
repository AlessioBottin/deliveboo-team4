<template>
    <footer>
        <div class="container-md">
            <div class="logo">DELIVEBOO</div>
            <div class="row links">
                <div class="col-md-4 col-sm-6">
                    <ul>
                        <li><h3>Uniamo le forze</h3></li>
                        <li><a href="#">Lavora con noi</a></li>
                        <li><a href="#">Deliveboo per i Partner</a></li>
                        <li><a href="#">Corrieri</a></li>
                        <li><a href="#">Deliveboo Business</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6">
                    <ul>
                        <li><h3>Link di interesse</h3></li>
                        <li><a href="#">Chi siamo</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Blog</a></li>   
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6">
                    <ul>
                        <li><h3>Seguici</h3></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: 'Footer'
}
</script>

<style lang="scss" scoped>
@import '../../sass/app';

footer {
    background-color: rgba(0, 0, 0, 0.952);
    
    .logo {
        font-size: 40px;
        margin-top: 20px;
    }
    .row {
        display: flex;
        justify-content: space-between; 
        color: white;
        ul {
            list-style-type: none;
            a {
                text-decoration: none;
                color: white;
            }
        }
    }

    /* test */
    margin-top: 100px;
}
</style>