<?php
/**
 * Class file for XiFundsTypeArrayOfTop
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeArrayOfTop
 * @date 08/07/2012
 */
class XiFundsTypeArrayOfTop extends XiFundsWsdlClass
{
	/**
	 * The Top
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundsTypeTop
	 */
	public $Top;
	/**
	 * Constructor
	 * @param XiFundsTypeTop Top
	 * @return XiFundsTypeArrayOfTop
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
	 * @return XiFundsTypeTop
	 */
	public function getTop()
	{
		return $this->Top;
	}
	/**
	 * Returns the current element
	 * @see XiFundsWsdlClass::current()
	 * @return XiFundsTypeTop
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundsWsdlClass::item()
	 * @param int
	 * @return XiFundsTypeTop
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundsWsdlClass::first()
	 * @return XiFundsTypeTop
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundsWsdlClass::last()
	 * @return XiFundsTypeTop
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundsWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundsTypeTop
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