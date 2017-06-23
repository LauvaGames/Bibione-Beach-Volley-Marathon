$('#submit_contactSport_form').on("click", function(){
    var username = $(this).parent().parent().find(".username").val();
    var email = $(this).parent().parent().find(".email").val();
    var phone = $(this).parent().parent().find(".phone").val();
    var comment = $(this).parent().parent().find(".comment").val();

    $.ajax({
        url: "http://volley4fun.com/v0v4ik/index.php/main/send_contacts",
        type: "POST",
        data : {    "username": username,
                    "email": email,
                    "phone": phone,
                    "comment": comment,
                    "sporttype": "Сборы для спортивных групп"},
        dataType: "text",
        cache:false,
        success : function(data) {
            location.reload();
        },
        failure: function(){
            alert('fail!');
        }
    });
    return false;
});
$('#submit_contactVolley_form').on("click", function(){
    var username = $(this).parent().parent().find(".username").val();
    var email = $(this).parent().parent().find(".email").val();
    var phone = $(this).parent().parent().find(".phone").val();
    var comment = $(this).parent().parent().find(".comment").val();

    $.ajax({
        url: "http://volley4fun.com/v0v4ik/index.php/main/send_contacts",
        type: "POST",
        data : {    "username": username,
            "email": email,
            "phone": phone,
            "comment": comment,
            "sporttype": "Лагеря по пляжному волейболу"},
        dataType: "text",
        cache:false,
        success : function(data) {
            location.reload();
        },
        failure: function(){
            alert('fail!');
        }
    });
    return false;
});
$('#submit_contactFitness_form').on("click", function(){
    var username = $(this).parent().parent().find(".username").val();
    var email = $(this).parent().parent().find(".email").val();
    var phone = $(this).parent().parent().find(".phone").val();
    var comment = $(this).parent().parent().find(".comment").val();

    $.ajax({
        url: "http://volley4fun.com/v0v4ik/index.php/main/send_contacts",
        type: "POST",
        data : {    "username": username,
            "email": email,
            "phone": phone,
            "comment": comment,
            "sporttype": "Фитнес"},
        dataType: "text",
        cache:false,
        success : function(data) {
            location.reload();
        },
        failure: function(){
            alert('fail!');
        }
    });
    return false;
});
$('#submit_contactRegby_form').on("click", function(){
    var username = $(this).parent().parent().find(".username").val();
    var email = $(this).parent().parent().find(".email").val();
    var phone = $(this).parent().parent().find(".phone").val();
    var comment = $(this).parent().parent().find(".comment").val();

    $.ajax({
        url: "http://volley4fun.com/v0v4ik/index.php/main/send_contacts",
        type: "POST",
        data : {    "username": username,
            "email": email,
            "phone": phone,
            "comment": comment,
            "sporttype": "Регби"},
        dataType: "text",
        cache:false,
        success : function(data) {
            location.reload();
        },
        failure: function(){
            alert('fail!');
        }
    });
    return false;
});
