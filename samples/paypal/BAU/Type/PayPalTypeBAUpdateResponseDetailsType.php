<?php
/**
 * Class file for PayPalTypeBAUpdateResponseDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBAUpdateResponseDetailsType
 * @date 14/07/2012
 */
class PayPalTypeBAUpdateResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The BillingAgreementID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $BillingAgreementID;
	/**
	 * The BillingAgreementDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $BillingAgreementDescription;
	/**
	 * The BillingAgreementStatus
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeMerchantPullStatusCodeType
	 */
	public $BillingAgreementStatus;
	/**
	 * The BillingAgreementCustom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $BillingAgreementCustom;
	/**
	 * The PayerInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypePayerInfoType
	 */
	public $PayerInfo;
	/**
	 * The BillingAgreementMax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBasicAmountType
	 */
	public $BillingAgreementMax;
	/**
	 * The BillingAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Customer's billing address. Optional If you have credit card mapped in your account then billing address of the credit card is returned otherwise your primary address is returned , PayPal returns this address in BAUpdateResponseDetails.
	 * @var PayPalTypeAddressType
	 */
	public $BillingAddress;
	/**
	 * Constructor
	 * @param string BillingAgreementID
	 * @param string BillingAgreementDescription
	 * @param PayPalTypeMerchantPullStatusCodeType BillingAgreementStatus
	 * @param string BillingAgreementCustom
	 * @param PayPalTypePayerInfoType PayerInfo
	 * @param PayPalTypeBasicAmountType BillingAgreementMax
	 * @param PayPalTypeAddressType BillingAddress
	 * @return PayPalTypeBAUpdateResponseDetailsType
	 */
	public function __construct($_BillingAgreementID,$_BillingAgreementDescription = null,$_BillingAgreementStatus,$_BillingAgreementCustom = null,$_PayerInfo,$_BillingAgreementMax = null,$_BillingAddress = null)
	{
		parent::__construct(array('BillingAgreementID'=>$_BillingAgreementID,'BillingAgreementDescription'=>$_BillingAgreementDescription,'BillingAgreementStatus'=>$_BillingAgreementStatus,'BillingAgreementCustom'=>$_BillingAgreementCustom,'PayerInfo'=>$_PayerInfo,'BillingAgreementMax'=>$_BillingAgreementMax,'BillingAddress'=>$_BillingAddress));
	}
	/**
	 * Set BillingAgreementID
	 * @param string BillingAgreementID
	 * @return string
	 */
	public function setBillingAgreementID($_BillingAgreementID)
	{
		return ($this->BillingAgreementID = $_BillingAgreementID);
	}
	/**
	 * Get BillingAgreementID
	 * @return string
	 */
	public function getBillingAgreementID()
	{
		return $this->BillingAgreementID;
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
	 * Set BillingAgreementStatus
	 * @param MerchantPullStatusCodeType BillingAgreementStatus
	 * @return MerchantPullStatusCodeType
	 */
	public function setBillingAgreementStatus($_BillingAgreementStatus)
	{
		return ($this->BillingAgreementStatus = PayPalTypeMerchantPullStatusCodeType::valueIsValid($_BillingAgreementStatus)?$_BillingAgreementStatus:null);
	}
	/**
	 * Get BillingAgreementStatus
	 * @return PayPalTypeMerchantPullStatusCodeType
	 */
	public function getBillingAgreementStatus()
	{
		return $this->BillingAgreementStatus;
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
	 * Set BillingAgreementMax
	 * @param BasicAmountType BillingAgreementMax
	 * @return BasicAmountType
	 */
	public function setBillingAgreementMax($_BillingAgreementMax)
	{
		return ($this->BillingAgreementMax = $_BillingAgreementMax);
	}
	/**
	 * Get BillingAgreementMax
	 * @return PayPalTypeBasicAmountType
	 */
	public function getBillingAgreementMax()
	{
		return $this->BillingAgreementMax;
	}
	/**
	 * Set BillingAddress
	 * @param AddressType BillingAddress
	 * @return AddressType
	 */
	public function setBillingAddress($_BillingAddress)
	{
		return ($this->BillingAddress = $_BillingAddress);
	}
	/**
	 * Get BillingAddress
	 * @return PayPalTypeAddressType
	 */
	public function getBillingAddress()
	{
		return $this->BillingAddress;
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