<?php
/**
 * Class file for SPSitedataTypeArrayOf_sProperty
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeArrayOf_sProperty
 * @date 06/07/2012
 */
class SPSitedataTypeArrayOf_sProperty extends SPSitedataWsdlClass
{
	/**
	 * The _sProperty
	 * @var SPSitedataType_sProperty
	 */
	public $_sProperty;
	/**
	 * Constructor
	 * @param SPSitedataType_sProperty _sProperty
	 * @return SPSitedataTypeArrayOf_sProperty
	 */
	public function __construct($__sProperty = null)
	{
		parent::__construct(array('_sProperty'=>$__sProperty));
	}
	/**
	 * Set _sProperty
	 * @param _sProperty _sProperty
	 * @return _sProperty
	 */
	public function set_sProperty($__sProperty)
	{
		return ($this->_sProperty = $__sProperty);
	}
	/**
	 * Get _sProperty
	 * @return SPSitedataType_sProperty
	 */
	public function get_sProperty()
	{
		return $this->_sProperty;
	}
	/**
	 * Returns the current element
	 * @see SPSitedataWsdlClass::current()
	 * @return SPSitedataType_sProperty
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SPSitedataWsdlClass::item()
	 * @param int
	 * @return SPSitedataType_sProperty
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SPSitedataWsdlClass::first()
	 * @return SPSitedataType_sProperty
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SPSitedataWsdlClass::last()
	 * @return SPSitedataType_sProperty
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SPSitedataWsdlClass::offsetGet()
	 * @param int
	 * @return SPSitedataType_sProperty
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string '_sProperty'
	 */
	public function getAttributeName()
	{
		return '_sProperty';
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