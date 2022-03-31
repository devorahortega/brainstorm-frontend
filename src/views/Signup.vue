<template>
  <div class="signup">
    <template>
      <form>
        <div>
          <h2>Create an Account</h2>
          <h3>Name</h3>
          <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required />
          <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" required />
          <h3>Email</h3>
          <input
            type="email"
            class="form-control"
            name="email"
            id="email"
            placeholder="Email"
            required
            v-model="newUserParams.email"
          />
          <h3>Password</h3>
          <input
            type="text"
            class="form-control"
            name="password"
            id="password"
            placeholder="Password"
            required
            v-model="newUserParams.password"
          />
          <input
            type="text"
            class="form-control"
            name="password_confirmation"
            id="password_confirmation"
            placeholder="Confirm Password"
            required
            v-model="newUserParams.password_confirmation"
          />
          <div class="text-center"><button type="submit" value="Submit">Create Account</button></div>
        </div>
      </form>
    </template>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data: function () {
    return {
      newUserParams: {},
      errors: [],
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
