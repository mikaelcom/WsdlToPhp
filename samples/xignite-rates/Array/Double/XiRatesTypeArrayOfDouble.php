<?php
/**
 * Class file for XiRatesTypeArrayOfDouble
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeArrayOfDouble
 * @date 08/07/2012
 */
class XiRatesTypeArrayOfDouble extends XiRatesWsdlClass
{
	/**
	 * The double
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var double
	 */
	public $double;
	/**
	 * Constructor
	 * @param double double
	 * @return XiRatesTypeArrayOfDouble
	 */
	public function __construct($_double = null)
	{
		parent::__construct(array('double'=>$_double));
	}
	/**
	 * Set double
	 * @param double double
	 * @return double
	 */
	public function setDouble($_double)
	{
		return ($this->double = $_double);
	}
	/**
	 * Get double
	 * @return double
	 */
	public function getDouble()
	{
		return $this->double;
	}
	/**
	 * Returns the current element
	 * @see XiRatesWsdlClass::current()
	 * @return double
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRatesWsdlClass::item()
	 * @param int
	 * @return double
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::first()
	 * @return double
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::last()
	 * @return double
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::offsetGet()
	 * @param int
	 * @return double
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'double'
	 */
	public function getAttributeName()
	{
		return 'double';
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