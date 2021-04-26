<template>
  <div class="container mt-5 px-auto py-auto">
    <form
      @submit.prevent="onSubmit"
      class="card border-dark row col-lg-4 offset-lg-4"
    >
      <h1>sign up</h1>
      <div class="form-group">
        <label for="fullName">Full Name</label>
        <input
          type="text"
          class="form-control"
          id="fullName"
          aria-describedby="emailHelp"
          placeholder="Enter your full name"
          v-model="fullName"
        />
      </div>
      <div class="form-group">
        <label for="Email">Email</label>
        <input
          type="email"
          class="form-control"
          id="Email"
          placeholder="Email"
          v-model="email"
        />
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
        <button
          type="Sign Up"
          v-on:click="getUsers"
          class="mt-3 pd-3 btn btn-lg w-100 btn-dark"
        >
          Sign Up
        </button>
      </div>
    </form>
  </div>
  <div>
    <ul>
      <li>{{ fullName }}</li>
      <li>{{ email }}</li>
      <li>{{ users }}</li>
    </ul>
  </div>
</template>
<script>
export default {
  name: 'signup',
  data: function () {
    return {
      fullName: '',
      email: '',
      password: '',
      users: {}
    }
  },
  methods: {
    onSubmit() {
      this.users = {
        fullname: this.fullName,
        email: this.email,
        password: this.password
      }
      let datas = JSON.stringify(this.users)
      console.log(datas)
      localStorage.setItem('datas', datas)
      // let usersList = localStorage.setItem(usersList, this.users)
      // usersList = JSON.parse(localStorage.getItem(this.users))
      // console.log(usersList)
      this.$emit('submitted', this.users)
      this.$router.push('Signin')
      this.fullName = ''
      this.email = ''
      this.password = ''
    }
  }
}
//Local Storage Class
// class Store {
//   static addBook(book) {
//     const books = Store.getBooks()
//     books.push(book)
//     console.log(books)
//     localStorage.setItem('books', JSON.stringify(books))
//   }

//   static removeBook(isbn) {
//     const books = Store.getBooks()
//     books.forEach(function (book, index) {
//       if (book.isbn === isbn) {
//         books.splice(index, 1)
//       }
//     })
//     localStorage.setItem('books', JSON.stringify(books))
//   }
// }
// let test = new Store()
// test.getUsers()
</script>

<style lang="scss" scoped>
$spacer: 1rem;
.mt-5 {
  margin-top: $spacer * 10 !important;
}
</style>
