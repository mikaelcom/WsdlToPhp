<?php
/**
 * Class file for PPInvoiceTypeInvoiceItemListType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeInvoiceItemListType
 * Documentation : A list of invoice items.
 * @date 02/07/2012
 */
class PPInvoiceTypeInvoiceItemListType extends PPInvoiceWsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var PPInvoiceTypeInvoiceItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param PPInvoiceTypeInvoiceItemType item
	 * @return PPInvoiceTypeInvoiceItemListType
	 */
	public function __construct($_item)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param InvoiceItemType item
	 * @return InvoiceItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return PPInvoiceTypeInvoiceItemType
	 */
	public function getItem()
	{
		return $this->item;
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