<template>
    <div class="d-flex justify-content-center">
       
        <div class="searchbox mb-5">
            <h2 class="title">Il bello è prenderci gusto</h2>
            <p class="text">Ordina online dai tuoi ristoranti preferiti</p>
           
           <div class="search-container">
                
                <div class="find-restaurant">
                    <form>
                        <label for="name">
                            <input type="text" id="address" placeholder="address">
                            <span>Scegli una categoria</span>
                        </label>
                        <button class="text-button" type="button">Trova i ristoranti!</button>
                        
                        <!-- <i class="fa-solid fa-location-arrow"></i> -->
                        <button class="icon-button" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                        
                        
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'SearchBanner'
}
</script>

<style lang="scss" scoped>
@import '../../sass/app';

.title {
    // font-size: 2.7vw;
    font-size: 48px;
    font-weight: 700;
    color: $main_color;
    @media screen and (max-width: 768px) {
        font-size: 34px;
    }
}

.searchbox {
    display: flex;
    flex-direction: column;
    background-color: white;
    width: 60vw;
    max-width: 800px;
    height: 234px;
    // border: 1px solid black;
    border-radius: 15px;
    align-items: center;
    justify-content: center;
    -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.17);
    -moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.17);
    box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.17);

    @media screen and (max-width: 1200px) {
        width:95vw;
    }
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
    // max-width:768px;  
    // padding:3vw;
    // display:flex;
    // flex-direction:column;
        @media screen and (max-width: 1200px) {
            width:70vw;
        }
    
}


label{
    // margin-bottom:15px;
    transform: translateY(6px);
    margin-left: 30px;
    position:relative;
   
}
input{
    width:150%;
    margin-top:20px;
    border:none;
    outline:none;
    font-weight: 600;
    @media screen and (min-width: 768px) {
       input {
         width:50%;  
       }
    }
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
    transform:scale(0.8) translateX(-15px);    
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
        @media screen and (max-width: 767.98px) {
            display: none;
        }
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
        @media screen and (min-width: 768px) {
            display: none;
        }
}

// .fa-location-arrow {
//     position: absolute;
//     font-size: 20px;
//     color:#fb6100;
//     @media screen and (min-width: 768px) {
//         display: none;
//     }
// }

</style>