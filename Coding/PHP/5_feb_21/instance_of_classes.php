<?php
	
	// video 196

	class BankAccount {
		public $balance = 0;

		public function DisplayBalance() {
			return 'Balance : '.$this->balance;
		}

		public function Withdraw($amount) {
			if (($this->balance)<$amount) {
				echo "Not enough money.<br>";
			}
			else {
				$this->balance = $this->balance - $amount;
			}
		}

		public function Deposit($amount) {
			$this->balance = $this->balance + $amount;
		}
	}

	
	$pk = new BankAccount;
	$pj = new BankAccount;

	$pk->Deposit(100);
	$pj->Deposit(15);

	$pk->Withdraw(98);
	$pj->Withdraw(2.50);

	echo $pk->DisplayBalance().'<br>';
	echo $pj->DisplayBalance();



?>