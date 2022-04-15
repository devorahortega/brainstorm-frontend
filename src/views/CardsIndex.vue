<template>
  <div class="cards-index">
    <h1>All Cards</h1>
    <div v-for="card in cards" v-bind:key="card.id">
      <p>{{ card.card }}</p>
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
    this.indexCards();
  },
  methods: {
    indexCards: function () {
      axios.get("/cards").then((response) => {
        console.log("cards index", response);
        this.cards = response.data;
      });
    },
  },
};
</script>
