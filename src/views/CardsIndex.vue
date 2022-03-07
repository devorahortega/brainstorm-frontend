<template>
  <div class="cards-index">
    <h1>All Cards</h1>
    <div v-for="card in cards" v-bind:key="card.id">
      <h2>{{ card.name }}</h2>
      <img v-bind:src="card.url" v-bind:alt="card.name" />
      <p>Width: {{ card.width }}</p>
      <p>Height: {{ card.height }}</p>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data: function () {
    return {
      cards: [],
    };
  },
  created: function () {
    this.indexcards();
  },
  methods: {
    indexcards: function () {
      axios.get("/cards").then((response) => {
        console.log("cards index", response);
        this.cards = response.data;
      });
    },
  },
};
</script>
