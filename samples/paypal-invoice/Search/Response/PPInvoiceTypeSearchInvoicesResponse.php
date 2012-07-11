<?php
/**
 * Class file for PPInvoiceTypeSearchInvoicesResponse
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeSearchInvoicesResponse
 * Documentation : The response object for SearchInvoices.
 * @date 02/07/2012
 */
class PPInvoiceTypeSearchInvoicesResponse extends PPInvoiceWsdlClass
{
	/**
	 * The responseEnvelope
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var PPInvoiceTypeResponseEnvelope
	 */
	public $responseEnvelope;
	/**
	 * The count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Number of invoices that matched the search.
	 * @var integer
	 */
	public $count;
	/**
	 * The invoiceList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Page of invoice summaries that matched the search.
	 * @var PPInvoiceTypeInvoiceSummaryListType
	 */
	public $invoiceList;
	/**
	 * The page
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Page number of result set.
	 * @var integer
	 */
	public $page;
	/**
	 * The hasNextPage
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : True if another page of invoice summary results exists.
	 * @var boolean
	 */
	public $hasNextPage;
	/**
	 * The hasPreviousPage
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : True if a previous page of invoice summary results exists.
	 * @var boolean
	 */
	public $hasPreviousPage;
	/**
	 * Constructor
	 * @param PPInvoiceTypeResponseEnvelope responseEnvelope
	 * @param integer count
	 * @param PPInvoiceTypeInvoiceSummaryListType invoiceList
	 * @param integer page
	 * @param boolean hasNextPage
	 * @param boolean hasPreviousPage
	 * @return PPInvoiceTypeSearchInvoicesResponse
	 */
	public function __construct($_responseEnvelope,$_count,$_invoiceList = null,$_page,$_hasNextPage,$_hasPreviousPage)
	{
		parent::__construct(array('responseEnvelope'=>$_responseEnvelope,'count'=>$_count,'invoiceList'=>$_invoiceList,'page'=>$_page,'hasNextPage'=>$_hasNextPage,'hasPreviousPage'=>$_hasPreviousPage));
	}
	/**
	 * Set responseEnvelope
	 * @param ResponseEnvelope responseEnvelope
	 * @return ResponseEnvelope
	 */
	public function setResponseEnvelope($_responseEnvelope)
	{
		return ($this->responseEnvelope = $_responseEnvelope);
	}
	/**
	 * Get responseEnvelope
	 * @return PPInvoiceTypeResponseEnvelope
	 */
	public function getResponseEnvelope()
	{
		return $this->responseEnvelope;
	}
	/**
	 * Set count
	 * @param integer count
	 * @return integer
	 */
	public function setCount($_count)
	{
		return ($this->count = $_count);
	}
	/**
	 * Get count
	 * @return integer
	 */
	public function getCount()
	{
		return $this->count;
	}
	/**
	 * Set invoiceList
	 * @param InvoiceSummaryListType invoiceList
	 * @return InvoiceSummaryListType
	 */
	public function setInvoiceList($_invoiceList)
	{
		return ($this->invoiceList = $_invoiceList);
	}
	/**
	 * Get invoiceList
	 * @return PPInvoiceTypeInvoiceSummaryListType
	 */
	public function getInvoiceList()
	{
		return $this->invoiceList;
	}
	/**
	 * Set page
	 * @param integer page
	 * @return integer
	 */
	public function setPage($_page)
	{
		return ($this->page = $_page);
	}
	/**
	 * Get page
	 * @return integer
	 */
	public function getPage()
	{
		return $this->page;
	}
	/**
	 * Set hasNextPage
	 * @param boolean hasNextPage
	 * @return boolean
	 */
	public function setHasNextPage($_hasNextPage)
	{
		return ($this->hasNextPage = $_hasNextPage);
	}
	/**
	 * Get hasNextPage
	 * @return boolean
	 */
	public function getHasNextPage()
	{
		return $this->hasNextPage;
	}
	/**
	 * Set hasPreviousPage
	 * @param boolean hasPreviousPage
	 * @return boolean
	 */
	public function setHasPreviousPage($_hasPreviousPage)
	{
		return ($this->hasPreviousPage = $_hasPreviousPage);
	}
	/**
	 * Get hasPreviousPage
	 * @return boolean
	 */
	public function getHasPreviousPage()
	{
		return $this->hasPreviousPage;
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