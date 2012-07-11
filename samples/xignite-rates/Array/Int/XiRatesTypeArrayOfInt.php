<?php
/**
 * Class file for XiRatesTypeArrayOfInt
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeArrayOfInt
 * @date 08/07/2012
 */
class XiRatesTypeArrayOfInt extends XiRatesWsdlClass
{
	/**
	 * The int
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var int
	 */
	public $int;
	/**
	 * Constructor
	 * @param int int
	 * @return XiRatesTypeArrayOfInt
	 */
	public function __construct($_int = null)
	{
		parent::__construct(array('int'=>$_int));
	}
	/**
	 * Set int
	 * @param int int
	 * @return int
	 */
	public function setInt($_int)
	{
		return ($this->int = $_int);
	}
	/**
	 * Get int
	 * @return int
	 */
	public function getInt()
	{
		return $this->int;
	}
	/**
	 * Returns the current element
	 * @see XiRatesWsdlClass::current()
	 * @return int
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRatesWsdlClass::item()
	 * @param int
	 * @return int
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::first()
	 * @return int
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::last()
	 * @return int
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRatesWsdlClass::offsetGet()
	 * @param int
	 * @return int
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'int'
	 */
	public function getAttributeName()
	{
		return 'int';
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