<?php
/**
 * Class file for OvhTypeMyArrayOfAutomatedMailGetVolumeHistoryStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfAutomatedMailGetVolumeHistoryStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfAutomatedMailGetVolumeHistoryStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeAutomatedMailGetVolumeHistoryStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeAutomatedMailGetVolumeHistoryStruct item
	 * @return OvhTypeMyArrayOfAutomatedMailGetVolumeHistoryStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param automatedMailGetVolumeHistoryStruct item
	 * @return automatedMailGetVolumeHistoryStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypeautomatedMailGetVolumeHistoryStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeAutomatedMailGetVolumeHistoryStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeAutomatedMailGetVolumeHistoryStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeAutomatedMailGetVolumeHistoryStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeAutomatedMailGetVolumeHistoryStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeAutomatedMailGetVolumeHistoryStruct
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