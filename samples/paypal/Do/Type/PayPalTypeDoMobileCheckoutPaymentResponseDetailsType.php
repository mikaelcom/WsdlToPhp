<?php
/**
 * Class file for PayPalTypeDoMobileCheckoutPaymentResponseDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoMobileCheckoutPaymentResponseDetailsType
 * @date 14/07/2012
 */
class PayPalTypeDoMobileCheckoutPaymentResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The Custom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A free-form field for your own use, such as a tracking number or other value you want returned to you in IPN. Optional Character length and limitations: 256 single-byte alphanumeric characters
	 * @var string
	 */
	public $Custom;
	/**
	 * The InvoiceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Your own unique invoice or tracking number. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The PayerInfo
	 * Meta informations :
	 * 	- documentation : Information about the payer
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
	 * Constructor
	 * @param string Custom
	 * @param string InvoiceID
	 * @param PayPalTypePayerInfoType PayerInfo
	 * @param PayPalTypePaymentInfoType PaymentInfo
	 * @return PayPalTypeDoMobileCheckoutPaymentResponseDetailsType
	 */
	public function __construct($_Custom = null,$_InvoiceID = null,$_PayerInfo = null,$_PaymentInfo = null)
	{
		parent::__construct(array('Custom'=>$_Custom,'InvoiceID'=>$_InvoiceID,'PayerInfo'=>$_PayerInfo,'PaymentInfo'=>$_PaymentInfo));
	}
	/**
	 * Set Custom
	 * @param string Custom
	 * @return string
	 */
	public function setCustom($_Custom)
	{
		return ($this->Custom = $_Custom);
	}
	/**
	 * Get Custom
	 * @return string
	 */
	public function getCustom()
	{
		return $this->Custom;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>