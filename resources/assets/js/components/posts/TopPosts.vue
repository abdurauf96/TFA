<template>
    <div class="container-fluid novosti">
      <div class="container">
        <div class="novosti__wrapper">
          <h3 class="novosti__head">другие <span>новости</span></h3>
          <h1 class="novosti__soya">news</h1>
        </div>
      </div>
      <div class="container novosti__items"><a class="novosti__item" href="#">
          <div class="novosti__absolute">
            <div class="novosti__absolute--top">
              <p class="novosti__absolute--date">05 мая 2019</p>
              <p class="novosti__absolute--eye"><span class="fa fa-eye"></span>2019</p>
            </div>
            <p class="novosti__absolute--bottom">Новостной блок. В этом блоке мы рекомендуем разместить заголовку</p>
          </div><img src="img/novosti__img.png" alt="novosti"/></a><a class="novosti__item" href="#">
          <div class="novosti__absolute">
            <div class="novosti__absolute--top">
              <p class="novosti__absolute--date">05 мая 2019</p>
              <p class="novosti__absolute--eye"><span class="fa fa-eye"></span>2019</p>
            </div>
            <p class="novosti__absolute--bottom">Новостной блок. В этом блоке мы рекомендуем разместить заголовку</p>
          </div><img src="img/novosti__img2.png" alt="novosti"/></a><a class="novosti__item" href="#">
          <div class="novosti__absolute">
            <div class="novosti__absolute--top">
              <p class="novosti__absolute--date">05 мая 2019</p>
              <p class="novosti__absolute--eye"><span class="fa fa-eye"></span>2019</p>
            </div>
            <p class="novosti__absolute--bottom">Новостной блок. В этом блоке мы рекомендуем разместить заголовку</p>
          </div><img src="img/novosti__img.png" alt="novosti"/></a>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            posts:[]
        }
    },
    created:function(){
      axios.post('/api/get_top_posts').then((response)=>{
        this.posts=response.data.data
      })
    }
}
</script>
