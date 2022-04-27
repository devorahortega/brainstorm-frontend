<template>
  <div class="cards-index">
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <br />
          <br />
          <h2>Your Cards</h2>
          <p>
            This is a collection of all the cards you have made using BrainSTORM to put down all your ideas down on
            'paper'.
          </p>
        </div>

        <div v-for="card in cards" v-bind:key="card.id">
          <div class="faq-list">
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx-chevron"></i>
                <div id="faq-list-1" data-bs-parent=".faq-list">
                  <p>
                    {{ card.card }}
                  </p>
                </div>
              </li>
            </ul>
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
