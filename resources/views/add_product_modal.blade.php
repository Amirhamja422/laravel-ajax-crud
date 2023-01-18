<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
<form action="" method="POST" id="addProductForm">
  @csrf  
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div class="errorMesgContainer">

      </div>

      <div class="form-group">
        <label for="product_name">Product Name</label>
        <input type="email" class="form-control" id="product_name" aria-describedby="product_name" placeholder="Enter product name">
      </div>

      <div class="form-group">
        <label for="product_price">Product Price</label>
        <input type="product_price" class="form-control" id="product_price" aria-describedby="product_price" placeholder="Enter product price">
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary add_product">Save products</button>
      </div>
    </div>
  </div>
</form>
</div>