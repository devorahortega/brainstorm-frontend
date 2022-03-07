<template>
  <div class="login">
    <h2>Account</h2>
    <p>Login</p>

    <div class="col-lg-8 mt-5 mt-lg-0">
      <form action="forms/contact.php" method="post" role="form" class="php-email-form" v-on:submit.prevent="submit()">
        <ul>
          <li v-for="error in errors" v-bind:key="error">{{ error }}</li>
        </ul>
        <div class="col-md-6 form-group mt-3">
          <input
            type="username"
            class="form-control"
            name="username"
            id="username"
            placeholder="Username"
            required
            v-model="newSessionParams.username"
          />
        </div>
        <div class="col-md-6 form-group mt-3">
          <input
            type="text"
            class="form-control"
            name="password"
            id="password"
            placeholder="Password"
            required
            v-model="newSessionParams.password"
          />
        </div>
        <div class="col-md-6 form-group mt-3">
          <input
            type="text"
            class="form-control"
            name="password_confirmation"
            id="password_confirmation"
            placeholder="Confirm Password"
            required
            v-model="newSessionParams.password"
          />
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">You are logged in. Thank you!</div>
        </div>
        <div class="col-md-6 form-group mt-3">
          <div class="text-center"><button type="submit" value="Submit">Login</button></div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data: function () {
    return {
      newSessionParams: {},
      errors: [],
    };
  },
  methods: {
    submit: function () {
      axios
        .post("/sessions", this.newSessionParams)
        .then((response) => {
          axios.defaults.headers.common["Authorization"] = "Bearer " + response.data.jwt;
          localStorage.setItem("jwt", response.data.jwt);
          localStorage.setItem("user_id", response.data.user_id);
          this.$parent.flashMessage = "You have sucessfully logged in.";
          this.$router.push("/prompts");
        })
        .catch((error) => {
          console.log(error.response);
          this.errors = ["Invalid email or password."];
          this.email = "";
          this.password = "";
        });
    },
  },
};
</script>
