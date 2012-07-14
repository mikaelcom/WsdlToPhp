<?php
/**
 * Class file for PayPalTypeManagePendingTransactionStatusResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeManagePendingTransactionStatusResponseType
 * @date 14/07/2012
 */
class PayPalTypeManagePendingTransactionStatusResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var PayPalTypeTransactionId
	 */
	public $TransactionID;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Status;
	/**
	 * Constructor
	 * @param PayPalTypeTransactionId TransactionID
	 * @param string Status
	 * @return PayPalTypeManagePendingTransactionStatusResponseType
	 */
	public function __construct($_TransactionID,$_Status = null)
	{
		PayPalWsdlClass::__construct(array('TransactionID'=>$_TransactionID,'Status'=>$_Status));
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
	 * Set Status
	 * @param string Status
	 * @return string
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = $_Status);
	}
	/**
	 * Get Status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->Status;
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