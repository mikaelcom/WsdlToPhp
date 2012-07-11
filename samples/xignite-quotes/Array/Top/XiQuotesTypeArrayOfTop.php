<?php
/**
 * Class file for XiQuotesTypeArrayOfTop
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeArrayOfTop
 * @date 08/07/2012
 */
class XiQuotesTypeArrayOfTop extends XiQuotesWsdlClass
{
	/**
	 * The Top
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiQuotesTypeTop
	 */
	public $Top;
	/**
	 * Constructor
	 * @param XiQuotesTypeTop Top
	 * @return XiQuotesTypeArrayOfTop
	 */
	public function __construct($_Top = null)
	{
		parent::__construct(array('Top'=>$_Top));
	}
	/**
	 * Set Top
	 * @param Top Top
	 * @return Top
	 */
	public function setTop($_Top)
	{
		return ($this->Top = $_Top);
	}
	/**
	 * Get Top
	 * @return XiQuotesTypeTop
	 */
	public function getTop()
	{
		return $this->Top;
	}
	/**
	 * Returns the current element
	 * @see XiQuotesWsdlClass::current()
	 * @return XiQuotesTypeTop
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiQuotesWsdlClass::item()
	 * @param int
	 * @return XiQuotesTypeTop
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::first()
	 * @return XiQuotesTypeTop
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::last()
	 * @return XiQuotesTypeTop
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::offsetGet()
	 * @param int
	 * @return XiQuotesTypeTop
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Top'
	 */
	public function getAttributeName()
	{
		return 'Top';
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