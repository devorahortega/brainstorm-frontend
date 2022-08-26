<template>
  <div class="signup">
    <template>
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <br />
            <br />
            <br />
            <br />
            <h2>Create an Account</h2>
          </div>
        </div>

        <div class="container" data-aos="fade-up">
          <div class="row mt-5">
            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>7567 Laffayette ST Chicago, IL 101055 United States</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>brainstorm@example.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">
              <form role="form" class="php-email-form" v-on:submit.prevent="submit()">
                <ul>
                  <li v-for="error in errors" v-bind:key="error">{{ error }}</li>
                </ul>
                <div class="row">
                  <div class="col-md-6 form-group mt-3">
                    <label for="first_name">First Name</label>
                    <input
                      type="text"
                      name="first_name"
                      class="form-control"
                      id="first_name"
                      placeholder="First Name"
                      required
                      v-model="newUserParams.first_name"
                    />
                  </div>
                  <div class="col-md-6 form-group mt-3">
                    <label for="last_name">Last Name</label>
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
                  <div class="col-md-6 form-group mt-3">
                    <label for="name">Email</label>
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
                  <div class="col-md-6 form-group mt-3">
                    <label for="phone_number">Phone</label>
                    <input
                      type="text"
                      name="phone_number"
                      class="form-control"
                      id="phone_number"
                      placeholder="Phone"
                      required
                      v-model="newUserParams.phone"
                    />
                  </div>
                  <div class="col-md-6 form-group mt-3">
                    <label for="password">Password</label>
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
                  <div class="col-md-6 form-group mt-3">
                    <label for="password_confirmation">Password Confirmation</label>
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
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your account has been created. Thank you!</div>
                  </div>
                  <div class="col-md-6 form-group mt-3">
                    <div class="text-center"><button type="submit" value="submit">Create Account</button></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
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
