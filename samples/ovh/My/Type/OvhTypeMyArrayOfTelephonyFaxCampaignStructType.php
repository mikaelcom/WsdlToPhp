<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyFaxCampaignStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyFaxCampaignStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyFaxCampaignStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyFaxCampaignStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyFaxCampaignStruct item
	 * @return OvhTypeMyArrayOfTelephonyFaxCampaignStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyFaxCampaignStruct item
	 * @return telephonyFaxCampaignStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyFaxCampaignStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyFaxCampaignStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyFaxCampaignStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyFaxCampaignStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyFaxCampaignStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyFaxCampaignStruct
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