<?php
/**
 * Class file for EbayTradingTypeBestOfferType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBestOfferType
 * Documentation : Details about a best offer.
 * @date 04/07/2012
 */
class EbayTradingTypeBestOfferType extends EbayTradingWsdlClass
{
	/**
	 * The BestOfferID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An ID to distinguish this best offer from other best offers made on the item.
	 * @var EbayTradingTypeBestOfferIDType
	 */
	public $BestOfferID;
	/**
	 * The ExpirationTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date and time (in GMT) the offer naturally expires (if the seller has not accepted or declined the offer).
	 * @var dateTime
	 */
	public $ExpirationTime;
	/**
	 * The Buyer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Information about the buyer who made the best offer.
	 * @var EbayTradingTypeUserType
	 */
	public $Buyer;
	/**
	 * The Price
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The amount of the best offer.
	 * @var EbayTradingTypeAmountType
	 */
	public $Price;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The state of the offer. In the case of a PlaceOffer response that specified a best offer, Status may be "Accepted" if the best offer was at or above an auto-accept price.
	 * @var EbayTradingTypeBestOfferStatusCodeType
	 */
	public $Status;
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of items for which the buyer is making an offer.
	 * @var int
	 */
	public $Quantity;
	/**
	 * The BuyerMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Text message that was provided by a buyer when placing a best offer.
	 * @var string
	 */
	public $BuyerMessage;
	/**
	 * The SellerMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Text response to buyer from seller.
	 * @var string
	 */
	public $SellerMessage;
	/**
	 * The BestOfferCodeType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The best offer type.
	 * @var EbayTradingTypeBestOfferTypeCodeType
	 */
	public $BestOfferCodeType;
	/**
	 * The CallStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The status of the call, either Success or Failure.
	 * @var string
	 */
	public $CallStatus;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeBestOfferIDType BestOfferID
	 * @param dateTime ExpirationTime
	 * @param EbayTradingTypeUserType Buyer
	 * @param EbayTradingTypeAmountType Price
	 * @param EbayTradingTypeBestOfferStatusCodeType Status
	 * @param int Quantity
	 * @param string BuyerMessage
	 * @param string SellerMessage
	 * @param EbayTradingTypeBestOfferTypeCodeType BestOfferCodeType
	 * @param string CallStatus
	 * @param DOMDocument any
	 * @return EbayTradingTypeBestOfferType
	 */
	public function __construct($_BestOfferID = null,$_ExpirationTime = null,$_Buyer = null,$_Price = null,$_Status = null,$_Quantity = null,$_BuyerMessage = null,$_SellerMessage = null,$_BestOfferCodeType = null,$_CallStatus = null,$_any = null)
	{
		parent::__construct(array('BestOfferID'=>$_BestOfferID,'ExpirationTime'=>$_ExpirationTime,'Buyer'=>$_Buyer,'Price'=>$_Price,'Status'=>$_Status,'Quantity'=>$_Quantity,'BuyerMessage'=>$_BuyerMessage,'SellerMessage'=>$_SellerMessage,'BestOfferCodeType'=>$_BestOfferCodeType,'CallStatus'=>$_CallStatus,'any'=>$_any));
	}
	/**
	 * Set BestOfferID
	 * @param BestOfferIDType BestOfferID
	 * @return BestOfferIDType
	 */
	public function setBestOfferID($_BestOfferID)
	{
		return ($this->BestOfferID = EbayTradingTypeBestOfferIDType::valueIsValid($_BestOfferID)?$_BestOfferID:null);
	}
	/**
	 * Get BestOfferID
	 * @return EbayTradingTypeBestOfferIDType
	 */
	public function getBestOfferID()
	{
		return $this->BestOfferID;
	}
	/**
	 * Set ExpirationTime
	 * @param dateTime ExpirationTime
	 * @return dateTime
	 */
	public function setExpirationTime($_ExpirationTime)
	{
		return ($this->ExpirationTime = $_ExpirationTime);
	}
	/**
	 * Get ExpirationTime
	 * @return dateTime
	 */
	public function getExpirationTime()
	{
		return $this->ExpirationTime;
	}
	/**
	 * Set Buyer
	 * @param UserType Buyer
	 * @return UserType
	 */
	public function setBuyer($_Buyer)
	{
		return ($this->Buyer = $_Buyer);
	}
	/**
	 * Get Buyer
	 * @return EbayTradingTypeUserType
	 */
	public function getBuyer()
	{
		return $this->Buyer;
	}
	/**
	 * Set Price
	 * @param AmountType Price
	 * @return AmountType
	 */
	public function setPrice($_Price)
	{
		return ($this->Price = $_Price);
	}
	/**
	 * Get Price
	 * @return EbayTradingTypeAmountType
	 */
	public function getPrice()
	{
		return $this->Price;
	}
	/**
	 * Set Status
	 * @param BestOfferStatusCodeType Status
	 * @return BestOfferStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypeBestOfferStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeBestOfferStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
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
	 * Set BuyerMessage
	 * @param string BuyerMessage
	 * @return string
	 */
	public function setBuyerMessage($_BuyerMessage)
	{
		return ($this->BuyerMessage = $_BuyerMessage);
	}
	/**
	 * Get BuyerMessage
	 * @return string
	 */
	public function getBuyerMessage()
	{
		return $this->BuyerMessage;
	}
	/**
	 * Set SellerMessage
	 * @param string SellerMessage
	 * @return string
	 */
	public function setSellerMessage($_SellerMessage)
	{
		return ($this->SellerMessage = $_SellerMessage);
	}
	/**
	 * Get SellerMessage
	 * @return string
	 */
	public function getSellerMessage()
	{
		return $this->SellerMessage;
	}
	/**
	 * Set BestOfferCodeType
	 * @param BestOfferTypeCodeType BestOfferCodeType
	 * @return BestOfferTypeCodeType
	 */
	public function setBestOfferCodeType($_BestOfferCodeType)
	{
		return ($this->BestOfferCodeType = EbayTradingTypeBestOfferTypeCodeType::valueIsValid($_BestOfferCodeType)?$_BestOfferCodeType:null);
	}
	/**
	 * Get BestOfferCodeType
	 * @return EbayTradingTypeBestOfferTypeCodeType
	 */
	public function getBestOfferCodeType()
	{
		return $this->BestOfferCodeType;
	}
	/**
	 * Set CallStatus
	 * @param string CallStatus
	 * @return string
	 */
	public function setCallStatus($_CallStatus)
	{
		return ($this->CallStatus = $_CallStatus);
	}
	/**
	 * Get CallStatus
	 * @return string
	 */
	public function getCallStatus()
	{
		return $this->CallStatus;
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