<template>
  <div class="ideas-index">
    <h1>All ideas</h1>
    <div v-for="idea in ideas" v-bind:key="idea.id">
      <h2>{{ idea.idea }}</h2>
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
