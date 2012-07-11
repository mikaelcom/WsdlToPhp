<?php
/**
 * Class file for EbayTradingTypeVariationsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVariationsType
 * Documentation : Variations are multiple similar (but not identical) items in a single fixed-price (or Store Inventory Format) listing. For example, a single listing could contain multiple items of the same brand and model that vary by color and size (like "Blue, Large" and "Black, Medium"). Each variation can have its own quantity and price. For example, a listing could include 10 "Blue, Large" variations and 20 "Black, Medium" variations.
 * @date 04/07/2012
 */
class EbayTradingTypeVariationsType extends EbayTradingWsdlClass
{
	/**
	 * The Variation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains data that distinguishes one variation from another. For example, if the items vary by color and size, each Variation node specifies a combination of one of those colors and sizes.<br> <br> When listing or relisting an item, you are allowed to create a listing with only one variation if you plan to add more variations to it in the future. However, if you don't plan to add other variations, we recommend that you avoid listing with only one variation, so that you avoid confusing buyers.<br> <br> When you modify a variation, it's safest to specify all the fields with the values you want in the listing. At a minimum, StartPrice and VariationSpecifics are required to modify an existing variation. If you omit SKU, the existing SKU (if any) is deleted from the variation. If you omit Quantity, it is set to 0.
	 * @var EbayTradingTypeVariationType
	 */
	public $Variation;
	/**
	 * The Pictures
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains a set of pictures that correspond to one of the variation specifics, such as Color. For example, if a listing has blue and black color variations, you could choose Color for all the pictures, and then include a set of pictures for the blue variations and another set of pictures for the black variations.<br> <br> We strongly recommend that you also include shared pictures in Item.PictureDetails, as this results in a better experience for buyers.<br> <br> <b>For ReviseFixedPriceItem only:</b> To replace or delete individual pictures, pass in the entire Pictures node with the complete set of variation pictures that you want in the listing. If the applicable variations have purchases or the listing ends in less than 12 hours, you can add pictures, but you can't remove existing pictures.<br> <br> <span class="tablenote"><b>Note:</b> Only one Pictures node is allowed for a listing. However, the node has been defined as unbounded (repeatable) in the schema to allow for different use cases for some calls or sites in the future.</span>
	 * @var EbayTradingTypePicturesType
	 */
	public $Pictures;
	/**
	 * The VariationSpecificsSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The set of all variation names and values that can be applicable to the listing (at any time in its life cycle). This must include (but is not limited to) all names and values specified in the VariationSpecifics nodes.<br> <br> This set configures variation selection widgets that appear on eBay's View Item page. For example, if you specify Color and Size names in the set, eBay's View Item page displays Color and Size drop-down lists to enable a buyer to choose a variation of interest.<br> <br> The order in which you specify the names and values also controls the order in which the selection widgets appear on the View Item page. For example, if you specify "Color", then "Size", and then "Sleeve Style" as names, the View Item page shows drop-down lists with those labels in that order. For "Size", if you specify "S", "M", and "L" as values, the View Item page shows the values in that order in the Size drop-down list.<br> <br> Use GetCategorySpecifics to retrieve recommendations for names, values, and order.<br> <br> Required when Variations are specified in a new listing (e.g., in AddFixedPriceItem).
	 * @var EbayTradingTypeNameValueListArrayType
	 */
	public $VariationSpecificsSet;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeVariationType Variation
	 * @param EbayTradingTypePicturesType Pictures
	 * @param EbayTradingTypeNameValueListArrayType VariationSpecificsSet
	 * @param DOMDocument any
	 * @return EbayTradingTypeVariationsType
	 */
	public function __construct($_Variation = null,$_Pictures = null,$_VariationSpecificsSet = null,$_any = null)
	{
		parent::__construct(array('Variation'=>$_Variation,'Pictures'=>$_Pictures,'VariationSpecificsSet'=>$_VariationSpecificsSet,'any'=>$_any));
	}
	/**
	 * Set Variation
	 * @param VariationType Variation
	 * @return VariationType
	 */
	public function setVariation($_Variation)
	{
		return ($this->Variation = $_Variation);
	}
	/**
	 * Get Variation
	 * @return EbayTradingTypeVariationType
	 */
	public function getVariation()
	{
		return $this->Variation;
	}
	/**
	 * Set Pictures
	 * @param PicturesType Pictures
	 * @return PicturesType
	 */
	public function setPictures($_Pictures)
	{
		return ($this->Pictures = $_Pictures);
	}
	/**
	 * Get Pictures
	 * @return EbayTradingTypePicturesType
	 */
	public function getPictures()
	{
		return $this->Pictures;
	}
	/**
	 * Set VariationSpecificsSet
	 * @param NameValueListArrayType VariationSpecificsSet
	 * @return NameValueListArrayType
	 */
	public function setVariationSpecificsSet($_VariationSpecificsSet)
	{
		return ($this->VariationSpecificsSet = $_VariationSpecificsSet);
	}
	/**
	 * Get VariationSpecificsSet
	 * @return EbayTradingTypeNameValueListArrayType
	 */
	public function getVariationSpecificsSet()
	{
		return $this->VariationSpecificsSet;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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