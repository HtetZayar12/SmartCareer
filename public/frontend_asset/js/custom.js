// $(document).ready(function(){
// 	showdetail();
// 	// noti();
// 	$(".apply").on("click",function(){
// 		var id =$(this).data('id');
// 		var uid =$(this).data('uid');
// 		var aid =$(this).data('aid');
// 		var name =$(this).data('name');
// 		var uname =$(this).data('uname');
// 		var duration =$(this).data('duration');
// 		var closedate =$(this).data('closedate');
// 		var budget =$(this).data('budget');
// 		var price =$('#mybid').val();					
// 		var description =$(this).data('description');
// 		var skill_one =$(this).data('skill_one');
// 		var skill_two =$(this).data('skill_two');
// 		var skill_three =$(this).data('skill_three');
// 		var location =$(this).data('location');
// 		var mydur =$('#mydur').val();;
// 		var cv =$('#cv').val();;

// 		// console.log(id +name + duration + closedate + budget + description
// 		//  + skill_one + skill_two + skill_three + location + mydur + cv);

// 		var detail = {
// 			id:id,
// 			aid:aid,
// 			uid:uid,
// 			name:name,
// 			uname:uname,
// 			duration:duration,
// 			closedate:closedate,
// 			budget:budget,
// 			price:price,
// 			description:description,
// 			skill_one:skill_one,
// 			skill_two:skill_two,
// 			skill_three:skill_three,
// 			location:location,
// 			mydur:mydur,
// 			cv:cv
// 		}

// 		// console.log(detail);

// 		var detailList = localStorage.getItem("detail");
// 		if(detailList == null){
// 			var detailArray = [];
// 		}else{
// 			detailArray = JSON.parse(detailList);
// 		}
		
// 		detailArray.push(detail);

// 		var stringDetail =JSON.stringify(detailArray);
// 		localStorage.setItem("detail", stringDetail);

// // 		// noti();
// 	})

// 	function showdetail(){
// 		var detailList = localStorage.getItem('detail');
// 		if (detailList) {
// 			var detailArray = JSON.parse(detailList);
// 			var html='';
// 			$.each(detailArray,function(i,v){
// 				html+=`<tr>
// 				<td>${v.name}</td>
// 				<td>${v.uname}</td>
// 				<td>${v.budget}</td>
// 				<td>${v.price}</td>
// 				<td>${v.closedate}</td>
// 				<td>${v.location}</td>
// 				<td>
// 					<button class="btn btn-info">detail</button>
// 					<button class="btn btn-success">confirm</button>
// 					<button class="btn btn-warning">delete</button>
// 				</td>
// 				</tr>`
// 			})

// 			$('tbody').html(html);
// 		}

// 	}

// // 	// function noti(){
// // 	// 	var cartList = localStorage.getItem('cart');
// // 	// 	if (cartList) {
// // 	// 		var cartArray = JSON.parse(cartList);
// // 	// 		var total =0;
// // 	// 		var noti = 0;
// // 	// 		$.each(cartArray, function(i,v){

// // 	// 			var unitprice = v.price;
// // 	// 			var discount = v.discount;
// // 	// 			var current_price = unitprice-discount;
// // 	// 			var qty = v.qty;
// // 	// 			if (discount) {
// // 	// 				var price = current_price;
// // 	// 			}
// // 	// 			else{
// // 	// 				var price = unitprice;
// // 	// 			}
// // 	// 			var subtotal = price * qty;

// // 	// 			noti += qty ++;
// // 	// 			total += subtotal ++;
// // 	// 		})
// // 	// 		$('.cartNoti').html(noti);
// // 	// 		$('.cartTotal').html(total+' Ks');
// // 	// 	}
// // 	// 	else{
// // 	// 		$('.cartNoti').html(0);
// // 	// 		$('.cartTotal').html(0+' Ks');
// // 	// 	}
// // 	// }

// // 	// $('tbody').on('click','.plus',function(){
// // 	// 	var id = $(this).data('id');
// // 	// 	var cartList = localStorage.getItem('cart');
// // 	// 	var cartArray = JSON.parse(cartList);
// // 	// 	$.each(cartArray,function(i,v){
// // 	// 		if (i==id) {
// // 	// 			v.qty++;
// // 	// 		}
// // 	// 	})

// // 	// 	var stringCart =JSON.stringify(cartArray);
// // 	// 	localStorage.setItem("cart", stringCart);

// // 	// 	showcart();
// // 	// 	noti();

// // 	// })

// // 	// $('tbody').on('click','.minus',function(){
// // 	// 	var id = $(this).data('id');
// // 	// 	var cartList = localStorage.getItem('cart');
// // 	// 	var cartArray = JSON.parse(cartList);
// // 	// 	$.each(cartArray,function(i,v){
// // 	// 		if (i==id) {
// // 	// 			v.qty--;
// // 	// 		}

// // 	// 		if (v.qty==0) {
// // 	// 			cartArray.splice(id,1);
// // 	// 			$('.cartNoti').html(0);
// // 	// 			$('.cartTotal').html(0+' Ks');
// // 	// 		}
// // 	// 	})



// // 	// 	var stringCart =JSON.stringify(cartArray);
// // 	// 	localStorage.setItem("cart", stringCart);

// // 	// 	showcart();
// // 	// 	noti();

// // 	// })

// // 	// $('tbody').on('click','.delete',function(){
// // 	// 	// console.log('ok');

// // 	// 	var id = $(this).data('id');
// // 	// 	console.log(id);
// // 	// 	var cartList = localStorage.getItem('cart');
// // 	// 	var cartArray = JSON.parse(cartList);

// // 	// 	cartArray.splice(id,1);
		

// // 	// 	var stringCart = JSON.stringify(cartArray);
// // 	// 	localStorage.setItem('cart',stringCart);
// // 	// 	showcart();
// // 	// 	noti();
// // 	// })
// })