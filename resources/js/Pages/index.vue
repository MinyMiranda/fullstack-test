<style>
.card {
  border-radius: 0rem;
}
.col-6 {
  padding-right: 0px;
  padding-left: 0px;
}
.col-8 {
  padding-right: 0px;
  padding-left: 0px;
}
.row {
  margin-right: 0px;
  margin-left: 0px;
}
.text-title-warning {
  color: #f1a10a;
  font-style: normal;
  font-weight: bold;
  font-size: 26px;
  line-height: 43px;
}
.card-author {
  font-style: normal;
  font-weight: normal;
  font-size: 20px;
  line-height: 34px;
}
</style>
<template>
  <div>
    <navbar> </navbar>
    <div>
      <div v-for="(post, index) in posts" :key="post.id">
        <one-card :post="post" class="float-right mt-5" v-if="(index + 1) % 3 == 0 && (index + 1) % 2 != 0"></one-card>
        <one-card :post="post" class="float-left mt-5" v-else-if="(index + 1) % 3 == 0 && (index + 1) % 2 == 0"></one-card>

        <two-card-left :post="post" class="float-left mt-5" v-else-if="(index + 1) % 2 != 0 && (index + 2) % 2 == 0 && (index + 2) % 3 != 0"></two-card-left>
        <two-card-left :post="post" class="float-right mt-5" v-else-if="(index + 1) % 2 == 0 && index % 2 != 0 && (index + 2) % 3 == 0"></two-card-left>

        <two-card-right :post="post" class="float-left mt-5" v-else-if="(index + 1) % 2 == 0 && (index + 2) % 2 != 0 && (index + 2) % 3 != 0"></two-card-right>
        <two-card-right :post="post" class="float-right mt-5" v-else-if="(index + 1) % 2 != 0 && (index + 2) % 2 == 0 && (index + 2) % 3 == 0"></two-card-right>
      </div>
    </div>
  </div>
</template>
<script>
import Api from "../Services/api";
import TwoCardLeft from "../components/TwoCardLeft.vue";
import TwoCardRight from "../components/TwoCardRight.vue";
import OneCard from "../components/OneCard.vue";

export default {
  data() {
    return {
      posts: [],
    };
  },
  components: {
    TwoCardRight,
    TwoCardLeft,
    OneCard,
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
