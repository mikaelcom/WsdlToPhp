<?php
/**
 * Class file for SOPhoneExchangeTypeSMSExchangeInfo
 * @date 08/07/2012
 */
/**
 * Class SOPhoneExchangeTypeSMSExchangeInfo
 * @date 08/07/2012
 */
class SOPhoneExchangeTypeSMSExchangeInfo extends SOPhoneExchangeWsdlClass
{
	/**
	 * The SMSProviders
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPhoneExchangeTypeSMSProviders
	 */
	public $SMSProviders;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPhoneExchangeTypeErr
	 */
	public $Error;
	/**
	 * Constructor
	 * @param SOPhoneExchangeTypeSMSProviders SMSProviders
	 * @param SOPhoneExchangeTypeErr Error
	 * @return SOPhoneExchangeTypeSMSExchangeInfo
	 */
	public function __construct($_SMSProviders = null,$_Error = null)
	{
		parent::__construct(array('SMSProviders'=>$_SMSProviders,'Error'=>$_Error));
	}
	/**
	 * Set SMSProviders
	 * @param SMSProviders SMSProviders
	 * @return SMSProviders
	 */
	public function setSMSProviders($_SMSProviders)
	{
		return ($this->SMSProviders = $_SMSProviders);
	}
	/**
	 * Get SMSProviders
	 * @return SOPhoneExchangeTypeSMSProviders
	 */
	public function getSMSProviders()
	{
		return $this->SMSProviders;
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOPhoneExchangeTypeErr
	 */
	public function getError()
	{
		return $this->Error;
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