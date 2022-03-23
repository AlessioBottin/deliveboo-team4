<template>
    <div class="d-flex justify-content-center">
        <div class="searchbox">
            <h2 class="title">Il bello è prenderci gusto</h2>
            <p class="text">Ordina online dai tuoi ristoranti preferiti</p>
           
           <div class="search-container">
                
                <div class="find-restaurant">
                    <form>
                        <label for="name">
                            <input type="text" id="address" placeholder="address">
                            <span>Indirizzo di consegna</span>
                        </label>
                        <button class="text-button" type="button">Trova i ristoranti!</button>
                        <i class="fa-solid fa-location-arrow"></i>
                        <button class="icon-button" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                <!-- d-sm-none d-md-block  d-none d-sm-block-->
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

.searchbox {
    display: flex;
    flex-direction: column;
    background-color: white;
    width: 60vw;
    max-width: 800px;
    height: 210px;
    border: 1px solid black;
    border-radius: 15px;
    align-items: center;
    justify-content: center;

    @media screen and (max-width: 1200px) {
        width:95vw;
    }
}

form{
    border: 1px solid black;
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
    background:#fb6100;
    color:#fff;
    border:1px solid #fb6100;
    cursor:pointer;
    font-size: 20px;
    font-weight: 600;
    border-radius:50px;
    @media screen and (max-width: 768px) {
        display: none;
    }
}

</style>