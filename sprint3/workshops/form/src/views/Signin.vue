<template>
  <div class="container mt-5">
    <form
      @submit.prevent="onSubmit"
      class="card border-dark row col-lg-4 offset-lg-4"
    >
      <h1 class="text-dark animate__animated animate__bounce">sign in</h1>
      <div class="form-group text-dark">
        <label for="exampleInputEmail1">Email address</label>
        <input
          type="email"
          v-model="email"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
          placeholder="Enter email"
        />
        <small id="emailHelp" class="form-text text-muted"
          >We'll never share your email with anyone else.</small
        >
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input
          type="password"
          class="form-control"
          id="exampleInputPassword1"
          placeholder="Password"
          v-model="password"
        />
        <router-link class="btn btn-outline-primary my-2 my-sm-1" to="/forgot"
          >Forget your password</router-link
        >
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    <div>{{ email }}</div>
    <div v-show="success">Login successfully</div>

    <!-- <div v-else>please try again</div> -->
  </div>
</template>
<script>
export default {
  name: 'signin',
  data: function () {
    return {
      email: '',
      password: '',
      admin: ['email@company.com', '123456'],
      success: false
    }
  },
  props: ['submitted'],
  methods: {
    onSubmit() {
      let datas = JSON.parse(localStorage.getItem('datas'))
      console.log(datas)
      if (this.email == datas.email && this.password == datas.password) {
        this.email = ''
        this.password = ''
        this.success = true
        // this.$router.push('/')
      }
    },
    verify(props) {
      if (this.email === props[1] && this.password === props[2]) {
        return props
      }
    }
  }
}
</script>
