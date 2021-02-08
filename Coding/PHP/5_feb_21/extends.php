<?php
	
	// video 197 & 198

	class BankAccount {
		public $balance = 0;
		public $type = '';

		public function SetType($input) {
			$this->type = $input;
		}

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


	class SavingsAccount extends BankAccount {
		
	}

	$pk = new BankAccount;
	$pk->SetType('18-25 Current');
	$pk->Deposit(100);
	$pk->Withdraw(20);


	$pksaving = new SavingsAccount;
	$pksaving->SetType('Super Saver');
	$pksaving->Deposit(3000);

	//echo $pk->DisplayBalance().'<br>';
	//echo $pksaving->DisplayBalance();

	echo $pk->type.' has '.$pk->DisplayBalance().'<br>';
	echo $pksaving->type.' has '.$pksaving->DisplayBalance();
?>