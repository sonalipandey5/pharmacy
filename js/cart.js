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
    get_cart();
    function get_cart(){
        $.ajax({
            url: "controller/UserController.php",
            type: "POST",
            data:{
                function_name:'get_cart'
            },
            success:function(response){
                arr=jQuery.parseJSON(response);
                var string="";
                var sum=0;
                if(arr.length==0){
                    $('#sub_cart').attr('disabled','disabled');
                }else{
                    $('#sub_cart').removeAttr('disabled','disabled');
                }
                for (var i = 0; i < arr.length; i++) {
                    if(arr[i]['quantity']!=0){
                        string+="<tr><td>"+arr[i]['product_id']+"</td><td>"+arr[i]['quantity']+" <br> <a href='#' data-id='"+arr[i]['id']+"' id='plus' data-name='"+arr[i]['product_id']+"'> + </a>  <a style='margin-left:10px;' href='#' data-id='"+arr[i]['id']+"' id='minus' data-name='"+arr[i]['product_id']+"'> - </a> </td><td><a class='waves-effect waves-light btn  red darken-4' id='del' data-id="+arr[i]['id']+">Delete</a></td><td>"+arr[i]['cost']+"</td></tr>";
                        sum+=parseFloat(arr[i]['cost']);
                    }  
                }
                string+="<tr><td>Total Cost:</td><td></td><td></td><td>"+sum+"</td><tr>";
                $('#details_cart').html(string);

            }
        });
    }
    $(document).on('click','#del',function(){
        var id = $(this).data("id");
        if(confirm("Are you sure you want to delete this?")){
            $.ajax({
                url: "controller/UserController.php",
                type: "POST",
                data: {
                    function_name: "del_fun",
                    id:id
                },
                success: function(data){
                    get_cart();
                }
            });
        }
    });
    $(document).on('click','#plus',function(){
        var id = $(this).data("id");
        var name =$(this).data('name');
        $.ajax({
            url: "controller/UserController.php",
            type: "POST",
            data: {
                function_name: "plus_fun",
                id:id,
                name:name
            },
            success: function(data){
                if(data=='1'){
                    Materialize.toast('Product Added.',3000);
                    get_cart();
                }else{
                    Materialize.toast('Error Occured.',3000);
                }
            }
        });
    });
    $(document).on('click','#minus',function(){
        var id = $(this).data("id");
        var name =$(this).data('name');
        $.ajax({
            url: "controller/UserController.php",
            type: "POST",
            data: {
                function_name: "minus_fun",
                id:id,
                name:name
            },
            success: function(data){
                if(data=='1'){
                    Materialize.toast('Product Reduced.',3000);
                    get_cart();
                }else{
                    Materialize.toast('Error Occured.',3000);
                }
            }
        });
    });
});