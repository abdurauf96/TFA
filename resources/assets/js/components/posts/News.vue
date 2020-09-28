<template>
  <div class="container-fluid category">
    <div class="container">
      <h2 class="category__head">{{ $t('page.cat_news') }}:</h2>
      <div class="category__wrapper">
        <Categories :categories="categories" />
        <router-view />
      </div>
    </div>
  </div>
</template>
<script>
import Categories from "../../components/Categories";
export default {
  data() {
    return {
      categories: [],
      locale: Laravel.locale
    };
  },
  components: {
    Categories
  },
  created: function() {
    let uri = "/api/categories/" + this.locale;
    axios.get(uri).then(response => {
      this.categories = response.data.data;
    });
  }
};
</script>

