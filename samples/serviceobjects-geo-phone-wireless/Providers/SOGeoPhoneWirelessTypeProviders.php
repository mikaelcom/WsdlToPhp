<?php
/**
 * Class file for SOGeoPhoneWirelessTypeProviders
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhoneWirelessTypeProviders
 * @date 08/07/2012
 */
class SOGeoPhoneWirelessTypeProviders extends SOGeoPhoneWirelessWsdlClass
{
	/**
	 * The Provider
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOGeoPhoneWirelessTypeProvider
	 */
	public $Provider;
	/**
	 * Constructor
	 * @param SOGeoPhoneWirelessTypeProvider Provider
	 * @return SOGeoPhoneWirelessTypeProviders
	 */
	public function __construct($_Provider = null)
	{
		parent::__construct(array('Provider'=>$_Provider));
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
	 * @return SOGeoPhoneWirelessTypeProvider
	 */
	public function getProvider()
	{
		return $this->Provider;
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