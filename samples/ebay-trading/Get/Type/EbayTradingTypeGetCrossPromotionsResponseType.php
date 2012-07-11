<?php
/**
 * Class file for EbayTradingTypeGetCrossPromotionsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetCrossPromotionsResponseType
 * Documentation : Returns a list of either upsell or cross-sell items for a given item ID. The list can be filtered by the viewer's role, either buyer or seller.
 * @date 04/07/2012
 */
class EbayTradingTypeGetCrossPromotionsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The CrossPromotion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A list of cross-promoted items defined for a specific referring item. The list is either upsell or cross-sell items, according to the value of PromotionMethod in GetCrossPromotionsRequest.
	 * @var EbayTradingTypeCrossPromotionsType
	 */
	public $CrossPromotion;
	/**
	 * Constructor
	 * @param EbayTradingTypeCrossPromotionsType CrossPromotion
	 * @return EbayTradingTypeGetCrossPromotionsResponseType
	 */
	public function __construct($_CrossPromotion = null)
	{
		EbayTradingWsdlClass::__construct(array('CrossPromotion'=>$_CrossPromotion));
	}
	/**
	 * Set CrossPromotion
	 * @param CrossPromotionsType CrossPromotion
	 * @return CrossPromotionsType
	 */
	public function setCrossPromotion($_CrossPromotion)
	{
		return ($this->CrossPromotion = $_CrossPromotion);
	}
	/**
	 * Get CrossPromotion
	 * @return EbayTradingTypeCrossPromotionsType
	 */
	public function getCrossPromotion()
	{
		return $this->CrossPromotion;
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