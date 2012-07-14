<?php
/**
 * Class file for PayPalTypeBAUpdateRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBAUpdateRequestType
 * @date 14/07/2012
 */
class PayPalTypeBAUpdateRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The ReferenceID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $ReferenceID;
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
	 * 	- minOccurs : 0
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
	 * Constructor
	 * @param string ReferenceID
	 * @param string BillingAgreementDescription
	 * @param PayPalTypeMerchantPullStatusCodeType BillingAgreementStatus
	 * @param string BillingAgreementCustom
	 * @return PayPalTypeBAUpdateRequestType
	 */
	public function __construct($_ReferenceID,$_BillingAgreementDescription = null,$_BillingAgreementStatus = null,$_BillingAgreementCustom = null)
	{
		PayPalWsdlClass::__construct(array('ReferenceID'=>$_ReferenceID,'BillingAgreementDescription'=>$_BillingAgreementDescription,'BillingAgreementStatus'=>$_BillingAgreementStatus,'BillingAgreementCustom'=>$_BillingAgreementCustom));
	}
	/**
	 * Set ReferenceID
	 * @param string ReferenceID
	 * @return string
	 */
	public function setReferenceID($_ReferenceID)
	{
		return ($this->ReferenceID = $_ReferenceID);
	}
	/**
	 * Get ReferenceID
	 * @return string
	 */
	public function getReferenceID()
	{
		return $this->ReferenceID;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>