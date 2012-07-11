<?php
/**
 * Class file for EbayTradingTypeGetCrossPromotionsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetCrossPromotionsRequestType
 * Documentation : Retrieves a list of upsell or cross-sell items associated with the specifeid item ID.
 * @date 04/07/2012
 */
class EbayTradingTypeGetCrossPromotionsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique ID of the referring item. The cross-promoted items will supplement this item.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The PromotionMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The cross-promotion method you want to use for the returned list, either UpSell or CrossSell.
	 * @var EbayTradingTypePromotionMethodCodeType
	 */
	public $PromotionMethod;
	/**
	 * The PromotionViewMode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The role of the person requesting to view the cross-promoted items, either seller or buyer. Default is buyer.
	 * @var EbayTradingTypeTradingRoleCodeType
	 */
	public $PromotionViewMode;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypePromotionMethodCodeType PromotionMethod
	 * @param EbayTradingTypeTradingRoleCodeType PromotionViewMode
	 * @return EbayTradingTypeGetCrossPromotionsRequestType
	 */
	public function __construct($_ItemID = null,$_PromotionMethod = null,$_PromotionViewMode = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'PromotionMethod'=>$_PromotionMethod,'PromotionViewMode'=>$_PromotionViewMode));
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
	 * Set PromotionViewMode
	 * @param TradingRoleCodeType PromotionViewMode
	 * @return TradingRoleCodeType
	 */
	public function setPromotionViewMode($_PromotionViewMode)
	{
		return ($this->PromotionViewMode = EbayTradingTypeTradingRoleCodeType::valueIsValid($_PromotionViewMode)?$_PromotionViewMode:null);
	}
	/**
	 * Get PromotionViewMode
	 * @return EbayTradingTypeTradingRoleCodeType
	 */
	public function getPromotionViewMode()
	{
		return $this->PromotionViewMode;
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