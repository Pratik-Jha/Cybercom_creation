<?php

	class BankAccount {
		private $balance = 3500;

		public function DisplayBalance() {
			return $this->balance;
		}
	}

	$pk = new BankAccount;
	echo $pk->DisplayBalance();
	echo $pk->balance;

?>

<!--private  _
protectec _T
-->