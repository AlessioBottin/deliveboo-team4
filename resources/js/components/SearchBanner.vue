<template>
    <div class="container-fluid d-flex justify-content-center position-absolute">
        
        

        <div class="searchbox">
            <h2 class="title text-center">Il bello è prenderci gusto</h2>
            <p class="text text-center">Ordina online dai tuoi ristoranti preferiti</p>
                           
            <form>
                <label for="name">
                    <input type="text" id="address" placeholder="address" v-model="searchInput" @keydown.enter="redirectToRestaurantMenu">
                    <span>Cerca un ristorante</span>
                </label>
                <button class="text-button" @click="redirectToRestaurantMenu" type="button">Trova i ristoranti!</button>
                
                <button class="icon-button" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: 'SearchBanner',
    data: function(){
        return{
            searchInput: '',
        }
    },
    methods:{
        // Redirect to the restaurant lista page at the click on the input
        // As route's param it passes the slug returned by the "string_to_slug" function
        redirectToRestaurantMenu: function(){
            if(this.searchInput.trim() == 0){
                this.$router.push({name:'restaurant-details', params: {slug: 'not-found'}});
            } else{
                this.$router.push({name:'restaurant-details', params: {slug: this.string_to_slug(this.searchInput)}});
            }
        },
        // ! Creating the slug by a given string
        string_to_slug: function(str) {
            str = str.replace(/^\s+|\s+$/g, ""); // trim
            str = str.toLowerCase();

            // remove accents, swap ñ for n, etc
            var from = "åàáãäâèéëêìíïîòóöôùúüûñç·/_,:;";
            var to = "aaaaaaeeeeiiiioooouuuunc------";

            for (var i = 0, l = from.length; i < l; i++) {
                str = str.replace(new RegExp(from.charAt(i), "g"), to.charAt(i));
            }

            str = str
                .replace(/[^a-z0-9 -]/g, "") // remove invalid chars
                .replace(/\s+/g, "-") // collapse whitespace and replace by -
                .replace(/-+/g, "-") // collapse dashes
                .replace(/^-+/, "") // trim - from start of text
                .replace(/-+$/, ""); // trim - from end of text

            return str;
        }
    }
}
</script>

<style lang="scss" scoped>
@import '../../sass/app';

.test {
    
    background-color: blue;
    height: 100px;
    width: 100%;
}


.title {
    font-size: 48px;
    color: $main_color;
}

.position-absolute {
    top: 42%;
}

.searchbox {
    display: flex;
    flex-direction: column;
    background-color: white;
    width: 55%;
    height: 234px;
    border-radius: 15px;
    align-items: center;
    justify-content: center;
    -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.17);
    -moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.17);
    box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.17);
}

form{
    position: relative;
    border: 1px solid #8a8786;
    border-radius: 50px;
    width:45vw;
    max-width: 610px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;        
}

label{
    transform: translateY(6px);
    margin-left: 28px;
    position:relative; 
}

input{
    width:100%;
    margin-top:20px;
    border:none;
    outline:none;
    font-weight: 600;
}
input::placeholder{
    opacity:0;
}

span{
    position:absolute;
    top:0;
    left:0;    
    transform:translateY(10px);
    font-size:1em;
    transition-duration:300ms;
}

label:focus-within > span,
input:not(:placeholder-shown) + span{   
    transform:scale(0.8) translateX(-18px);    
}

.text-button{
    padding: 10px 22px; 
    margin: 4px;
    background-color:$main_color;
    color:#fff;
    border:1px solid $main_color;
    cursor:pointer;
    font-size: 20px;
    font-weight: 600;
    border-radius:50px;
    display: block;
}

.text-button:hover {
    background-color: #f0c002;
}

.icon-button{
    padding: 10px 16px; 
    margin: 4px;
    background:$main_color;
    color:#fff;
    border:1px solid $main_color;
    cursor:pointer;
    font-size: 20px;
    font-weight: 600;
    border-radius:50px;
    display: none;
}

// .fa-location-arrow {
//     position: absolute;
//     font-size: 20px;
//     color:#fb6100;
//     @media screen and (min-width: 768px) {
//         display: none;
//     }
// }

@media screen and (max-width: 768px) {
    .position-absolute {
        top: 24%;
    }
    .title {
        font-size: 28px;
    }
    .text {
        font-size: 14px;
    }

}

@media screen and (max-width: 1200px) {
    .searchbox {
        width: 95%;
    }

    form {
        width: 85%;
    }
    label {
        width: 90%;
    }
    .text-button {
        display: none;
    }
    .icon-button {
        display: block;
    }

    
}



</style>