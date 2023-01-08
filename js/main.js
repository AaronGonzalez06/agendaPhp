$(document).ready(function(){
  

    //alert(location.href);


    $('.activar').hover(function(){
		$(".icono").attr('name', 'thumbs-up-outline');
		}, function(){
        $(".icono").attr('name', 'thumbs-down-outline');
		});
    

})

