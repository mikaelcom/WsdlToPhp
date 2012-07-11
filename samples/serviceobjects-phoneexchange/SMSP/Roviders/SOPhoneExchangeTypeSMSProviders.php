<?php
/**
 * Class file for SOPhoneExchangeTypeSMSProviders
 * @date 08/07/2012
 */
/**
 * Class SOPhoneExchangeTypeSMSProviders
 * @date 08/07/2012
 */
class SOPhoneExchangeTypeSMSProviders extends SOPhoneExchangeWsdlClass
{
	/**
	 * The SMSProvider
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOPhoneExchangeTypeSMSProvider
	 */
	public $SMSProvider;
	/**
	 * Constructor
	 * @param SOPhoneExchangeTypeSMSProvider SMSProvider
	 * @return SOPhoneExchangeTypeSMSProviders
	 */
	public function __construct($_SMSProvider = null)
	{
		parent::__construct(array('SMSProvider'=>$_SMSProvider));
	}
	/**
	 * Set SMSProvider
	 * @param SMSProvider SMSProvider
	 * @return SMSProvider
	 */
	public function setSMSProvider($_SMSProvider)
	{
		return ($this->SMSProvider = $_SMSProvider);
	}
	/**
	 * Get SMSProvider
	 * @return SOPhoneExchangeTypeSMSProvider
	 */
	public function getSMSProvider()
	{
		return $this->SMSProvider;
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