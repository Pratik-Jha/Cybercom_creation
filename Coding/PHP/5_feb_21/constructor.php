<?php

	class Example {

		public function __construct($something) {
			$this->Saysomething($something);
		}



		public function Saysomething($something) {
			echo $something;
		}
	}

	$example = new Example('Some Text');
	//$example->Saysomething();

?>