<?php
/**
 * Class file for XiCalendarTypeCountryCode
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeCountryCode
 * @date 08/07/2012
 */
class XiCalendarTypeCountryCode extends XiCalendarTypeAbstractEconodayObject
{
	/**
	 * The CountryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryCode;
	/**
	 * The CountryName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryName;
	/**
	 * The IsInternational
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsInternational;
	/**
	 * Constructor
	 * @param string CountryCode
	 * @param string CountryName
	 * @param boolean IsInternational
	 * @return XiCalendarTypeCountryCode
	 */
	public function __construct($_CountryCode = null,$_CountryName = null,$_IsInternational)
	{
		XiCalendarWsdlClass::__construct(array('CountryCode'=>$_CountryCode,'CountryName'=>$_CountryName,'IsInternational'=>$_IsInternational));
	}
	/**
	 * Set CountryCode
	 * @param string CountryCode
	 * @return string
	 */
	public function setCountryCode($_CountryCode)
	{
		return ($this->CountryCode = $_CountryCode);
	}
	/**
	 * Get CountryCode
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->CountryCode;
	}
	/**
	 * Set CountryName
	 * @param string CountryName
	 * @return string
	 */
	public function setCountryName($_CountryName)
	{
		return ($this->CountryName = $_CountryName);
	}
	/**
	 * Get CountryName
	 * @return string
	 */
	public function getCountryName()
	{
		return $this->CountryName;
	}
	/**
	 * Set IsInternational
	 * @param boolean IsInternational
	 * @return boolean
	 */
	public function setIsInternational($_IsInternational)
	{
		return ($this->IsInternational = $_IsInternational);
	}
	/**
	 * Get IsInternational
	 * @return boolean
	 */
	public function getIsInternational()
	{
		return $this->IsInternational;
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