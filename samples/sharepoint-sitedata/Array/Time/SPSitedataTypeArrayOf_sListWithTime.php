<?php
/**
 * Class file for SPSitedataTypeArrayOf_sListWithTime
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeArrayOf_sListWithTime
 * @date 06/07/2012
 */
class SPSitedataTypeArrayOf_sListWithTime extends SPSitedataWsdlClass
{
	/**
	 * The _sListWithTime
	 * @var SPSitedataType_sListWithTime
	 */
	public $_sListWithTime;
	/**
	 * Constructor
	 * @param SPSitedataType_sListWithTime _sListWithTime
	 * @return SPSitedataTypeArrayOf_sListWithTime
	 */
	public function __construct($__sListWithTime = null)
	{
		parent::__construct(array('_sListWithTime'=>$__sListWithTime));
	}
	/**
	 * Set _sListWithTime
	 * @param _sListWithTime _sListWithTime
	 * @return _sListWithTime
	 */
	public function set_sListWithTime($__sListWithTime)
	{
		return ($this->_sListWithTime = $__sListWithTime);
	}
	/**
	 * Get _sListWithTime
	 * @return SPSitedataType_sListWithTime
	 */
	public function get_sListWithTime()
	{
		return $this->_sListWithTime;
	}
	/**
	 * Returns the current element
	 * @see SPSitedataWsdlClass::current()
	 * @return SPSitedataType_sListWithTime
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SPSitedataWsdlClass::item()
	 * @param int
	 * @return SPSitedataType_sListWithTime
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SPSitedataWsdlClass::first()
	 * @return SPSitedataType_sListWithTime
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SPSitedataWsdlClass::last()
	 * @return SPSitedataType_sListWithTime
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SPSitedataWsdlClass::offsetGet()
	 * @param int
	 * @return SPSitedataType_sListWithTime
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string '_sListWithTime'
	 */
	public function getAttributeName()
	{
		return '_sListWithTime';
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