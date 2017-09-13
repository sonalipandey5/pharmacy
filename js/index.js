$(document).ready(function(){
    $('#submit').click(function(e){
        // console.log("heya");
        e.preventDefault();
        sign_in();
    });
    $('#lout').click(function(e){
        e.preventDefault();
        sign_out();
    });
    $('.modal').modal();
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
    function sign_in(){
        uname=$('#uname').val();
        pass=$('#pass').val();
        // console.log(uname);
        // console.log(pass);
        $.ajax({
            url: "controller/AdminController.php",
            type: "POST",
            data: {
                function_name: "sign_in",
                uname: uname,
                pass: pass
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

