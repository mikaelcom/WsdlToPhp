<?php
/**
 * Class file for PayPalTypeGetTransactionDetailsRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetTransactionDetailsRequestType
 * @date 14/07/2012
 */
class PayPalTypeGetTransactionDetailsRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- documentation : Unique identifier of a transaction. RequiredThe details for some kinds of transactions cannot be retrieved with GetTransactionDetailsRequest. You cannot obtain details of bank transfer withdrawals, for example. Character length and limitations: 17 single-byte alphanumeric characters
	 * @var PayPalTypeTransactionId
	 */
	public $TransactionID;
	/**
	 * Constructor
	 * @param PayPalTypeTransactionId TransactionID
	 * @return PayPalTypeGetTransactionDetailsRequestType
	 */
	public function __construct($_TransactionID = null)
	{
		PayPalWsdlClass::__construct(array('TransactionID'=>$_TransactionID));
	}
	/**
	 * Set TransactionID
	 * @param TransactionId TransactionID
	 * @return TransactionId
	 */
	public function setTransactionID($_TransactionID)
	{
		return ($this->TransactionID = PayPalTypeTransactionId::valueIsValid($_TransactionID)?$_TransactionID:null);
	}
	/**
	 * Get TransactionID
	 * @return PayPalTypeTransactionId
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
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