<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyBillingAccountSummaryLineStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyBillingAccountSummaryLineStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyBillingAccountSummaryLineStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyBillingAccountSummaryLineStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyBillingAccountSummaryLineStruct item
	 * @return OvhTypeMyArrayOfTelephonyBillingAccountSummaryLineStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyBillingAccountSummaryLineStruct item
	 * @return telephonyBillingAccountSummaryLineStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyBillingAccountSummaryLineStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyBillingAccountSummaryLineStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyBillingAccountSummaryLineStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyBillingAccountSummaryLineStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyBillingAccountSummaryLineStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyBillingAccountSummaryLineStruct
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