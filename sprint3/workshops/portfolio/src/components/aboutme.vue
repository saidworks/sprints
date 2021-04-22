<template>
<div class="container border-0">
  <div class="title">
     <h2>ABOUT ME</h2> 
      <div class="line"></div>
     <h5>HOPE TO KNOW YOU AFTER</h5>
  </div>
  
  <div class="card border-0">
      <div class="row">
     <img class="photo" src="../assets/photo.jpg" alt="photo">
      </div>
<div class="row">
  <div class="col-sm-6">
    <div class="card border-0">
      <div class="card-body">
        <h5 class="card-title">WHO AM I ?</h5>
        <p class="card-text">I'm a Full-Stack Developer student. Actually, I have a Licence BAC+3 in IT and I just started a computer science Master specialized in artificial intelligence and collaborative systems. IT is not only my professional background. It is also and above all a passion that has grown since I was 16 years old.
I always liked to get into projects using the skills that I did not have or were even spare pure programming like web design, 3D modeling ect... This allowed me to learn to be autonomous and to learn on my own, certainly not without difficulties far from it, but I always managed to overcome the obstacles and solve the problems I encountered !</p>
       
      </div>
    </div>
  </div>
  <div class="col-sm-6">
   <div class="card border-0" >
  <ul class="list-group list-group-flush border-0">
    <li class="list-group-item border-0"> <h5 class="card-title">Said ZITOUNI</h5></li>
    <li class="list-group-item border-0">Email: s.zitouni@student.youcode.ma</li>
    <li class="list-group-item border-0">Phone: 0655887814</li>
    <li class="list-group-item border-0">City: Salé</li>
    <li class="list-group-item border-0">Languages : Arabic, French, English, Turkish</li>
    <li class="list-group-item border-0 w-50 d-flex justify-content-evenly"><fa icon="coffee"></fa><fa icon="flask"></fa></li>
  </ul>
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
    width: 20%;
    
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
</style>