<template>
  <div class="col-md-8 col-12">
    <div class="card" style="width: 100%">
      <div class="row no-gutters">
        <div class="col-md-6">
          <img src="https://source.unsplash.com/640x640/?rock-concert" class="card-img" alt="..." />
        </div>
        <div class="col-md-6">
          <div style="margin-top: 20%">
            <div class="card-body" style="height: 330px">
              <h5 class="card-author">{{ post.author }}</h5>
              <h2 class="card-title text-title-warning">{{ post.title }}</h2>
              <p class="card-text">{{ post.preview }}</p>
            </div>
          </div>
          <a :href="'post/'+post.id" class="postion-absolute mr-2">
            <b-icon class="float-right mr-2" icon="chevron-double-right"></b-icon>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    post: {
      type: Object,
      required: true,
    },
  },
  data() {
    return {
      urlPost: "post/"+1,
    };
  },
};
</script>
