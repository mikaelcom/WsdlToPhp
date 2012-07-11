<?php
/**
 * Class file for EbayTradingTypeGetStoreCustomPageRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetStoreCustomPageRequestType
 * Documentation : Retrieves the custom page or pages for the authenticated user's Store.
 * @date 04/07/2012
 */
class EbayTradingTypeGetStoreCustomPageRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The PageID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If a PageID is specified, then that page is returned, and the returned page contains the page Content. If no PageID is specified, then all pages are returned, without the page Content.
	 * @var long
	 */
	public $PageID;
	/**
	 * Constructor
	 * @param long PageID
	 * @return EbayTradingTypeGetStoreCustomPageRequestType
	 */
	public function __construct($_PageID = null)
	{
		EbayTradingWsdlClass::__construct(array('PageID'=>$_PageID));
	}
	/**
	 * Set PageID
	 * @param long PageID
	 * @return long
	 */
	public function setPageID($_PageID)
	{
		return ($this->PageID = $_PageID);
	}
	/**
	 * Get PageID
	 * @return long
	 */
	public function getPageID()
	{
		return $this->PageID;
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