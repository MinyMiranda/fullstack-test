<template>
  <div>
    <navbar> </navbar>
    <div>
      <div v-for="(post, index) in posts" :key="post.id">
        <one-card :post="post" :baseUrl="baseUrl" class="float-right mt-5" v-if="(index + 1) % 3 == 0 && (index + 1) % 2 != 0"></one-card>
        <one-card :post="post" :baseUrl="baseUrl" class="float-left mt-5" v-else-if="(index + 1) % 3 == 0 && (index + 1) % 2 == 0"></one-card>

        <two-card-left :post="post" :baseUrl="baseUrl" class="float-left mt-5" v-else-if="(index + 1) % 2 != 0 && (index + 2) % 2 == 0 && (index + 2) % 3 != 0"></two-card-left>
        <two-card-left :post="post" :baseUrl="baseUrl" class="float-right mt-5" v-else-if="(index + 1) % 2 == 0 && index % 2 != 0 && (index + 2) % 3 == 0"></two-card-left>

        <two-card-right :post="post" :baseUrl="baseUrl" class="float-left mt-5" v-else-if="(index + 1) % 2 == 0 && (index + 2) % 2 != 0 && (index + 2) % 3 != 0"></two-card-right>
        <two-card-right :post="post" :baseUrl="baseUrl" class="float-right mt-5" v-else-if="(index + 1) % 2 != 0 && (index + 2) % 2 == 0 && (index + 2) % 3 == 0"></two-card-right>
      </div>
    </div>
    <modal></modal>
  </div>
</template>
<script>
import Api from "../Services/api";
import TwoCardLeft from "../components/TwoCardLeft.vue";
import TwoCardRight from "../components/TwoCardRight.vue";
import OneCard from "../components/OneCard.vue";
import Modal from "../components/Modal.vue";

export default {
  data() {
    return {
      posts: [],
      baseUrl: "http://coderockr.local/",
    };
  },
  components: {
    TwoCardRight,
    TwoCardLeft,
    OneCard,
    Modal
  },
  mounted: async function () {
    await this.request();
  },
  methods: {
    async request() {
      try {
        let { data } = await Api.get("/posts");
        this.posts = data;
        console.log(data);
      } catch (error) {
        console.error(error);
      }
    },
  },
};
</script>
