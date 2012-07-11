<?php
/**
 * Class file for XiHistoricalTypeArrayOfTop
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeArrayOfTop
 * @date 08/07/2012
 */
class XiHistoricalTypeArrayOfTop extends XiHistoricalWsdlClass
{
	/**
	 * The Top
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHistoricalTypeTop
	 */
	public $Top;
	/**
	 * Constructor
	 * @param XiHistoricalTypeTop Top
	 * @return XiHistoricalTypeArrayOfTop
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
	 * @return XiHistoricalTypeTop
	 */
	public function getTop()
	{
		return $this->Top;
	}
	/**
	 * Returns the current element
	 * @see XiHistoricalWsdlClass::current()
	 * @return XiHistoricalTypeTop
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHistoricalWsdlClass::item()
	 * @param int
	 * @return XiHistoricalTypeTop
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::first()
	 * @return XiHistoricalTypeTop
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::last()
	 * @return XiHistoricalTypeTop
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::offsetGet()
	 * @param int
	 * @return XiHistoricalTypeTop
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