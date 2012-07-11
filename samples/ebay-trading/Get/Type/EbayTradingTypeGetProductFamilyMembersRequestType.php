<?php
/**
 * Class file for EbayTradingTypeGetProductFamilyMembersRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetProductFamilyMembersRequestType
 * Documentation : No longer recommended. This supports an older ID-based format for describing item specifics and product details. Most eBay categories no longer support ID-based attributes. The remaining categories (e.g., US eBay Motors) will drop support for ID-based attributes by May 2012. New applications should not use ID-based attributes. Existing applications should be updated to remove all dependencies on ID-based attributes now. Instead, use FindProducts in eBay's Shopping API to search for product details.<br> <br>GetProductFamilyMembers is intended to be used combination with GetProductSearchResults.If a search result returned from GetProductSearchResults does not return allproduct versions in a family, and if the user wants to see more versions (editions)of the product, you can use GetProductFamilyMembers to retrieve all versions of the product.That is, if GetProductSearchResultsonly returns the product family header (ParentProduct),use this call to zoom in on a particular family of product versions.(This situation usually occurs when you call GetProductSearchResults and more morematches are found than the MaxChildrenPerFamily value you specified.)<br><br>The structure of tGetProductFamilyMembers is similar to that of GetProductSearchResults.Instead of passing in a query, you pass in a product ID. This product ID is used tofind all the members of the product family that the specified product is a member of.The results are compatible with the results from GetProductSearchResults,so similar application logic can be used to handle both requests and responses.This call supports batch requests. This means you can retrieve products inmultiple families by using a single request. To perform a batch request,pass an array of ProductSearch objects in the call.<br><br>For each ProductSearch object, GetProductFamilyMembers returns a list of all theproducts in the specified product family. Each product is represented as a list ofattributes (Item Specifics) plus other identifying information, such as a product IDand a stock photo.<br><br>Once the user selects a product from the results, pass its ID in a GetProductSellingPagesrequest to retrieve more detailed information about the product, including a set ofoptional Item Specifics that the seller can use in addition to thepre-filled Item Specifics (see GetProductSellingPages). <br><br>To use this data in a listing, pass the product ID and the optional Item Specificsin the seller's listing request (AddItem).
 * @date 04/07/2012
 */
class EbayTradingTypeGetProductFamilyMembersRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ProductSearch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the ID of a product in the family to be retrieved, along with pagination and sorting instructions. ProductSearch is a required input.
	 * @var EbayTradingTypeProductSearchType
	 */
	public $ProductSearch;
	/**
	 * Constructor
	 * @param EbayTradingTypeProductSearchType ProductSearch
	 * @return EbayTradingTypeGetProductFamilyMembersRequestType
	 */
	public function __construct($_ProductSearch = null)
	{
		EbayTradingWsdlClass::__construct(array('ProductSearch'=>$_ProductSearch));
	}
	/**
	 * Set ProductSearch
	 * @param ProductSearchType ProductSearch
	 * @return ProductSearchType
	 */
	public function setProductSearch($_ProductSearch)
	{
		return ($this->ProductSearch = $_ProductSearch);
	}
	/**
	 * Get ProductSearch
	 * @return EbayTradingTypeProductSearchType
	 */
	public function getProductSearch()
	{
		return $this->ProductSearch;
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