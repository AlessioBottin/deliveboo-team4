<template>
    <footer>
        <div class="wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="black" fill-opacity="10" d="M0,192L48,208C96,224,192,256,288,224C384,192,480,96,576,58.7C672,21,768,43,864,90.7C960,139,1056,213,1152,224C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
        <div class="content">
            <div class="container-md">
                <div class="logo">DELIVEBOO</div>
                <div class="row links text">
                    <div class="col-md-3 col-sm-6">
                        <ul>
                            <li><h3>Uniamo le forze</h3></li>
                            <li><a href="#">Lavora con noi</a></li>
                            <li><a href="#">Deliveboo per i Partner</a></li>
                            <li><a href="#">Corrieri</a></li>
                             <li><a href="#">Deliveboo Business</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <ul>
                            <li><h3>Link di interesse</h3></li>
                            <li><a href="#">Chi siamo</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Blog</a></li>   
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <ul>
                            <li><h3>Seguici</h3></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <ul class="social">
                            <li><h3>I nostri social</h3></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
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
    margin-top: 20px;
    svg {
        color: white;
    }
    .logo {
        font-size: 40px;
        margin-top: 20px;
    }
    .row {
        display: flex;
        justify-content: space-between; 
        color: white;
        padding: 20px;
        ul {
            list-style-type: none;
            a {
                text-decoration: none;
                color: white;
            }
            .social {
                color: $main_color;
                a {
                    color: $main_color;
                }
            }
            
        }
    }

    /* test */
    margin-top: 100px;
}

svg {
    background-color: white;
}
</style>