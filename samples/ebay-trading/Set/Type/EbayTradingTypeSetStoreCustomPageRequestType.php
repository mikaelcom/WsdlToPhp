<?php
/**
 * Class file for EbayTradingTypeSetStoreCustomPageRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetStoreCustomPageRequestType
 * Documentation : Creates or updates a custom page on a user's eBay Store.
 * @date 04/07/2012
 */
class EbayTradingTypeSetStoreCustomPageRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The CustomPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The custom page being submitted.
	 * @var EbayTradingTypeStoreCustomPageType
	 */
	public $CustomPage;
	/**
	 * Constructor
	 * @param EbayTradingTypeStoreCustomPageType CustomPage
	 * @return EbayTradingTypeSetStoreCustomPageRequestType
	 */
	public function __construct($_CustomPage = null)
	{
		EbayTradingWsdlClass::__construct(array('CustomPage'=>$_CustomPage));
	}
	/**
	 * Set CustomPage
	 * @param StoreCustomPageType CustomPage
	 * @return StoreCustomPageType
	 */
	public function setCustomPage($_CustomPage)
	{
		return ($this->CustomPage = $_CustomPage);
	}
	/**
	 * Get CustomPage
	 * @return EbayTradingTypeStoreCustomPageType
	 */
	public function getCustomPage()
	{
		return $this->CustomPage;
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