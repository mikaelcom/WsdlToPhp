<?php
/**
 * Class file for SPSitedataTypeArrayOf_sList
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeArrayOf_sList
 * @date 06/07/2012
 */
class SPSitedataTypeArrayOf_sList extends SPSitedataWsdlClass
{
	/**
	 * The _sList
	 * @var SPSitedataType_sList
	 */
	public $_sList;
	/**
	 * Constructor
	 * @param SPSitedataType_sList _sList
	 * @return SPSitedataTypeArrayOf_sList
	 */
	public function __construct($__sList = null)
	{
		parent::__construct(array('_sList'=>$__sList));
	}
	/**
	 * Set _sList
	 * @param _sList _sList
	 * @return _sList
	 */
	public function set_sList($__sList)
	{
		return ($this->_sList = $__sList);
	}
	/**
	 * Get _sList
	 * @return SPSitedataType_sList
	 */
	public function get_sList()
	{
		return $this->_sList;
	}
	/**
	 * Returns the current element
	 * @see SPSitedataWsdlClass::current()
	 * @return SPSitedataType_sList
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SPSitedataWsdlClass::item()
	 * @param int
	 * @return SPSitedataType_sList
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SPSitedataWsdlClass::first()
	 * @return SPSitedataType_sList
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SPSitedataWsdlClass::last()
	 * @return SPSitedataType_sList
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SPSitedataWsdlClass::offsetGet()
	 * @param int
	 * @return SPSitedataType_sList
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string '_sList'
	 */
	public function getAttributeName()
	{
		return '_sList';
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