<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonySmsHistoryStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonySmsHistoryStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonySmsHistoryStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonySmsHistoryStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonySmsHistoryStruct item
	 * @return OvhTypeMyArrayOfTelephonySmsHistoryStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonySmsHistoryStruct item
	 * @return telephonySmsHistoryStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonySmsHistoryStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonySmsHistoryStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonySmsHistoryStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonySmsHistoryStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonySmsHistoryStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonySmsHistoryStruct
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