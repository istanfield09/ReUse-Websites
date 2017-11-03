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
                    <span class="btn btn-default edit-button">Edit</span>
                  </a>              
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