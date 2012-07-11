<?php
/**
 * Class file for EbayTradingTypeRespondToWantItNowPostRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRespondToWantItNowPostRequestType
 * Documentation : Enables a seller to respond to a Want It Now post with an item listed on the eBay site. Responses appear on the Want It Now post page, with the item title, the price of the item, the number of bids on the item, and the time left before the listing ends. If the item has a picture, the picture is also included on the Want It Now post page.
 * @date 04/07/2012
 */
class EbayTradingTypeRespondToWantItNowPostRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier of an item listed on the eBay site.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The PostID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier of a Want It Now post on the eBay site.
	 * @var EbayTradingTypeItemIDType
	 */
	public $PostID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeItemIDType PostID
	 * @return EbayTradingTypeRespondToWantItNowPostRequestType
	 */
	public function __construct($_ItemID = null,$_PostID = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'PostID'=>$_PostID));
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
	 * Set PostID
	 * @param ItemIDType PostID
	 * @return ItemIDType
	 */
	public function setPostID($_PostID)
	{
		return ($this->PostID = EbayTradingTypeItemIDType::valueIsValid($_PostID)?$_PostID:null);
	}
	/**
	 * Get PostID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getPostID()
	{
		return $this->PostID;
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