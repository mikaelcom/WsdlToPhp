<?php
/**
 * Class file for SOGeoPhoneTypeProviders
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhoneTypeProviders
 * @date 08/07/2012
 */
class SOGeoPhoneTypeProviders extends SOGeoPhoneWsdlClass
{
	/**
	 * The Provider
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOGeoPhoneTypeProvider
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
	 * @param SOGeoPhoneTypeProvider Provider
	 * @param SOGeoPhoneTypeArrayOfAnyType myProviders
	 * @return SOGeoPhoneTypeProviders
	 */
	public function __construct($_Provider = null,$_myProviders = null)
	{
		parent::__construct(array('Provider'=>$_Provider,'myProviders'=>new SOGeoPhoneTypeArrayOfAnyType($_myProviders)));
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
	 * @return SOGeoPhoneTypeProvider
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