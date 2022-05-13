<template>
  <div class="signup">
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <br />
          <br />
          <h2>Create an Account</h2>
          <p>
            Make an account for yourself so that you can use all of our amazing services and finally get all of those
            ideas floating around your head down on paper.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>7567 Laffayette ST Chicago, IL 101055, United States</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>brainstorm@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <!-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                frameborder="0"
                style="border: 0; width: 100%; height: 290px"
                allowfullscreen
              ></iframe> -->
            </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/signup.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">First Name</label>
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
                <div class="form-group col-md-6">
                  <label for="name">Last Name</label>
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
                <div class="form-group">
                  <label for="email">Email</label>
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
                <div class="form-group col-md-6">
                  <label for="password">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    name="password"
                    id="password"
                    placeholder="Password"
                    required
                    v-model="newUserParams.password"
                  />
                </div>
                <div class="form-group col-md-6">
                  <label for="password-confirmation">Password Confirmation</label>
                  <input
                    type="password-confirmation"
                    class="form-control"
                    name="password-confirmation"
                    id="password-confirmation"
                    placeholder="Password Confirmation"
                    required
                    v-model="newUserParams.password_confirmation"
                  />
                </div>
              </div>

              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" value="Submit">Create Account</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>
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
          this.$router.push("/users");
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
        });
    },
  },
};
</script>
