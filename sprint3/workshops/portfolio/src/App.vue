<template>
  <div id="nav">
    <router-link to="/"></router-link> 
  </div>
  <router-view />
</template>

<style lang="scss">
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;1,500&display=swap');
$dark : #0B0B61;
$primary : #0B0B61; 
@import "../node_modules/bootstrap/scss/bootstrap";

*{
   font-family: 'Montserrat', sans-serif;
}

</style>
