<?php
/**
 * Class file for SOPhoneExchangeTypeProviders
 * @date 08/07/2012
 */
/**
 * Class SOPhoneExchangeTypeProviders
 * @date 08/07/2012
 */
class SOPhoneExchangeTypeProviders extends SOPhoneExchangeWsdlClass
{
	/**
	 * The Provider
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOPhoneExchangeTypeProvider
	 */
	public $Provider;
	/**
	 * The myProviders
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPhoneExchangeTypeArrayOfAnyType
	 */
	public $myProviders;
	/**
	 * Constructor
	 * @param SOPhoneExchangeTypeProvider Provider
	 * @param SOPhoneExchangeTypeArrayOfAnyType myProviders
	 * @return SOPhoneExchangeTypeProviders
	 */
	public function __construct($_Provider = null,$_myProviders = null)
	{
		parent::__construct(array('Provider'=>$_Provider,'myProviders'=>new SOPhoneExchangeTypeArrayOfAnyType($_myProviders)));
	}
	/**
	 * Set Provider
	 * @param Provider Provider
	 * @return Provider
	 */
	public function setProvider($_Provider)
	{
		return ($this->Provider = $_Provider);
	}
	/**
	 * Get Provider
	 * @return SOPhoneExchangeTypeProvider
	 */
	public function getProvider()
	{
		return $this->Provider;
	}
	/**
	 * Set myProviders
	 * @param ArrayOfAnyType myProviders
	 * @return ArrayOfAnyType
	 */
	public function setMyProviders($_myProviders)
	{
		return ($this->myProviders = $_myProviders);
	}
	/**
	 * Get myProviders
	 * @return SOPhoneExchangeTypeArrayOfAnyType
	 */
	public function getMyProviders()
	{
		return $this->myProviders;
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