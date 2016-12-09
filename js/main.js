$(document).ready(function(){


  $(document).on("click",'.nav-link', function(event){
    event.preventDefault();
    var dir = $(this).attr("href");
    $.get("index.php?action="+dir, function(data) {
      $('#cargadorAjax').html(data);
    });
  });

});
