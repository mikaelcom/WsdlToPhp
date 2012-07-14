<?php
/**
 * Class file for PayPalTypeDoUATPAuthorizationRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoUATPAuthorizationRequestType
 * @date 14/07/2012
 */
class PayPalTypeDoUATPAuthorizationRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The UATPDetails
	 * @var PayPalTypeUATPDetailsType
	 */
	public $UATPDetails;
	/**
	 * The TransactionEntity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Type of transaction to authorize. The only allowable value is Order, which means that the transaction represents a customer order that can be fulfilled over 29 days. Optional
	 * @var PayPalTypeTransactionEntityType
	 */
	public $TransactionEntity;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Amount to authorize. Required Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * @var PayPalTypeBasicAmountType
	 */
	public $Amount;
	/**
	 * The InvoiceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Invoice ID. A pass through.
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The MsgSubID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Unique id for each API request to prevent duplicate payments. Optional Character length and limits: 38 single-byte characters maximum.
	 * @var string
	 */
	public $MsgSubID;
	/**
	 * Constructor
	 * @param PayPalTypeUATPDetailsType UATPDetails
	 * @param PayPalTypeTransactionEntityType TransactionEntity
	 * @param PayPalTypeBasicAmountType Amount
	 * @param string InvoiceID
	 * @param string MsgSubID
	 * @return PayPalTypeDoUATPAuthorizationRequestType
	 */
	public function __construct($_UATPDetails = null,$_TransactionEntity = null,$_Amount,$_InvoiceID = null,$_MsgSubID = null)
	{
		PayPalWsdlClass::__construct(array('UATPDetails'=>$_UATPDetails,'TransactionEntity'=>$_TransactionEntity,'Amount'=>$_Amount,'InvoiceID'=>$_InvoiceID,'MsgSubID'=>$_MsgSubID));
	}
	/**
	 * Set UATPDetails
	 * @param UATPDetailsType UATPDetails
	 * @return UATPDetailsType
	 */
	public function setUATPDetails($_UATPDetails)
	{
		return ($this->UATPDetails = $_UATPDetails);
	}
	/**
	 * Get UATPDetails
	 * @return PayPalTypeUATPDetailsType
	 */
	public function getUATPDetails()
	{
		return $this->UATPDetails;
	}
	/**
	 * Set TransactionEntity
	 * @param TransactionEntityType TransactionEntity
	 * @return TransactionEntityType
	 */
	public function setTransactionEntity($_TransactionEntity)
	{
		return ($this->TransactionEntity = PayPalTypeTransactionEntityType::valueIsValid($_TransactionEntity)?$_TransactionEntity:null);
	}
	/**
	 * Get TransactionEntity
	 * @return PayPalTypeTransactionEntityType
	 */
	public function getTransactionEntity()
	{
		return $this->TransactionEntity;
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
	 * Set InvoiceID
	 * @param string InvoiceID
	 * @return string
	 */
	public function setInvoiceID($_InvoiceID)
	{
		return ($this->InvoiceID = $_InvoiceID);
	}
	/**
	 * Get InvoiceID
	 * @return string
	 */
	public function getInvoiceID()
	{
		return $this->InvoiceID;
	}
	/**
	 * Set MsgSubID
	 * @param string MsgSubID
	 * @return string
	 */
	public function setMsgSubID($_MsgSubID)
	{
		return ($this->MsgSubID = $_MsgSubID);
	}
	/**
	 * Get MsgSubID
	 * @return string
	 */
	public function getMsgSubID()
	{
		return $this->MsgSubID;
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