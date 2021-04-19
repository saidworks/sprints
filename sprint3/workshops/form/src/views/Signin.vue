<template>
  <div class="card text-white bg-primary" style="height: 90vh">
    <form @submit.prevent="onSubmit" class="card border-dark row col-4">
      <h1 class="text-dark">sign in</h1>
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
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    <div v-show="success">Login successfully</div>
    <!-- <div v-else>please try again</div> -->
  </div>
</template>
<script>
export default {
  data: function () {
    return {
      email: '',
      password: '',
      admin: ['email@company.com', '123456'],
      success: false
    }
  },
  methods: {
    onSubmit() {
      if (this.email === this.admin[0] && this.password === this.admin[1]) {
        this.email = ''
        this.password = ''
        this.success = true
        this.$router.push('Home')
      }
    }
  }
}
</script>
