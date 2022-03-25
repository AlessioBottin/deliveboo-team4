<template>

    <!-- start section -->
    <section>
        <!-- banner -->
        <div class="banner_container">

            <img :src="restaurants[currentPage].image_banner" :alt="restaurants[currentPage].name">

        </div>
       
        <!-- start container -->
        <div class="container my_container" >

            <!-- cards wrapper container -->
            <div class="cards_wrapper_container">
                
                <div class="left_menu_list_container">
            
                    <h6 class="text-uppercase">Novità e promozioni</h6>
                    <div v-for="(restaurant, index) in restaurants" :key="index">

                        <div v-if="currentPage == restaurant.id - 1">

                            <div
                            v-for="(plate, index) in restaurant.plates"
                            :key="index"
                            >

                                <ul class="plate_wrapper">
                                    
                                    <li>
                                        <a :href="'#' + plate.name">
                                            {{plate.name}}
                                        </a>
                                        
                                    </li>

                                </ul>


                            </div>

                        </div>

                    </div>

                </div>

                <!-- principal_and_underlay_cards_container -->
                <div class="principal_and_underlay_cards_container">

                    <!-- start underlay -->
                    <div class="underlay_container">

                        <!-- start underlay card -->
                        <div class="card underlay_card">

                            <div class="card-body text-center">

                                <h6 class="card-text justify-content-center ">Questo ristorante è tra i più amati in questo momento</h6>
                                <p>Stiamo ricevendo molti ordini - i tempi per la consegna potrebbero essere più lunghi del solito</p>
                           
                            </div>

                        </div>
                        <!-- end card underlay card -->
                        
                    </div>
                    <!-- end card underlay card -->
        
                    <!-- start principal card -->
                    <div class="card my_card_wrapper">
                        <div class="card my_card box_shadow">
                            <!-- start img container -->
                            <div class="img_container">

                                <div class="img_box">

                                    <img :src="restaurants[currentPage].image_logo" :alt="restaurants[currentPage].title">

                                </div>

                            </div>
                            <!-- end img container -->
                            
                            <!-- start card content restaurant container -->
                            <div class="card-body text-center">

                                <h2 class="card-name">{{restaurants[currentPage].name}}</h2>
                                <p class="card-text justify-content-center ">Categoria 1 - Categoria 2</p>
                                <p class="card-text justify-content-center ">Rating stars</p>
                                <p class="card-text justify-content-center "></p>

                                <!-- start grey card container -->
                                <div class="card-body text-center grey_card">

                                    <div class="d-flex justify-content-between flex-wrap grey_card_text">

                                        <p class="card-text justify-content-center ">Consegna:</p>
                                        <p class="card-text justify-content-center ">Voglio ritirare</p>

                                    </div>

                                    <div class="d-flex justify-content-between mt-3 flex-wrap grey_card_text">

                                        <p class="card-text justify-content-center">Consegna gratuita:</p>
                                        <p class="card-text justify-content-center d-flex flex-wrap">
                                            <strong>20€</strong> ordine minimo
                                        </p>

                                    </div>

                                </div>
                                <!-- end grey card container -->

                            </div>
                            <!-- end card content restaurant container -->
                        </div>
                        <!-- start card menu e info -->
                        <div class="card my_card my-3 box_shadow">

                            <div class="menu_info">

                                <h6 class="menu_style">Menu</h6>
                                <h6 class="info_style">Info</h6>

                            </div>

                        </div>
                        <!-- start card menu e info -->

                        <!-- start slider -->
                       
                        <!-- end slider -->

                        <!-- start menu list container -->
                        <div class="menu_list_container">

                            <h3>Novità e promozioni</h3>

                            <div v-for="(restaurant, index) in restaurants" :key="index">

                                <div v-if="currentPage == restaurant.id - 1">

                                    <div
                                    v-for="(plate, index) in restaurant.plates"
                                    :key="index"
                                    class="card my_card my-3 p-3 box_shadow"
                                    >

                                        <div class="plate_wrapper">

                                            <div class="plate_content">
                                                <h3 :id="plate.name">{{plate.name}}</h3>
                                                <p>da: {{plate.price}}</p>
                                            </div>

                                            <div class="plate_image">
                                                <img :src="plate.image" :alt="plate.name">
                                            </div>

                                        </div>


                                    </div>

                                </div>

                            </div>

                        </div>
                        <!-- end menu list container -->

                    </div>
                    <!-- end card principal card -->

                </div>
                <!-- end principal and order cards container -->

                <!-- start order card container -->
                <div class="order_card_container">

                    <!-- start order card -->
                    <div class="order_card mx-3 card box_shadow">


                        <!-- start card content restaurant container -->
                        <div class="card-body text-center">

                            <h3 class="card-text justify-content-center ">Il tuo ordine</h3>
                            
                            <p>
                            
                                <i class="fa-solid fa-circle-exclamation"></i>
                                Se hai un'allergia o un'intolleranza alimentare (o
                                se una persona per la quale stai effettuando un
                                ordine ne ha), clicca qui.
                            </p>
                            <button class="btn payment_btn">
                                Vai al pagamento
                            </button>
                            <div class="button_container">
                                <button class="btn btn_delivery_special_btn">
                                    <i class="fas fa-motorcycle"></i>
                                    consegna
                                </button>
                                <button class="btn btn_take_away_special_btn">
                                    ritira
                                </button>
                            </div>

                        </div>
                        <!-- end card content restaurant container -->
                    
                    </div>
                    <!-- start order card -->
                
                </div>
                <!-- end order card container -->

            </div>
            <!-- cards wrapper container -->

            

        </div>
        <!-- end container -->

    </section>
    <!-- end section -->

