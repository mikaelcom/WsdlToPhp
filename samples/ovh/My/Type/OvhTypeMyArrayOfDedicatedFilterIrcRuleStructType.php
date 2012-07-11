<?php
/**
 * Class file for OvhTypeMyArrayOfDedicatedFilterIrcRuleStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfDedicatedFilterIrcRuleStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfDedicatedFilterIrcRuleStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeDedicatedFilterIrcRuleStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedFilterIrcRuleStruct item
	 * @return OvhTypeMyArrayOfDedicatedFilterIrcRuleStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param dedicatedFilterIrcRuleStruct item
	 * @return dedicatedFilterIrcRuleStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypededicatedFilterIrcRuleStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeDedicatedFilterIrcRuleStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeDedicatedFilterIrcRuleStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeDedicatedFilterIrcRuleStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeDedicatedFilterIrcRuleStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeDedicatedFilterIrcRuleStruct
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'item'
	 */
	public function getAttributeName()
	{
		return 'item';
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