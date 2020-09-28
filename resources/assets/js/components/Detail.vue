<template>
	<div class="container">
    <h2 class="category__head">{{ $t('page.cat_news') }}:</h2>
    <div class="category__wrapper">
      <div class="category__left">
        <categories :categories="categories"></categories>
      </div>
      <div class="category__right"><img class="category__right--img" src="" alt=""/>
        <p class="category__right--text">post body</p>
       
      </div>
    </div>
  </div>
</template>

<script>
	import categories from '../components/Categories'
	export default{
		data(){
			return{
				categories:[],
				post:[],
				locale:Laravel.locale
			}
		},
		components: {
			categories
		},
		created:function(){
			axios.get('/api/categories/'+this.locale).then((response)=>{
				this.categories=response.data.data
				console.log('dad')
			})
			/*axios.get('/api/posts/'+this.locale).then((response)=>{
				this.filteredPosts=response.data.data
				this.allPosts=response.data.data			
			})	*/
		},
	}
</script>