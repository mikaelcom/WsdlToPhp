<?php
/**
 * Class file for SOGeoPhoneTypeProviders_V2
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhoneTypeProviders_V2
 * @date 08/07/2012
 */
class SOGeoPhoneTypeProviders_V2 extends SOGeoPhoneWsdlClass
{
	/**
	 * The Provider
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOGeoPhoneTypeProvider_V2
	 */
	public $Provider;
	/**
	 * The myProviders
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoPhoneTypeArrayOfAnyType
	 */
	public $myProviders;
	/**
	 * Constructor
	 * @param SOGeoPhoneTypeProvider_V2 Provider
	 * @param SOGeoPhoneTypeArrayOfAnyType myProviders
	 * @return SOGeoPhoneTypeProviders_V2
	 */
	public function __construct($_Provider = null,$_myProviders = null)
	{
		parent::__construct(array('Provider'=>$_Provider,'myProviders'=>new SOGeoPhoneTypeArrayOfAnyType($_myProviders)));
	}
	/**
	 * Set Provider
	 * @param Provider_V2 Provider
	 * @return Provider_V2
	 */
	public function setProvider($_Provider)
	{
		return ($this->Provider = $_Provider);
	}
	/**
	 * Get Provider
	 * @return SOGeoPhoneTypeProvider_V2
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
	 * @return SOGeoPhoneTypeArrayOfAnyType
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