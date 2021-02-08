<?php
	// video 190 & 191 & 192

	class BankAccount {
		public $balance = 10.5;

		public function DisplayBalance() {
			return 'Balance : '.$this->balance;
		}

		public function Withdraw($amount) {
			if (($this->balance)<$amount) {
				echo "Not enough money";
			}
			else {
				$this->balance = $this->balance - $amount;
			}
		}
	}

	
	$pk = new BankAccount();
	$pk->Withdraw(15);
	echo $pk->DisplayBalance();
?>