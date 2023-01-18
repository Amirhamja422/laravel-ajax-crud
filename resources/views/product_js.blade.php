<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

<script>
  $(document).ready(function(){
   // alert("ok");
   $(document).on('click','.add_product',function(e){
    e.preventDefault();
    let name =$('#product_name').val();
    let price =$('#product_price').val();
    $.ajax({
      url:"{{route('add.product')}}",
      method:'post',
      data:{
        name:name,
        price:price
      },
      success:function(response){
       // console.log(response);
       if(response.status == 'success'){
        $('#addModal').modal('hide');
        $('#addProductForm')[0].reset('');
        $('.table').load(location.href+' .table');
        Command: toastr["success"]("Success!", "Product Added successfully");

        $('.table').load(location.href+' .table');
          toastr.options = {
          "closeButton": false,
          "debug": false,
          "newestOnTop": false,
          "progressBar": false,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
          }
       }
      },error:function(err){
       // console.log(err);
       let error=err.responseJSON;
       $.each(error.errors,function(index,value){
       // console.log(value);
       $('.errorMesgContainer').append('<div class="alert alert-danger" role="alert">'+value+'</div>');

       });

       }

  })
  });

  // show product value in update form

  $(document).on('click','.update_product_form',function(){
    let id =$(this).data('id');
    let name =$(this).data('name');
    let price =$(this).data('price');

    $('#up_productId').val(id);
    $('#up_product_name').val(name);
    $('#up_product_price').val(price);    
   });

   // update product data
   $(document).on('click','.up_product',function(e){
    e.preventDefault();
    let up_id =$('#up_productId').val();
    let up_name =$('#up_product_name').val();
    let up_price =$('#up_product_price').val();
    //alert(up_id+' '+up_name+' '+up_price);
    
    $.ajax({
      url:"{{route('update.product')}}",
      method:'post',
      data:{
        up_id:up_id,
        up_name:up_name,
        up_price:up_price
      },
      success:function(response){
       // console.log(response);
       if(response.status == 'success'){
        $('#updateModal').modal('hide');
        $('#updateProductForm')[0].reset('');
        $('.table').load(location.href+' .table');
        Command: toastr["success"]("Success!", "Product Updated successfully");

        $('.table').load(location.href+' .table');
          toastr.options = {
          "closeButton": false,
          "debug": false,
          "newestOnTop": false,
          "progressBar": false,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
          }
       }
      },error:function(err){
       // console.log(err);
       let error=err.responseJSON;
       $.each(error.errors,function(index,value){
       // console.log(value);
       $('.errorMesgContainer').append('<div class="alert alert-danger" role="alert">'+value+'</div>');

       });

       }

  })
  });


   // delete product data

  $(document).on('click','.delete_product',function(e){
    e.preventDefault();
    let dlt_id =$(this).data('id');
    if(confirm('are you sure you want to delete??')){
     
    $.ajax({
      url:"{{route('delete.product')}}",
      method:'post',
      data:{
        dlt_id:dlt_id
      },
      success:function(response){
       if(response.status == 'success'){
        Command: toastr["success"]("Success!", "Product deleted successfully");

        $('.table').load(location.href+' .table');
          toastr.options = {
          "closeButton": false,
          "debug": false,
          "newestOnTop": false,
          "progressBar": false,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
          }
       }
      }

  })
    }

  });


}); 
  </script>