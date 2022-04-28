<template>
  <div class="login">
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <br />
          <br />
          <h2>Login</h2>
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
            </div>
          </div>
          </section>
          <section>
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch"> 
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
              <div class="form-group">
                <label for="name">Username</label>
                  <input
             type="email"
             class="form-control"
             name="email"
              id="email"
             placeholder="email"
             required
             v-model="newSessionParams.email"
                />
              </div>
         
              <div class="form-group">
                <label for="name">Subject</label>
                <input
            type="text"
            class="form-control"
            name="password"
            id="password"
            placeholder="Password"
            required
            v-model="newSessionParams.password"
          />     <div class="form-group">
                <label for="name">Subject</label>
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
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
          </div> 
        </form>
      </div>
    </section>
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
          this.$router.push("/cards");
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
