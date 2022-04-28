<template>
  <div class="ideas-index">
    <section id="services" class="services section-bg">
      <div class="section-title">
        <br />
        <br />
        <h2>Ideas</h2>
        <p>A list of ideas to inspire your creativity and help you get started on your brainstorming.</p>
      </div>
      <div v-for="idea in ideas" v-bind:key="idea.id">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <!-- <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100"> -->
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h6>{{ idea.idea }}</h6>
            </div>
          </div>
          <br />
          <br />
        </div>
      </div>
      <!-- </div> -->
    </section>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data: function () {
    return {
      ideas: [],
    };
  },
  created: function () {
    this.indexIdeas();
  },
  methods: {
    indexIdeas: function () {
      axios.get("/ideas").then((response) => {
        console.log("ideas index", response);
        this.ideas = response.data;
      });
    },
  },
};
</script>
