<?php
/**
 * Class file for EbayShoppingTypeGetSingleItemRequestType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeGetSingleItemRequestType
 * Documentation : Retrieves publicly available data for a single listing. Use this call to retrieve most of the information that is visible on a listing's View Item page on the eBay Web site, such as title, description, prices, basic seller and bidder information, and other details about the listing.Also returns basic shipping costs. For more shipping details, use GetShippingCosts.
 * @date 05/07/2012
 */
class EbayShoppingTypeGetSingleItemRequestType extends EbayShoppingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The item ID that uniquely identifies the item listing for which to retrieve the data.<br> <br> You can determine an item's ID by calling findItemsAdvanced (<a href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html" >Finding API</a>) or from the eBay Web site.
	 * @var string
	 */
	public $ItemID;
	/**
	 * The VariationSKU
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Variation-level SKU that uniquely identifes a variation within the listing identified by ItemID. Only applicable when the seller included variation-level SKU (Variation.SKU) values. Retrieves all the usual Item fields, but limits the Variations content to the specified variation. If not specified, the response includes all variations.
	 * @var string
	 */
	public $VariationSKU;
	/**
	 * The VariationSpecifics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name-value pairs that identify one or more variations within the listing identified by ItemID. Only applicable when the seller listed the item with variations. Retrieves all the usual Item fields, but limits the Variations content to the specified variation(s). If the specified pairs do not match any variation, eBay returns all variations.<br> <br> To retrieve only one variation, specify the full set of name/value pairs that match all the name-value pairs of one variation. <br> <br> To retrieve multiple variations (using a wildcard), specify one or more name/value pairs that partially match the desired variations. For example, if the listing contains variations for shirts in different colors and sizes, specify Color as Red (and no other name/value pairs) to retrieve all the red shirts in all sizes (but no other colors).
	 * @var EbayShoppingTypeNameValueListArrayType
	 */
	public $VariationSpecifics;
	/**
	 * The IncludeSelector
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines standard subsets of fields to return within the response.<br> <br> If you don't specify this field, the call returns a default set of fields (see the "Detail Controls" link below). If you specify this field, the additional fields you retrieve can affect the call's response time (performance).<br> <br> <b>Applicable values</b>: <p class="ename">&bull;&nbsp;&nbsp; Details</p> <p class="edef">Include most available fields in the response (except fields that significantly affect the call's performance).</p> <p class="ename">&bull;&nbsp;&nbsp; Description</p> <p class="edef">Include the Description field in the response. (This can affect the call's performance.)</p> <p class="ename">&bull;&nbsp;&nbsp; TextDescription</p> <p class="edef">Include the text Description(no html tag) field in the response. (This can affect the call's performance.)</p> <p class="ename">&bull;&nbsp;&nbsp; ShippingCosts</p> <p class="edef">Include basic shipping costs in the response. (Use GetShippingCosts to retrieve more details.)</p> <p class="ename">&bull;&nbsp;&nbsp; ItemSpecifics</p> <p class="edef">Include ItemSpecifics in the response.</p> <p class="ename">&bull;&nbsp;&nbsp; Variations</p> <p class="edef">Include Variations in the response.</p> <br> <br> Use a comma to specify multiple values. (In this case, the results are cumulative.) See "GetSingleItem Samples" for an example of how to use this field.<br> <br> See "Detail Controls" for a complete list of fields that can be returned for each selector.
	 * @var string
	 */
	public $IncludeSelector;
	/**
	 * Constructor
	 * @param string ItemID
	 * @param string VariationSKU
	 * @param EbayShoppingTypeNameValueListArrayType VariationSpecifics
	 * @param string IncludeSelector
	 * @return EbayShoppingTypeGetSingleItemRequestType
	 */
	public function __construct($_ItemID = null,$_VariationSKU = null,$_VariationSpecifics = null,$_IncludeSelector = null)
	{
		EbayShoppingWsdlClass::__construct(array('ItemID'=>$_ItemID,'VariationSKU'=>$_VariationSKU,'VariationSpecifics'=>$_VariationSpecifics,'IncludeSelector'=>$_IncludeSelector));
	}
	/**
	 * Set ItemID
	 * @param string ItemID
	 * @return string
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = $_ItemID);
	}
	/**
	 * Get ItemID
	 * @return string
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set VariationSKU
	 * @param string VariationSKU
	 * @return string
	 */
	public function setVariationSKU($_VariationSKU)
	{
		return ($this->VariationSKU = $_VariationSKU);
	}
	/**
	 * Get VariationSKU
	 * @return string
	 */
	public function getVariationSKU()
	{
		return $this->VariationSKU;
	}
	/**
	 * Set VariationSpecifics
	 * @param NameValueListArrayType VariationSpecifics
	 * @return NameValueListArrayType
	 */
	public function setVariationSpecifics($_VariationSpecifics)
	{
		return ($this->VariationSpecifics = $_VariationSpecifics);
	}
	/**
	 * Get VariationSpecifics
	 * @return EbayShoppingTypeNameValueListArrayType
	 */
	public function getVariationSpecifics()
	{
		return $this->VariationSpecifics;
	}
	/**
	 * Set IncludeSelector
	 * @param string IncludeSelector
	 * @return string
	 */
	public function setIncludeSelector($_IncludeSelector)
	{
		return ($this->IncludeSelector = $_IncludeSelector);
	}
	/**
	 * Get IncludeSelector
	 * @return string
	 */
	public function getIncludeSelector()
	{
		return $this->IncludeSelector;
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