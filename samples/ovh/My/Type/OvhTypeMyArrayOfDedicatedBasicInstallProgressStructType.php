<?php
/**
 * Class file for OvhTypeMyArrayOfDedicatedBasicInstallProgressStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfDedicatedBasicInstallProgressStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfDedicatedBasicInstallProgressStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeDedicatedBasicInstallProgressStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedBasicInstallProgressStruct item
	 * @return OvhTypeMyArrayOfDedicatedBasicInstallProgressStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param dedicatedBasicInstallProgressStruct item
	 * @return dedicatedBasicInstallProgressStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypededicatedBasicInstallProgressStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeDedicatedBasicInstallProgressStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeDedicatedBasicInstallProgressStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeDedicatedBasicInstallProgressStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeDedicatedBasicInstallProgressStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeDedicatedBasicInstallProgressStruct
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