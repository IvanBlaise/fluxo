<?php 


use \Fsolutions\Page;




$app->get("/", function(){
	
	$page = new Page([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("login",[
		"error"=>""
	]);
});








 ?>