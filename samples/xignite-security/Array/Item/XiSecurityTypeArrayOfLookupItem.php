<?php
/**
 * Class file for XiSecurityTypeArrayOfLookupItem
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeArrayOfLookupItem
 * @date 08/07/2012
 */
class XiSecurityTypeArrayOfLookupItem extends XiSecurityWsdlClass
{
	/**
	 * The LookupItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiSecurityTypeLookupItem
	 */
	public $LookupItem;
	/**
	 * Constructor
	 * @param XiSecurityTypeLookupItem LookupItem
	 * @return XiSecurityTypeArrayOfLookupItem
	 */
	public function __construct($_LookupItem = null)
	{
		parent::__construct(array('LookupItem'=>$_LookupItem));
	}
	/**
	 * Set LookupItem
	 * @param LookupItem LookupItem
	 * @return LookupItem
	 */
	public function setLookupItem($_LookupItem)
	{
		return ($this->LookupItem = $_LookupItem);
	}
	/**
	 * Get LookupItem
	 * @return XiSecurityTypeLookupItem
	 */
	public function getLookupItem()
	{
		return $this->LookupItem;
	}
	/**
	 * Returns the current element
	 * @see XiSecurityWsdlClass::current()
	 * @return XiSecurityTypeLookupItem
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiSecurityWsdlClass::item()
	 * @param int
	 * @return XiSecurityTypeLookupItem
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::first()
	 * @return XiSecurityTypeLookupItem
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::last()
	 * @return XiSecurityTypeLookupItem
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::offsetGet()
	 * @param int
	 * @return XiSecurityTypeLookupItem
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'LookupItem'
	 */
	public function getAttributeName()
	{
		return 'LookupItem';
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