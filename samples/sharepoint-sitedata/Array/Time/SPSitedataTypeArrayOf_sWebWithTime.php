<?php
/**
 * Class file for SPSitedataTypeArrayOf_sWebWithTime
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeArrayOf_sWebWithTime
 * @date 06/07/2012
 */
class SPSitedataTypeArrayOf_sWebWithTime extends SPSitedataWsdlClass
{
	/**
	 * The _sWebWithTime
	 * @var SPSitedataType_sWebWithTime
	 */
	public $_sWebWithTime;
	/**
	 * Constructor
	 * @param SPSitedataType_sWebWithTime _sWebWithTime
	 * @return SPSitedataTypeArrayOf_sWebWithTime
	 */
	public function __construct($__sWebWithTime = null)
	{
		parent::__construct(array('_sWebWithTime'=>$__sWebWithTime));
	}
	/**
	 * Set _sWebWithTime
	 * @param _sWebWithTime _sWebWithTime
	 * @return _sWebWithTime
	 */
	public function set_sWebWithTime($__sWebWithTime)
	{
		return ($this->_sWebWithTime = $__sWebWithTime);
	}
	/**
	 * Get _sWebWithTime
	 * @return SPSitedataType_sWebWithTime
	 */
	public function get_sWebWithTime()
	{
		return $this->_sWebWithTime;
	}
	/**
	 * Returns the current element
	 * @see SPSitedataWsdlClass::current()
	 * @return SPSitedataType_sWebWithTime
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SPSitedataWsdlClass::item()
	 * @param int
	 * @return SPSitedataType_sWebWithTime
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SPSitedataWsdlClass::first()
	 * @return SPSitedataType_sWebWithTime
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SPSitedataWsdlClass::last()
	 * @return SPSitedataType_sWebWithTime
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SPSitedataWsdlClass::offsetGet()
	 * @param int
	 * @return SPSitedataType_sWebWithTime
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string '_sWebWithTime'
	 */
	public function getAttributeName()
	{
		return '_sWebWithTime';
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