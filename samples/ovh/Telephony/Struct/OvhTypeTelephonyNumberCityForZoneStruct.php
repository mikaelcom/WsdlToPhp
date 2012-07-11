<?php
/**
 * Class file for OvhTypeTelephonyNumberCityForZoneStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyNumberCityForZoneStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyNumberCityForZoneStruct extends OvhWsdlClass
{
	/**
	 * The city
	 * @var string
	 */
	public $city;
	/**
	 * The postalCode
	 * @var string
	 */
	public $postalCode;
	/**
	 * Constructor
	 * @param string city
	 * @param string postalCode
	 * @return OvhTypeTelephonyNumberCityForZoneStruct
	 */
	public function __construct($_city = null,$_postalCode = null)
	{
		parent::__construct(array('city'=>$_city,'postalCode'=>$_postalCode));
	}
	/**
	 * Set city
	 * @param string city
	 * @return string
	 */
	public function setCity($_city)
	{
		return ($this->city = $_city);
	}
	/**
	 * Get city
	 * @return string
	 */
	public function getCity()
	{
		return $this->city;
	}
	/**
	 * Set postalCode
	 * @param string postalCode
	 * @return string
	 */
	public function setPostalCode($_postalCode)
	{
		return ($this->postalCode = $_postalCode);
	}
	/**
	 * Get postalCode
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->postalCode;
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