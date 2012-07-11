<?php
/**
 * Class file for EbayTradingTypeGetProductSearchPageResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetProductSearchPageResponseType
 * Documentation : For a category that is catalog-enabled, GetProductSearchPage retrieves the attributes a seller can use to form a query when searching for Pre-filled Item Information. See the Developer's Guide for an overview of Pre-filled Item Information and details about searching for catalog products.
 * @date 04/07/2012
 */
class EbayTradingTypeGetProductSearchPageResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The AttributeSystemVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Current version of the product search page data for the site. This value changes each time changes are made to the search page data. The current version value is not necessarily greater than the previous value. Therefore, when comparing versions, only compare whether the value has changed.
	 * @var string
	 */
	public $AttributeSystemVersion;
	/**
	 * The ProductSearchPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A list of catalog search criteria and sort keys associated with a catalog-enabled category, plus supplemental information to help the seller understand how to make selections.
	 * @var EbayTradingTypeProductSearchPageType
	 */
	public $ProductSearchPage;
	/**
	 * Constructor
	 * @param string AttributeSystemVersion
	 * @param EbayTradingTypeProductSearchPageType ProductSearchPage
	 * @return EbayTradingTypeGetProductSearchPageResponseType
	 */
	public function __construct($_AttributeSystemVersion = null,$_ProductSearchPage = null)
	{
		EbayTradingWsdlClass::__construct(array('AttributeSystemVersion'=>$_AttributeSystemVersion,'ProductSearchPage'=>$_ProductSearchPage));
	}
	/**
	 * Set AttributeSystemVersion
	 * @param string AttributeSystemVersion
	 * @return string
	 */
	public function setAttributeSystemVersion($_AttributeSystemVersion)
	{
		return ($this->AttributeSystemVersion = $_AttributeSystemVersion);
	}
	/**
	 * Get AttributeSystemVersion
	 * @return string
	 */
	public function getAttributeSystemVersion()
	{
		return $this->AttributeSystemVersion;
	}
	/**
	 * Set ProductSearchPage
	 * @param ProductSearchPageType ProductSearchPage
	 * @return ProductSearchPageType
	 */
	public function setProductSearchPage($_ProductSearchPage)
	{
		return ($this->ProductSearchPage = $_ProductSearchPage);
	}
	/**
	 * Get ProductSearchPage
	 * @return EbayTradingTypeProductSearchPageType
	 */
	public function getProductSearchPage()
	{
		return $this->ProductSearchPage;
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