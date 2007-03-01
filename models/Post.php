<?php
require_once 'activerecord' .DIRECTORY_SEPARATOR. 'generated_models' .DIRECTORY_SEPARATOR. 'PostBase.php';
class Post extends PostBase {

  protected $has_many = array('{"comments" : {"dependent" : "destroy"}}', 'categorizations',
    array('categories' => array('through' => 'categorizations')));
  protected $has_one  = array('slug');
}
?>
