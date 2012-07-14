<?php
/**
 * Class file for PayPalTypePromotedItemType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePromotedItemType
 * Documentation : Merchandizing info for an Item. This contains a list of crosssell or upsell items.
 * @date 14/07/2012
 */
class PayPalTypePromotedItemType extends PayPalWsdlClass
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- documentation : Item ID for the base item. Based on this item other items are promoted. it is teh only tag that would show up in all calls that use promoted item type. some are not in soap yet, such as get and ser promotion rules
	 * @var PayPalTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The PictureURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL for the picture of the promoted item.
	 * @var string
	 */
	public $PictureURL;
	/**
	 * The position
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Where to display in the list of items.currentl y even forget and set does not have to be minoccur =0 but if we ever were to do revise promotion tems, it can be omitted
	 * @var int
	 */
	public $position;
	/**
	 * The PromotionPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Promotion Price. Price at which the buyer can buy the item now.
	 * @var PayPalTypeAmountType
	 */
	public $PromotionPrice;
	/**
	 * The PromotionPriceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypePromotionItemPriceTypeCodeType
	 */
	public $PromotionPriceType;
	/**
	 * The SelectionType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypePromotionItemSelectionCodeType
	 */
	public $SelectionType;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Item Title for the promoted item.
	 * @var string
	 */
	public $Title;
	/**
	 * The ListingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeListingTypeCodeType
	 */
	public $ListingType;
	/**
	 * Constructor
	 * @param PayPalTypeItemIDType ItemID
	 * @param string PictureURL
	 * @param int position
	 * @param PayPalTypeAmountType PromotionPrice
	 * @param PayPalTypePromotionItemPriceTypeCodeType PromotionPriceType
	 * @param PayPalTypePromotionItemSelectionCodeType SelectionType
	 * @param string Title
	 * @param PayPalTypeListingTypeCodeType ListingType
	 * @return PayPalTypePromotedItemType
	 */
	public function __construct($_ItemID = null,$_PictureURL = null,$_position = null,$_PromotionPrice = null,$_PromotionPriceType = null,$_SelectionType = null,$_Title = null,$_ListingType = null)
	{
		parent::__construct(array('ItemID'=>$_ItemID,'PictureURL'=>$_PictureURL,'position'=>$_position,'PromotionPrice'=>$_PromotionPrice,'PromotionPriceType'=>$_PromotionPriceType,'SelectionType'=>$_SelectionType,'Title'=>$_Title,'ListingType'=>$_ListingType));
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
	 * Set PictureURL
	 * @param string PictureURL
	 * @return string
	 */
	public function setPictureURL($_PictureURL)
	{
		return ($this->PictureURL = $_PictureURL);
	}
	/**
	 * Get PictureURL
	 * @return string
	 */
	public function getPictureURL()
	{
		return $this->PictureURL;
	}
	/**
	 * Set position
	 * @param int position
	 * @return int
	 */
	public function setPosition($_position)
	{
		return ($this->position = $_position);
	}
	/**
	 * Get position
	 * @return int
	 */
	public function getPosition()
	{
		return $this->position;
	}
	/**
	 * Set PromotionPrice
	 * @param AmountType PromotionPrice
	 * @return AmountType
	 */
	public function setPromotionPrice($_PromotionPrice)
	{
		return ($this->PromotionPrice = $_PromotionPrice);
	}
	/**
	 * Get PromotionPrice
	 * @return PayPalTypeAmountType
	 */
	public function getPromotionPrice()
	{
		return $this->PromotionPrice;
	}
	/**
	 * Set PromotionPriceType
	 * @param PromotionItemPriceTypeCodeType PromotionPriceType
	 * @return PromotionItemPriceTypeCodeType
	 */
	public function setPromotionPriceType($_PromotionPriceType)
	{
		return ($this->PromotionPriceType = PayPalTypePromotionItemPriceTypeCodeType::valueIsValid($_PromotionPriceType)?$_PromotionPriceType:null);
	}
	/**
	 * Get PromotionPriceType
	 * @return PayPalTypePromotionItemPriceTypeCodeType
	 */
	public function getPromotionPriceType()
	{
		return $this->PromotionPriceType;
	}
	/**
	 * Set SelectionType
	 * @param PromotionItemSelectionCodeType SelectionType
	 * @return PromotionItemSelectionCodeType
	 */
	public function setSelectionType($_SelectionType)
	{
		return ($this->SelectionType = PayPalTypePromotionItemSelectionCodeType::valueIsValid($_SelectionType)?$_SelectionType:null);
	}
	/**
	 * Get SelectionType
	 * @return PayPalTypePromotionItemSelectionCodeType
	 */
	public function getSelectionType()
	{
		return $this->SelectionType;
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set ListingType
	 * @param ListingTypeCodeType ListingType
	 * @return ListingTypeCodeType
	 */
	public function setListingType($_ListingType)
	{
		return ($this->ListingType = PayPalTypeListingTypeCodeType::valueIsValid($_ListingType)?$_ListingType:null);
	}
	/**
	 * Get ListingType
	 * @return PayPalTypeListingTypeCodeType
	 */
	public function getListingType()
	{
		return $this->ListingType;
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