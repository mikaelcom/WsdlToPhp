<?php
/**
 * Class file for PayPalTypeReverseTransactionRequestDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeReverseTransactionRequestDetailsType
 * @date 14/07/2012
 */
class PayPalTypeReverseTransactionRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Identifier of the transaction to reverse. Required Character length and limitations: 17 single-byte alphanumeric characters
	 * @var PayPalTypeTransactionId
	 */
	public $TransactionID;
	/**
	 * Constructor
	 * @param PayPalTypeTransactionId TransactionID
	 * @return PayPalTypeReverseTransactionRequestDetailsType
	 */
	public function __construct($_TransactionID = null)
	{
		parent::__construct(array('TransactionID'=>$_TransactionID));
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