<?php
/**
 * Class file for EbayTradingTypePromotionDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePromotionDetailsType
 * Documentation : Contains information about a promoted item.
 * @date 04/07/2012
 */
class EbayTradingTypePromotionDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The PromotionPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The price of the cross-promoted item in the currency of the site upon which the item is listed. Output only. If the item is listed on a site different from the site specified in the request, then ConvertedPromotionPrice is also returned. Not related to the Promotional Price Display feature.
	 * @var EbayTradingTypeAmountType
	 */
	public $PromotionPrice;
	/**
	 * The PromotionPriceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The listing type for the promoted item and how the item price is used. Not related to the Promotional Price Display feature.
	 * @var EbayTradingTypePromotionItemPriceTypeCodeType
	 */
	public $PromotionPriceType;
	/**
	 * The BidCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Bid count if the item is an auction item and has bids.
	 * @var int
	 */
	public $BidCount;
	/**
	 * The ConvertedPromotionPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The converted price of the cross-promoted item. Output only. Emitted only when the item is listed on a site other than the site specified in the request. Returns the price in the currency of the site specified in the request. Not related to the Promotional Price Display feature.
	 * @var EbayTradingTypeAmountType
	 */
	public $ConvertedPromotionPrice;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeAmountType PromotionPrice
	 * @param EbayTradingTypePromotionItemPriceTypeCodeType PromotionPriceType
	 * @param int BidCount
	 * @param EbayTradingTypeAmountType ConvertedPromotionPrice
	 * @param DOMDocument any
	 * @return EbayTradingTypePromotionDetailsType
	 */
	public function __construct($_PromotionPrice = null,$_PromotionPriceType = null,$_BidCount = null,$_ConvertedPromotionPrice = null,$_any = null)
	{
		parent::__construct(array('PromotionPrice'=>$_PromotionPrice,'PromotionPriceType'=>$_PromotionPriceType,'BidCount'=>$_BidCount,'ConvertedPromotionPrice'=>$_ConvertedPromotionPrice,'any'=>$_any));
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
	 * @return EbayTradingTypeAmountType
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
		return ($this->PromotionPriceType = EbayTradingTypePromotionItemPriceTypeCodeType::valueIsValid($_PromotionPriceType)?$_PromotionPriceType:null);
	}
	/**
	 * Get PromotionPriceType
	 * @return EbayTradingTypePromotionItemPriceTypeCodeType
	 */
	public function getPromotionPriceType()
	{
		return $this->PromotionPriceType;
	}
	/**
	 * Set BidCount
	 * @param int BidCount
	 * @return int
	 */
	public function setBidCount($_BidCount)
	{
		return ($this->BidCount = $_BidCount);
	}
	/**
	 * Get BidCount
	 * @return int
	 */
	public function getBidCount()
	{
		return $this->BidCount;
	}
	/**
	 * Set ConvertedPromotionPrice
	 * @param AmountType ConvertedPromotionPrice
	 * @return AmountType
	 */
	public function setConvertedPromotionPrice($_ConvertedPromotionPrice)
	{
		return ($this->ConvertedPromotionPrice = $_ConvertedPromotionPrice);
	}
	/**
	 * Get ConvertedPromotionPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getConvertedPromotionPrice()
	{
		return $this->ConvertedPromotionPrice;
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