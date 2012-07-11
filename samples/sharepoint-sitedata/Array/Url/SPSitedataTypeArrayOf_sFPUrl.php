<?php
/**
 * Class file for SPSitedataTypeArrayOf_sFPUrl
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeArrayOf_sFPUrl
 * @date 06/07/2012
 */
class SPSitedataTypeArrayOf_sFPUrl extends SPSitedataWsdlClass
{
	/**
	 * The _sFPUrl
	 * @var SPSitedataType_sFPUrl
	 */
	public $_sFPUrl;
	/**
	 * Constructor
	 * @param SPSitedataType_sFPUrl _sFPUrl
	 * @return SPSitedataTypeArrayOf_sFPUrl
	 */
	public function __construct($__sFPUrl = null)
	{
		parent::__construct(array('_sFPUrl'=>$__sFPUrl));
	}
	/**
	 * Set _sFPUrl
	 * @param _sFPUrl _sFPUrl
	 * @return _sFPUrl
	 */
	public function set_sFPUrl($__sFPUrl)
	{
		return ($this->_sFPUrl = $__sFPUrl);
	}
	/**
	 * Get _sFPUrl
	 * @return SPSitedataType_sFPUrl
	 */
	public function get_sFPUrl()
	{
		return $this->_sFPUrl;
	}
	/**
	 * Returns the current element
	 * @see SPSitedataWsdlClass::current()
	 * @return SPSitedataType_sFPUrl
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SPSitedataWsdlClass::item()
	 * @param int
	 * @return SPSitedataType_sFPUrl
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SPSitedataWsdlClass::first()
	 * @return SPSitedataType_sFPUrl
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SPSitedataWsdlClass::last()
	 * @return SPSitedataType_sFPUrl
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SPSitedataWsdlClass::offsetGet()
	 * @param int
	 * @return SPSitedataType_sFPUrl
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string '_sFPUrl'
	 */
	public function getAttributeName()
	{
		return '_sFPUrl';
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