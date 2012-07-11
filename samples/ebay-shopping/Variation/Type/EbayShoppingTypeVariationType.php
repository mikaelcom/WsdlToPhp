<?php
/**
 * Class file for EbayShoppingTypeVariationType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeVariationType
 * Documentation : This element hold the values that define the SKU, StartPrice, Quantity, VariationDetails, and VariationSpecifics.
 * @date 05/07/2012
 */
class EbayShoppingTypeVariationType extends EbayShoppingWsdlClass
{
	/**
	 * The SKU
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An SKU (stock keeping unit) is an identifier defined by a seller. If you need to contact the seller to ask a question about a particular variation, you can mention the SKU (if present) to help the seller identify the variation you're interested in. Only returned if the seller chose to specify a SKU for the variation.
	 * @var string
	 */
	public $SKU;
	/**
	 * The StartPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The fixed price of all items identified by this variation. For example, a "Blue, Large" variation price could be USD 10.00, and a "Black, Medium" variation price could be USD 5.00. <br> <br> Each variation has its own price, and the prices can be different for each variation. This enables sellers to provide discounts on certain variations without affecting the price of others. Always returned) for multi-variation listings.
	 * @var EbayShoppingTypeAmountType
	 */
	public $StartPrice;
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of items available for sale that are associated with this variation.
	 * @var int
	 */
	public $Quantity;
	/**
	 * The VariationSpecifics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A list of name/value pairs that uniquely identify the variation within the listing. All variations specify the same set of names, and each variation provides a unique combination of values for those names. For example, if the items vary by color and size, then every variation specifies Color and Size as names, and no two variations can specify the same combination of color and size values. Use this information to identify a variation of interest when you communicate with the seller. <br> <br> If your application supports PlaceOffer (in the Trading API), you use this information to uniquely identify the variation that you want to purchase.
	 * @var EbayShoppingTypeNameValueListArrayType
	 */
	public $VariationSpecifics;
	/**
	 * The QuantitySold
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Not used. See SellingStatus.QuantitySold instead.
	 * @var int
	 */
	public $QuantitySold;
	/**
	 * The SellingStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the variation's current price and quantity sold. Always returned when variations are present.
	 * @var EbayShoppingTypeSellingStatusType
	 */
	public $SellingStatus;
	/**
	 * The DiscountPriceInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This container provides information for an item that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP applies to only fixed price, BIN items. STP is available on the US, UK, and German (DE) sites, while MAP is available only on the US site. <br><br> Discount pricing is available to qualified sellers (and their associated developers) who participate in the Discount Pricing Program. Once qualified, sellers receive a "sepcial account flag" (SAF) that allows them to apply Discount Pricing to both MSKU and Non-MSKU items.
	 * @var EbayShoppingTypeDiscountPriceInfoType
	 */
	public $DiscountPriceInfo;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string SKU
	 * @param EbayShoppingTypeAmountType StartPrice
	 * @param int Quantity
	 * @param EbayShoppingTypeNameValueListArrayType VariationSpecifics
	 * @param int QuantitySold
	 * @param EbayShoppingTypeSellingStatusType SellingStatus
	 * @param EbayShoppingTypeDiscountPriceInfoType DiscountPriceInfo
	 * @param DOMDocument any
	 * @return EbayShoppingTypeVariationType
	 */
	public function __construct($_SKU = null,$_StartPrice = null,$_Quantity = null,$_VariationSpecifics = null,$_QuantitySold = null,$_SellingStatus = null,$_DiscountPriceInfo = null,$_any = null)
	{
		parent::__construct(array('SKU'=>$_SKU,'StartPrice'=>$_StartPrice,'Quantity'=>$_Quantity,'VariationSpecifics'=>$_VariationSpecifics,'QuantitySold'=>$_QuantitySold,'SellingStatus'=>$_SellingStatus,'DiscountPriceInfo'=>$_DiscountPriceInfo,'any'=>$_any));
	}
	/**
	 * Set SKU
	 * @param string SKU
	 * @return string
	 */
	public function setSKU($_SKU)
	{
		return ($this->SKU = $_SKU);
	}
	/**
	 * Get SKU
	 * @return string
	 */
	public function getSKU()
	{
		return $this->SKU;
	}
	/**
	 * Set StartPrice
	 * @param AmountType StartPrice
	 * @return AmountType
	 */
	public function setStartPrice($_StartPrice)
	{
		return ($this->StartPrice = $_StartPrice);
	}
	/**
	 * Get StartPrice
	 * @return EbayShoppingTypeAmountType
	 */
	public function getStartPrice()
	{
		return $this->StartPrice;
	}
	/**
	 * Set Quantity
	 * @param int Quantity
	 * @return int
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return int
	 */
	public function getQuantity()
	{
		return $this->Quantity;
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
	 * Set QuantitySold
	 * @param int QuantitySold
	 * @return int
	 */
	public function setQuantitySold($_QuantitySold)
	{
		return ($this->QuantitySold = $_QuantitySold);
	}
	/**
	 * Get QuantitySold
	 * @return int
	 */
	public function getQuantitySold()
	{
		return $this->QuantitySold;
	}
	/**
	 * Set SellingStatus
	 * @param SellingStatusType SellingStatus
	 * @return SellingStatusType
	 */
	public function setSellingStatus($_SellingStatus)
	{
		return ($this->SellingStatus = $_SellingStatus);
	}
	/**
	 * Get SellingStatus
	 * @return EbayShoppingTypeSellingStatusType
	 */
	public function getSellingStatus()
	{
		return $this->SellingStatus;
	}
	/**
	 * Set DiscountPriceInfo
	 * @param DiscountPriceInfoType DiscountPriceInfo
	 * @return DiscountPriceInfoType
	 */
	public function setDiscountPriceInfo($_DiscountPriceInfo)
	{
		return ($this->DiscountPriceInfo = $_DiscountPriceInfo);
	}
	/**
	 * Get DiscountPriceInfo
	 * @return EbayShoppingTypeDiscountPriceInfoType
	 */
	public function getDiscountPriceInfo()
	{
		return $this->DiscountPriceInfo;
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