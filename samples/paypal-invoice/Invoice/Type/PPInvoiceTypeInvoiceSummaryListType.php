<?php
/**
 * Class file for PPInvoiceTypeInvoiceSummaryListType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeInvoiceSummaryListType
 * Documentation : A list of invoice summaries.
 * @date 02/07/2012
 */
class PPInvoiceTypeInvoiceSummaryListType extends PPInvoiceWsdlClass
{
	/**
	 * The invoice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var PPInvoiceTypeInvoiceSummaryType
	 */
	public $invoice;
	/**
	 * Constructor
	 * @param PPInvoiceTypeInvoiceSummaryType invoice
	 * @return PPInvoiceTypeInvoiceSummaryListType
	 */
	public function __construct($_invoice = null)
	{
		parent::__construct(array('invoice'=>$_invoice));
	}
	/**
	 * Set invoice
	 * @param InvoiceSummaryType invoice
	 * @return InvoiceSummaryType
	 */
	public function setInvoice($_invoice)
	{
		return ($this->invoice = $_invoice);
	}
	/**
	 * Get invoice
	 * @return PPInvoiceTypeInvoiceSummaryType
	 */
	public function getInvoice()
	{
		return $this->invoice;
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