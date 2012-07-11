<?php
/**
 * Class file for XiCalendarTypeArrayOfCountryCode
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeArrayOfCountryCode
 * @date 08/07/2012
 */
class XiCalendarTypeArrayOfCountryCode extends XiCalendarWsdlClass
{
	/**
	 * The CountryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCalendarTypeCountryCode
	 */
	public $CountryCode;
	/**
	 * Constructor
	 * @param XiCalendarTypeCountryCode CountryCode
	 * @return XiCalendarTypeArrayOfCountryCode
	 */
	public function __construct($_CountryCode = null)
	{
		parent::__construct(array('CountryCode'=>$_CountryCode));
	}
	/**
	 * Set CountryCode
	 * @param CountryCode CountryCode
	 * @return CountryCode
	 */
	public function setCountryCode($_CountryCode)
	{
		return ($this->CountryCode = $_CountryCode);
	}
	/**
	 * Get CountryCode
	 * @return XiCalendarTypeCountryCode
	 */
	public function getCountryCode()
	{
		return $this->CountryCode;
	}
	/**
	 * Returns the current element
	 * @see XiCalendarWsdlClass::current()
	 * @return XiCalendarTypeCountryCode
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCalendarWsdlClass::item()
	 * @param int
	 * @return XiCalendarTypeCountryCode
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCalendarWsdlClass::first()
	 * @return XiCalendarTypeCountryCode
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCalendarWsdlClass::last()
	 * @return XiCalendarTypeCountryCode
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCalendarWsdlClass::offsetGet()
	 * @param int
	 * @return XiCalendarTypeCountryCode
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'CountryCode'
	 */
	public function getAttributeName()
	{
		return 'CountryCode';
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