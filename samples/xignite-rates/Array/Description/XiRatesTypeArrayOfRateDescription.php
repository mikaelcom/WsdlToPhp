<?php
/**
 * Class file for XiRatesTypeArrayOfRateDescription
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeArrayOfRateDescription
 * @date 08/07/2012
 */
class XiRatesTypeArrayOfRateDescription extends XiRatesWsdlClass
{
	/**
	 * The RateDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRatesTypeRateDescription
	 */
	public $RateDescription;
	/**
	 * Constructor
	 * @param XiRatesTypeRateDescription RateDescription
	 * @return XiRatesTypeArrayOfRateDescription
	 */
	public function __construct($_RateDescription = null)
	{
		parent::__construct(array('RateDescription'=>$_RateDescription));
	}
	/**
	 * Set RateDescription
	 * @param RateDescription RateDescription
	 * @return RateDescription
	 */
	public function setRateDescription($_RateDescription)
	{
		return ($this->RateDescription = $_RateDescription);
	}
	/**
	 * Get RateDescription
	 * @return XiRatesTypeRateDescription
	 */
	public function getRateDescription()
	{
		return $this->RateDescription;
	}
	/**
	 * Returns the current element
	 * @see XiRatesWsdlClass::current()
	 * @return XiRatesTypeRateDescription
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRatesWsdlClass::item()
	 * @param int
	 * @return XiRatesTypeRateDescription
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::first()
	 * @return XiRatesTypeRateDescription
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::last()
	 * @return XiRatesTypeRateDescription
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::offsetGet()
	 * @param int
	 * @return XiRatesTypeRateDescription
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'RateDescription'
	 */
	public function getAttributeName()
	{
		return 'RateDescription';
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