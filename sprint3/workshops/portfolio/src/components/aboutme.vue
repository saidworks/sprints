<template>
<div  class="container border-0 text-primary">
  <div class="title">
    <transition name='bounce'>
     <h2>ABOUT ME</h2> 
      </transition>
      <div class="line"></div>
     <h5>HOPE TO KNOW YOU AFTER</h5>
    
  </div>
  
  <div class="card border-0">
      <div class="row">
     <img class="photo" src="../assets/said.jpg" alt="photo">
      </div>
<div class="row">
  <div class="col-sm-6">
    <div class="card border-0">
      <div class="card-body">
        <h5 class="card-title">WHO AM I ?</h5>
        <p class="card-text">Polyglot Engineer with extensive experience as a volunteer, trainee, and full-time employee with various multinational organizations. Experienced in project management, administrative work and providing technical assistance and training in the coordination of programs to ensure a safe workplace, in compliance with international standards. Interested in switching into coding, I am now studying to be a full stack LAMP developper. </p>
       
      </div>
    </div>
  </div>
  <div class="col-sm-6 text-primary">
   <div class="card border-0 text-primary" >
  <ul class="list-group list-group-flush border-0 text-primary">
    <li class="list-group-item border-0 text-primary"> <h5 class="card-title">Said ZITOUNI</h5></li>
    <li class="list-group-item border-0 text-primary">Email: s.zitouni@student.youcode.ma</li>
    <li class="list-group-item border-0 text-primary">Phone: 0655887814</li>
    <li class="list-group-item border-0 text-primary">City: Salé</li>
    <li class="list-group-item border-0 text-primary">Languages : Arabic, French, English, Turkish</li>
    <li class="list-group-item border-0 w-25 d-flex justify-content-evenly text-primary">
      <fa :icon="['fab', 'facebook-f']"></fa>
    <fa :icon="['fab', 'linkedin']"></fa>
    <fa :icon="['fab', 'twitter']"></fa>
    <fa :icon="['fab', 'google']"></fa>
    <fa icon="phone"></fa>
    </li>
  </ul>
</div>
  </div>
</div>
 </div>
 </div>

</template>

<script>
export default {
  data:function(){
    return {
      display: true
    }
  },
  components:{
    animate
  }
}
</script>

<style lang="scss" scoped>
.title{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    }
.photo {
    display: block;
    margin: 1rem auto;
    border-radius: 50%;
    width: 50Vmin;
    
}

h2 {
    font-size: 3rem;
}
.line{
  width: 20%;
  height: 5px;
  margin: auto;
  border-bottom: 2px solid;
}
.bounce-enter-active {
  animation: bounce-in 0.5s;
}
.bounce-leave-active {
  animation: bounce-in 0.5s reverse;
}
@keyframes bounce-in {
  0% {
    transform: scale(0);
  }
  50% {
    transform: scale(1.25);
  }
  100% {
    transform: scale(1);
  }
}

</style>