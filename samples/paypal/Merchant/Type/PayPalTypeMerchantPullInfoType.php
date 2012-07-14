<?php
/**
 * Class file for PayPalTypeMerchantPullInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeMerchantPullInfoType
 * Documentation : MerchantPullInfoType Information about the merchant pull.
 * @date 14/07/2012
 */
class PayPalTypeMerchantPullInfoType extends PayPalWsdlClass
{
	/**
	 * The MpStatus
	 * Meta informations :
	 * 	- documentation : Current status of billing agreement
	 * @var PayPalTypeMerchantPullStatusCodeType
	 */
	public $MpStatus;
	/**
	 * The MpMax
	 * Meta informations :
	 * 	- documentation : Monthly maximum payment amount
	 * @var PayPalTypeBasicAmountType
	 */
	public $MpMax;
	/**
	 * The MpCustom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The value of the mp_custom variable that you specified in a FORM submission to PayPal during the creation or updating of a customer billing agreement
	 * @var string
	 */
	public $MpCustom;
	/**
	 * The Desc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The value of the mp_desc variable (description of goods or services) associated with the billing agreement
	 * @var string
	 */
	public $Desc;
	/**
	 * The Invoice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Invoice value as set by BillUserRequest API call
	 * @var string
	 */
	public $Invoice;
	/**
	 * The Custom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Custom field as set by BillUserRequest API call
	 * @var string
	 */
	public $Custom;
	/**
	 * The PaymentSourceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Note: This field is no longer used and is always empty.
	 * @var string
	 */
	public $PaymentSourceID;
	/**
	 * Constructor
	 * @param PayPalTypeMerchantPullStatusCodeType MpStatus
	 * @param PayPalTypeBasicAmountType MpMax
	 * @param string MpCustom
	 * @param string Desc
	 * @param string Invoice
	 * @param string Custom
	 * @param string PaymentSourceID
	 * @return PayPalTypeMerchantPullInfoType
	 */
	public function __construct($_MpStatus = null,$_MpMax = null,$_MpCustom = null,$_Desc = null,$_Invoice = null,$_Custom = null,$_PaymentSourceID = null)
	{
		parent::__construct(array('MpStatus'=>$_MpStatus,'MpMax'=>$_MpMax,'MpCustom'=>$_MpCustom,'Desc'=>$_Desc,'Invoice'=>$_Invoice,'Custom'=>$_Custom,'PaymentSourceID'=>$_PaymentSourceID));
	}
	/**
	 * Set MpStatus
	 * @param MerchantPullStatusCodeType MpStatus
	 * @return MerchantPullStatusCodeType
	 */
	public function setMpStatus($_MpStatus)
	{
		return ($this->MpStatus = PayPalTypeMerchantPullStatusCodeType::valueIsValid($_MpStatus)?$_MpStatus:null);
	}
	/**
	 * Get MpStatus
	 * @return PayPalTypeMerchantPullStatusCodeType
	 */
	public function getMpStatus()
	{
		return $this->MpStatus;
	}
	/**
	 * Set MpMax
	 * @param BasicAmountType MpMax
	 * @return BasicAmountType
	 */
	public function setMpMax($_MpMax)
	{
		return ($this->MpMax = $_MpMax);
	}
	/**
	 * Get MpMax
	 * @return PayPalTypeBasicAmountType
	 */
	public function getMpMax()
	{
		return $this->MpMax;
	}
	/**
	 * Set MpCustom
	 * @param string MpCustom
	 * @return string
	 */
	public function setMpCustom($_MpCustom)
	{
		return ($this->MpCustom = $_MpCustom);
	}
	/**
	 * Get MpCustom
	 * @return string
	 */
	public function getMpCustom()
	{
		return $this->MpCustom;
	}
	/**
	 * Set Desc
	 * @param string Desc
	 * @return string
	 */
	public function setDesc($_Desc)
	{
		return ($this->Desc = $_Desc);
	}
	/**
	 * Get Desc
	 * @return string
	 */
	public function getDesc()
	{
		return $this->Desc;
	}
	/**
	 * Set Invoice
	 * @param string Invoice
	 * @return string
	 */
	public function setInvoice($_Invoice)
	{
		return ($this->Invoice = $_Invoice);
	}
	/**
	 * Get Invoice
	 * @return string
	 */
	public function getInvoice()
	{
		return $this->Invoice;
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
	 * Set PaymentSourceID
	 * @param string PaymentSourceID
	 * @return string
	 */
	public function setPaymentSourceID($_PaymentSourceID)
	{
		return ($this->PaymentSourceID = $_PaymentSourceID);
	}
	/**
	 * Get PaymentSourceID
	 * @return string
	 */
	public function getPaymentSourceID()
	{
		return $this->PaymentSourceID;
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