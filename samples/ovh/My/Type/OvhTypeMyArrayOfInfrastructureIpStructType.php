<?php
/**
 * Class file for OvhTypeMyArrayOfInfrastructureIpStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfInfrastructureIpStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfInfrastructureIpStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeInfrastructureIpStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeInfrastructureIpStruct item
	 * @return OvhTypeMyArrayOfInfrastructureIpStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param InfrastructureIpStruct item
	 * @return InfrastructureIpStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypeInfrastructureIpStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeInfrastructureIpStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeInfrastructureIpStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeInfrastructureIpStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeInfrastructureIpStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeInfrastructureIpStruct
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