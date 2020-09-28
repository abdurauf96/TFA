<template>
  <div class="category__right">
    <div class="container novosti__items">
      <template v-for="post in posts">
        <router-link
          :to="{name: 'single-post', params:{id:post.id}}"
          :key="post.id"
          class="novosti__item"
        >
          <div class="novosti__absolute">
            <div class="novosti__absolute--top">
              <p class="novosti__absolute--date">{{ post.created_at | formatDate }}</p>
              <p class="novosti__absolute--eye">
                <span class="fa fa-eye"></span>
                {{ post.view }}
              </p>
            </div>
            <p class="novosti__absolute--bottom">{{ post.title }}</p>
          </div>
          <img :src="'/storage/' + post.image" alt="novosti" />
        </router-link>
      </template>
    </div>
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
  watch: {
    $route(to, from) {
      this.getPosts();
    }
  },
  mounted() {
    this.getPosts();
  },
  methods: {
    getPosts() {
      axios
        .get("/api/categories/" + this.$route.params.id + "/" + this.locale)
        .then(response => {
          this.posts = response.data.data;
        });
    }
  }
};
</script>