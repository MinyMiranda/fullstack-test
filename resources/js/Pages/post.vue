<template>
  <div>
    <navbar> </navbar>
    <div class="col-12 mb-5">
      <div class="container mt-5">
        <div class="card" style="width: 100%">
          <div class="row no-gutters">
            <div class="row">
              <div class="col-md-6">
                <img src="https://source.unsplash.com/640x640/?rock-concert" class="card-img" alt="..." />
              </div>
              <div class="col-md-6">
                <div style="margin-top: 20%">
                  <div class="card-body" style="height: 30px">
                    <h6>{{ createdData }}</h6>
                    <h5 class="card-author">{{ post.author }}</h5>
                    <h2 class="card-title text-title-warning">{{ post.title }}</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <p class="card-text card-text-post">{{ post.text }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <modal></modal>
  </div>
</template>
<script>
import Api from "../Services/api";
import moment from "moment";

export default {
  data() {
    return {
      post: {},
    };
  },
  mounted: async function () {
    await this.request();
  },
  methods: {
    async request() {
      try {
        let { data } = await Api.get("/posts/" + 1);
        this.post = data;
        console.log(this.post);
      } catch (error) {
        console.error(error);
      }
    },
  },
  computed: {
    createdData() {
      return moment(this.post.created_at).format("ll");
    },
  },
};
</script>
