<?php
/**
 * Class file for SOPhoneExchangeTypeExchangeInfo
 * @date 08/07/2012
 */
/**
 * Class SOPhoneExchangeTypeExchangeInfo
 * @date 08/07/2012
 */
class SOPhoneExchangeTypeExchangeInfo extends SOPhoneExchangeWsdlClass
{
	/**
	 * The Providers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPhoneExchangeTypeProviders
	 */
	public $Providers;
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
	 * @param SOPhoneExchangeTypeProviders Providers
	 * @param SOPhoneExchangeTypeErr Error
	 * @return SOPhoneExchangeTypeExchangeInfo
	 */
	public function __construct($_Providers = null,$_Error = null)
	{
		parent::__construct(array('Providers'=>$_Providers,'Error'=>$_Error));
	}
	/**
	 * Set Providers
	 * @param Providers Providers
	 * @return Providers
	 */
	public function setProviders($_Providers)
	{
		return ($this->Providers = $_Providers);
	}
	/**
	 * Get Providers
	 * @return SOPhoneExchangeTypeProviders
	 */
	public function getProviders()
	{
		return $this->Providers;
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