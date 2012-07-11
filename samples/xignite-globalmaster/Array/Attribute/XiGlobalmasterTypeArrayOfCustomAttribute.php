<?php
/**
 * Class file for XiGlobalmasterTypeArrayOfCustomAttribute
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeArrayOfCustomAttribute
 * @date 08/07/2012
 */
class XiGlobalmasterTypeArrayOfCustomAttribute extends XiGlobalmasterWsdlClass
{
	/**
	 * The CustomAttribute
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalmasterTypeCustomAttribute
	 */
	public $CustomAttribute;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeCustomAttribute CustomAttribute
	 * @return XiGlobalmasterTypeArrayOfCustomAttribute
	 */
	public function __construct($_CustomAttribute = null)
	{
		parent::__construct(array('CustomAttribute'=>$_CustomAttribute));
	}
	/**
	 * Set CustomAttribute
	 * @param CustomAttribute CustomAttribute
	 * @return CustomAttribute
	 */
	public function setCustomAttribute($_CustomAttribute)
	{
		return ($this->CustomAttribute = $_CustomAttribute);
	}
	/**
	 * Get CustomAttribute
	 * @return XiGlobalmasterTypeCustomAttribute
	 */
	public function getCustomAttribute()
	{
		return $this->CustomAttribute;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalmasterWsdlClass::current()
	 * @return XiGlobalmasterTypeCustomAttribute
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalmasterWsdlClass::item()
	 * @param int
	 * @return XiGlobalmasterTypeCustomAttribute
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::first()
	 * @return XiGlobalmasterTypeCustomAttribute
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::last()
	 * @return XiGlobalmasterTypeCustomAttribute
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalmasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalmasterTypeCustomAttribute
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'CustomAttribute'
	 */
	public function getAttributeName()
	{
		return 'CustomAttribute';
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