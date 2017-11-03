<div class="container-fluid">
	<div class="col-xs-12 col-md-12">
		<table id="business-table"  class="table">
			<tbody id="business-list">
				<th>
					Business Name
				</th>
				<?php foreach($this->data['businesses'] as $business): ?>
					<tr>
						<td><?php echo $business['name']; ?></td>
						<td><?php echo $business['address_line_1']; ?></td>
						<div class = "action-buttons">
							<td>
							<a href=<?php echo "/business/".$business['id']; ?>>
                      			<button class="btn btn-default edit-button">Edit</button>
                    		</a>
                    		</td>
                    		<td>
                    		<form role="form" method="post" action=<?php echo "/business/".$business['id']; ?>>
                    			<input type = "hidden" name="_METHOD" value="DELETE" />
                      			<button type="submit" class="btn btn-danger">Delete</button>
                    		</form>
                    		</td>
						</div>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<!--
    [111] => Array
        (
            [id] => 140
            [name] => Hello
            [address_line_1] => World
            [address_line_2] => Hello
            [city] => Astoria
            [state_id] => 37
            [zip_code] => 94804
            [phone] => 5037916863
            [website] => www.google.com
            [latitude] => 
            [longitude] => 
            [Recycle] => 0
        )
-->