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
                console.log(data);
                window.location.replace('index.php');
            },
            error: function(response){
                console.log(response);
            }
        });
    }
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });

    $('#add_medicine').click(function(a){
        a.preventDefault();
        var name=$('#name').val();
        var quantity=$('#quantity').val();
        var cost=$('#cost').val();
        var dat=$('#dat').val();
        var des=$('#des').val();
        var category=$('#category').val();
        var file_data = $('#imgfile').prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', file_data);
        form_data.append('name', name);
        form_data.append('quantity', quantity);
        form_data.append('cost', cost);
        form_data.append('dat', dat);
        form_data.append('des', des);
        form_data.append('category', category);
        form_data.append('function_name',"add_medicine");
        // console.log(file_data);
        $.ajax({
            url:"controller/AdminController.php",
            cache: false,
            contentType: false,
            processData: false,
            type: "POST",
            data:form_data,
            success: function(data){
                // console.log(data);
                if(data==1){
                    Materialize.toast('Data Added',3000);
                    $('#medicine_data').trigger("reset");
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
    category();
    function category(){
        $.ajax({
            url: "controller/AdminController.php",
            type: "POST",
            data: {
                function_name: 'category_list'
            },
            success: function(data){
                arr=jQuery.parseJSON(data);
                var string="<option value='' disabled selected>Choose your option</option>";
                for (var i = 0; i < arr.length; i++) {
                    string+="<option value='"+arr[i]['category_name']+"'>"+arr[i]['category_name']+"</option>";
                }
                $('#category').html(string);
            },
            error: function(response){
                console.log(response);
            }
        });
    }

});

