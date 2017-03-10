$(function () {

	$('.p-nav ul li').click( function(){
		
		var index = $(this).index();
		//$(this).addClass('edit-cur').siblings().removeClass('edit-cur');
		$('.aside').hide().eq(index).show();
	});

	$('#nav-form ul li').click(function(){
		var index = $(this).index();
		$(this).addClass('edit-cur').siblings().removeClass('edit-cur');
		$('.first_content').hide().eq(index).show();
	});

	$('.second_nav ul li').click(function(){
		var index = $(this).index();
		$(this).addClass('edit-cur').siblings().removeClass('edit-cur');
		$('.second_content').hide().eq(index).show();
	});

	$('.third_nav ul li').click(function(){
		var index = $(this).index();
		$(this).addClass('edit-cur').siblings().removeClass('edit-cur');
		$('.third_content').hide().eq(index).show();
	});
	
	
	$(function () {

    var li = $('#nav-form ul li');
    
    li.visit(function() {

      $(this).css("background","#473373");

      $(this).children().css("color","#f60");

    }, function() {

      $(this).css("background","#fff");

      $(this).children().css("color","#000");

    });

  })
		$('.dropdown-menu ul li a').click( function(){
		var index1 = $(this).index();
		//$(this).addClass('edit-cur').siblings().removeClass('edit-cur');
	});
	/*$(".dropdown-menu li").click(function(){
		var index = $(this).index();
		$('.p-nav ul li').eq(index).show();
	});*/
});