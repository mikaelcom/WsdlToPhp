<?php
/**
 * Class file for PayPalTypeIncentiveAppliedDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeIncentiveAppliedDetailsType
 * Documentation : Details of incentive application on individual bucket/item.
 * @date 14/07/2012
 */
class PayPalTypeIncentiveAppliedDetailsType extends PayPalWsdlClass
{
	/**
	 * The PaymentRequestID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : PaymentRequestID uniquely identifies a bucket. It is the "bucket id" in the world of EC API.
	 * @var string
	 */
	public $PaymentRequestID;
	/**
	 * The ItemId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The item id passed through by the merchant.
	 * @var string
	 */
	public $ItemId;
	/**
	 * The ExternalTxnId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The item transaction id passed through by the merchant.
	 * @var string
	 */
	public $ExternalTxnId;
	/**
	 * The DiscountAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Discount offerred for this bucket or item.
	 * @var PayPalTypeBasicAmountType
	 */
	public $DiscountAmount;
	/**
	 * The SubType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : SubType for coupon.
	 * @var string
	 */
	public $SubType;
	/**
	 * Constructor
	 * @param string PaymentRequestID
	 * @param string ItemId
	 * @param string ExternalTxnId
	 * @param PayPalTypeBasicAmountType DiscountAmount
	 * @param string SubType
	 * @return PayPalTypeIncentiveAppliedDetailsType
	 */
	public function __construct($_PaymentRequestID = null,$_ItemId = null,$_ExternalTxnId = null,$_DiscountAmount = null,$_SubType = null)
	{
		parent::__construct(array('PaymentRequestID'=>$_PaymentRequestID,'ItemId'=>$_ItemId,'ExternalTxnId'=>$_ExternalTxnId,'DiscountAmount'=>$_DiscountAmount,'SubType'=>$_SubType));
	}
	/**
	 * Set PaymentRequestID
	 * @param string PaymentRequestID
	 * @return string
	 */
	public function setPaymentRequestID($_PaymentRequestID)
	{
		return ($this->PaymentRequestID = $_PaymentRequestID);
	}
	/**
	 * Get PaymentRequestID
	 * @return string
	 */
	public function getPaymentRequestID()
	{
		return $this->PaymentRequestID;
	}
	/**
	 * Set ItemId
	 * @param string ItemId
	 * @return string
	 */
	public function setItemId($_ItemId)
	{
		return ($this->ItemId = $_ItemId);
	}
	/**
	 * Get ItemId
	 * @return string
	 */
	public function getItemId()
	{
		return $this->ItemId;
	}
	/**
	 * Set ExternalTxnId
	 * @param string ExternalTxnId
	 * @return string
	 */
	public function setExternalTxnId($_ExternalTxnId)
	{
		return ($this->ExternalTxnId = $_ExternalTxnId);
	}
	/**
	 * Get ExternalTxnId
	 * @return string
	 */
	public function getExternalTxnId()
	{
		return $this->ExternalTxnId;
	}
	/**
	 * Set DiscountAmount
	 * @param BasicAmountType DiscountAmount
	 * @return BasicAmountType
	 */
	public function setDiscountAmount($_DiscountAmount)
	{
		return ($this->DiscountAmount = $_DiscountAmount);
	}
	/**
	 * Get DiscountAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getDiscountAmount()
	{
		return $this->DiscountAmount;
	}
	/**
	 * Set SubType
	 * @param string SubType
	 * @return string
	 */
	public function setSubType($_SubType)
	{
		return ($this->SubType = $_SubType);
	}
	/**
	 * Get SubType
	 * @return string
	 */
	public function getSubType()
	{
		return $this->SubType;
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