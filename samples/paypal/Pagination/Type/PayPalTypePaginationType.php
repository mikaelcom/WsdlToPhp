<?php
/**
 * Class file for PayPalTypePaginationType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaginationType
 * @date 14/07/2012
 */
class PayPalTypePaginationType extends PayPalWsdlClass
{
	/**
	 * The EntriesPerPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $EntriesPerPage;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $PageNumber;
	/**
	 * Constructor
	 * @param int EntriesPerPage
	 * @param int PageNumber
	 * @return PayPalTypePaginationType
	 */
	public function __construct($_EntriesPerPage = null,$_PageNumber = null)
	{
		parent::__construct(array('EntriesPerPage'=>$_EntriesPerPage,'PageNumber'=>$_PageNumber));
	}
	/**
	 * Set EntriesPerPage
	 * @param int EntriesPerPage
	 * @return int
	 */
	public function setEntriesPerPage($_EntriesPerPage)
	{
		return ($this->EntriesPerPage = $_EntriesPerPage);
	}
	/**
	 * Get EntriesPerPage
	 * @return int
	 */
	public function getEntriesPerPage()
	{
		return $this->EntriesPerPage;
	}
	/**
	 * Set PageNumber
	 * @param int PageNumber
	 * @return int
	 */
	public function setPageNumber($_PageNumber)
	{
		return ($this->PageNumber = $_PageNumber);
	}
	/**
	 * Get PageNumber
	 * @return int
	 */
	public function getPageNumber()
	{
		return $this->PageNumber;
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