<?php
/**
 * Class file for PaylineWebPaymentTypeTicketSend
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeTicketSend
 * Documentation : This element contains information e-ticket
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeTicketSend extends PaylineWebPaymentWsdlClass
{
	/**
	 * The toBuyer
	 * Meta informations :
	 * 	- nillable : true
	 * @var boolean
	 */
	public $toBuyer;
	/**
	 * The toMerchant
	 * Meta informations :
	 * 	- nillable : true
	 * @var boolean
	 */
	public $toMerchant;
	/**
	 * Constructor
	 * @param boolean toBuyer
	 * @param boolean toMerchant
	 * @return PaylineWebPaymentTypeTicketSend
	 */
	public function __construct($_toBuyer = null,$_toMerchant = null)
	{
		parent::__construct(array('toBuyer'=>$_toBuyer,'toMerchant'=>$_toMerchant));
	}
	/**
	 * Set toBuyer
	 * @param boolean toBuyer
	 * @return boolean
	 */
	public function setToBuyer($_toBuyer)
	{
		return ($this->toBuyer = $_toBuyer);
	}
	/**
	 * Get toBuyer
	 * @return boolean
	 */
	public function getToBuyer()
	{
		return $this->toBuyer;
	}
	/**
	 * Set toMerchant
	 * @param boolean toMerchant
	 * @return boolean
	 */
	public function setToMerchant($_toMerchant)
	{
		return ($this->toMerchant = $_toMerchant);
	}
	/**
	 * Get toMerchant
	 * @return boolean
	 */
	public function getToMerchant()
	{
		return $this->toMerchant;
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