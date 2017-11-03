<div class="container-fluid">
  <div class="">
    
      <br/>
      <h3>Edit Business</h3>
      <?php foreach($this->data['business'] as $business): ?>
        <form class="form-horizontal" role="form" method="post" action="/business/<?php echo $business['id']; ?>">
          <div class="form-group" style="margin-right: 10px; margin-left: 10px;">
            <input type = "hidden" name="_METHOD" value="PUT" />

            <label class="control-label" for="text">Business Name: </label>
            <input type ="text" class="form-control" id="name" name="name" value="<?php echo $business['name']; ?>" />
            
            <label class="control-label" for="text">Address Line 1: </label>
            <input type ="text" class="form-control" id="address_line_1" name="address_line_1" value="<?php echo $business['address_line_1']; ?>" />

            <label class="control-label" for="text">Address Line 2: </label>
            <input type ="text" class="form-control" id="address_line_2" name="address_line_2" value="<?php echo $business['address_line_2']; ?>" />

            <label class="control-label" for="text">City: </label>
            <input type ="text" class="form-control" id="city" name="city" value="<?php echo $business['city']; ?>" />

            <label class="control-label" for="text">State: </label>
            <input type ="text" class="form-control" id="state_id" name="state_id" value="<?php echo $business['state_id']; ?>" />

            <label class="control-label" for="text">Zip Code: </label>
            <input type ="text" class="form-control" id="zipcode" name="zipcode" value="<?php echo $business['zip_code']; ?>" />

            <label class="control-label" for="text">Phone: </label>
            <input type ="text" class="form-control" id="phone" name="phone" value="<?php echo $business['phone']; ?>" />

            <label class="control-label" for="text">Web Site: </label>
            <input type ="text" class="form-control" id="website" name="website" value="<?php echo $business['website']; ?>" />

            <label class="control-label" for="text">Recycle: </label>
            <input type ="checkbox" class="form-control" id="recycle" name="Recycle" value="<?php echo $business['Recycle']; ?>" />
            
          </div>
          <p align="center">
            <button type ="submit" class="btn btn-primary" align="center">
              Save
            </button>
          </p>
        </form>
      <?php endforeach; ?>
  </div>
</div>

<!--
Array
(
    [0] => Array
        (
            [id] => 2
            [name] => Arc Thrift Stores (Corvallis)
            [address_line_1] => 928 NW Beca Ave
            [address_line_2] => 
            [city] => Corvallis
            [state_id] => 37
            [zip_code] => 97330
            [phone] => 5417549011
            [website] => http://www.arcbenton.org/
            [latitude] => 44.57819366
            [longitude] => -123.26132965
            [Recycle] => 0
        )

)

-->