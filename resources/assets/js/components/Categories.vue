<template>
  <div class="category__left--link">
    <template v-for="category in categories">
      <router-link
        :to="{ name:'get-post', params:{id: category.id} }"
        :key="category.id"
        class="category-link"
      >{{ category.name }}</router-link>
    </template>
  </div>
</template>
<script>
export default {
  props: ["categories"]
};
</script>