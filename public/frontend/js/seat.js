$(document).ready(function(){

	// $('#myform').on('click','#btn',function(){
		// alert("hello");
		// var name = $(this).data('name');
		// var selected =document.querySelector('.change_color');
		// selected.addEventListener('click',()=>selected.style.backgroundColor='green')
	// 	alert("hello");
		// alert(name);
			
		//}


	// $('#myform').on('click','#btn',function(){
		
	// })
	$('.submit').click(function(){
		var date = $('.dateone').val();
		// var hall = $('option:selected',this).data("name");
		// var time = $('.time').val();
		// var movie = $('.movie').val();
		// alert(date,hall,time,movie);
		alert(date);
		
	})	
	$('#hall').change(function(){
			var hall = $(this).val();
			var halls=$('option:selected',this).data("name");
			alert(halls);
		});
	$('#time').change(function(){
			var time = $(this).val();
			var times=$('option:selected',this).data("name");
			alert(times);
		});
	$('#movie').change(function(){
			var movie = $(this).val();
			var movies=$('option:selected',this).data("name");
			alert(movies);
		});



})