<template>
  <div>
    <div class="contaniner-fluid search">
      <div class="container">
        <div class="search__wrapper">
          <form class="form-group" @submit.prevent="search">
            <label for="imya">Имя и Фамилия</label>
            <input class="form-control" type="text" v-model="key"  id="imya"/>
            <input class="btn" type="submit" value="Найти"/>
          </form>
        </div>
        <div class="filter__wrapper">
          <form class="form-group" action="">
            <label for="vozrost">Возврастная категория</label>
            <select name="" id="vozrost">
              <option value="">15 </option>
              <option value="">15 </option>
              <option value="">15 </option>
              <option value="">15 </option>
            </select>
            <label class="form-group" for="group">Группа</label>
            <select name="" id="group">
              <option value="">Группа</option>
              <option value="">Название группы #1</option>
              <option value="">Название группы #1</option>
              <option value="">Название группы #1</option>
              <option value="">Название группы #1</option>
              <option value="">Название группы #1</option>
            </select>
            <input type="submit" value="Показать"/>
          </form>
        </div>
      </div>
    </div>
    <div class="container-fluid triner triner__page">
      <div class="container triner__wrapper">
        <div v-for="trener in treners" class="triner__item">
          <div class="triner__item--img"><img src="img/triner.png" alt="triner"/></div>
          <div class="triner__about">
            <h4 class="triner__about--name">{{ trener.name }}</h4>
            <ul>
              <li><span>-</span> {{ trener.position }}</li>
              <li><span>-</span> {{ trener.year }}</li>
              <li><span>-</span> {{ trener.info }}</li>
              <li><span>-</span> {{ trener.success }}</li>
              <li><span>-</span>{{ trener.experience }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  export default{
    data(){
      return{
        treners:[],
        locale:Laravel.locale,
        key:''
      }
    },
    created:function(){
      axios.get('/api/treners/'+this.locale).then((response)=>{
        this.treners=response.data.data
      }),
     this.filteredTreners
    },
    methods: {
        search: function(){
          if (this.key) {
              axios.post('/api/search_trener/'+this.key).then((response)=>{
                this.treners=response.data
              })
          }
        }
    }
  }
</script>