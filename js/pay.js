  $(".button-collapse").sideNav();
  $(document).ready(function(){
    $('#lout').click(function(e){
        e.preventDefault();
        sign_out();
    });
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    format: 'yyyy/mm/dd',
    closeOnSelect: false // Close upon selecting a date,
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
    $("#credit").click(function(){
        $("#credit1").show();
        $("#cod1").hide();
        $("#paytm1").hide();
        $("#paytm2").hide();
    });
    $("#paytm").click(function(){
        $("#credit1").hide();
        $("#cod1").hide();
        $("#paytm1").show();
        $("#paytm2").hide();
    });
    $("#otp").click(function(){
        $("#paytm2").show();
        $("#paytm1").hide();
    });
    $("#cod").click(function(){
        $("#credit1").hide();
        $("#cod1").show();
        $("#paytm1").hide();
        $("#paytm2").hide();
    });
    $("#addr").click(function(){
        $("#label").hide();
    });
    $.ajax({
        url: "controller/UserController.php",
        type: "POST",
        data:{
            function_name: 'previous_page',
        },
        success: function(data){
            console.log(data);
            $('#prev_loc').val(data);
        },
        error:function(response){
            console.log(response);
        }
    });
    $("#credit_sub").click(function(e){
        e.preventDefault();
        var debit=$('#debit').val();
        var debit1=$('#debit1').val();
        var debit2=$('#debit2').val();
        var debit3=$('#debit3').val();
        var dat1=$('#dat1').val();
        var cvv=$('#cvv').val();
        var source=$('#prev_loc').val();
        if(debit.length == 4 && debit1.length == 4 && debit2.length == 4 && debit3.length == 4 ){
            $.ajax({
                url:"controller/UserController.php",
                type: "POST",
                data:{
                    function_name: 'credit_pay',
                    debit:debit,
                    debit1:debit1,
                    debit2:debit2,
                    debit3:debit3,
                    dat1:dat1,
                    cvv:cvv,
                    source:source
                },
                success: function(data){
                    console.log(data);
                    if(data==1){
                        Materialize.toast('Data Added',3000);
                        $('#credit_card').trigger("reset");
                    }
                    if (data=="2") {
                        Materialize.toast('Fill In All The Fields',3000);
                    }
                    if(data == "3"){
                        Materialize.toast('All the Numbers must be of 4 characters in length.',3000);
                    }
                },
                error:function(response){
                    console.log(response);
                }
            });
        }else{
            Materialize.toast('All the Numbers must be of 4 characters in length.',3000);
        }
    });
    $("#pay_cod").click(function(a){
        a.preventDefault();
        var addr=$('#addr').val();
        var source=$('#prev_loc').val();
        $.ajax({
            url:"controller/UserController.php",
            type: "POST",
            data:{
                function_name: 'cod_pay',
                addr:addr,
                source:source
            },
            success: function(data){
                console.log(data);
                if(data==1){
                    Materialize.toast('Data Added',3000);
                    $('#cod_pay').trigger("reset");
                }
                if (data=="2") {
                    Materialize.toast('Fill In All The Fields',3000);
                }
            },
            error:function(response){
                console.log(response);
            }
        });
    });
    $("#otp").click(function(a){
        a.preventDefault();
        var pnum=$('#pnum').val();
        var cost=$('#cost').val();
        $.ajax({
            url:"controller/UserController.php",
            type: "POST",
            data:{
                function_name: 'paytm_pay',
                pnum:pnum,
                cost:cost
            },
            success: function(data){
                console.log(data);
                if(data==1){
                    // Materialize.toast('Data Added',3000); You dont need to show the user ki data added
                    $('#paytm_pay').trigger("reset");
                }
                if (data=="2") {
                    Materialize.toast('Fill In All The Fields',3000);
                }
            },
            error:function(response){
                console.log(response);
            }
        });
    });
    $('#pay').click(function(a){
        a.preventDefault();
        var source=$('#prev_loc').val();
        $.ajax({
            url:"controller/UserController.php",
            type: "POST",
            data:{
                function_name: 'paytm_pay_final',
                source:source
            },
            success: function(data){
                console.log(data);
                if(data=='1'){
                    Materialize.toast('Data Added',3000);
                    $('#onum').val('');
                }
                if (data=="2") {
                    Materialize.toast('Fill In All The Fields',3000);
                }
            },
            error:function(response){
                console.log(response);
            }
        });
    });
});
