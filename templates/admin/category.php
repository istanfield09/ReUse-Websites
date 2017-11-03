<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <br/>
      <h3>Edit Category</h3>
      <form class="form-horizontal" role="form" method="post" action="/category/<?php echo $this->data['category'][0]['id'] ?>">
        <div class="form-group">
          <label class="control-label col-sm-2" for="text">Category Name: </label><br/>
          <div class="col-sm-10">
            <input type = "hidden" name="_METHOD" value="PUT" />
            <input type ="text" class="form-control" id="name" name="name" value="<?php echo $this->data['category'][0]['name'] ?>" />
          </div>
        </div>
        <p align="center">
          <button type ="submit" class="btn btn-primary" align="center">
            Update Category
          </button>
        </p>
      </form>
    </div>
  </div>
</div>
