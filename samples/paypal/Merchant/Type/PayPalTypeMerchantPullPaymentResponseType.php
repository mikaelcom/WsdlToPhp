<?php
/**
 * Class file for PayPalTypeMerchantPullPaymentResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeMerchantPullPaymentResponseType
 * Documentation : MerchantPullPaymentResponseType Response data from the merchant pull.
 * @date 14/07/2012
 */
class PayPalTypeMerchantPullPaymentResponseType extends PayPalWsdlClass
{
	/**
	 * The PayerInfo
	 * Meta informations :
	 * 	- documentation : information about the customer
	 * @var PayPalTypePayerInfoType
	 */
	public $PayerInfo;
	/**
	 * The PaymentInfo
	 * Meta informations :
	 * 	- documentation : Information about the transaction
	 * @var PayPalTypePaymentInfoType
	 */
	public $PaymentInfo;
	/**
	 * The MerchantPullInfo
	 * Meta informations :
	 * 	- documentation : Specific information about the preapproved payment
	 * @var PayPalTypeMerchantPullInfoType
	 */
	public $MerchantPullInfo;
	/**
	 * Constructor
	 * @param PayPalTypePayerInfoType PayerInfo
	 * @param PayPalTypePaymentInfoType PaymentInfo
	 * @param PayPalTypeMerchantPullInfoType MerchantPullInfo
	 * @return PayPalTypeMerchantPullPaymentResponseType
	 */
	public function __construct($_PayerInfo = null,$_PaymentInfo = null,$_MerchantPullInfo = null)
	{
		parent::__construct(array('PayerInfo'=>$_PayerInfo,'PaymentInfo'=>$_PaymentInfo,'MerchantPullInfo'=>$_MerchantPullInfo));
	}
	/**
	 * Set PayerInfo
	 * @param PayerInfoType PayerInfo
	 * @return PayerInfoType
	 */
	public function setPayerInfo($_PayerInfo)
	{
		return ($this->PayerInfo = $_PayerInfo);
	}
	/**
	 * Get PayerInfo
	 * @return PayPalTypePayerInfoType
	 */
	public function getPayerInfo()
	{
		return $this->PayerInfo;
	}
	/**
	 * Set PaymentInfo
	 * @param PaymentInfoType PaymentInfo
	 * @return PaymentInfoType
	 */
	public function setPaymentInfo($_PaymentInfo)
	{
		return ($this->PaymentInfo = $_PaymentInfo);
	}
	/**
	 * Get PaymentInfo
	 * @return PayPalTypePaymentInfoType
	 */
	public function getPaymentInfo()
	{
		return $this->PaymentInfo;
	}
	/**
	 * Set MerchantPullInfo
	 * @param MerchantPullInfoType MerchantPullInfo
	 * @return MerchantPullInfoType
	 */
	public function setMerchantPullInfo($_MerchantPullInfo)
	{
		return ($this->MerchantPullInfo = $_MerchantPullInfo);
	}
	/**
	 * Get MerchantPullInfo
	 * @return PayPalTypeMerchantPullInfoType
	 */
	public function getMerchantPullInfo()
	{
		return $this->MerchantPullInfo;
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