</template>

<script>
export default {
    name: 'RestaurantDetails',
    data: function() {
        return {
            currentPage: 0,
            restaurants: [
                {
                    id: 1,
                    email: 'spizzico@gmail.com',
                    password: '12345678',
                    name: 'Spizzico',
                    address: 'via Roma 1',
                    VAT: '1234567890',
                    image_banner: 'https://fastly.4sqi.net/img/general/600x600/538579_ydRLp3WexwBwLLmft97aYO-kN9LCXMi1h9f2J7ICsR0.jpg',
                    image_logo: 'https://upload.wikimedia.org/wikipedia/commons/2/2b/Spizzico-logo-new.png',
                    categories: [1],
                    plates: [
                        {
                            name: 'margherita',
                            description: 'pizza',
                            price: '10 euro',
                            visibility: true ,
                            image: 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                        },
                        {
                            name: 'diavola',
                            description: 'pizza',
                            price: '10 euro',
                            visibility: true ,
                            image: 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                        },
                        {
                            name: 'salsiccia',
                            description: 'pizza',
                            price: '10 euro',
                            visibility: true ,
                            image: 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                        },
                        {
                            name: 'stagioni',
                            description: 'pizza',
                            price: '10 euro',
                            visibility: true ,
                            image: 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                        },
                        {
                            name: 'capricciosa',
                            description: 'pizza',
                            price: '10 euro',
                            visibility: true ,
                            image: 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                        },
                        {
                            name: 'gamberetti',
                            description: 'pizza',
                            price: '10 euro',
                            visibility: true ,
                            image: 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                        },

                    ]
                },
                {
                    id: 2,
                    email: 'zushi@gmail.com',
                    password: '12345678',
                    name: 'Zushi',
                    address: 'via Milano 1',
                    VAT: '1234567890',
                    image_banner: 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUWFRgVEhUYGRgYGBgZGBgcGBgaGBgYGBgZGhgZGBgcJC4lHB4rHxgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISGjQhISQxNDQ0NDExMTQ0NDQxNDQ0MTQ0MTQxNDQ0NDE0NDQ0NDQ0NDE0NDQ0NDQ0QD80ND8/Mf/AABEIAKUBMQMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAEAAIDBQYHAQj/xABQEAACAQMBBAUHBwcICAcBAAABAgADBBEhBQYSMSJBUWFxBxMygZGhsRUjQlKSwdEUM1NicnPSJDRDgpOio7MWF0RUhLLC4VVjdIOU8PEl/8QAGAEBAQEBAQAAAAAAAAAAAAAAAQACAwT/xAAiEQEBAAICAgIDAQEAAAAAAAAAAQIRITESQQNhEyJRcTL/2gAMAwEAAhEDEQA/ADtkU0Z1ZMZJEst5rZHcCoMngGJlt0KVes6ik6qxHEdOLA8JsNobNq0V87WcVDnHLE81+PKS8D13yq9q0lWw4eoEY9sz/k0qlK9YDrT4EzfX9KnUoogI6bKPbrFsncelQdqlN3y4xg4wM9k7443WqZxJd8uF00zcP+2x95mv3apJ5wcR1zpNRU8lSB3da79IkgcK6Z75kdlWT0rzzbHPA5B7D2GWU/aM12K19EeAkxMit/RHhJMzvRBFo2CfCU22vSHrlnROp8JWbZ9IQx7V6YHygn5geI+M5qZ0jyhn5lf2hObmOXYx6NMaY4zwwJpnk9M8gms3R36ewpvTSgj8b8ZZnZTnAGNAc8ptt0/KTUu7qnbPboquWBYOxI4UZuRUdk42Zo/J2+No2p/XI9qNDLoxtN6vKPVoXNa3SgjLTfgDF2BOgOoA75QXm2GuUWo6KhOdBkj3yh35bN/dH/zm+Ahdh+YT1xx6VnIerIGk9SQNEH2NqatWnTHN3RPtsF++fTCIFAUcgAB4AYE+ct3topbXNKvURnWmxbhUgEnhIXnpoSD6p0VvK9bj/Zq32k/GZrTpBg1eZLdnyjUb24W3p0KiM4chmKFegpY+ic9Up9o+Vm3So9M21UlHdCeJMEoxUka90pRodv8A2XnLWqoGTwFh4r0h8JwWdVvvKbRqowFtUwdNXTrnLHxk45Z07cdUqIZiFWQ0MGhdkNDKGo6vORySrzjIh6J7PBPZJ6J6J4I4SCzsh0GgVWHWY+bMAqiKMzFFFBO4eT/ct7Go9SrUVyyhVAzga5PObXatiKycGcZ6456XSzmFdULy1GCvt3KtJ080S6g51+jjslidpuLlKQzw8BLk9RBGMerM1bCZq/t2N0jKDjgYHA8MZhqG21e0rpWPCpzpKu83fos5qBOnnOe+Ve6tGqtWqamQgdgoIxpxHWa1WGIzlKUVHQYZDHC6/VMk2m+ME9s9p5YZUEjtm2Ulu2dZXbYbpDwhtyeGm7HOik+wTnG721nq1nFUFSFyoZidCTrrM8+XB1PG7qDyin5pf2hOcmdZ2/sJ71kpU2VT6RZuQA8JU1fJXcDnXp/ZP4zVZjnRnhlltvZT21Q03IYjXI5SugTTGmOMaYI0y+3GONoWv7wf8rSiMudyz/L7X96vwMqTd8v5/dfvW+6G2f5hPCB75D+XXP71vuhlt+ZTwlFQ1SQtJahkLGIRVIM8JcwV4NNT5KWxtSh3iqP8J/wmV2//ADm4/f1v8xppvJc2Nq23f53/ACKkzO3v5zcfv63+Y0ze16QUvQPjIjJafoeuRGLLyGWI0MDMOsfRMp2agrc4yPrDWMlA9ns8nsUQjhGxwkFtaj5owCtzljb/AJqVtXnFI4oopJ9PCtV7F9hnqvUzqfViTBoy4qOB83w5/Wzj3Q21oqm0kXR9D4GBfLtFWJZhjwnlevc/UoZ72b3wIVbvOqWp/rNCyrY7/Sa263A9RntLaIcZoEMo68H8JW+cuvq2vtaE0KtwOqh/VYiUg2hvhVqaEgAHsmh2dTKoqnqEpXFy3IUV78s34S6tnIUBiM41xyjejEe00yjDuPwnFbmoou0KaMeg2vf3TtNzcIQQXX2iYF9zqJrCqa+octjK455xM2X0ZZ7XO7dMir0mBwmmn3zS3DaGVorKgPm3pnTrIB9srb/aVyVIp1KAJ7WnRlzXykUv5QCOsTJrauRkI5HUQjEH14nSLrZVy7cT1LUn9omdU2Nb8FCmmB0UUacs41xC8GPmEWzkheBskgAcJ5k6TSv5Pr7gDhFIIzgNr7xPoJ6YPMD2CZu+2Lc1Xdqd15pMgKoQtyAySeIdczKrHBqFBreuguKeit0lYZ05HuM3G7Rt693TW1VGdG4zinwEKpAY5PZmaW63AqOeKpco56yaZDe3iMz7bM+S721rKwemeKk+AQ2H14j3Zx7IZYS6y306fH82WONxk7Cbx7gX9W6rVqaIUdy68TjUacxjuh20dr2lsFoXNFBVCLxoqAqpPIhuRGhnUq1QcHF1Yznu7Zw7eakLpKtxQVnZ6igaa8CHAx3cz65nPCZTn042TK6qrv6wd2ZVCgnQAYAEDM0O5NjTubqnTqrxIQxZckeivI415zrLblWA5Wye1vvM3OJpqcPn9oO87NvJuraik4o26K5GFOuQx0EzZ8k10edaj/f/AIY1bZ7yZn/+ra/tVP8AIqTObd/nNx+/q/5jTqu6Xk8uLW9o3FSrSZUZyQvHxHipugxkdrCcw3ot2S7uEbGfPOdOWHYsPcwhVAlP0JCZNT9D1yEyHt5D7H0DAIfZehKGoKvOMzParawdjrFRPPZCrGENLYpojhGz0SC5o/mZWVecs0PzUrKvONRkUUUE+oxPWOkeKZjXU4g2oLxQX1ErqtuCTpLiqmWMG83LQqlrWvdC9iKEqagaiGXFKBL0WBloNYtxgYHD69BIvldOElmRQOeWgrvlAYHWC4yVVvEA/GUhqluDScsy1kOSTnxgdTZgJ6NRD/WlxUtLdgc0uBjjVGYLp+pnE9GxqZXoAu3UFbhb7LEZ9spJWbtkdsbOY02QFcnkQwmSfYlUfTHtM3demo/o7oMPocGnPrJkYrY08xcHxR8+5ZqY/bO6xtnsCqzoOLm6g8+sifRtBcKo7AB7BOU2CVHfhp0qgYdLpBk5frMAMzW/Kl4qjFozY6+MEnErG8a1bSOkJja28V6P9lI8TLC/3hejSpu6A8ajiHSBViM45aiGqdxoqgnO/KLaM6KVUkIeJsdS4Iz7SIY3lCTrp+8/hA73fWg6MjWyOGBBUk6jxI0lZuaUvO1tdXrHZPnU1dqAAH6zDhx7ZzvY96UoFXVVfiAbpadHsGdJtdlbRovbfk1WjVo0ggCux6BGdOF1J5aamV1TdnZzglbk6nPEHzr3mc8sbZy3jZLuKfyfhBtEkYUBHfGc5yAWM6k+3bbqqr75iNiW1vaOWpPRqsOIZ48Pg+kBzmB2nvO61qqqq8KuVGhJ4ckDUHsllMsZNOvxfiyt/JbP8dmuayVeHzbBhxqCR25Bx7xNCxmB3P2u/maHzQ4XwzPw5HS1Yg55DkJt3ukxniGPHE6Tept58/GZXx6eE9Mf/eqfPnlGoKt9VPEAW4Tg+GPunfhUBddRqe3uM45v3XAumIphzjBPBxciRjMbiJWDCYTXH/7JdlbOe4qrSplA7Z4eNuFSR1Z7e6Xa1ndSBbkg9lIn3hYy3otTwRZvxqwZHCVOJWXVcaY5gHlM5S64Gxb+Ti9AyTR/tD/DKy82VUtuhVKcRGeiwYYyRr2agy9vfKLcdMcC4VuDuzrqTjmcHTulDWWtUZ3anUJc8WRTfBzywQOWMTl8X5d/trX0NX2panOQtD7iwqrq1N1HaUYD3iCvauBxFGCnkxVgPbjE61uGJJ5AmvXJyJQFmezwRCIXK/mhK2rzll/RCVlU6xqNijcxQT6kt7sPorAnHYRn2xjXDEHIxAbdcEGGXB0hGwgGcmMCSVBpHKk0yFrpK25SXVZJVXa6GSFU2+bWRNrPKbfNCTWyZGYTo1Cachr0pYGnI66aQkFCUdpVU0DcQH0W1Ht5w0bezjHAO0EtofVK6qkCpsik8WM5io0SbVJ66XtaDXNBKnPzaH6yPURvahEBS8pDqEnTaFH6oltI7nYRfldOo7POOx+02vvlVX2O2gevVYLyy5OPDM0FK+otoq6nlA7kwyv8UijbZyjQu58cH4iQtZ0uRBP2ZY1oI41xMzKnSwC8VIU2ZinDjgOMcPUOUgpWFBBwhNOzMNNPGnYIwpLdKurVLa2DXC0gjICeLiOckcvWcCYTa+zQtpWrs4d6rozNgDBLZIUdWrTX74WjPauEVWIw2C4XAXLE89cAZx4S88mewqFTZtM3FFKnnGdzxqGGOMhQA2gAAE1MpdwWXiuf7v70U6VuiOlRmAILLUKjQ6AjPYRLGtv+hXh4KoHLIZM+0zq53TsMY/I7fHZ5pMfCCXG5Ozjzs6X9VeE/3cR2tOc7m7wUKl7QRErBmdsF3BXPAxOR6jKrb28VutxWRkrkpWqKSHUDKuwOO7SX1fYNC121YrbKURy7FCxYBlVxkFsnXs7pzfegfy26/wDU1/8AMeVt/q1Ggt95qSEOi3AwQcecGDjqYDmJfL5SuMMi0eAlSAxOcEjAOAdTkjSc1+iJfbs2fGlRkYLVyOBirtwqq9NlCgniy6gHqhll4zdUx3dPdu2VNLNWpsWL18uxILcXA4IJA0Oc5HbOz7h2XHs+2aoxJNJerqGQNSddANZids2wubLzeFBVww9MqMB/R6AOMnHLq6+c6RuVT4bC1XIbFFNRnB05jPUZnHPy56ayx8eLyNbZydeT6oJdhEQ4UkAHA6OPYRLZzKnaQ6J8J0jFMbYFpXRWqW1J+JQ2Si51GeoSk2j5NdnuCVptTPajke46TR7EqZoJ3Lw/ZJX7o/aVbhpuexT8ILh817dsko3FSlTcuqNwhjzOmvKAiW1zsuq7u+PSZm59pzIxsWr9Ue2QTv8AmllVUOsubmmVQA8xBdibP/KLmlR6ncA/sjVvcDGqKzMU+i/9ErL/AHdPsxQOh4XWeXr4x3iSgdLxxINrKMKe+DR9LUSVRILbkIUIxlDWEqr8aGW9SVd6NDFArB+JCueTS5tKeFEzVgvzjLnGZr6CYUeEzOzUfDIq6QwrIaqxFVFZJzPyis6MjIxXmDg4nVK6zI7x7Va1HnlpU6oBAZaiBgRnqJ1U9498aJ25INqVP0rfajxter+lb7U3lHeb8oYtbtSR85/J3SmoI+qjgDPtB7QOZKba1yoPHZ454Iq8JHZpr8IeLXkrvJpXqVbh2dyyonInIyx0+E6BcTBDea4T6Dr29N/fw4lxabyuUDNTuie0edZCO0ayyxZuevS7S3Z24U589TgAdpPVHpsdw4JZMAjPTH3wO03iplfnPyhD3pWOfAcUmt9p0arimteqGbkSKqa+Jf7pz69U7t6i2a0btX7a/jPVsm7B9pfxmV2jdUwWU1644CQTis2o7w+MeqVdS7GOdRh1ENUyfEMfhGX6q5XG+y8FCopwGNN+Ea5JYcOmmDoT15m43ItfN2Fqh5iihPiy8R95MwFCpTe3GaTkl2ABLHmFUczkantnWKFMKqqOSgAeoYhjjJbpu22TaSRVZITIKzTcZrO3e7i1ryhdmqUa2LYThBDBgc5OdOc59t/yV3ta5r1adS34alWo68TOGAdi2CAhAIz2zo9xtFEqBWOA3Jj6IIxzPMc+yXdu4IyCCD9JWBB9cbFK4VfeSzaKKOBadXHMJUAb2OF+MhfZTWaUlu6JWrw1CVK8RHE/RbiVsch1HtzPoLiEqNq7Mapqrr3K9NHUdwOMj3zNnlNUzjlxWrtJEUqU4lbJ0VzqCe/sOPV7e17rrw2VsMY+Yp/8g6pnLnZtSkMtbK+DkPSp0nwO+meEnxGvdLvZG2qTgKaqghVBBHm2Q8ulTfDLk8tMSxw8VbtcOZV3/IyzrW2R6bDvHDn1aQKpaU/pVHPrX7lm5YLAGwLlRTZWZRwu41IHPDdf7UW3q4ai602VmKkABlyffKbb27NsxNVblkIGvGqunvwR7ZhGThYhaqEA6E8BUjPXnDLp1YjwBXyVWXQqB4ug/wCqefkFTtT+1pfxQN14s9NVPVh6ZUj3Ee+RqDyYq3etRAT7Tj3R4Z0W0NiVnHRCH/36A+LwvydbMNK+47kogRGKk1KZUs2BoysRnGfbBxTxqGVv1Wdc/wB0/fPUpjQHA7TxBh6gNR7YXTWnZPlKj+mp/bT8Ypx38k/WT/Eihqf1OyqOmIPtZchf2oTSdS3Rzp3Yjbm3Z8cIzg6zLSCgISsSWT9g9snW1buiyFqStuhpLt7Nj2Qepslm+kPfHcTHUqZ/KEA6zrNug0gNvu8VqBy4OOrBlx+T98Nw6DESCsIebfvkVS1PbLa0p68xG+tLiouO4ze3Vuw6pjt46eUYdxj6HtxLEv8AZG8tSmAlQs6Z5FjlR3Z5juPqxKKquGI7CRPFUkgDmdB4nSEths26vbWlSoi1aVsWRxlW4+HIOgJGMj1yx+QrvGBYgf8AEn8Jq9k2/m7akn1UQe4SZLp09E6dh1Hs6pvyrPjGMTYV+OVqB/xB/CPGwtof7sn/AMg/wzbC7uWANMUsH63Hn3SIXt3rrR0OOT/jLzp1GO+QdoZ/myeu4P8ADPfkC/6rS38TXY/9M15u7v61H7L/AIxhvLr61L7DfjDzv8WozFDYe0AQTa2xIIIzXbmDnqQTTUbzaf07O3/q3TD3GnPDeXX16X2G/GeHaF3+kp/YP4yuVvoyaWKXV0R0rZR4V1PxUSKtUuCNLf8AxU/CBG/uv0qfY/7xhvrr9Kn9mPxmd/S1AF/se9quD5tFUZ0NQHU9fo9wnltsO9Q5QhD3PofHTWHG8uf0y/YWDPtK5H9MPsLHzsWot7F7xcCqtNx2hsN7hg+yW6k41mIfbFyP6X+4sGfb9yP6X+6v4TNylDoeZDfbMo114a9JHB6nUN8eU5428Vz+lP2V/CL5fuT/AEzexfwltp0SjZ8CBabHhAwAxLYHUATriZi/2PfuxK1KYHV03Hu4D8YTZWtZ1DPd1CGAI4Qg0Iz1gwn5Nc/7VX9qfwxlsZYvam5O0aza3VNVHIA1MjxOBn2SJ9xL/gVFuaWQSSxD5OmMZVRp45m2OyX/AN5r/bX+GVm1rZ6aFluK2R2uPuEdplhuDtHrvKXsqST/AEAvyMG8p+PDUz/zTP1967xbh6XnW4Vxg5bOD2nP3Qe83uu1bAqtjvL/AMUDtqP9Xt913y+pX/ii/wBXl717Q/uP/HMrd703SgEVW172/GbjcUG5thVru5cu46LuowDgaAyAH/V1ef8AiP8Aht/HFNn8i0u2p/a1Pxikh1tRdXyVOCCMjUe0R77QFNwrDII9YxKuwcowI0xz7xNFTpI/SZFJ7SAYNIF2wnYZ78rJ2GGi3T6i+wT0Ul+qPYJIB8rr9UxfKw6kMseAdg9k9xIaVnym3Uh988baL9VM+wy0izIqd76r9Qj1GCvtV+WBNCXHaPbIKqoefD7sy2NM3V2o/aJXbRo+dRiBhsH1ywvd3qfHx0nwc5Kk5Hfjskpp8KEYxoZS1afP+0tlVPOvwoccRxJ9g7Eqvc0VZNONc+AOfum7a2BZvEy13dtB59T2ZPulpbbVl0A7BBKqw54NUEQNtlwg8IFQfIb9pvjD+Ser7pVWBymf1m+MohDSNjHvI2kjWjDHtGESRpjTHxhEkaZX1xLFhpAqizGXNSuqiB1Flo9OCvThIlayT1EhLU54tObkSWhteqgCq2ijA8ByhabfrfW90gsrfiB7jDUoEcj8InaSlt6r1sI69uS6NxHJxJEbHMD3ScVB2D3SGnIdsUuG7JxzRT8ZVX56c7oFQ80X2CSChTPNE+ysk4NtA9EeE6n5Jsmz06qj/GaoWdE86afZWHWyIgwgCjsAAHukZDuExSXzkUiqVWGPcsqKUPcYOw6R8ZOq5Qg9RgkXypU+sI07SqfWk6KOySx0yBN/U+uffPDev9ZvfC2g1SGkar1W5cRnvm6vY0sbcYAk8Upzb1OxvaJWXm1UpuUqFgw5jBPOaomc53jH8pfxHwEzldQxcrtFWxw8WvdLUK3Ac9kzWzU6Seqa659A+Esd0sRRoks2AOcudi0CrkkDlMhvJtOpbKXpYznXPLnLjcTadS4omrVwCXIGOwTQjbK8QqKGAYZB65FSMn82DjxkBFwcIfCVWzfQHr+JljfthG8DK/Zy9BfAShqdowyUrGlJBCRPMSYpG8MkixGkSUrPCskgcaSBkhjrIysNIGySF6UPKRjpKJVPSkfm4fUpyIpEK16oRwCD0zgY7QCdfYZXXu8tGkM1A4GcaDPwlntCnqh7HX36ffMHvfT6Ddz/AHyUXo34tPrP9lofsveGjcMVpMxIGSCpX4zj4E1G4NThuGHanwP/AHhtrTeX+3qVHHnXZcnA0J5eEEXfC1PKsfst+Ez2/S5RT2P8ZjKS9IeMr2HWm3ntxzrY8Q0mttv0nVmp1eJVxxEZ0z2zl20Orwlrukfm7he5T75W6Mb/AOXKf6X4xTF5MUPKl2yrzk9MdE+H4yCr1QtF0HhNJAsfGLHSZNYyA6mTuZEnOSHU+UlzIkkkkRnP9upmu5/W+6b9pidqpmq/7Uzn0Yds9ekvqmnu/QPhM3YDpr6po7w9A+EcelXO95bYOjAiXu6doKdsijTTPtgm0KXFkduk0NrTCoq9gAlZyIOowqn1QWnCqXVFItrvik57jIbBDwJp9EfCN3hb5h/CGoMIo7FHwkahbPZI2qY6vfJKjQKq8ge91jqkD7RA+j74JcVJXV6kksau3FX6B9olbc74KucUnJ7OIa64xK65eAbPt+O5pJ2upPgrcR9whtOkOsYVhLrI2WKQYjXSTcM8ZZADUSQMkMqLB3WIV1+unv8AZrMLvZSyjgds6BdplZjNvrq3qPuhTHO/yZuyXW6aFLlSesER7UQZLsumVrIf1pi7h3VrvYuUPcwMydNNRNlvCmUb1TJqmsLeU8uRr6pbbrjWqvanwMqq4y3qlruwMVGHahlb+yGebihvmopout1R8RDGHwiimiFWOiikyY0ipc4opIekfFFJPGmRvx02/aMUUMjDrEdMeMvrz0D4RRShZkjLrntEuhFFGswTThdLkIopVAN4/wAy3q+Ih2dPUIopGh6sAuIopCqm5Mr67RRSSurmHbpUw12pP0Ucjxxj7zFFBpvmEjIiiiyWI1xFFEBqgg7ieRRiD3HKYjeEat4fjFFCqM3JbbR18RPYoFd7aGVbwmU4cGexTnkKgqelLPd388P2TFFC/wDRjR4iiim2n//Z',
                    image_logo: 'https://italianfoodacademy.com/wp-content/uploads/2017/08/zushi.jpg',
                    categories: [2, 3],
                    plates: [
                        {
                        name: 'uramaki',
                        description: 'sushi',
                        price: '20 euro',
                        visibility: true ,
                        image: 'https://www.banshi.it/wp-content/uploads/2016/08/mix-12-600x600.png',
                        },
                        {
                            name: 'poke',
                            description: 'poke',
                            price: '5 euro',
                            visibility: true ,
                            image: 'https://icon2.cleanpng.com/20190618/wji/kisspng-poke-nikkori-victoria-vegetarian-cuisine-japanese-nikkori-japanese-cuisine-5d086b1a5865f5.6360839015608327943621.jpg',
                        },

                    ]
                },
                {
                    id: 3,
                    email: 'panpoke@gmail.com',
                    password: '12345678',
                    name: 'Panpoke',
                    address: 'via Genova 1',
                    VAT: '1234567890',
                    image_banner: 'data:image/jpeg;base64,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',
                    image_logo: 'https://panpoke.faidudelivery.it/media/cache/square/uploads/120/logo/logo-pan-pok%C3%A8-60f33fca52bd5.png',
                    categories: [3],
                    plates: [
                        {
                            name: 'poke',
                            description: 'poke',
                            price: '5 euro',
                            visibility: true ,
                            image: 'https://icon2.cleanpng.com/20190618/wji/kisspng-poke-nikkori-victoria-vegetarian-cuisine-japanese-nikkori-japanese-cuisine-5d086b1a5865f5.6360839015608327943621.jpg',
                        },

                    ]
                },
                {
                    id: 4,
                    email: 'fiveguys@gmail.com',
                    password: '12345678',
                    name: 'Five guys',
                    address: 'via Torino 1',
                    VAT: '1234567890',
                    image_banner: '',
                    image_logo: '',
                    image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Frestaurants.fiveguys.it%2Froma-termini&psig=AOvVaw0SB2Jcmj_EcHc1C8XdhMBS&ust=1647686534196000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCNiXl-i8z_YCFQAAAAAdAAAAABAD',
                    categories: [4],
                    plates: [
                    {
                        name: 'menu hamburger',
                        description: 'hamburger e patatine',
                        price: '15 euro',
                        visibility: true ,
                        image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Froma.fanpage.it%2Ffive-guys-a-roma-rimandata-lapertura-del-primo-fast-food-in-citta-prevista-per-oggi%2F&psig=AOvVaw0SB2Jcmj_EcHc1C8XdhMBS&ust=1647686534196000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCNiXl-i8z_YCFQAAAAAdAAAAABAP',
                    },

                    ]
                },
                {
                    id: 5,
                    email: 'venchi@gmail.com',
                    password: '12345678',
                    name: 'Venchi',
                    address: 'via Alessandria 1',
                    VAT: '1234567890',
                    image_banner: '',
                    image_logo: '',
                    image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.comunicaffe.it%2Fvenchi-cioccolato-storia-azienda%2F&psig=AOvVaw107WrcyMXqs1tFoZRPZa_P&ust=1647686630525000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPD16JW9z_YCFQAAAAAdAAAAABAD',
                    categories: [5],
                    plates: [
                        {
                            name: 'pistacchio',
                            description: 'gelato',
                            price: '5 euro',
                            visibility: true ,
                            image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.davidezambelli.com%2Fricette%2Fgelato-al-pistacchio-senza-gelatiera%2F&psig=AOvVaw2fz_J9cMfxRX0cYadN3dz9&ust=1647686674883000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJDgjqu9z_YCFQAAAAAdAAAAABAD',
                        },
                        {
                            name: 'cioccolato',
                            description: 'gelato',
                            price: '5 euro',
                            visibility: true ,
                            image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.davidezambelli.com%2Fricette%2Fgelato-al-pistacchio-senza-gelatiera%2F&psig=AOvVaw2fz_J9cMfxRX0cYadN3dz9&ust=1647686674883000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJDgjqu9z_YCFQAAAAAdAAAAABAD',
                        },
                        {
                            name: 'limone',
                            description: 'gelato',
                            price: '5 euro',
                            visibility: true ,
                            image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.davidezambelli.com%2Fricette%2Fgelato-al-pistacchio-senza-gelatiera%2F&psig=AOvVaw2fz_J9cMfxRX0cYadN3dz9&ust=1647686674883000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJDgjqu9z_YCFQAAAAAdAAAAABAD',
                        },

                    ]
                },
                {
                    id: 6,
                    email: 'donerkebab@gmail.com',
                    password: '12345678',
                    name: 'Doner kebab',
                    address: 'via venezia 1',
                    VAT: '1234567890',
                    image_banner: '',
                    image_logo: '',
                    image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FDoner_kebab&psig=AOvVaw0y83sKkdr6EwbGlZP5gAkW&ust=1647686788395000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCNi1meG9z_YCFQAAAAAdAAAAABAD',
                    categories: [6],
                    plates: [
                    {
                        name: 'kebab',
                        description: 'kebab',
                        price: '5 euro',
                        visibility: true ,
                        image: 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fit.m.wikipedia.org%2Fwiki%2FFile%3AD%25C3%25B6ner_Kebab%2C_Berlin%2C_2010_(01).jpg&psig=AOvVaw0y83sKkdr6EwbGlZP5gAkW&ust=1647686788395000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCNi1meG9z_YCFQAAAAAdAAAAABAJ',
                    },

                    ]
                }
            ]

        };
    },
    created: function() {

    }
};
</script>

