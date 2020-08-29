$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
  	var value = this.id;
  	alert(value + "halo");
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
    $('.isidropdown').addClass('muncul');
  });
});