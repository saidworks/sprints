<template>
  <div class="skills">
    

    <div class="bg-light">
      <div class="container">

        <!-- Title -->
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="text-center">
              <div class="card-body">
                <h3 class="card-title">SKILLS</h3>
                <p class="card-text">HERE IS MY ARMAMENT</p>
                <div class="line"></div>
              </div>
            </div>
          </div>
        </div>

        <!-- First Line -->
        <div class="row justify-content-around d-flex align-items-center"> 
          <div class="col-2">
            <img alt="ERR" src="../assets/logo/C.png">
            <p>C</p>
          </div>
        
          <div class="col-2">
            <img alt="ERR" src="../assets/logo/html.png">
            <p>HTML</p>
          </div>
             <div class="col-2">
            <img alt="ERR" src="../assets/logo/css.png">
            <p>CSS</p>
          </div>   
            <div class="col-2">
            <img alt="ERR" src="../assets/logo/js.png">
            <p>Javascript</p>
          </div>
           
        </div>

        <!-- Second Line -->
        <div class="row justify-content-around d-flex align-items-center">
      
          <div class="col-2">
            <img alt="ERR" src="../assets/logo/php.png">
            <p>PHP</p>
          </div>
          <div class="col-2">
            <img alt="ERR" src="../assets/logo/laravel.png">
            <p>Laravel</p>
          </div>
          <div class="col-2">
            <img alt="ERR" src="../assets/logo/vuejs.png">
            <p>VueJS</p>
          </div>
       
          <div class="col-2">
            <img alt="ERR" src="../assets/logo/linux.png">
            <p>Linux</p>
          </div>
       
           
        </div>

        <!-- Third Line -->
        <div class="row justify-content-around d-flex align-items-center">
             <div class="col-2">
            <img alt="ERR" src="../assets/logo/python.png">
            <p>Python</p>
          </div>
          <div class="col-2">
            <img alt="ERR" src="../assets/logo/github.png">
            <p>Git/Github</p>
          </div>
         <div class="col-2">
            <img alt="ERR" src="../assets/logo/sass.png">
            <p>SASS</p>
          </div>
          <div class="col-2">
            <img alt="ERR" src="../assets/logo/bootstrap.png">
            <p>Bootstrap</p>
          </div>
        </div>
      </div>
    </div>


  </div>
</template>

<script>
export default {
  
    
  }

</script>

<style lang="scss" scoped>

img {
  width: 80%;
  animation: move 1s infinite;
}

@keyframes move {
    0% {
        transform: scale(1,1);
    }
    50% {
        transform: scale(1.05,1.05);
    }
    100% {
        transform: scale(1,1);
    }
}

.line{
  width: 20%;
  height: 5px;
  margin: auto;
  border-bottom: 2px solid;
}

</style>

