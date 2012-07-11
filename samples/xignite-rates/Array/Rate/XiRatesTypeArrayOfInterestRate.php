<?php
/**
 * Class file for XiRatesTypeArrayOfInterestRate
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeArrayOfInterestRate
 * @date 08/07/2012
 */
class XiRatesTypeArrayOfInterestRate extends XiRatesWsdlClass
{
	/**
	 * The InterestRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRatesTypeInterestRate
	 */
	public $InterestRate;
	/**
	 * Constructor
	 * @param XiRatesTypeInterestRate InterestRate
	 * @return XiRatesTypeArrayOfInterestRate
	 */
	public function __construct($_InterestRate = null)
	{
		parent::__construct(array('InterestRate'=>$_InterestRate));
	}
	/**
	 * Set InterestRate
	 * @param InterestRate InterestRate
	 * @return InterestRate
	 */
	public function setInterestRate($_InterestRate)
	{
		return ($this->InterestRate = $_InterestRate);
	}
	/**
	 * Get InterestRate
	 * @return XiRatesTypeInterestRate
	 */
	public function getInterestRate()
	{
		return $this->InterestRate;
	}
	/**
	 * Returns the current element
	 * @see XiRatesWsdlClass::current()
	 * @return XiRatesTypeInterestRate
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRatesWsdlClass::item()
	 * @param int
	 * @return XiRatesTypeInterestRate
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::first()
	 * @return XiRatesTypeInterestRate
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::last()
	 * @return XiRatesTypeInterestRate
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::offsetGet()
	 * @param int
	 * @return XiRatesTypeInterestRate
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'InterestRate'
	 */
	public function getAttributeName()
	{
		return 'InterestRate';
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