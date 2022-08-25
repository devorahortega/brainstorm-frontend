<template>
  <div class="ideas-index">
    <section id="services" class="services section-bg">
      <div class="section-title">
        <br />
        <br />
        <h2>Ideas</h2>
        <h5>
          Here you will find a list of ideas to inspire your creativity and help you get started on your brainstorming,
          journaling, or whatever else you're here to do, discover and create.
        </h5>
        <br />
        <p>The following prompts were found at:</p>
        <br />
        <il>
          <a
            href="https://witanddelight.com/2020/03/20-journaling-prompts-i-swear-by-to-get-you-out-of-your-head/#:~:text=Journaling%20Prompts%20for%20Self%2DDiscovery,can%20wait%20until%20next%20week%3F"
          >
            Wit & Delight
          </a>
        </il>
        <br />
        <il>
          <a href="https://funnytriviaquestions.com/funny-trivia-questions-about-yourself/">Funny Trivia Questions</a>
        </il>
        <br />
        <il>
          <a
            href="https://medium.com/the-happy-human/the-ultimate-list-of-self-discovery-journaling-prompts-8e3296b0b662"
          >
            Medium.com
          </a>
        </il>
      </div>
      <div v-for="idea in ideas" v-bind:key="idea.id">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <!-- <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100"> -->
            <div class="icon-box">
              <!-- <div class="icon"><i class="bx bx-file"></i></div> -->
              <h3>{{ idea.idea }}</h3>
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
