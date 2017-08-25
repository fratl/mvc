<?php

class Controller {
	
	public static function CreateView($viewName) {
		//echo $viewName." View Created!";
		require_once("./Views/$viewName.php");
	}
}

?>