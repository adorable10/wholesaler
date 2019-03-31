function loadproducts(){
	var items = $("#myInput").val();
	if(items){
		$.ajax({
			type: 'post',
			data: {
				items:items,
			},
			url: 'loadproducts.php',
			success: function (Response){
				$('#items').html(Response);
			}
		});
	}
};

$('body').on('click','.js-add',function(){
		var totalPrice = 0;
   		var target = $(this);
		var item_id = target.attr('data-number');
    	var unit = target.attr('data-unit');
    	var price = target.attr('data-price');   	
		var quantity = prompt("Please enter quantity", 1);
		var total = parseFloat(price) * parseFloat(quantity);
    	$('#salestable').append("<tr class='items'><td class='item_id text-center'>"+item_id+"</td><td class='quantity text-center'>"+quantity+"</td><td class='unit text-center'>"+unit+"</td><td class='price text-center'>"+price+"</td><td class='total text-center'>"+total+"</td><tr>");
		GrandTotal();
  });

function GrandTotal(){
  var TotalValue = 0;
  var TotalPriceArr = $('#salestable tr .total').get()
  $(TotalPriceArr).each(function(){
    TotalValue +=parseFloat($(this).text());
  });
    $("#total").text(TotalValue);
   
};

$(document).on('click','.add',function(){

  var TotalPriceArr = $('#salestable tr .total').get();


  if (TotalPriceArr == 0){
    alert("Warning","No products ordered!","warning");
    return false; 
  }else{

    var item_id = [];
    var quantity= [];
    var unit= [];
	var price= [];
    var customer = $('#customer').val();

    $('.item_id').each(function(){
      item_id.push($(this).text());
	 
    });
    $('.quantity').each(function(){
      quantity.push($(this).text());
	   
    });
	$('.unit').each(function(){
      unit.push($(this).text());
	 
    });
    $('.price').each(function(){
      price.push($(this).text());
	 
    });
	
	
	$.ajax({ 
              url:"insert.php",
              method:"POST",
              data:{item_id:item_id, quantity:quantity, unit:unit, price:price,  customer:customer},
              success: function(data){
				  alert(data);
				  location.reload();
			  }  
			  });
	
  }
});

