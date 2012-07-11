<?php
/**
 * Class file for EbayTradingTypeStoreCustomPageArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreCustomPageArrayType
 * Documentation : Set of Store custom pages.
 * @date 04/07/2012
 */
class EbayTradingTypeStoreCustomPageArrayType extends EbayTradingWsdlClass
{
	/**
	 * The CustomPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A Store custom page.
	 * @var EbayTradingTypeStoreCustomPageType
	 */
	public $CustomPage;
	/**
	 * Constructor
	 * @param EbayTradingTypeStoreCustomPageType CustomPage
	 * @return EbayTradingTypeStoreCustomPageArrayType
	 */
	public function __construct($_CustomPage = null)
	{
		parent::__construct(array('CustomPage'=>$_CustomPage));
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