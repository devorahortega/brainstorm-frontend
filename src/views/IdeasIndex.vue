<template>
  <div class="ideas-index">
    <h1>All ideas</h1>
    <div v-for="idea in ideas" v-bind:key="idea.id">
      <h2>{{ idea.name }}</h2>
      <img v-bind:src="idea.url" v-bind:alt="idea.name" />
      <p>Width: {{ idea.width }}</p>
      <p>Height: {{ idea.height }}</p>
    </div>
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
    this.indexideas();
  },
  methods: {
    indexideas: function () {
      axios.get("/ideas").then((response) => {
        console.log("ideas index", response);
        this.ideas = response.data;
      });
    },
  },
};
</script>
