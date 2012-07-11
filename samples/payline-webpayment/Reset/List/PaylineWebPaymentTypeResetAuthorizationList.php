<?php
/**
 * Class file for PaylineWebPaymentTypeResetAuthorizationList
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeResetAuthorizationList
 * Documentation : An array of authorization to reset
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeResetAuthorizationList extends PaylineWebPaymentWsdlClass
{
	/**
	 * The transactionID
	 * Meta informations :
	 * 	- maxOccurs : 5000
	 * 	- minOccurs : 1
	 * @var string
	 */
	public $transactionID;
	/**
	 * Constructor
	 * @param string transactionID
	 * @return PaylineWebPaymentTypeResetAuthorizationList
	 */
	public function __construct($_transactionID)
	{
		parent::__construct(array('transactionID'=>$_transactionID));
	}
	/**
	 * Set transactionID
	 * @param string transactionID
	 * @return string
	 */
	public function setTransactionID($_transactionID)
	{
		return ($this->transactionID = $_transactionID);
	}
	/**
	 * Get transactionID
	 * @return string
	 */
	public function getTransactionID()
	{
		return $this->transactionID;
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