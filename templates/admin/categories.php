<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <br/>
      <h3>Select a Category to Modify</h3>

      <div id="table-wrapper">
        <div id="tableHere">
          <table id="table" class="table table-striped">
            <tbody id="table">
              <th>
                Name
              </th>
              <?php foreach($this->data['categories'] as $category): ?>
              <tr>
                
                <td>
                  <a href=<?php echo "/category/".$category['id']; ?>>
                    <?php echo $category['name']; ?>
                  </a>

                  <div class = "category-buttons">
                    <a href=<?php echo "/category/".$category['id']; ?>>
                      <button class="btn btn-default edit-button">Edit</button>
                    </a>
                    <form role="form" method="post" action=<?php echo "/category/".$category['id']; ?>>
                    <input type = "hidden" name="_METHOD" value="DELETE" />
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </div>
                </td>
              
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>