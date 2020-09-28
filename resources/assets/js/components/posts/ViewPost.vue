<template>
  <div class="category__right">
    <template v-for="post in posts">
      <div :key="post.id">
        <img class="category__right--img" :src="'/storage/' + post.image" alt="novosti" />
        <p class="category__right--text">{{ post.body }}</p>
      </div>
    </template>
  </div>
  
</template>
<script>
export default {
  data() {
    return {
      posts: [],
      locale: Laravel.locale
    };
  },
  created: function() {
    let uri = "/api/posts/" + this.$route.params.id + "/" + this.locale;
    axios.get(uri).then(response => {
      this.posts = response.data.data;
    });
  }
};
</script>

