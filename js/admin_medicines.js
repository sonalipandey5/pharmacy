  $(".button-collapse").sideNav();
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
                // console.log(data);
                window.location.replace('index.php');
            },
            error: function(response){
                console.log(response);
            }
        });
    }
    category_list();
            function category_list(){
        $.ajax({
            url: "controller/AdminController.php",
            type: "POST",
            data: {
                function_name: 'category_list'

            },
            success: function(data){
                // console.log(data);
                arr=jQuery.parseJSON(data);
                var string="<option value='' disabled selected>Choose your option</option>";
                for (var i = 0; i < arr.length; i++) {
                    string+="<option value='"+arr[i]['category_name']+"'>"+arr[i]['category_name']+"</option>";
                }
                $('#medicines').html(string);
            },
            error: function(response){
                console.log(response);
            }
        });
    }
    function list_update(category){
        $.ajax({
            url: "controller/AdminController.php",
            type: "POST",
            data: {
                function_name: "product_list",
                category: category
            },
            success: function(data){
                // console.log(data);
                arr=jQuery.parseJSON(data);
                var string = '';
                for (var i = 0; i < arr.length; i++) {
                    string+="<tr><td class='name' contenteditable data-id="+arr[i]['id']+">"+arr[i]['name']+"</td><td class='quantity' contenteditable data-id="+arr[i]['id']+">"+arr[i]['quantity']+"</td><td class='cost' contenteditable data-id="+arr[i]['id']+">"+arr[i]['cost']+"</td><td class ='dat' contenteditable data-id="+arr[i]['id']+">"+arr[i]['dat']+"</td><td class = 'des' contenteditable data-id="+arr[i]['id']+">"+arr[i]['description']+"</td><td><img src='"+arr[i]['image']+"' style='height:80px;width:80px' onclick=\"window.open(this.src)\"></td><td><a class='waves-effect waves-light btn  red darken-4' id='del' data-id="+arr[i]['id']+">Delete</a></td></tr>";
                }
                $('#details').html(string);

            },
            error: function(response){
                console.log(response);
            }
        });
    }
    $('#medicines').change(function(){
        var category=$('#medicines').val();
        // console.log(category);
        list_update(category);
      });

        $(document).on('blur','.name',function(){
        var id = $(this).data("id");
        var name = $(this).text();
        // console.log(id);
        edit_data(id, name, "name");
    });
    $(document).on('blur','.quantity',function(){
        var id = $(this).data("id");
        var name = $(this).text();
        // console.log(name);
        edit_data(id, name, "quantity");
    });
    $(document).on('blur','.cost',function(){
        var id = $(this).data("id");
        var name = $(this).text();
        // console.log(name);
        edit_data(id, name, "cost");
    });
    $(document).on('blur','.dat',function(){
        var id = $(this).data("id");
        var name = $(this).text();
        // console.log(name);
        edit_data(id, name, "dat");
    });
    $(document).on('blur','.des',function(){
        var id = $(this).data("id");
        var name = $(this).text();
        // console.log(name);
        edit_data(id, name, "description");
    });

    function edit_data(id,text,column_name){
        $.ajax({
                url:"controller/AdminController.php",
                method:"POST",
                data:{
                    function_name: "edit_details",
                    id:id,
                    text:text,
                    column_name:column_name
                },
                dataType:"text",
                success:function(data){
                    // console.log(data);
                    if(data==1){
                        Materialize.toast("Data Updated",3000);
                    }
                    else{
                        Materialize.toast("Data Updatation Failed",3000);
                    }
                    // arr=jQuery.parseJSON(data);
                    // console.log(arr);
               }
        });
    }
    $(document).on('click','#del',function(){
        var id = $(this).data("id");
        var category=$('#medicines').val();
     if(confirm("Are you sure you want to delete this?")){
                $.ajax({
                    url: "controller/AdminController.php",
                    type: "POST",
                    data: {
                        function_name: "del_fun",
                        id:id
                    },
                    success: function(data){
                        console.log(data);
                        list_update(category);
                    }
                });
            }
        });
});