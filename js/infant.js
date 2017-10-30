$(document).ready(function(){
      $('.slider').slider();
    });

$(document).ready(function(){
    $('#lout').click(function(e){
        e.preventDefault();
        sign_out();
    });
    function sign_out(){
        $.ajax({
            url: "controller/AdminController.php",
            type: "POST",
            data: {
                function_name: "sign_out"
            },
            success: function(data){
                console.log(data);
                window.location.replace('index.php');
            },
            error: function(response){
                console.log(response);
            }
        });
    }
    image();
    function image(){
        $.ajax({
            url: "controller/UserController.php",
            type: "POST",
            data: {
                function_name: 'infant_list'

            },
            success: function(data){
                console.log(data);
                arr=jQuery.parseJSON(data);
                var string="";
                var string2="";
                for (var i = 0; i < arr.length; i++) {
                    string+="<tr><td><img src='"+arr[i]['image']+"' style='height:200px;width:200px'></td></tr>";
                    string2='&#8377;'+arr[i]['cost'];
                }
                $('#price').html(string2);
                $('#infant_img').html(string);

            },
            error: function(response){
                console.log(response);
            }
        });
    }
});