<?php
/**
 * Class file for PayPalTypeDoAuthorizationRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoAuthorizationRequestType
 * @date 14/07/2012
 */
class PayPalTypeDoAuthorizationRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : The value of the order’s transaction identification number returned by a PayPal product. Required Character length and limits: 19 single-byte characters maximum
	 * @var string
	 */
	public $TransactionID;
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
	 * @param string TransactionID
	 * @param PayPalTypeTransactionEntityType TransactionEntity
	 * @param PayPalTypeBasicAmountType Amount
	 * @param string MsgSubID
	 * @return PayPalTypeDoAuthorizationRequestType
	 */
	public function __construct($_TransactionID,$_TransactionEntity = null,$_Amount,$_MsgSubID = null)
	{
		PayPalWsdlClass::__construct(array('TransactionID'=>$_TransactionID,'TransactionEntity'=>$_TransactionEntity,'Amount'=>$_Amount,'MsgSubID'=>$_MsgSubID));
	}
	/**
	 * Set TransactionID
	 * @param string TransactionID
	 * @return string
	 */
	public function setTransactionID($_TransactionID)
	{
		return ($this->TransactionID = $_TransactionID);
	}
	/**
	 * Get TransactionID
	 * @return string
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
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