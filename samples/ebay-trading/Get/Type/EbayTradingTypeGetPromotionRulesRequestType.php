<?php
/**
 * Class file for EbayTradingTypeGetPromotionRulesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetPromotionRulesRequestType
 * Documentation : Retrieves all promotion rules associated with the specified item or store category.
 * @date 04/07/2012
 */
class EbayTradingTypeGetPromotionRulesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique ID of the item for which to retrieve promotion rules. Mutually exclusive with StoreCategoryID.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The StoreCategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique ID of the store category for which to retrieve promotion rules. Mutually exclusive with ItemID.
	 * @var long
	 */
	public $StoreCategoryID;
	/**
	 * The PromotionMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of promotion. (CrossSell: items that are related to or useful in combination with this item. UpSell: items that are more expensive than or of higher quality than this item.)
	 * @var EbayTradingTypePromotionMethodCodeType
	 */
	public $PromotionMethod;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param long StoreCategoryID
	 * @param EbayTradingTypePromotionMethodCodeType PromotionMethod
	 * @return EbayTradingTypeGetPromotionRulesRequestType
	 */
	public function __construct($_ItemID = null,$_StoreCategoryID = null,$_PromotionMethod = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'StoreCategoryID'=>$_StoreCategoryID,'PromotionMethod'=>$_PromotionMethod));
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
	 * Set StoreCategoryID
	 * @param long StoreCategoryID
	 * @return long
	 */
	public function setStoreCategoryID($_StoreCategoryID)
	{
		return ($this->StoreCategoryID = $_StoreCategoryID);
	}
	/**
	 * Get StoreCategoryID
	 * @return long
	 */
	public function getStoreCategoryID()
	{
		return $this->StoreCategoryID;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>