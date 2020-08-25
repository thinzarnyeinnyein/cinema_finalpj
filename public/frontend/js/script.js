

	$(document).ready(function(){
		seat();
		function cc(btn){
			// alert("hello");
			var name = $(btn).data('name');
			alert(name);

		}
		function AName(a){


			var name1 = $(a).data('name');
			alert(name1);
			var price=$(a).data('price');
			alert(price);
			totSeat.value+=name1+",";
			alert(totSeat.value);
			var temp=parseInt(price);
			alert(temp);
			var total=parseInt(totPrice.value)+temp;
			totPrice.value=total;
			alert(totPrice.value);
		}
		function seat(){
			var temp='A';
			var j=1;
			for(var i=0;i<=60;i++){
				
				if(i==10 | i==20 | i==30 | i==40 | i==50 | i==60){
					j=1;
					document.getElementById("myform").innerHTML+="<br><br>";
					}
				if(i<10){
					
					if(i==4){
						document.getElementById("myform").innerHTML+='<a class="btn btn-warning change_color" width="100" height="100" id="seat_no" data-name="A'+j+'" data-price="2500" value="A" onclick="AName(this);">A'+j+'</a>&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;';
					}else{
						document.getElementById("myform").innerHTML+='<a class="btn btn-warning change_color" width="100" height="100" id="seat_no"  data-name="A'+j+'" data-price="2500" value="A" onclick="AName(this);">A'+j+'</a>&nbsp;&nbsp';
					}
					
				}
				
				if(i>=10 && i<20){
					if(i==14){
						document.getElementById("myform").innerHTML+='<a class="btn btn-warning change_color" id="seat_no"  data-name="B'+j+'" data-price="2500" value="B" onclick="AName(this);">B'+j+'</a>&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;';
					}else{
						document.getElementById("myform").innerHTML+='<a class="btn btn-warning change_color" id="seat_no"  data-name="B'+j+'" data-price="2500" value="B" onclick="AName(this);">B'+j+'</a>&nbsp;&nbsp';
					}
				}
				if(i>=20 && i<30){
					if(i==24){
						document.getElementById("myform").innerHTML+='<a class="btn btn-warning change_color" id="seat_no"  data-name="C'+j+'" data-price="3500" value="C" onclick="AName(this);">C'+j+'</a>&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;';
					}else{
						document.getElementById("myform").innerHTML+='<a class="btn btn-warning change_color" id="seat_no"  data-name="C'+j+'" data-price="3500" value="C" onclick="AName(this);">C'+j+'</a>&nbsp;&nbsp';
					}
				}
				if(i>=30 && i<40){
					if(i==34){
						document.getElementById("myform").innerHTML+='<a class="btn btn-warning change_color" id="seat_no"  data-name="D'+j+'" data-price="3500" value="D" onclick="AName(this);">D'+j+'</a>&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;';
					}else{
						document.getElementById("myform").innerHTML+='<a class="btn btn-warning change_color" id="seat_no"  data-name="D'+j+'" data-price="3500" value="D" onclick="AName(this);">D'+j+'</a>&nbsp;&nbsp';
					}
				}
				if(i>=40 && i<50){
					if(i==44){
						document.getElementById("myform").innerHTML+='<a class="btn btn-warning change_color" id="seat_no"  data-name="E'+j+'" data-price="5000" value="E" onclick="AName(this);">E'+j+'</a>&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;';
					}else{
						document.getElementById("myform").innerHTML+='<a class="btn btn-warning change_color" id="seat_no" d data-name="F'+j+'" data-price="5000" value="F" onclick="AName(this);">E'+j+'</a>&nbsp;&nbsp';
					}
				}
				if(i>=50 && i<60){
					if(i==54){
						document.getElementById("myform").innerHTML+='<a class="btn btn-warning change_color" id="seat_no"  data-name="F'+j+'" data-price="5000" value="F" onclick="AName(this);">F'+j+'</a>&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;';
					}else{
						document.getElementById("myform").innerHTML+='<a class="btn btn-warning change_color" id="seat_no"  data-name="F'+j+'" data-price="5000" value="F" onclick="AName(this);">F'+j+'</a>&nbsp;&nbsp';
					}
				}
				j++;
			}
		}

		$('#myform').on('click','#seat_no1',function(){

			
	             $('.change_color').css('background-color', '#eb4034'); 

			
			
       	
		 
		})

	})
	
