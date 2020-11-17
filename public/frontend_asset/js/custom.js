$(document).ready(function(){
	// showcart();
	// noti();
	$(".apply").on("click",function(){
		var id =$(this).data('id');
		var name =$(this).data('name');
		var duration =$(this).data('duration');
		var closedate =$(this).data('closedate');
		var budget =$(this).data('budget');			
		var description =$(this).data('description');
		var skill_one =$(this).data('skill_one');
		var skill_two =$(this).data('skill_two');
		var skill_three =$(this).data('skill_three');
		var location =$(this).data('location');
		var mydur =$(this).data('mydur');
		var cv =$(this).data('cv');

		console.log(id +name + duration + closedate + budget + description
		 + skill_one + skill_two + skill_three + location + mydur + cv);

		var detail = {
			id:id,
			duration:duration,
			closedate:closedate,
			budget:budget,
			description:description,
			skill_one:skill_one,
			skill_two:skill_two,
			skill_three:skill_three,
			location:location,
			mydur:mydur,
			cv:cv
		}

		// console.log(detail);

		var detailList = localStorage.getItem("detail");
		if(detailList == null){
			var detailArray = [];
		}else{
			detailArray = JSON.parse(detailList);
		}
		
		detailArray.push(detail);

		var stringDetail =JSON.stringify(detailArray);
		localStorage.setItem("detail", stringDetail);

		// noti();
	})

	// function showcart(){
	// 	var cartList = localStorage.getItem('cart');
	// 	if (cartList) {
	// 		var cartArray = JSON.parse(cartList);
	// 		var html='';
	// 		var html1=''; 
	// 		var subTotal=0;
	// 		$.each(cartArray,function(i,v){
	// 			if (v.discount>0) {
	// 				var current_price = v.price-v.discount;
	// 			}else{
	// 				current_price = v.price;
	// 			}
	// 			var total=v.qty*current_price;
	// 			subTotal += total;
	// 			html+=`<tr>
	// 			<td>
	// 				<button class="btn btn-outline-danger remove btn-sm delete" style="border-radius: 50%" data-id=${i}> 
	// 					<i class="icofont-close-line"></i> 
	// 				</button>
	// 			</td>
	// 			<td><img src="${v.photo}" class="cartImg"></td>
	// 			<td>${v.name}<br>${v.code}</td>
	// 			<td>
	// 				<button class="btn btn-outline-secondary plus_btn plus" data-id=${i}> 
	// 					<i class="icofont-plus"></i> 
	// 				</button>
	// 			</td>						
	// 			<td>${v.qty}</td>
	// 			<td>
	// 				<button class="btn btn-outline-secondary minus_btn minus" data-id=${i}> 
	// 					<i class="icofont-minus"></i> 
	// 				</button>
	// 			</td>`
	// 			if (v.discount>0) {
	// 				html+=`<td>${current_price}<br><strike>${v.price}</strike></td>`
	// 			}else{
	// 				html+=`<td>${v.price}</td>`
	// 			}
	// 			html+=`<td>${total}</td>
	// 			</tr>`
	// 		})

	// 		$('tbody').html(html);
	// 	}

	// }

	// function noti(){
	// 	var cartList = localStorage.getItem('cart');
	// 	if (cartList) {
	// 		var cartArray = JSON.parse(cartList);
	// 		var total =0;
	// 		var noti = 0;
	// 		$.each(cartArray, function(i,v){

	// 			var unitprice = v.price;
	// 			var discount = v.discount;
	// 			var current_price = unitprice-discount;
	// 			var qty = v.qty;
	// 			if (discount) {
	// 				var price = current_price;
	// 			}
	// 			else{
	// 				var price = unitprice;
	// 			}
	// 			var subtotal = price * qty;

	// 			noti += qty ++;
	// 			total += subtotal ++;
	// 		})
	// 		$('.cartNoti').html(noti);
	// 		$('.cartTotal').html(total+' Ks');
	// 	}
	// 	else{
	// 		$('.cartNoti').html(0);
	// 		$('.cartTotal').html(0+' Ks');
	// 	}
	// }

	// $('tbody').on('click','.plus',function(){
	// 	var id = $(this).data('id');
	// 	var cartList = localStorage.getItem('cart');
	// 	var cartArray = JSON.parse(cartList);
	// 	$.each(cartArray,function(i,v){
	// 		if (i==id) {
	// 			v.qty++;
	// 		}
	// 	})

	// 	var stringCart =JSON.stringify(cartArray);
	// 	localStorage.setItem("cart", stringCart);

	// 	showcart();
	// 	noti();

	// })

	// $('tbody').on('click','.minus',function(){
	// 	var id = $(this).data('id');
	// 	var cartList = localStorage.getItem('cart');
	// 	var cartArray = JSON.parse(cartList);
	// 	$.each(cartArray,function(i,v){
	// 		if (i==id) {
	// 			v.qty--;
	// 		}

	// 		if (v.qty==0) {
	// 			cartArray.splice(id,1);
	// 			$('.cartNoti').html(0);
	// 			$('.cartTotal').html(0+' Ks');
	// 		}
	// 	})



	// 	var stringCart =JSON.stringify(cartArray);
	// 	localStorage.setItem("cart", stringCart);

	// 	showcart();
	// 	noti();

	// })

	// $('tbody').on('click','.delete',function(){
	// 	// console.log('ok');

	// 	var id = $(this).data('id');
	// 	console.log(id);
	// 	var cartList = localStorage.getItem('cart');
	// 	var cartArray = JSON.parse(cartList);

	// 	cartArray.splice(id,1);
		

	// 	var stringCart = JSON.stringify(cartArray);
	// 	localStorage.setItem('cart',stringCart);
	// 	showcart();
	// 	noti();
	// })
})