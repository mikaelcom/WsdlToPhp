<?php
/**
 * Class file for EbayTradingTypeSetStoreCustomPageResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetStoreCustomPageResponseType
 * Documentation : Returned after calling SetStoreCustomPageRequest. This serves as confirmation that the custom page was successfully submitted.
 * @date 04/07/2012
 */
class EbayTradingTypeSetStoreCustomPageResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The CustomPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The custom page that was submitted.
	 * @var EbayTradingTypeStoreCustomPageType
	 */
	public $CustomPage;
	/**
	 * Constructor
	 * @param EbayTradingTypeStoreCustomPageType CustomPage
	 * @return EbayTradingTypeSetStoreCustomPageResponseType
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