<?php 

namespace Hcode;

class Pageadmin extends Page {

public function __construct($opts = array(), $tpl_dir = "/views/admin/" )
{   
    //com a função parent, estou estou usando o metodo construct da class Page.
    parent::__construct($opts,$tpl_dir);
}
}

?>