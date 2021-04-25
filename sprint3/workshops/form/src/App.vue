<template>
  <nav class="navbar shadow bg-white flex-nowrap flex-row fixed-top">
    <a class="navbar-brand" href="#">Youcode</a>
    <div>
      <router-link class="btn btn-outline-primary my-2 my-sm-1" to="/signin"
        >sign in</router-link
      >

      <router-link class="btn btn-outline-primary my-2 my-sm-1" to="/"
        >sign up</router-link
      >
    </div>
  </nav>

  <router-view />
</template>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  $spacer: 1rem;
  .mt-5 {
    margin-top: $spacer * 10 !important;
  }
}

#nav {
  padding: 30px;

  a {
    font-weight: bold;
    color: #2c3e50;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
