<?php
/**
 * Class file for PayPalTypeIncentiveApplyIndicationType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeIncentiveApplyIndicationType
 * Documentation : Defines which bucket or item that the incentive should be applied to.
 * @date 14/07/2012
 */
class PayPalTypeIncentiveApplyIndicationType extends PayPalWsdlClass
{
	/**
	 * The PaymentRequestID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The Bucket ID that the incentive is applied to.
	 * @var string
	 */
	public $PaymentRequestID;
	/**
	 * The ItemId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The item that the incentive is applied to.
	 * @var string
	 */
	public $ItemId;
	/**
	 * Constructor
	 * @param string PaymentRequestID
	 * @param string ItemId
	 * @return PayPalTypeIncentiveApplyIndicationType
	 */
	public function __construct($_PaymentRequestID = null,$_ItemId = null)
	{
		parent::__construct(array('PaymentRequestID'=>$_PaymentRequestID,'ItemId'=>$_ItemId));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>