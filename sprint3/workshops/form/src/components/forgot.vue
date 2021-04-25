<template>
  <div class="container mt-5">
    <form @submit.prevent="" class="card border-dark row col-lg-4 offset-lg-4">
      <h1 class="text-dark animate__animated animate__bounce">
        Forgot Password
      </h1>
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
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

    <!-- <div v-else>please try again</div> -->
  </div>
</template>

<script>
export default {
  name: 'forgot'
}
</script>

<style></style>
