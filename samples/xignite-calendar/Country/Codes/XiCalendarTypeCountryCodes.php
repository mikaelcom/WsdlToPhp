<?php
/**
 * Class file for XiCalendarTypeCountryCodes
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeCountryCodes
 * @date 08/07/2012
 */
class XiCalendarTypeCountryCodes extends XiCalendarTypeAbstractEconodayObject
{
	/**
	 * The CountryCodes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeArrayOfCountryCode
	 */
	public $CountryCodes;
	/**
	 * Constructor
	 * @param XiCalendarTypeArrayOfCountryCode CountryCodes
	 * @return XiCalendarTypeCountryCodes
	 */
	public function __construct($_CountryCodes = null)
	{
		XiCalendarWsdlClass::__construct(array('CountryCodes'=>new XiCalendarTypeArrayOfCountryCode($_CountryCodes)));
	}
	/**
	 * Set CountryCodes
	 * @param ArrayOfCountryCode CountryCodes
	 * @return ArrayOfCountryCode
	 */
	public function setCountryCodes($_CountryCodes)
	{
		return ($this->CountryCodes = $_CountryCodes);
	}
	/**
	 * Get CountryCodes
	 * @return XiCalendarTypeArrayOfCountryCode
	 */
	public function getCountryCodes()
	{
		return $this->CountryCodes;
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