<?php
/**
 * Class file for OvhTypeMyArrayOfBillingInvoiceStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfBillingInvoiceStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfBillingInvoiceStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeBillingInvoiceStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeBillingInvoiceStruct item
	 * @return OvhTypeMyArrayOfBillingInvoiceStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param billingInvoiceStruct item
	 * @return billingInvoiceStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypebillingInvoiceStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeBillingInvoiceStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeBillingInvoiceStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeBillingInvoiceStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeBillingInvoiceStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeBillingInvoiceStruct
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