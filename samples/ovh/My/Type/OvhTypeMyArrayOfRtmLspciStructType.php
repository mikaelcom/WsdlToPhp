<?php
/**
 * Class file for OvhTypeMyArrayOfRtmLspciStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfRtmLspciStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfRtmLspciStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeRtmLspciStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeRtmLspciStruct item
	 * @return OvhTypeMyArrayOfRtmLspciStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param rtmLspciStruct item
	 * @return rtmLspciStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypertmLspciStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeRtmLspciStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeRtmLspciStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeRtmLspciStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeRtmLspciStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeRtmLspciStruct
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