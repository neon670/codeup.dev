<?php
	abstract class BankAccount{

		protected $Balance = 0;
		public $APR;
		public $SortCode;
		public FirstName;
		public $LastName;
		public $Audit;
		public $Audit = array();
		protected $Locked = false;


		//Methods
		public function Withdrawl($amount){
			$transDate = new DateTime();
			if($this->Locked == flase){
				$this->Balance -= $amount;
				array_push($this->Audit, array("Withdraw Accepted", $amount, $this->Balance, $transDate->('c')));
			}else{
				array_push($this->Audit, array("Denied", $amount, $this->Balance, $transDate->('c')));

			}
		}	

			public function Deposit($amount){
			$transDate = new DateTime();
			if($this->Locked == flase){
				$this->Balance += $amount;
				array_push($this->Audit, array("Deposit Accepted", $amount, $this->Balance, $transDate->('c')));
			}else{
				array_push($this->Audit, array("Deposit Denied", $amount, $this->Balance, $transDate->('c')));

			}
		}

		public function Lock(){
			$this->Lock = true;
			$lockDate = new DateTime();
			array_push($this->Audit, array("Account Locked",$lockedDate->('c')));

		}
		public function UnLock(){
			$this->Lock = true;
			$unlockDate = new DateTime();
			array_push($this->Audit, array("Account UnLocked",$unockedDate->('c')));

		}
	}