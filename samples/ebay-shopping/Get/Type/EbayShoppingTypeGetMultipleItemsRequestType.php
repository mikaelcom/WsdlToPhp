<?php
/**
 * Class file for EbayShoppingTypeGetMultipleItemsRequestType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeGetMultipleItemsRequestType
 * Documentation : Retrieves publicly available data for one or more listings. Use this call to retrieve much of the information that is visible on a listing's View Item page on the eBay Web site, such as title, prices, and basic shipping costs. Provide ItemID for every item for which you want information. This call returns the same minimal information that is returned by GetSingleItem, for each item with no IncludeSelector specified. (Use GetShippingCosts to retrieve more detailed shipping cost information for a given item.) Duplicated items are returned as a single item.
 * @date 05/07/2012
 */
class EbayShoppingTypeGetMultipleItemsRequestType extends EbayShoppingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The item ID that uniquely identifies the item listing for which to retrieve the data. You can provide a maximum of 20 item IDs. When making a URL request, repeating ItemID parameters must be specified as an indexed array (e.g., <code>...&ItemID(0)=130310421484&ItemID(1)= 300321408208& ItemID(2)=370214653822...</code>). <br><br> Alternatively, as a shortcut for URL requests, you can specify the item IDs as a comma-separated list in a single ItemID parameter (e.g., ...< code>&ItemID=130310421484,300321408208,370214653822...</code> ) for convenience. <br><br> You can determine an item's ID by calling findItemsAdvanced (<a href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html" >Finding API</a>) or from the eBay Web site. Provide ItemID for every item for which you want information.
	 * @var string
	 */
	public $ItemID;
	/**
	 * The IncludeSelector
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines standard subsets of fields to return within the response.<br> <br> If you don't specify this field, the call returns a default set of fields (see the "Detail Controls" link below). If you specify this field, the additional fields you retrieve can affect the call's response time (performance).<br> <br> <b>Applicable values</b>: <p class="ename">&bull;&nbsp;&nbsp; Details</p> <p class="edef">Include most available fields in the response (except fields that significantly affect the call's performance).</p> <p class="ename">&bull;&nbsp;&nbsp; Description</p> <p class="edef">Include the Description field in the response. (This can affect the call's performance.)</p> <p class="ename">&bull;&nbsp;&nbsp; TextDescription</p> <p class="edef">Include the text Description (no html tag) field in the response. (This can affect the call's performance.)</p> <p class="ename">&bull;&nbsp;&nbsp; ItemSpecifics</p> <p class="edef">Include ItemSpecifics in the response.</p> <p class="ename">&bull;&nbsp;&nbsp; Variations</p> <p class="edef">Include Variations in the response.</p> <br> <br> Use a comma to specify multiple values. (In this case, the results are cumulative.) See "GetSingleItem Samples" for an example of how to use this field.<br> <br> See "Detail Controls" for a complete list of fields that can be returned for each selector.
	 * @var string
	 */
	public $IncludeSelector;
	/**
	 * Constructor
	 * @param string ItemID
	 * @param string IncludeSelector
	 * @return EbayShoppingTypeGetMultipleItemsRequestType
	 */
	public function __construct($_ItemID = null,$_IncludeSelector = null)
	{
		EbayShoppingWsdlClass::__construct(array('ItemID'=>$_ItemID,'IncludeSelector'=>$_IncludeSelector));
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