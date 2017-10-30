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
    infant_list();
    women_list();
    med_list();
    function infant_list(){
        $.ajax({
            url: "controller/UserController.php",
            type: "POST",
            data: {
                function_name: 'infant_list'

            },
            success: function(data){
                // console.log(data);
                arr=jQuery.parseJSON(data);
                var string="<th>Name</th>";
                var string1="<th>Cost</th>";
                var string2="<th>Expiry</th>";
                var string3="<th>Description</th>";
                var string4="<th>Quantity</th>";
                for (var i = 0; i < arr.length; i++) {
                    string+="<td>"+arr[i]['name']+"</td>";
                    string1+="<td>"+arr[i]['cost']+"</td>";
                    string2+="<td>"+arr[i]['dat']+"</td>";
                    string3+="<td>"+arr[i]['description']+"</td>";
                    string4+="<td><div class='col s2'><input type='number' id='quant5_value' value='1'></div></td>";
                    $('#icart').attr('data-id',arr[i]['name']);
                }
                $('#name6').html(string);
                $('#cost6').html(string1);
                $('#expiry6').html(string2);
                $('#des6').html(string3);
                $('#quant6').html(string4);
            },
            error: function(response){
                console.log(response);
            }
        });
    }
    function women_list(){
        $.ajax({
            url: "controller/UserController.php",
            type: "POST",
            data: {
                function_name: 'women_list'

            },
            success: function(data){
                // console.log(data);
                arr=jQuery.parseJSON(data);
                var string="<th>Name</th>";
                var string1="<th>Cost</th>";
                var string2="<th>Expiry</th>";
                var string3="<th>Description</th>";
                var string4="<th>Quantity</th>";
                for (var i = 0; i < arr.length; i++) {
                    string+="<td>"+arr[i]['name']+"</td>";
                    string1+="<td>"+arr[i]['cost']+"</td>";
                    string2+="<td>"+arr[i]['dat']+"</td>";
                    string3+="<td>"+arr[i]['description']+"</td>";
                    string4+="<td><div class='col s2'><input type='number' id='quant5_value' value='1'></div></td>";
                    $('#wcart').attr('data-id',arr[i]['name']);
                }
                $('#name7').html(string);
                $('#cost7').html(string1);
                $('#expiry7').html(string2);
                $('#des7').html(string3);
                $('#quant7').html(string4);
            },
            error: function(response){
                console.log(response);
            }
        });
    }
    function med_list(){
        $.ajax({
            url: "controller/UserController.php",
            type: "POST",
            data: {
                function_name: 'med_list'

            },
            success: function(data){
                // console.log(data);
                arr=jQuery.parseJSON(data);
                var string="<th>Name</th>";
                var string1="<th>Cost</th>";
                var string2="<th>Expiry</th>";
                var string3="<th>Description</th>";
                var string4="<th>Quantity</th>";
                for (var i = 0; i < arr.length; i++) {
                    string+="<td>"+arr[i]['name']+"</td>";
                    string1+="<td>"+arr[i]['cost']+"</td>";
                    string2+="<td>"+arr[i]['dat']+"</td>";
                    string3+="<td>"+arr[i]['description']+"</td>";
                    string4+="<td><div class='col s2'><input type='number' id='quant5_value' value='1'></div></td>";
                    $('#mcart').attr('data-id',arr[i]['name']);
                }
                $('#name5').html(string);
                $('#cost5').html(string1);
                $('#expiry5').html(string2);
                $('#des5').html(string3);
                $('#quant5').html(string4);
            },
            error: function(response){
                console.log(response);
            }
        });
    }
    $(document).on('click','#mcart, #wcart, #icart',function(e){
        e.preventDefault();
        var product_id = $(this).attr('data-id');
        var quantity = $('#quant5_value').val();
        $.ajax({
            url:"controller/UserController.php",
            type: "POST",
            data:{
                function_name: 'add_cart',
                id:product_id,
                quantity:quantity
            },
            success: function(response){
                console.log(response);
                if(response=='1' || response=='2'){
                    window.location.replace('cart.php');
                }
            }
        });
    });

    image_med();
    image_women();
    image_infant();
    function image_med(){
        $.ajax({
            url: "controller/UserController.php",
            type: "POST",
            data: {
                function_name: 'med_list'

            },
            success: function(data){
                // console.log(data);
                arr=jQuery.parseJSON(data);
                var string="";
                for (var i = 0; i < arr.length; i++) {
                    string+="<tr><td><img src='"+arr[i]['image']+"' style='height:200px;width:200px'></td></tr>"
                }
                $('#image_area2').html(string);

            },
            error: function(response){
                console.log(response);
            }
        });
    }
        function image_women(){
        $.ajax({
            url: "controller/UserController.php",
            type: "POST",
            data: {
                function_name: 'women_list'

            },
            success: function(data){
                console.log(data);
                arr=jQuery.parseJSON(data);
                var string="";
                for (var i = 0; i < arr.length; i++) {
                    string+="<tr><td><img src='"+arr[i]['image']+"' style='height:200px;width:200px'></td></tr>"
                }
                $('#image_area3').html(string);

            },
            error: function(response){
                console.log(response);
            }
        });
    }
        function image_infant(){
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
                for (var i = 0; i < arr.length; i++) {
                    string+="<tr><td><img src='"+arr[i]['image']+"' style='height:200px;width:200px'></td></tr>"
                }
                $('#image_area1').html(string);

            },
            error: function(response){
                console.log(response);
            }
        });
    }
});