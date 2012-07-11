<?php
/**
 * Class file for XWeb1003TypeCash_Deposits
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeCash_Deposits
 * @date 09/07/2012
 */
class XWeb1003TypeCash_Deposits extends XWeb1003WsdlClass
{
	/**
	 * The Cash_Deposit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 2
	 * @var XWeb1003TypeCashDepositType
	 */
	public $Cash_Deposit;
	/**
	 * Constructor
	 * @param XWeb1003TypeCashDepositType Cash_Deposit
	 * @return XWeb1003TypeCash_Deposits
	 */
	public function __construct($_Cash_Deposit = null)
	{
		parent::__construct(array('Cash_Deposit'=>$_Cash_Deposit));
	}
	/**
	 * Set Cash_Deposit
	 * @param CashDepositType Cash_Deposit
	 * @return CashDepositType
	 */
	public function setCash_Deposit($_Cash_Deposit)
	{
		return ($this->Cash_Deposit = $_Cash_Deposit);
	}
	/**
	 * Get Cash_Deposit
	 * @return XWeb1003TypeCashDepositType
	 */
	public function getCash_Deposit()
	{
		return $this->Cash_Deposit;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>