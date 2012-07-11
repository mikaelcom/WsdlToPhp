<?php
/**
 * Class file for XiQuotesTypeArrayOfBar
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeArrayOfBar
 * @date 08/07/2012
 */
class XiQuotesTypeArrayOfBar extends XiQuotesWsdlClass
{
	/**
	 * The Bar
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiQuotesTypeBar
	 */
	public $Bar;
	/**
	 * Constructor
	 * @param XiQuotesTypeBar Bar
	 * @return XiQuotesTypeArrayOfBar
	 */
	public function __construct($_Bar = null)
	{
		parent::__construct(array('Bar'=>$_Bar));
	}
	/**
	 * Set Bar
	 * @param Bar Bar
	 * @return Bar
	 */
	public function setBar($_Bar)
	{
		return ($this->Bar = $_Bar);
	}
	/**
	 * Get Bar
	 * @return XiQuotesTypeBar
	 */
	public function getBar()
	{
		return $this->Bar;
	}
	/**
	 * Returns the current element
	 * @see XiQuotesWsdlClass::current()
	 * @return XiQuotesTypeBar
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiQuotesWsdlClass::item()
	 * @param int
	 * @return XiQuotesTypeBar
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::first()
	 * @return XiQuotesTypeBar
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::last()
	 * @return XiQuotesTypeBar
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::offsetGet()
	 * @param int
	 * @return XiQuotesTypeBar
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Bar'
	 */
	public function getAttributeName()
	{
		return 'Bar';
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