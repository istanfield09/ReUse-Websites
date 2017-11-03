<!-- Main container -->
<div class="container-fluid" id="smallCont">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <br/>
      <h3>Database Management Options</h3>
      <hr/>
      <form id="decide">
        <div class="form-group">
          <label>Choose Type: </label>
            <select class="form-control" id="choose">
              <option value="Business">Business</option>
              <option value="Category">Category</option>
              <option value="Item">Items</option>
            </select>
        </div>
        <div class="col-xs-12 col-md-6">
          <!-- Button links to appropriate sites-->
          <button Id ="submit" type ="submit" class="btn btn-default btn-lg" onclick="addRoute(); return false" align="center">Add to Selected</button>
        </div>
        <div class="col-xs-12 col-md-6">
          <button Id ="submit" type ="submit" class="btn btn-default btn-lg" onclick="EditRoute(); return false" align="center">Modify or Delete From Selected</button>
        </div>
      </form> <!-- end form -->
      <div class="col-xs-12 col-md-12">
        <hr/>
          <div class="filler"></div>
      </div>
    </div> <!-- end row -->
  </div> <!-- end container-->
</div>