<style scoped lang="scss">


    .img_container {
        display: flex;
        justify-content: center;
    }

    .my_container {
        margin: -300px auto 40px auto;
        width: 100%; 
    }

    .img_box {
        margin: -50px 0 0 0;
        height: 100px;
        width: 100px;
        border: solid whitesmoke 4px;
        border-radius: 20px;
        overflow: hidden;
        background-color: white;
        display: flex;
        img {
            object-fit: contain;
        }
    }

    .my_card {
        border-radius: 15px;
    }

    .my_card_wrapper {
        border: none;
        border-radius: 15px;
    }

    .grey_card {
        width: 65%;
        margin: auto;
        background-color: #f5f3f1;
        border-radius: 10px;
    }


   .banner_container {
    line-height: 150px;
    height: 400px;
    object-position: center;
        img {
            height: inherit;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }
    }

    .menu_info {
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 10px 0;
    }

    *[class$="_style"]:hover {

        text-decoration: underline;
        text-underline-offset: 17px;
        text-decoration-thickness: 4px;
        text-decoration-color: #ffce08;

    }

    .plate_wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;

        .plate_image {
            width: 25%;
            border-radius: 10px;
            overflow: hidden;
        }
    }

    .order_card {
        position: sticky;
        top: -100px;
        border-radius: 15px;
        margin: 140px 0 -50px 50px;
        width: 100%;
        
        p {
            font-size: 13px;
        }

    }
    

    .underlay_container {
        position: sticky;
        top: 0;
        margin-bottom: 1px;
    }

    .underlay_card {
        border-radius: 15px;
        height: 190px;
        margin-bottom: -50px;
        background-color: rgba($color: #f75e28, $alpha: .9);
        color: white;
        
        p {
            font-size: 13px;
        }
    }


    .cards_wrapper_container {
        display: flex;
        justify-content: center;
        width: inherit;
    }
   
    @media screen and (max-width: 650px) {
        .cards_wrapper_container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: inherit;
        }
    }


    .payment_btn {
        border-radius: 30px;
        color: #8a8786;
        background-color: #efedea;
        width: 100%;
    }

    .payment_btn:hover {
        background-color: #ffce08;
        color: white;
    }

    .left_menu_list_container {
        margin: 350px 40px 0 10px;
        
    }

    .plate_wrapper > li:hover {
        border-left: solid 3px gray;
        cursor: pointer;
    }

    .button_container {
        display: inline-block;
        background-color: #efedea;
        padding: 3px;
        display: flex;
        justify-content: space-between;
        border-radius: 30px;
        width: 100%;
        margin: 15px auto;
    }

    *[class$="_special_btn"]:hover {
        color: white;
        background-color: #ffce08;

    }
    *[class$="_special_btn"] {
        border-radius: 30px;        
    }

    *[class$="box_shadow"] {
        box-shadow: 0px -1px 15px -3px #000000;
    }

    @media screen and (max-width: 1230px) {
        *[class$="grey_card_text"] {
            justify-content: center !important;
        }
    }

    
   
</style>
