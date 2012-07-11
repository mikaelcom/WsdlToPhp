<?php
/**
 * Class file for XiRealTimeTypeArrayOfTop
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeArrayOfTop
 * @date 08/07/2012
 */
class XiRealTimeTypeArrayOfTop extends XiRealTimeWsdlClass
{
	/**
	 * The Top
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRealTimeTypeTop
	 */
	public $Top;
	/**
	 * Constructor
	 * @param XiRealTimeTypeTop Top
	 * @return XiRealTimeTypeArrayOfTop
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
	 * @return XiRealTimeTypeTop
	 */
	public function getTop()
	{
		return $this->Top;
	}
	/**
	 * Returns the current element
	 * @see XiRealTimeWsdlClass::current()
	 * @return XiRealTimeTypeTop
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRealTimeWsdlClass::item()
	 * @param int
	 * @return XiRealTimeTypeTop
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::first()
	 * @return XiRealTimeTypeTop
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::last()
	 * @return XiRealTimeTypeTop
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiRealTimeTypeTop
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