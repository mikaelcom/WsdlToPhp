<?php
/**
 * Class file for XiCurrenciesTypeArrayOfCountry
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeArrayOfCountry
 * @date 08/07/2012
 */
class XiCurrenciesTypeArrayOfCountry extends XiCurrenciesWsdlClass
{
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiCurrenciesTypeCountry
	 */
	public $Country;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCountry Country
	 * @return XiCurrenciesTypeArrayOfCountry
	 */
	public function __construct($_Country = null)
	{
		parent::__construct(array('Country'=>$_Country));
	}
	/**
	 * Set Country
	 * @param Country Country
	 * @return Country
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = $_Country);
	}
	/**
	 * Get Country
	 * @return XiCurrenciesTypeCountry
	 */
	public function getCountry()
	{
		return $this->Country;
	}
	/**
	 * Returns the current element
	 * @see XiCurrenciesWsdlClass::current()
	 * @return XiCurrenciesTypeCountry
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiCurrenciesWsdlClass::item()
	 * @param int
	 * @return XiCurrenciesTypeCountry
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::first()
	 * @return XiCurrenciesTypeCountry
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::last()
	 * @return XiCurrenciesTypeCountry
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiCurrenciesWsdlClass::offsetGet()
	 * @param int
	 * @return XiCurrenciesTypeCountry
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Country'
	 */
	public function getAttributeName()
	{
		return 'Country';
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