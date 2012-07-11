<?php
/**
 * Class file for EbayShoppingTypeVariationsType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeVariationsType
 * Documentation : Variations are multiple similar (but not identical) items in a single fixed-price (or Store Inventory Format) listing. For example, a single listing could contain multiple items of the same brand and model that vary by color and size (like "Blue, Large" and "Black, Medium"). Each variation can have its own quantity and price. For example, a listing could include 10 "Blue, Large" variations and 20 "Black, Medium" variations.
 * @date 05/07/2012
 */
class EbayShoppingTypeVariationsType extends EbayShoppingWsdlClass
{
	/**
	 * The Variation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains data that distinguishes one variation from another. For example, if the items vary by color and size, each Variation node specifies a combination of one of those colors and sizes.
	 * @var EbayShoppingTypeVariationType
	 */
	public $Variation;
	/**
	 * The Pictures
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains a set of pictures that correspond to one of the variation specifics, such as Color. For example, if a listing has blue and black color variations, a listing could specify the name Color as an organizing mechanism for all the pictures, and then include a set of pictures for the blue variations and another set of pictures for the black variations.<br> <br> <span class="tablenote"><b>Note:</b> Only one Pictures node is currently returned for a listing. However, the node has been defined as unbounded (repeatable) in the schema to allow for different use cases for some calls or sites in the future.</span>
	 * @var EbayShoppingTypePicturesType
	 */
	public $Pictures;
	/**
	 * The VariationSpecificsSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A list of all variation names and values that are defined on the item. This could include values that were previously defined (but no longer for sale).<br> <br> eBay uses this list to configure variation selection widgets that appear on eBay's View Item page. For example, if Color and Size are names in the list, then eBay's View Item page displays Color and Size drop-down lists to help a buyer choose a variation of interest.<br> <br> The order in which the names and values are returned matches the order in which the selection widgets appear on the View Item page. For example, if the names "Color", then "Size", and then "Sleeve Style" are returned, the View Item page shows drop-down lists with those labels in that order. For "Size", if the values returned are "S", "M", and then "L", the View Item page shows the values in that order in the Size drop-down list.
	 * @var EbayShoppingTypeNameValueListArrayType
	 */
	public $VariationSpecificsSet;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayShoppingTypeVariationType Variation
	 * @param EbayShoppingTypePicturesType Pictures
	 * @param EbayShoppingTypeNameValueListArrayType VariationSpecificsSet
	 * @param DOMDocument any
	 * @return EbayShoppingTypeVariationsType
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
	 * @return EbayShoppingTypeVariationType
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
	 * @return EbayShoppingTypePicturesType
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
	 * @return EbayShoppingTypeNameValueListArrayType
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