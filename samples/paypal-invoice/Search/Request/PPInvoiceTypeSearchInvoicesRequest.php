<?php
/**
 * Class file for PPInvoiceTypeSearchInvoicesRequest
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeSearchInvoicesRequest
 * Documentation : The request object for SearchInvoices.
 * @date 02/07/2012
 */
class PPInvoiceTypeSearchInvoicesRequest extends PPInvoiceWsdlClass
{
	/**
	 * The requestEnvelope
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var PPInvoiceTypeRequestEnvelope
	 */
	public $requestEnvelope;
	/**
	 * The merchantEmail
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Invoice creator's email.
	 * @var string
	 */
	public $merchantEmail;
	/**
	 * The parameters
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Parameters constraining the search.
	 * @var PPInvoiceTypeSearchParametersType
	 */
	public $parameters;
	/**
	 * The page
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Page number of result set, starting with 1.
	 * @var integer
	 */
	public $page;
	/**
	 * The pageSize
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Number of results per page, between 1 and 100.
	 * @var integer
	 */
	public $pageSize;
	/**
	 * Constructor
	 * @param PPInvoiceTypeRequestEnvelope requestEnvelope
	 * @param string merchantEmail
	 * @param PPInvoiceTypeSearchParametersType parameters
	 * @param integer page
	 * @param integer pageSize
	 * @return PPInvoiceTypeSearchInvoicesRequest
	 */
	public function __construct($_requestEnvelope,$_merchantEmail,$_parameters,$_page,$_pageSize)
	{
		parent::__construct(array('requestEnvelope'=>$_requestEnvelope,'merchantEmail'=>$_merchantEmail,'parameters'=>$_parameters,'page'=>$_page,'pageSize'=>$_pageSize));
	}
	/**
	 * Set requestEnvelope
	 * @param RequestEnvelope requestEnvelope
	 * @return RequestEnvelope
	 */
	public function setRequestEnvelope($_requestEnvelope)
	{
		return ($this->requestEnvelope = $_requestEnvelope);
	}
	/**
	 * Get requestEnvelope
	 * @return PPInvoiceTypeRequestEnvelope
	 */
	public function getRequestEnvelope()
	{
		return $this->requestEnvelope;
	}
	/**
	 * Set merchantEmail
	 * @param string merchantEmail
	 * @return string
	 */
	public function setMerchantEmail($_merchantEmail)
	{
		return ($this->merchantEmail = $_merchantEmail);
	}
	/**
	 * Get merchantEmail
	 * @return string
	 */
	public function getMerchantEmail()
	{
		return $this->merchantEmail;
	}
	/**
	 * Set parameters
	 * @param SearchParametersType parameters
	 * @return SearchParametersType
	 */
	public function setParameters($_parameters)
	{
		return ($this->parameters = $_parameters);
	}
	/**
	 * Get parameters
	 * @return PPInvoiceTypeSearchParametersType
	 */
	public function getParameters()
	{
		return $this->parameters;
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
	 * Set pageSize
	 * @param integer pageSize
	 * @return integer
	 */
	public function setPageSize($_pageSize)
	{
		return ($this->pageSize = $_pageSize);
	}
	/**
	 * Get pageSize
	 * @return integer
	 */
	public function getPageSize()
	{
		return $this->pageSize;
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