<?php
/**
 * Class file for PayPalTypeDoNonReferencedCreditResponseDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoNonReferencedCreditResponseDetailsType
 * @date 14/07/2012
 */
class PayPalTypeDoNonReferencedCreditResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The Amount
	 * Meta informations :
	 * 	- documentation : 
	 * @var PayPalTypeBasicAmountType
	 */
	public $Amount;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- documentation : 
	 * @var PayPalTypeTransactionId
	 */
	public $TransactionID;
	/**
	 * Constructor
	 * @param PayPalTypeBasicAmountType Amount
	 * @param PayPalTypeTransactionId TransactionID
	 * @return PayPalTypeDoNonReferencedCreditResponseDetailsType
	 */
	public function __construct($_Amount = null,$_TransactionID = null)
	{
		parent::__construct(array('Amount'=>$_Amount,'TransactionID'=>$_TransactionID));
	}
	/**
	 * Set Amount
	 * @param BasicAmountType Amount
	 * @return BasicAmountType
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getAmount()
	{
		return $this->Amount;
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