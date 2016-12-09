$(document).ready(function(){
  getInfo("index.html");

$(document).on("click",'#personas', getLinkPersonas);

  function getLinkPersonas(event){
    event.preventDefault();
    var link = "mostrar_personas";
    getInfo(link);
  }

  $(document).on("click",'#logout', getLinkLogout);

  function getLinkLogout(event){
    event.preventDefault();
    var link = "logout_login";
    getInfo(link);
  }

  function getInfo(link) {
  $.ajax({
    url: link,
    method:"GET",
    dataType: "html",
    success: function(resultData){
      switch (link) {

        case "mostrar_personas":
        $("body").html(resultData);
        break;
        case "logout_login":
        $("body").html(resultData);
        break;

        default:
        $('footer').show();
      }
      $("#cargadorAjax").html(resultData);
    },
    error:function(jqxml, status, errorThrown){
      alert('Error');
    }
  });
  $("#cargadorAjax").html("<h3>Cargando...</h3>");
  event.preventDefault();
}

  });
