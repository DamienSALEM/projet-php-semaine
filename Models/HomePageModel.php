<?php
require_once(__ROOT__.'/Core/DefaultModel.php');

class HomePageModel extends DefaultModel
{

    protected $table = 'cart';

    public function __construct() {
        parent::__construct();
    }
}
?>