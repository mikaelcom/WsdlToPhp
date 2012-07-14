<?php
/**
 * Class file for PayPalTypeGetBalanceResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetBalanceResponseType
 * @date 14/07/2012
 */
class PayPalTypeGetBalanceResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The Balance
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var PayPalTypeBasicAmountType
	 */
	public $Balance;
	/**
	 * The BalanceTimeStamp
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $BalanceTimeStamp;
	/**
	 * The BalanceHoldings
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var PayPalTypeBasicAmountType
	 */
	public $BalanceHoldings;
	/**
	 * Constructor
	 * @param PayPalTypeBasicAmountType Balance
	 * @param dateTime BalanceTimeStamp
	 * @param PayPalTypeBasicAmountType BalanceHoldings
	 * @return PayPalTypeGetBalanceResponseType
	 */
	public function __construct($_Balance,$_BalanceTimeStamp,$_BalanceHoldings = null)
	{
		PayPalWsdlClass::__construct(array('Balance'=>$_Balance,'BalanceTimeStamp'=>$_BalanceTimeStamp,'BalanceHoldings'=>$_BalanceHoldings));
	}
	/**
	 * Set Balance
	 * @param BasicAmountType Balance
	 * @return BasicAmountType
	 */
	public function setBalance($_Balance)
	{
		return ($this->Balance = $_Balance);
	}
	/**
	 * Get Balance
	 * @return PayPalTypeBasicAmountType
	 */
	public function getBalance()
	{
		return $this->Balance;
	}
	/**
	 * Set BalanceTimeStamp
	 * @param dateTime BalanceTimeStamp
	 * @return dateTime
	 */
	public function setBalanceTimeStamp($_BalanceTimeStamp)
	{
		return ($this->BalanceTimeStamp = $_BalanceTimeStamp);
	}
	/**
	 * Get BalanceTimeStamp
	 * @return dateTime
	 */
	public function getBalanceTimeStamp()
	{
		return $this->BalanceTimeStamp;
	}
	/**
	 * Set BalanceHoldings
	 * @param BasicAmountType BalanceHoldings
	 * @return BasicAmountType
	 */
	public function setBalanceHoldings($_BalanceHoldings)
	{
		return ($this->BalanceHoldings = $_BalanceHoldings);
	}
	/**
	 * Get BalanceHoldings
	 * @return PayPalTypeBasicAmountType
	 */
	public function getBalanceHoldings()
	{
		return $this->BalanceHoldings;
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