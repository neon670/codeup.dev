<?php
require ("BankAccount.php");

	class ISA extends BankAccount{
		public $TimePeriod = 28;
		public $AdditionalServices;

		// Methods
		public function WithDraw($amount){
			$transDate = new DateTime();
			$lastTansaction = null;
			$length = count($this->Audit);

			for ($i = $length; $i > 0 ; $i--) { 

				$element = $this->Audit[$i -1];

				if($element[0] === "Withdraw Accepted"){

					$days = new DateTime($element[3]);

					$lastTansaction = $days->diff($transDate)->format("%a");

					break;
				}
			}
			if($lastTansaction === null && $this->Locked === false || $this->Locked === false && $lastTansaction > $this->TimePeriod){

				$this->Balance -= $amount;
				array_push($this->Audit, array("Withdraw Accepted", $amount, $this->Balance, $transDate->format('c')));
			}
		}
		private function Penalty(){

		}
	}