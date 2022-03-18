<template>
    <footer>
        <div class="wave">
            <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 170" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop><stop stop-color="rgba(255, 255, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,85L48,79.3C96,74,192,62,288,53.8C384,45,480,40,576,53.8C672,68,768,102,864,104.8C960,108,1056,79,1152,82.2C1248,85,1344,119,1440,121.8C1536,125,1632,96,1728,70.8C1824,45,1920,23,2016,28.3C2112,34,2208,68,2304,73.7C2400,79,2496,57,2592,45.3C2688,34,2784,34,2880,31.2C2976,28,3072,23,3168,17C3264,11,3360,6,3456,11.3C3552,17,3648,34,3744,59.5C3840,85,3936,119,4032,119C4128,119,4224,85,4320,79.3C4416,74,4512,96,4608,110.5C4704,125,4800,130,4896,121.8C4992,113,5088,91,5184,82.2C5280,74,5376,79,5472,79.3C5568,79,5664,74,5760,73.7C5856,74,5952,79,6048,93.5C6144,108,6240,130,6336,124.7C6432,119,6528,85,6624,73.7C6720,62,6816,74,6864,79.3L6912,85L6912,170L6864,170C6816,170,6720,170,6624,170C6528,170,6432,170,6336,170C6240,170,6144,170,6048,170C5952,170,5856,170,5760,170C5664,170,5568,170,5472,170C5376,170,5280,170,5184,170C5088,170,4992,170,4896,170C4800,170,4704,170,4608,170C4512,170,4416,170,4320,170C4224,170,4128,170,4032,170C3936,170,3840,170,3744,170C3648,170,3552,170,3456,170C3360,170,3264,170,3168,170C3072,170,2976,170,2880,170C2784,170,2688,170,2592,170C2496,170,2400,170,2304,170C2208,170,2112,170,2016,170C1920,170,1824,170,1728,170C1632,170,1536,170,1440,170C1344,170,1248,170,1152,170C1056,170,960,170,864,170C768,170,672,170,576,170C480,170,384,170,288,170C192,170,96,170,48,170L0,170Z"></path></svg>
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
</style>