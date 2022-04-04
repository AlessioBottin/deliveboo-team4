<template>
  <div class="animated_container d-flex justify-content-center">
    <div>
      <marquee  scrolldelay="100"  scrollamount="5" behavior="slide" direction="down">
        Grazie per aver acquistato su &nbsp;
      </marquee>
    </div>
    <div>
      <marquee scrolldelay="1"  scrollamount="16" behavior="slide" direction="left">
        <span class="logo">
          DELIVEBOO
        </span>
      </marquee>
    </div>
  </div>
</template>

<script>
export default {
  name: 'AnimationThanks'
}
</script>

<style scoped>
.animated_container {
  margin-top: 100px;
  font-size: 50px;
  width: 100%;
  
}

.logo{
  color: #ffce08;
  position: relative;
  top: 3px;
  }
</style>