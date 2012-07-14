<?php
/**
 * Class file for PayPalTypeCreateBillingAgreementResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCreateBillingAgreementResponseType
 * @date 14/07/2012
 */
class PayPalTypeCreateBillingAgreementResponseType extends PayPalTypeAbstractResponseType
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
	 * Constructor
	 * @param string BillingAgreementID
	 * @return PayPalTypeCreateBillingAgreementResponseType
	 */
	public function __construct($_BillingAgreementID)
	{
		PayPalWsdlClass::__construct(array('BillingAgreementID'=>$_BillingAgreementID));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>