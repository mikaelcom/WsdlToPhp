<?php
/**
 * Class file for OvhTypeMyArrayOfDedicatedInstallationTemplateStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfDedicatedInstallationTemplateStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfDedicatedInstallationTemplateStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeDedicatedInstallationTemplateStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeDedicatedInstallationTemplateStruct item
	 * @return OvhTypeMyArrayOfDedicatedInstallationTemplateStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param dedicatedInstallationTemplateStruct item
	 * @return dedicatedInstallationTemplateStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypededicatedInstallationTemplateStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeDedicatedInstallationTemplateStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeDedicatedInstallationTemplateStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeDedicatedInstallationTemplateStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeDedicatedInstallationTemplateStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeDedicatedInstallationTemplateStruct
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