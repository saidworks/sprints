<template>
    
        <div class="bg-primary text-light">
        
            <!-- title  -->
            <div class="row justify-content-center">
            <div class="col-8">
                <div class="text-center">
                <div class="card-body animate__animated animate__fadeInDown">
                    <h3 class="card-title text-white">MY PROJECTS</h3>
                    <p class="card-text text-white">THIS IS MY STORY</p>
                    <div class="line text-white"></div>
                </div>
                </div>
            </div>
            </div>
            <animatex></animatex>

        </div>

      <div class="card text-center">
  <div class="bg-primary text-white card-header">
    Said ZITOUNI
  </div>
  <div class="card-body">
    <h5 class=" card-title">My Work</h5>
    <p class="card-text">Feel free to check out my work on github</p>
    <a href="https://github.com/saidworks" class="btn btn-primary"> <fa :icon="['fab', 'github']"></fa> </a>
  </div>
  <div class="bg-primary card-footer text-muted">
    &copy; Copyright 2021
  </div>
</div>
    
</template>
<script>
import animatex from './animate.vue'

export default {
  components: { animatex },
    name: 'Projects',  
        

}
</script>
<style lang="scss" scoped>

.line{
  width: 20%;
  height: 5px;
  margin: auto;
  border-bottom: 2px solid;
}

.flx{
    display: flex;

}


img{
    width: 20%;
    border-radius: 7px;
    border: 1px solid white;
}

table{
    // width: 80%;
    margin-left: 20vw;
    text-align: left;
}

td:nth-child(3){
    width: 45vw;
}

.dt{
    width: 20%;
    text-align: right;
}

// table,td {
//     border: 1px solid #333;
// }

.badges{
    padding: 2px 15px;
    margin: auto 5px;
    border-radius: 20px;
    position: relative;
    bottom: 9px;

    &.software{
    background: #E0102B;
    }

    &.library{
    background: #0093EE;
    }

    &.game{
    background: #AB7EF6;
    }

    &.script{
    background: #96BF47;
    }

    &.website{
    background: #FFB610;
    }
}

.sign{
    width: 2rem;
    height: 2rem;
    text-align: center;
    border-radius: 50px;
    
    &.s-software{
        border: 4px solid #E0102B;
    }

    &.s-library{
        border: 4px solid #0093EE;
    }

    &.s-game{
        border: 4px solid #AB7EF6;
    }

    &.s-script{
        border: 4px solid #96BF47;
    }

    &.s-website{
        border: 4px solid #FFB610;
    }
}

</style>