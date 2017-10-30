$(document).ready(function(){
    console.log('huhl');
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
    $("#register").click(function(a){
        a.preventDefault();
        var full_name=$('#full_name').val();
        var email=$('#email').val();
        var phone=$('#phone').val();
        var password=$('#password').val();
        var r_password=$('#r_password').val();
        $.ajax({
            url:"controller/AdminController.php",
            type: "POST",
            data:{
                function_name: "register_data",
                full_name:full_name,
                email:email,
                phone:phone,
                password:password,
                r_password:r_password
            },
            success: function(data){
                console.log(data);
                if(data==1){
                    Materialize.toast('Data Added',3000);
                    $('#register').trigger("reset");
                }
                else{
                    Materialize.toast(data,3000);
                }
            },
            error:function(response){
                console.log(response);
            }
        });
    });
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

