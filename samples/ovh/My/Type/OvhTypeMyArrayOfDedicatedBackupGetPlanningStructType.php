<?php
/**
 * Class file for OvhTypeMyArrayOfDedicatedBackupGetPlanningStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfDedicatedBackupGetPlanningStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfDedicatedBackupGetPlanningStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeDedicatedBackupGetPlanningStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedBackupGetPlanningStruct item
	 * @return OvhTypeMyArrayOfDedicatedBackupGetPlanningStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param dedicatedBackupGetPlanningStruct item
	 * @return dedicatedBackupGetPlanningStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypededicatedBackupGetPlanningStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeDedicatedBackupGetPlanningStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeDedicatedBackupGetPlanningStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeDedicatedBackupGetPlanningStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeDedicatedBackupGetPlanningStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeDedicatedBackupGetPlanningStruct
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