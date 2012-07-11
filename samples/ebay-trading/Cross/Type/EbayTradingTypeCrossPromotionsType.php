<?php
/**
 * Class file for EbayTradingTypeCrossPromotionsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCrossPromotionsType
 * Documentation : Contains one or more items cross-promoted with the display or purchase of a referring item.
 * @date 04/07/2012
 */
class EbayTradingTypeCrossPromotionsType extends EbayTradingWsdlClass
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique item ID for the referring item.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The PrimaryScheme
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The primary cross-promotion rule scheme that was applied to return the cross-promoted item.
	 * @var EbayTradingTypePromotionSchemeCodeType
	 */
	public $PrimaryScheme;
	/**
	 * The PromotionMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of promotion, CrossSell or UpSell.
	 * @var EbayTradingTypePromotionMethodCodeType
	 */
	public $PromotionMethod;
	/**
	 * The SellerID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The eBay user ID of the seller offering the cross-promoted item.
	 * @var string
	 */
	public $SellerID;
	/**
	 * The ShippingDiscount
	 * Meta informations :
	 * 	- documentation : Whether a shipping discount is offered by the seller when the cross-promoted item is purchased.
	 * @var boolean
	 */
	public $ShippingDiscount;
	/**
	 * The StoreName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The store name of the seller offering the cross-promoted item.
	 * @var string
	 */
	public $StoreName;
	/**
	 * The PromotedItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains one cross-promoted item.
	 * @var EbayTradingTypePromotedItemType
	 */
	public $PromotedItem;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypePromotionSchemeCodeType PrimaryScheme
	 * @param EbayTradingTypePromotionMethodCodeType PromotionMethod
	 * @param string SellerID
	 * @param boolean ShippingDiscount
	 * @param string StoreName
	 * @param EbayTradingTypePromotedItemType PromotedItem
	 * @param DOMDocument any
	 * @return EbayTradingTypeCrossPromotionsType
	 */
	public function __construct($_ItemID = null,$_PrimaryScheme = null,$_PromotionMethod = null,$_SellerID = null,$_ShippingDiscount = null,$_StoreName = null,$_PromotedItem = null,$_any = null)
	{
		parent::__construct(array('ItemID'=>$_ItemID,'PrimaryScheme'=>$_PrimaryScheme,'PromotionMethod'=>$_PromotionMethod,'SellerID'=>$_SellerID,'ShippingDiscount'=>$_ShippingDiscount,'StoreName'=>$_StoreName,'PromotedItem'=>$_PromotedItem,'any'=>$_any));
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set PrimaryScheme
	 * @param PromotionSchemeCodeType PrimaryScheme
	 * @return PromotionSchemeCodeType
	 */
	public function setPrimaryScheme($_PrimaryScheme)
	{
		return ($this->PrimaryScheme = EbayTradingTypePromotionSchemeCodeType::valueIsValid($_PrimaryScheme)?$_PrimaryScheme:null);
	}
	/**
	 * Get PrimaryScheme
	 * @return EbayTradingTypePromotionSchemeCodeType
	 */
	public function getPrimaryScheme()
	{
		return $this->PrimaryScheme;
	}
	/**
	 * Set PromotionMethod
	 * @param PromotionMethodCodeType PromotionMethod
	 * @return PromotionMethodCodeType
	 */
	public function setPromotionMethod($_PromotionMethod)
	{
		return ($this->PromotionMethod = EbayTradingTypePromotionMethodCodeType::valueIsValid($_PromotionMethod)?$_PromotionMethod:null);
	}
	/**
	 * Get PromotionMethod
	 * @return EbayTradingTypePromotionMethodCodeType
	 */
	public function getPromotionMethod()
	{
		return $this->PromotionMethod;
	}
	/**
	 * Set SellerID
	 * @param string SellerID
	 * @return string
	 */
	public function setSellerID($_SellerID)
	{
		return ($this->SellerID = $_SellerID);
	}
	/**
	 * Get SellerID
	 * @return string
	 */
	public function getSellerID()
	{
		return $this->SellerID;
	}
	/**
	 * Set ShippingDiscount
	 * @param boolean ShippingDiscount
	 * @return boolean
	 */
	public function setShippingDiscount($_ShippingDiscount)
	{
		return ($this->ShippingDiscount = $_ShippingDiscount);
	}
	/**
	 * Get ShippingDiscount
	 * @return boolean
	 */
	public function getShippingDiscount()
	{
		return $this->ShippingDiscount;
	}
	/**
	 * Set StoreName
	 * @param string StoreName
	 * @return string
	 */
	public function setStoreName($_StoreName)
	{
		return ($this->StoreName = $_StoreName);
	}
	/**
	 * Get StoreName
	 * @return string
	 */
	public function getStoreName()
	{
		return $this->StoreName;
	}
	/**
	 * Set PromotedItem
	 * @param PromotedItemType PromotedItem
	 * @return PromotedItemType
	 */
	public function setPromotedItem($_PromotedItem)
	{
		return ($this->PromotedItem = $_PromotedItem);
	}
	/**
	 * Get PromotedItem
	 * @return EbayTradingTypePromotedItemType
	 */
	public function getPromotedItem()
	{
		return $this->PromotedItem;
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