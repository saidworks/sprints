<template>
  <div class="title shake">
   
<h1 class="display-3 shake">SAID ZITOUNI </h1>
<div class="border shake"></div>
<h3 class="shake">Full-stack Developper</h3>
  
  </div>

</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
.shake {
  animation: shake 0.85s cubic-bezier(0.36, 0.07, 0.19, 0.97) both 3;
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden;
  perspective: 1000px;
}

@keyframes shake {
  10%,
  90% {
    transform: translate3d(-1px, 0, 0);
  }

  20%,
  80% {
    transform: translate3d(2px, 0, 0);
  }

  30%,
  50%,
  70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%,
  60% {
    transform: translate3d(4px, 0, 0);
  }
}

.title{
    background-image: url('../assets/img/bg-blue.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height : 100vh;
    color: white;
    font-family: 'Montserrat', sans-serif;
    font-weight: 300;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.border {
    border: 2px solid white;
    width:20% ;
}


</style>

