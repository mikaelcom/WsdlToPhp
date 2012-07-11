<?php
/**
 * Class file for EbayTradingTypeItemBestOffersType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemBestOffersType
 * Documentation : All best offers for the item according to the filter or best offer id (or both) used in the input. For the notification client usage, this response includes a single Best Offer.
 * @date 04/07/2012
 */
class EbayTradingTypeItemBestOffersType extends EbayTradingWsdlClass
{
	/**
	 * The Role
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the eBay user is in the Buyer or Seller role for the corresponding Best Offer.
	 * @var EbayTradingTypeTradingRoleCodeType
	 */
	public $Role;
	/**
	 * The BestOfferArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : All best offers for the item according to the filter or best offer id (or both) used in the input. The buyer and seller messages are returned only if the detail level is defined. Includes the buyer and seller message only if detail level ReturnAll is used. Only returned if best offers have been made.
	 * @var EbayTradingTypeBestOfferArrayType
	 */
	public $BestOfferArray;
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The item for which Best Offers are being returned. Only returned if best offers have been made.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeTradingRoleCodeType Role
	 * @param EbayTradingTypeBestOfferArrayType BestOfferArray
	 * @param EbayTradingTypeItemType Item
	 * @param DOMDocument any
	 * @return EbayTradingTypeItemBestOffersType
	 */
	public function __construct($_Role = null,$_BestOfferArray = null,$_Item = null,$_any = null)
	{
		parent::__construct(array('Role'=>$_Role,'BestOfferArray'=>$_BestOfferArray,'Item'=>$_Item,'any'=>$_any));
	}
	/**
	 * Set Role
	 * @param TradingRoleCodeType Role
	 * @return TradingRoleCodeType
	 */
	public function setRole($_Role)
	{
		return ($this->Role = EbayTradingTypeTradingRoleCodeType::valueIsValid($_Role)?$_Role:null);
	}
	/**
	 * Get Role
	 * @return EbayTradingTypeTradingRoleCodeType
	 */
	public function getRole()
	{
		return $this->Role;
	}
	/**
	 * Set BestOfferArray
	 * @param BestOfferArrayType BestOfferArray
	 * @return BestOfferArrayType
	 */
	public function setBestOfferArray($_BestOfferArray)
	{
		return ($this->BestOfferArray = $_BestOfferArray);
	}
	/**
	 * Get BestOfferArray
	 * @return EbayTradingTypeBestOfferArrayType
	 */
	public function getBestOfferArray()
	{
		return $this->BestOfferArray;
	}
	/**
	 * Set Item
	 * @param ItemType Item
	 * @return ItemType
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return EbayTradingTypeItemType
	 */
	public function getItem()
	{
		return $this->Item;
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