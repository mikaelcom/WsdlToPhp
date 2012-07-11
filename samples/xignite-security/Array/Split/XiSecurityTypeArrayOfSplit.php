<?php
/**
 * Class file for XiSecurityTypeArrayOfSplit
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeArrayOfSplit
 * @date 08/07/2012
 */
class XiSecurityTypeArrayOfSplit extends XiSecurityWsdlClass
{
	/**
	 * The Split
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiSecurityTypeSplit
	 */
	public $Split;
	/**
	 * Constructor
	 * @param XiSecurityTypeSplit Split
	 * @return XiSecurityTypeArrayOfSplit
	 */
	public function __construct($_Split = null)
	{
		parent::__construct(array('Split'=>$_Split));
	}
	/**
	 * Set Split
	 * @param Split Split
	 * @return Split
	 */
	public function setSplit($_Split)
	{
		return ($this->Split = $_Split);
	}
	/**
	 * Get Split
	 * @return XiSecurityTypeSplit
	 */
	public function getSplit()
	{
		return $this->Split;
	}
	/**
	 * Returns the current element
	 * @see XiSecurityWsdlClass::current()
	 * @return XiSecurityTypeSplit
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiSecurityWsdlClass::item()
	 * @param int
	 * @return XiSecurityTypeSplit
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::first()
	 * @return XiSecurityTypeSplit
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::last()
	 * @return XiSecurityTypeSplit
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::offsetGet()
	 * @param int
	 * @return XiSecurityTypeSplit
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Split'
	 */
	public function getAttributeName()
	{
		return 'Split';
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