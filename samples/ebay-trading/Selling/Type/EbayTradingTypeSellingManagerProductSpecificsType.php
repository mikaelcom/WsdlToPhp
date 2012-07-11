<?php
/**
 * Class file for EbayTradingTypeSellingManagerProductSpecificsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerProductSpecificsType
 * Documentation : Describes a Selling Manager Template
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerProductSpecificsType extends EbayTradingWsdlClass
{
	/**
	 * The PrimaryCategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Category ID for a product with variations. Only applicable (and required on input) when Variations and/or ItemSpecifics is specified in the request or returned in a response.
	 * @var string
	 */
	public $PrimaryCategoryID;
	/**
	 * The Variations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Variations are multiple similar (but not identical) versions of the same product. For example, two shirt variations could have the same brand and sleeve style, but could vary by color and size (like "Blue, Large" and "Black, Medium"). On eBay, a single fixed-price (or Store Inventory Format) listing can include multiple variations. Each variation can have its own quantity and price. To determine which categories support variations, use GetCategoryFeatures.
	 * @var EbayTradingTypeVariationsType
	 */
	public $Variations;
	/**
	 * The ItemSpecifics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A list of custom Item Specifics for the product. Custom Item Specifics give sellers a structured way to describe details of their items in a name-value format. For example, a book could have Item Specifics like Author=J.K. Rowling and Format=Hardcover. To determine which categories support custom Item Specifics, use GetCategoryFeatures.
	 * @var EbayTradingTypeNameValueListArrayType
	 */
	public $ItemSpecifics;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string PrimaryCategoryID
	 * @param EbayTradingTypeVariationsType Variations
	 * @param EbayTradingTypeNameValueListArrayType ItemSpecifics
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellingManagerProductSpecificsType
	 */
	public function __construct($_PrimaryCategoryID = null,$_Variations = null,$_ItemSpecifics = null,$_any = null)
	{
		parent::__construct(array('PrimaryCategoryID'=>$_PrimaryCategoryID,'Variations'=>$_Variations,'ItemSpecifics'=>$_ItemSpecifics,'any'=>$_any));
	}
	/**
	 * Set PrimaryCategoryID
	 * @param string PrimaryCategoryID
	 * @return string
	 */
	public function setPrimaryCategoryID($_PrimaryCategoryID)
	{
		return ($this->PrimaryCategoryID = $_PrimaryCategoryID);
	}
	/**
	 * Get PrimaryCategoryID
	 * @return string
	 */
	public function getPrimaryCategoryID()
	{
		return $this->PrimaryCategoryID;
	}
	/**
	 * Set Variations
	 * @param VariationsType Variations
	 * @return VariationsType
	 */
	public function setVariations($_Variations)
	{
		return ($this->Variations = $_Variations);
	}
	/**
	 * Get Variations
	 * @return EbayTradingTypeVariationsType
	 */
	public function getVariations()
	{
		return $this->Variations;
	}
	/**
	 * Set ItemSpecifics
	 * @param NameValueListArrayType ItemSpecifics
	 * @return NameValueListArrayType
	 */
	public function setItemSpecifics($_ItemSpecifics)
	{
		return ($this->ItemSpecifics = $_ItemSpecifics);
	}
	/**
	 * Get ItemSpecifics
	 * @return EbayTradingTypeNameValueListArrayType
	 */
	public function getItemSpecifics()
	{
		return $this->ItemSpecifics;
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