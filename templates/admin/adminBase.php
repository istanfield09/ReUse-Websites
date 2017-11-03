<?php

// get a reference to the app
$this->getComponent('admin/header.php');

// include the actual template we want
require($this->data['appTemplate']);

// include the page footer
$this->getComponent('admin/footer.php');