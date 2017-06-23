$(document).ready(function () {
   var price = '';
   var q1 = $('#q1 :selected').val();
   var q2 = $('#q2 :selected').val();
   if (q1 == 'azzuro') {
      if(q2 == 2) {
         price = 200;
      } else if(q2 == 3) {
         price = 135;
      } else {
         price = 100;
      }
   } else {
      if(q2 == 2) {
         price = 225;
      } else if(q2 == 3) {
         price = 174;
      } else {
         price = 130;
      }
   }
   $('#price').text(price);

   /// Slider show/hide
   if (q1 == "terme") {
      $('#slider_azzuro').hide();
      $('#slider_terme').show();
   }
   if (q2 == 2 && q1 == "terme") {
      $('#terme_2').show();
   }

   if($('#but').css('display') == 'none') {
      $('#lastPrice').css('display', 'none');
   }
   $('#lastPrice').text('Цена выбранного пакета: ' + price);
   $('#inputPrice').val(price);

});

var timerId = setInterval(function() {
   var price = '';
   var q1 = $('#q1 :selected').val();
   var q2 = $('#q2 :selected').val();
   var q3 = $('#q3 :selected').val();
   var q6 = $('#q6 :selected').val();
   var q7 = $('#q7 :selected').val();
   var q8 = $('#q8 :selected').val();

   // проживание
   if (q1 == 'azzuro') {
      if(q2 == 2) {
         price = 200;
      } else if(q2 == 3) {
         price = 135;
      } else {
         price = 100;
      }
   } else {
      if(q2 == 2) {
         price = 225;
      } else if(q2 == 3) {
         price = 174;
      } else {
         price = 130;
      }
   }

   // спорт-пакет
   if (q3 == 'tournament') {
      price = price + 70;
   }
   if (q3 == 'standart') {
      price = price + 270;
   }

   /// Экскурсия в Венецию
   if (q6 == 'true') {
      price = price + 50;
   }

   /// Тренировки + номинации
   if (q7 == 'true') {
      price = price + 22;
   }
   if (q8 == 'true') {
      price = price + 95;
   }

   /// Button continue
   if(document.documentElement.clientWidth < 845) {
      $('button.fs-continue.fs-show').text('');
   }
   if(document.documentElement.clientWidth > 845) {
      if(window.location == 'http://volley4fun.com/v0v4ik/index.php/main/full_screen_form_en') {
         $('button.fs-continue.fs-show').text('Continue');
      }
      if(window.location == 'http://volley4fun.com/v0v4ik/index.php/main/full_screen_form_fr') {
         $('button.fs-continue.fs-show').text('Continuez');
      }
      if(window.location == 'http://volley4fun.com/v0v4ik/index.php/main/full_screen_form') {
         $('button.fs-continue.fs-show').text('Продолжить');
      }
   }

   /// Slider show/hide
   if (q1 == "azzuro") {
      $('#slider_azzuro').show();
      $('#slider_terme').hide();
   }
   if (q1 == "terme") {
      $('#slider_azzuro').hide();
      $('#slider_terme').show();
   }
   if (q1 == "terme" && q2 == 2) {
      $('#terme_2').show();
      $('#terme_3_4').hide();
      $('#azzuro_2_3_4').hide();
   }
   if (q1 == "terme" && q2 == 3) {
      $('#terme_2').hide();
      $('#terme_3_4').show();
      $('#azzuro_2_3_4').hide();
   }
   if (q1 == "terme" && q2 == 4) {
      $('#terme_2').hide();
      $('#terme_3_4').show();
      $('#azzuro_2_3_4').hide();
   }
   if (q1 == "azzuro") {
      $('#azzuro_2_3_4').show();
      $('#terme_2').hide();
      $('#terme_3_4').hide();
   }


   if($('#but').css('display') == 'none') {
      $('#lastPrice').css('display', 'none');
   } else {
      $('#lastPrice').css('display', 'block');
      $('#slider_azzuro').hide();
      $('#slider_terme').hide();
      $('#terme_2').hide();
      $('#terme_3_4').hide();
      $('#azzuro_2_3_4').hide();
   }

   $('#price').text(price);
   if(window.location == 'http://volley4fun.com/v0v4ik/index.php/main/full_screen_form_en') {
      $('#lastPrice').text('Total package price: ' + price);
   }
   if(window.location == 'http://volley4fun.com/v0v4ik/index.php/main/full_screen_form_fr') {
      $('#lastPrice').text('Le prix total du package: ' + price);
   }
   if(window.location == 'http://volley4fun.com/v0v4ik/index.php/main/full_screen_form') {
      $('#lastPrice').text('Цена выбранного пакета: ' + price);
   }

   $('#inputPrice').val(price);

}, 500);

$('#but').on("click", function(){
   $.ajax({
      url: "http://volley4fun.com/v0v4ik/index.php/main/send_order",
      type: "POST",
      data : { "price": $('#inputPrice').val(),
               "residence": $('#q1 option:selected').text(),
               "accommodationType": $('#q2 option:selected').text(),
               "sportPackage": $('#q3 option:selected').text(),
               "skill": $('#q4 option:selected').text(),
               "children": $('#q5 option:selected').text(),
               "excursion": $('#q6:selected').val(),
               "training ": $('#q7:selected').val(),
               "nominations": $('#q8:selected').val(),
               "name": $('#q9').val(),
               "email": $('#q10').val(),
               "phone":$('#q11').val()},
      dataType: "text",
      cache:false,
      success : function(data) {
         console.log(data);
      },
      failure: function(){
         alert('fail!');
      }
   });
   return false;
});