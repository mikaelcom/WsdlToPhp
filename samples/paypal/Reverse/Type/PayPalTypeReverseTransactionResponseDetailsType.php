<?php
/**
 * Class file for PayPalTypeReverseTransactionResponseDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeReverseTransactionResponseDetailsType
 * @date 14/07/2012
 */
class PayPalTypeReverseTransactionResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The ReverseTransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * 	- documentation : Unique transaction identifier of the reversal transaction created. Character length and limitations:17 single-byte characters
	 * @var PayPalTypeTransactionId
	 */
	public $ReverseTransactionID;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Status of reversal request. Required
	 * @var string
	 */
	public $Status;
	/**
	 * Constructor
	 * @param PayPalTypeTransactionId ReverseTransactionID
	 * @param string Status
	 * @return PayPalTypeReverseTransactionResponseDetailsType
	 */
	public function __construct($_ReverseTransactionID = null,$_Status)
	{
		parent::__construct(array('ReverseTransactionID'=>$_ReverseTransactionID,'Status'=>$_Status));
	}
	/**
	 * Set ReverseTransactionID
	 * @param TransactionId ReverseTransactionID
	 * @return TransactionId
	 */
	public function setReverseTransactionID($_ReverseTransactionID)
	{
		return ($this->ReverseTransactionID = PayPalTypeTransactionId::valueIsValid($_ReverseTransactionID)?$_ReverseTransactionID:null);
	}
	/**
	 * Get ReverseTransactionID
	 * @return PayPalTypeTransactionId
	 */
	public function getReverseTransactionID()
	{
		return $this->ReverseTransactionID;
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