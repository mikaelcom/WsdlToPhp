<?php
/**
 * Class file for OvhTypeMyArrayOfBillingInvoiceDetailStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfBillingInvoiceDetailStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfBillingInvoiceDetailStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeBillingInvoiceDetailStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeBillingInvoiceDetailStruct item
	 * @return OvhTypeMyArrayOfBillingInvoiceDetailStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param billingInvoiceDetailStruct item
	 * @return billingInvoiceDetailStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypebillingInvoiceDetailStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeBillingInvoiceDetailStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeBillingInvoiceDetailStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeBillingInvoiceDetailStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeBillingInvoiceDetailStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeBillingInvoiceDetailStruct
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