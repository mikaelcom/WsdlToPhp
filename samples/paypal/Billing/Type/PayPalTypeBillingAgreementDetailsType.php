<?php
/**
 * Class file for PayPalTypeBillingAgreementDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBillingAgreementDetailsType
 * @date 14/07/2012
 */
class PayPalTypeBillingAgreementDetailsType extends PayPalWsdlClass
{
	/**
	 * The BillingType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBillingCodeType
	 */
	public $BillingType;
	/**
	 * The BillingAgreementDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Only needed for AutoBill billinng type.
	 * @var string
	 */
	public $BillingAgreementDescription;
	/**
	 * The PaymentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeMerchantPullPaymentCodeType
	 */
	public $PaymentType;
	/**
	 * The BillingAgreementCustom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Custom annotation field for your exclusive use.
	 * @var string
	 */
	public $BillingAgreementCustom;
	/**
	 * Constructor
	 * @param PayPalTypeBillingCodeType BillingType
	 * @param string BillingAgreementDescription
	 * @param PayPalTypeMerchantPullPaymentCodeType PaymentType
	 * @param string BillingAgreementCustom
	 * @return PayPalTypeBillingAgreementDetailsType
	 */
	public function __construct($_BillingType,$_BillingAgreementDescription = null,$_PaymentType = null,$_BillingAgreementCustom = null)
	{
		parent::__construct(array('BillingType'=>$_BillingType,'BillingAgreementDescription'=>$_BillingAgreementDescription,'PaymentType'=>$_PaymentType,'BillingAgreementCustom'=>$_BillingAgreementCustom));
	}
	/**
	 * Set BillingType
	 * @param BillingCodeType BillingType
	 * @return BillingCodeType
	 */
	public function setBillingType($_BillingType)
	{
		return ($this->BillingType = PayPalTypeBillingCodeType::valueIsValid($_BillingType)?$_BillingType:null);
	}
	/**
	 * Get BillingType
	 * @return PayPalTypeBillingCodeType
	 */
	public function getBillingType()
	{
		return $this->BillingType;
	}
	/**
	 * Set BillingAgreementDescription
	 * @param string BillingAgreementDescription
	 * @return string
	 */
	public function setBillingAgreementDescription($_BillingAgreementDescription)
	{
		return ($this->BillingAgreementDescription = $_BillingAgreementDescription);
	}
	/**
	 * Get BillingAgreementDescription
	 * @return string
	 */
	public function getBillingAgreementDescription()
	{
		return $this->BillingAgreementDescription;
	}
	/**
	 * Set PaymentType
	 * @param MerchantPullPaymentCodeType PaymentType
	 * @return MerchantPullPaymentCodeType
	 */
	public function setPaymentType($_PaymentType)
	{
		return ($this->PaymentType = PayPalTypeMerchantPullPaymentCodeType::valueIsValid($_PaymentType)?$_PaymentType:null);
	}
	/**
	 * Get PaymentType
	 * @return PayPalTypeMerchantPullPaymentCodeType
	 */
	public function getPaymentType()
	{
		return $this->PaymentType;
	}
	/**
	 * Set BillingAgreementCustom
	 * @param string BillingAgreementCustom
	 * @return string
	 */
	public function setBillingAgreementCustom($_BillingAgreementCustom)
	{
		return ($this->BillingAgreementCustom = $_BillingAgreementCustom);
	}
	/**
	 * Get BillingAgreementCustom
	 * @return string
	 */
	public function getBillingAgreementCustom()
	{
		return $this->BillingAgreementCustom;
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