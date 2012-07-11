<?php
/**
 * Class file for EbayFindTypeFindItemsByProductRequest
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeFindItemsByProductRequest
 * Documentation : You can use product IDs (such as an ISBN, UPC, EAN, or eBay Product Reference ID) to find associated items listed on eBay.
 * @date 04/07/2012
 */
class EbayFindTypeFindItemsByProductRequest extends EbayFindTypeBaseFindingServiceRequest
{
	/**
	 * The productId
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Input ISBN, UPC, EAN, or ReferenceID (ePID) to specify the type of product for which you want to search. <br><br> For example, to search using an ISBN, specify productID.type=ISBN and set productID.value to an ISBN value. To search using an eBay Product Reference ID, set <b class="con">productId.type</b> to "ReferenceID" and set <b class="con">productId.value</b> to an ePID value (also known as an Bay Product Reference ID). If you do not know the ePID value for a product, use <b class="con">FindProducts</b> in the eBay Shopping API to retrieve the desired ePID.
	 * @var EbayFindTypeProductId
	 */
	public $productId;
	/**
	 * The itemFilter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Reduce the number of items returned by a find request using item filters. Use <b class="con">itemFilter</b> to specify name/value pairs. You can include multiple item filters in a single request.
	 * @var EbayFindTypeItemFilter
	 */
	public $itemFilter;
	/**
	 * The outputSelector
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Defines what data to return, in addition to the default set of data, in a response. <br><br> If you don't specify this field, eBay returns a default set of item fields. Use outputSelector to include more information in the response. The additional data is grouped into discrete nodes. You can specify multiple nodes by including this field multiple times, as needed, in the request. <br><br> If you specify this field, the additional fields returned can affect the call's response time (performance), including in the case with feedback data.
	 * @var EbayFindTypeOutputSelectorType
	 */
	public $outputSelector;
	/**
	 * Constructor
	 * @param EbayFindTypeProductId productId
	 * @param EbayFindTypeItemFilter itemFilter
	 * @param EbayFindTypeOutputSelectorType outputSelector
	 * @return EbayFindTypeFindItemsByProductRequest
	 */
	public function __construct($_productId,$_itemFilter = null,$_outputSelector = null)
	{
		EbayFindWsdlClass::__construct(array('productId'=>$_productId,'itemFilter'=>$_itemFilter,'outputSelector'=>$_outputSelector));
	}
	/**
	 * Set productId
	 * @param ProductId productId
	 * @return ProductId
	 */
	public function setProductId($_productId)
	{
		return ($this->productId = $_productId);
	}
	/**
	 * Get productId
	 * @return EbayFindTypeProductId
	 */
	public function getProductId()
	{
		return $this->productId;
	}
	/**
	 * Set itemFilter
	 * @param ItemFilter itemFilter
	 * @return ItemFilter
	 */
	public function setItemFilter($_itemFilter)
	{
		return ($this->itemFilter = $_itemFilter);
	}
	/**
	 * Get itemFilter
	 * @return EbayFindTypeItemFilter
	 */
	public function getItemFilter()
	{
		return $this->itemFilter;
	}
	/**
	 * Set outputSelector
	 * @param OutputSelectorType outputSelector
	 * @return OutputSelectorType
	 */
	public function setOutputSelector($_outputSelector)
	{
		return ($this->outputSelector = EbayFindTypeOutputSelectorType::valueIsValid($_outputSelector)?$_outputSelector:null);
	}
	/**
	 * Get outputSelector
	 * @return EbayFindTypeOutputSelectorType
	 */
	public function getOutputSelector()
	{
		return $this->outputSelector;
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