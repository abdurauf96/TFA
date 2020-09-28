$(document).ready(function(){
	
	$('.getJob').click(function(e){
		e.preventDefault()
		var id = $(this).data('id')
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    url: '/get_job',
		    method: 'POST',
		    data: {id:id},
		    success:function(data){
		    	$('#result_job').html(data)
		    }
		})
	})

	$('.search_student').click(function(e){
		e.preventDefault();
		var key=$('#imya').val();
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    url: '/get_student',
		    method: 'POST',
		    data: {key:key},
		    success:function(data){
		    	$('#resultStudent').html(data)
		    }
		})
	})

	$('.searchStudentsByAge').click(function(e){
		e.preventDefault();
		var age=$('#vozrost').val();
		var group=$('#group').val();
		$('#imya').attr('val', 'efe');
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    url: '/getStudentsByAge',
		    method: 'POST',
		    data: {age:age, group:group},
		    success:function(data){
		    	$('#resultStudent').html(data)
		    }
		})
	})
	
	$('.accordion').accordion();
	
	$("body").delegate('.getFaq', 'click', function(e){
		e.preventDefault()
		var id = $(this).data('id')
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    url: '/get_faq',
		    method: 'POST',
		    data: {id:id},
		    success:function(data){
				$('#resultFaq').html(data)
		    }
		})
	})

	$('.search_trener').click(function(e){
		e.preventDefault();
		var key=$(this).siblings('.key').val();
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    url: '/get_trener',
		    method: 'POST',
		    data: {key:key},
		    success:function(data){
		    	$('#resultTrener').html(data)
		    }
		})
	})

	$('.get_trener_by_age').click(function(e){
		e.preventDefault();
		var age=$('.age_cat').val();
		var group=$('.group_cat').val();
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    url: '/getTrenersByAge',
		    method: 'POST',
		    data: {age:age, group:group},
		    success:function(data){
		    	$('#resultTrener').html(data)
		    }
		})
	})

	$('.getFeature').click(function(e){
		e.preventDefault();
		var id=$(this).data('id')
		$.ajax({
			headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
		    url: '/getFeature',
		    method: 'POST',
		    data: {id:id},
		    success:function(data){
		    	$('#resFeatures').html(data)
		    }
		})
	})
})