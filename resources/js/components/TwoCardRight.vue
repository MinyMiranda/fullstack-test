<template>
  <div class="col-6">
    <div class="card" style="width: 100%">
      <div class="row no-gutters">
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-author">{{ post.author }}</h5>
            <h2 class="card-title text-title-warning">{{ post.title }}</h2>
            <p class="card-text">{{ post.preview }}</p>
          </div>
          <div class="postion-absolute mr-2">
            <b-icon class="float-right" icon="chevron-double-right"></b-icon>
          </div>
        </div>
        <div class="col-md-4">
          <img src="https://source.unsplash.com/640x640/?rock-concert" class="card-img" alt="..." />
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
};
</script>
