<?php
/**
 * Class file for PayPalTypeCrossPromotionsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCrossPromotionsType
 * Documentation : Merchandizing info for an Item. This contains a list of crosssell or upsell items. PrimaryScheme, PromotionMethod,SellerId,ItemId, ShippingDiscount do not have be min occur 0
 * @date 14/07/2012
 */
class PayPalTypeCrossPromotionsType extends PayPalWsdlClass
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- documentation : Item ID for the base item. Based on this item other items are promoted.
	 * @var PayPalTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The PrimaryScheme
	 * @var PayPalTypePromotionSchemeCodeType
	 */
	public $PrimaryScheme;
	/**
	 * The PromotionMethod
	 * @var PayPalTypePromotionMethodCodeType
	 */
	public $PromotionMethod;
	/**
	 * The SellerID
	 * Meta informations :
	 * 	- documentation : Id of the Seller who is promoting this item.
	 * @var string
	 */
	public $SellerID;
	/**
	 * The ShippingDiscount
	 * Meta informations :
	 * 	- documentation : Shipping Discount offered or not by the seller.
	 * @var boolean
	 */
	public $ShippingDiscount;
	/**
	 * The SellerKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Key of the Seller who is promoting this item.
	 * @var string
	 */
	public $SellerKey;
	/**
	 * The StoreName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Store Name for the seller.
	 * @var string
	 */
	public $StoreName;
	/**
	 * The PromotedItem
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var PayPalTypePromotedItemType
	 */
	public $PromotedItem;
	/**
	 * Constructor
	 * @param PayPalTypeItemIDType ItemID
	 * @param PayPalTypePromotionSchemeCodeType PrimaryScheme
	 * @param PayPalTypePromotionMethodCodeType PromotionMethod
	 * @param string SellerID
	 * @param boolean ShippingDiscount
	 * @param string SellerKey
	 * @param string StoreName
	 * @param PayPalTypePromotedItemType PromotedItem
	 * @return PayPalTypeCrossPromotionsType
	 */
	public function __construct($_ItemID = null,$_PrimaryScheme = null,$_PromotionMethod = null,$_SellerID = null,$_ShippingDiscount = null,$_SellerKey = null,$_StoreName = null,$_PromotedItem = null)
	{
		parent::__construct(array('ItemID'=>$_ItemID,'PrimaryScheme'=>$_PrimaryScheme,'PromotionMethod'=>$_PromotionMethod,'SellerID'=>$_SellerID,'ShippingDiscount'=>$_ShippingDiscount,'SellerKey'=>$_SellerKey,'StoreName'=>$_StoreName,'PromotedItem'=>$_PromotedItem));
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = PayPalTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return PayPalTypeItemIDType
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
		return ($this->PrimaryScheme = PayPalTypePromotionSchemeCodeType::valueIsValid($_PrimaryScheme)?$_PrimaryScheme:null);
	}
	/**
	 * Get PrimaryScheme
	 * @return PayPalTypePromotionSchemeCodeType
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
		return ($this->PromotionMethod = PayPalTypePromotionMethodCodeType::valueIsValid($_PromotionMethod)?$_PromotionMethod:null);
	}
	/**
	 * Get PromotionMethod
	 * @return PayPalTypePromotionMethodCodeType
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
	 * Set SellerKey
	 * @param string SellerKey
	 * @return string
	 */
	public function setSellerKey($_SellerKey)
	{
		return ($this->SellerKey = $_SellerKey);
	}
	/**
	 * Get SellerKey
	 * @return string
	 */
	public function getSellerKey()
	{
		return $this->SellerKey;
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
	 * @return PayPalTypePromotedItemType
	 */
	public function getPromotedItem()
	{
		return $this->PromotedItem;
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