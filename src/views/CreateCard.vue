<template>
  <div class="card-new">
    <br />
    <br />
    <br />
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Create</h2>
          <p>Make a new prompt:</p>
        </div>
      </div>

      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <img src="assets/img/create.png" alt="" class="img-fluid" />
            </div>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <form
              action="forms/contact.php"
              method="post"
              role="form"
              class="php-email-form"
              v-on:submit.prevent="createCard()"
            >
              <ul>
                <li v-for="error in errors" v-bind:key="error">{{ error }}</li>
              </ul>
              <div class="row"></div>
              <div class="form-group mt-3">
                <textarea
                  class="form-control"
                  v-model="newCardParams.card"
                  name="card"
                  rows="8"
                  placeholder="Card Content"
                  required
                ></textarea>
              </div>
              <div class="text-center"><button type="submit" vaulue="Submit">Create Idea</button></div>
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
      newCardParams: {},
      errors: [],
    };
  },
  created: function () {},
  methods: {
    createCard: function () {
      axios
        .post("/cards", this.newCardParams)
        .then(() => {
          this.$router.push("/cards");
        })
        .catch((error) => {
          this.status = error.response.status;
          console.log(error.response);
        });
    },
  },
};
</script>
