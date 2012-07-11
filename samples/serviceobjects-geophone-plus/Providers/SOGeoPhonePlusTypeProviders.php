<?php
/**
 * Class file for SOGeoPhonePlusTypeProviders
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhonePlusTypeProviders
 * @date 08/07/2012
 */
class SOGeoPhonePlusTypeProviders extends SOGeoPhonePlusWsdlClass
{
	/**
	 * The Provider
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOGeoPhonePlusTypeProvider
	 */
	public $Provider;
	/**
	 * Constructor
	 * @param SOGeoPhonePlusTypeProvider Provider
	 * @return SOGeoPhonePlusTypeProviders
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
	 * @return SOGeoPhonePlusTypeProvider
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