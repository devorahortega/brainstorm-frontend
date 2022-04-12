<template>
  <div class="signup">
    <form v-on:submit.prevent="submit()">
      <h2>Create an Account</h2>
      <ul>
        <li v-for="error in errors" v-bind:key="error">{{ error }}</li>
      </ul>
      <div>
        <label>Name:</label>
        <input
          type="text"
          name="first_name"
          class="form-control"
          id="first_name"
          placeholder="First Name"
          required
          v-model="newUserParams.first_name"
        />
        <input
          type="text"
          name="last_name"
          class="form-control"
          id="last_name"
          placeholder="Last Name"
          required
          v-model="newUserParams.last_name"
        />
      </div>
      <div>
        <label>Email:</label>
        <input
          type="email"
          class="form-control"
          name="email"
          id="email"
          placeholder="Email"
          required
          v-model="newUserParams.email"
        />
      </div>
      <div>
        <label>Password:</label>
        <input
          type="text"
          class="form-control"
          name="password"
          id="password"
          placeholder="Password"
          required
          v-model="newUserParams.password"
        />
      </div>
      <div>
        <input
          type="text"
          class="form-control"
          name="password_confirmation"
          id="password_confirmation"
          placeholder="Confirm Password"
          required
          v-model="newUserParams.password_confirmation"
        />
      </div>
      <div class="text-center"><button type="submit" value="Submit">Create Account</button></div>
    </form>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data: function () {
    return {
      newUserParams: { password: "", password_confirmation: "" },
      errors: [],
      newSessionParams: {},
    };
  },
  methods: {
    submit: function () {
      axios
        .post("/users", this.newUserParams)
        .then((response) => {
          console.log(response.data);
          this.$router.push("/login");
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
        });
    },
  },
};
</script>
