<?php
/**
 * Class file for XiRatesTypeArrayOfRate
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeArrayOfRate
 * @date 08/07/2012
 */
class XiRatesTypeArrayOfRate extends XiRatesWsdlClass
{
	/**
	 * The Rate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRatesTypeRate
	 */
	public $Rate;
	/**
	 * Constructor
	 * @param XiRatesTypeRate Rate
	 * @return XiRatesTypeArrayOfRate
	 */
	public function __construct($_Rate = null)
	{
		parent::__construct(array('Rate'=>$_Rate));
	}
	/**
	 * Set Rate
	 * @param Rate Rate
	 * @return Rate
	 */
	public function setRate($_Rate)
	{
		return ($this->Rate = $_Rate);
	}
	/**
	 * Get Rate
	 * @return XiRatesTypeRate
	 */
	public function getRate()
	{
		return $this->Rate;
	}
	/**
	 * Returns the current element
	 * @see XiRatesWsdlClass::current()
	 * @return XiRatesTypeRate
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRatesWsdlClass::item()
	 * @param int
	 * @return XiRatesTypeRate
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::first()
	 * @return XiRatesTypeRate
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::last()
	 * @return XiRatesTypeRate
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::offsetGet()
	 * @param int
	 * @return XiRatesTypeRate
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Rate'
	 */
	public function getAttributeName()
	{
		return 'Rate';
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