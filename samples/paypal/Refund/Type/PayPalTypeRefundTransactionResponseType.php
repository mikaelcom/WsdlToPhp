<?php
/**
 * Class file for PayPalTypeRefundTransactionResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeRefundTransactionResponseType
 * @date 14/07/2012
 */
class PayPalTypeRefundTransactionResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The RefundTransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * 	- documentation : Unique transaction ID of the refund. Character length and limitations:17 single-byte characters
	 * @var PayPalTypeTransactionId
	 */
	public $RefundTransactionID;
	/**
	 * The NetRefundAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Amount subtracted from PayPal balance of original recipient of payment to make this refund
	 * @var PayPalTypeBasicAmountType
	 */
	public $NetRefundAmount;
	/**
	 * The FeeRefundAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Transaction fee refunded to original recipient of payment
	 * @var PayPalTypeBasicAmountType
	 */
	public $FeeRefundAmount;
	/**
	 * The GrossRefundAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Amount of money refunded to original payer
	 * @var PayPalTypeBasicAmountType
	 */
	public $GrossRefundAmount;
	/**
	 * The TotalRefundedAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Total of all previous refunds
	 * @var PayPalTypeBasicAmountType
	 */
	public $TotalRefundedAmount;
	/**
	 * The RefundInfo
	 * @var PayPalTypeRefundInfoType
	 */
	public $RefundInfo;
	/**
	 * The ReceiptData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Any general information like offer details that is reinstated or any other marketing data
	 * @var string
	 */
	public $ReceiptData;
	/**
	 * The MsgSubID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Return msgsubid back to merchant
	 * @var string
	 */
	public $MsgSubID;
	/**
	 * Constructor
	 * @param PayPalTypeTransactionId RefundTransactionID
	 * @param PayPalTypeBasicAmountType NetRefundAmount
	 * @param PayPalTypeBasicAmountType FeeRefundAmount
	 * @param PayPalTypeBasicAmountType GrossRefundAmount
	 * @param PayPalTypeBasicAmountType TotalRefundedAmount
	 * @param PayPalTypeRefundInfoType RefundInfo
	 * @param string ReceiptData
	 * @param string MsgSubID
	 * @return PayPalTypeRefundTransactionResponseType
	 */
	public function __construct($_RefundTransactionID = null,$_NetRefundAmount = null,$_FeeRefundAmount = null,$_GrossRefundAmount = null,$_TotalRefundedAmount = null,$_RefundInfo = null,$_ReceiptData = null,$_MsgSubID = null)
	{
		PayPalWsdlClass::__construct(array('RefundTransactionID'=>$_RefundTransactionID,'NetRefundAmount'=>$_NetRefundAmount,'FeeRefundAmount'=>$_FeeRefundAmount,'GrossRefundAmount'=>$_GrossRefundAmount,'TotalRefundedAmount'=>$_TotalRefundedAmount,'RefundInfo'=>$_RefundInfo,'ReceiptData'=>$_ReceiptData,'MsgSubID'=>$_MsgSubID));
	}
	/**
	 * Set RefundTransactionID
	 * @param TransactionId RefundTransactionID
	 * @return TransactionId
	 */
	public function setRefundTransactionID($_RefundTransactionID)
	{
		return ($this->RefundTransactionID = PayPalTypeTransactionId::valueIsValid($_RefundTransactionID)?$_RefundTransactionID:null);
	}
	/**
	 * Get RefundTransactionID
	 * @return PayPalTypeTransactionId
	 */
	public function getRefundTransactionID()
	{
		return $this->RefundTransactionID;
	}
	/**
	 * Set NetRefundAmount
	 * @param BasicAmountType NetRefundAmount
	 * @return BasicAmountType
	 */
	public function setNetRefundAmount($_NetRefundAmount)
	{
		return ($this->NetRefundAmount = $_NetRefundAmount);
	}
	/**
	 * Get NetRefundAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getNetRefundAmount()
	{
		return $this->NetRefundAmount;
	}
	/**
	 * Set FeeRefundAmount
	 * @param BasicAmountType FeeRefundAmount
	 * @return BasicAmountType
	 */
	public function setFeeRefundAmount($_FeeRefundAmount)
	{
		return ($this->FeeRefundAmount = $_FeeRefundAmount);
	}
	/**
	 * Get FeeRefundAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getFeeRefundAmount()
	{
		return $this->FeeRefundAmount;
	}
	/**
	 * Set GrossRefundAmount
	 * @param BasicAmountType GrossRefundAmount
	 * @return BasicAmountType
	 */
	public function setGrossRefundAmount($_GrossRefundAmount)
	{
		return ($this->GrossRefundAmount = $_GrossRefundAmount);
	}
	/**
	 * Get GrossRefundAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getGrossRefundAmount()
	{
		return $this->GrossRefundAmount;
	}
	/**
	 * Set TotalRefundedAmount
	 * @param BasicAmountType TotalRefundedAmount
	 * @return BasicAmountType
	 */
	public function setTotalRefundedAmount($_TotalRefundedAmount)
	{
		return ($this->TotalRefundedAmount = $_TotalRefundedAmount);
	}
	/**
	 * Get TotalRefundedAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getTotalRefundedAmount()
	{
		return $this->TotalRefundedAmount;
	}
	/**
	 * Set RefundInfo
	 * @param RefundInfoType RefundInfo
	 * @return RefundInfoType
	 */
	public function setRefundInfo($_RefundInfo)
	{
		return ($this->RefundInfo = $_RefundInfo);
	}
	/**
	 * Get RefundInfo
	 * @return PayPalTypeRefundInfoType
	 */
	public function getRefundInfo()
	{
		return $this->RefundInfo;
	}
	/**
	 * Set ReceiptData
	 * @param string ReceiptData
	 * @return string
	 */
	public function setReceiptData($_ReceiptData)
	{
		return ($this->ReceiptData = $_ReceiptData);
	}
	/**
	 * Get ReceiptData
	 * @return string
	 */
	public function getReceiptData()
	{
		return $this->ReceiptData;
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