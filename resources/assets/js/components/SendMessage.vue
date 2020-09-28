<template>
	<div>
		 <div class="container let__wrapper">
			<div class="let__left"> 
			<div class="let__left--item let-link let-active" @click="getAge('3-5 ЛЕТ')">
				<h3 class="let__left--number">01</h3>
				<div class="let__left--yosh"> 
				<p>3-5 {{ $t('page.let') }} </p><span> 2013-2015 г.р</span>
				</div>
			</div>
			<div class="let__left--item let-link" @click="getAge('6-7 ЛЕТ')">
				<h3 class="let__left--number">02</h3>
				<div class="let__left--yosh"> 
				<p>6-7 {{ $t('page.let') }}</p><span> 2011-2012 г.р</span>
				</div>
			</div>
			<div class="let__left--item let-link" @click="getAge('8-15 ЛЕТ')">
				<h3 class="let__left--number">03</h3>
				<div class="let__left--yosh"> 
				<p>8-15 {{ $t('page.let') }}</p><span> 2005-2010 г.р</span>
				</div>
			</div>
			</div>
    
 		<form class="let__right form form-group"  @submit.prevent="sendMessage">
	      <h3 class="form__head">{{ $t('page.msg_title') }}</h3>
	      <p class="form__text">{{ $t('page.msg_body') }}</p>
	      <fieldset>
	        <legend>{{ $t('page.name') }}</legend>
	        <input class="form-control" type="text" v-model="message.name" placeholder="Алексей адылов"/>
	        <span v-if="errors.name">Заполните это поле</span>
	      </fieldset>
	      <fieldset>
	        <legend>{{ $t('page.phone') }}</legend>
	        <input class="form-control" v-model="message.phone" type="number" placeholder="998" />
	        <span v-if="errors.phone">Заполните это поле</span>
	      </fieldset>
	      <fieldset>
	        <legend>{{ $t('page.age_cat') }}</legend>
	        <input class="form-control" type="text" v-model="message.age"  id="let__id"/>
	        <span v-if="errors.age">Заполните это поле</span>
	      </fieldset>
	      <input class="form__link" type="submit" :value="$t('page.send')"/>
	    </form>
  </div>
		
	</div>
</template>

<script type="text/javascript">
	export	default{
		data(){
			return{
				message: {
					name:'',
					phone:'',
					age:'3-5 ЛЕТ'
				},
				errors:{
					name:'',
					phone:'',
					age:''
				}
			}
		},
		methods: {
			sendMessage:function(){
				axios.post('/api/send_message', this.message)
				.then((response)=>{
					Swal.fire({
					  position: 'top-end',
					  type: 'success',
					  title: 'Your application sent',
					  showConfirmButton: false,
					  timer: 1500
					});
				}).catch((error)=>{
					this.errors=error.response.data.errors
					
				})
			},
			getAge:function(age){
				this.message.age=age
			}
		}
	}
</script>