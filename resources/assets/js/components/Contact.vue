<template>
	 <div>
		 
		 	<form @submit.prevent="sendContact">
		        <div class="form_col">
		          <div class="form-title">{{ $t('page.imya_fam') }}</div>
		          <input type="text" v-model="application.name" class="form-text">
		        </div>
		        <div class="form_col2">
		            <div class="form_col3">
		              <div class="form-title">{{ $t('page.phone') }}</div>
		              <input type="text" class="form-text" v-model="application.phone">
		            </div>
		            <div class="form_col3">
		              <div class="form-title">Email</div>
		              <input type="text" class="form-text" v-model="application.email">
		            </div>
		        </div>
		        <div class="form_col">
		          <div class="form-title">{{ $t('page.msg') }}</div>
		          <textarea v-model="application.msg" name="" id="" cols="30" rows="10" class="form-textarea"></textarea>
		        </div>
		        <input type="submit" :value="$t('page.send')" class="form-send">
	        </form>
	    </div>	
	 </div>
	 
</template>

<script>
	export default{
		data(){
			return{
				application:{
					name:'',
					phone:'',
					email:'',
					msg:''
				},
				error:'заполните это поле'
			}
		},
		methods: {
			sendContact:function(){
				axios.post('/api/contact', this.application)
				.then((response)=>{
					Swal.fire({
					  position: 'top-end',
					  type: 'success',
					  title: 'application sent',
					  showConfirmButton: false,
					  timer: 1500
					});
					
				}).catch((error)=>{
					this.errors=error.response.data.errors
					Swal.fire({
					  type: 'error',
					  title: 'Oops...',
					  text: this.error
					})
		
				})
			}
		}
	}
</script>