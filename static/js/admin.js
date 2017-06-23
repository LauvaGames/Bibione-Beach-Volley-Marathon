$(document).ready(function () {
   $(".input").on("input", function () {
      $(this).parent().find('.save').show();
   });
   $(".save").on("click", function(){
      var key = $(this).parent().find('.input').data('id');
      var value = $(this).parent().find('.input').val();
      var lang = $(this).parent().find('.input').data('lang');
      console.log(key + " " + lang + " " + value);

      $.ajax({
         url: "http://volley4fun.com/v0v4ik/index.php/admin/insert_content",
         type: "POST",
         data : { "key": key,
                  "lang": lang,
                  "value": value},
         dataType: "text",
         cache:false,
         success : function(data) {
            //console.log(data);
            location.reload();
         },
         failure: function(){
            alert('fail!');
         }
      });
      return false;
   });

   $(".textarea").on("input", function () {
      $(this).parent().find('.save_textarea').show();
   });
   $(".save_textarea").on("click", function(){
      alert($(this).parent().find('.textarea').val());
      alert($(this).parent().find('.textarea').data('id'));
      alert($(this).parent().find('.textarea').data('lang'));
   });
});
