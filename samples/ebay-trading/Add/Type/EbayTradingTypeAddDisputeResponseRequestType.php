<?php
/**
 * Class file for EbayTradingTypeAddDisputeResponseRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddDisputeResponseRequestType
 * Documentation : Allows a seller to respond to or close an Item Not Received dispute. This can be used to add a comment to an Unpaid Item Dispute only if the request version was lower than 637 when the dispute was created.
 * @date 04/07/2012
 */
class EbayTradingTypeAddDisputeResponseRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The DisputeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier of the dispute, returned when the dispute was created.
	 * @var EbayTradingTypeDisputeIDType
	 */
	public $DisputeID;
	/**
	 * The MessageText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The text of a comment or response being posted to the dispute. Required when DisputeActivity is SellerAddInformation, SellerComment, or SellerPaymentNotReceived; otherwise, optional.
	 * @var string
	 */
	public $MessageText;
	/**
	 * The DisputeActivity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of activity the seller is taking on the dispute. The allowed value is determined by the current value of DisputeState, returned by GetDispute or GetUserDisputes. Some values relate to Unpaid Item disputes and other values relate to buyer-created disputes known as Item Not Received or Significantly Not As Described disputes.
	 * @var EbayTradingTypeDisputeActivityCodeType
	 */
	public $DisputeActivity;
	/**
	 * The ShippingCarrierUsed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The shipping carrier used to ship the item in dispute. Non-alphanumeric characters are not allowed. This field (along with ShipmentTrackNumber) is required if DisputeActivity is SellerShippedItem.
	 * @var string
	 */
	public $ShippingCarrierUsed;
	/**
	 * The ShipmentTrackNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The tracking number associated with one package of a shipment. The seller is responsible for the accuracy of the shipment tracking number, as eBay only verifies that the tracking number is consistent with the numbering scheme used by the specified shipping carrier, but cannot verify the accuracy of the tracking number. This field (along with ShippingCarrierUsed) is required if DisputeActivity is SellerShippedItem.
	 * @var string
	 */
	public $ShipmentTrackNumber;
	/**
	 * The ShippingTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This timestamp indicates the date and time when the item under dispute was shipped. This field is required if DisputeActivity is SellerShippedItem.
	 * @var dateTime
	 */
	public $ShippingTime;
	/**
	 * Constructor
	 * @param EbayTradingTypeDisputeIDType DisputeID
	 * @param string MessageText
	 * @param EbayTradingTypeDisputeActivityCodeType DisputeActivity
	 * @param string ShippingCarrierUsed
	 * @param string ShipmentTrackNumber
	 * @param dateTime ShippingTime
	 * @return EbayTradingTypeAddDisputeResponseRequestType
	 */
	public function __construct($_DisputeID = null,$_MessageText = null,$_DisputeActivity = null,$_ShippingCarrierUsed = null,$_ShipmentTrackNumber = null,$_ShippingTime = null)
	{
		EbayTradingWsdlClass::__construct(array('DisputeID'=>$_DisputeID,'MessageText'=>$_MessageText,'DisputeActivity'=>$_DisputeActivity,'ShippingCarrierUsed'=>$_ShippingCarrierUsed,'ShipmentTrackNumber'=>$_ShipmentTrackNumber,'ShippingTime'=>$_ShippingTime));
	}
	/**
	 * Set DisputeID
	 * @param DisputeIDType DisputeID
	 * @return DisputeIDType
	 */
	public function setDisputeID($_DisputeID)
	{
		return ($this->DisputeID = EbayTradingTypeDisputeIDType::valueIsValid($_DisputeID)?$_DisputeID:null);
	}
	/**
	 * Get DisputeID
	 * @return EbayTradingTypeDisputeIDType
	 */
	public function getDisputeID()
	{
		return $this->DisputeID;
	}
	/**
	 * Set MessageText
	 * @param string MessageText
	 * @return string
	 */
	public function setMessageText($_MessageText)
	{
		return ($this->MessageText = $_MessageText);
	}
	/**
	 * Get MessageText
	 * @return string
	 */
	public function getMessageText()
	{
		return $this->MessageText;
	}
	/**
	 * Set DisputeActivity
	 * @param DisputeActivityCodeType DisputeActivity
	 * @return DisputeActivityCodeType
	 */
	public function setDisputeActivity($_DisputeActivity)
	{
		return ($this->DisputeActivity = EbayTradingTypeDisputeActivityCodeType::valueIsValid($_DisputeActivity)?$_DisputeActivity:null);
	}
	/**
	 * Get DisputeActivity
	 * @return EbayTradingTypeDisputeActivityCodeType
	 */
	public function getDisputeActivity()
	{
		return $this->DisputeActivity;
	}
	/**
	 * Set ShippingCarrierUsed
	 * @param string ShippingCarrierUsed
	 * @return string
	 */
	public function setShippingCarrierUsed($_ShippingCarrierUsed)
	{
		return ($this->ShippingCarrierUsed = $_ShippingCarrierUsed);
	}
	/**
	 * Get ShippingCarrierUsed
	 * @return string
	 */
	public function getShippingCarrierUsed()
	{
		return $this->ShippingCarrierUsed;
	}
	/**
	 * Set ShipmentTrackNumber
	 * @param string ShipmentTrackNumber
	 * @return string
	 */
	public function setShipmentTrackNumber($_ShipmentTrackNumber)
	{
		return ($this->ShipmentTrackNumber = $_ShipmentTrackNumber);
	}
	/**
	 * Get ShipmentTrackNumber
	 * @return string
	 */
	public function getShipmentTrackNumber()
	{
		return $this->ShipmentTrackNumber;
	}
	/**
	 * Set ShippingTime
	 * @param dateTime ShippingTime
	 * @return dateTime
	 */
	public function setShippingTime($_ShippingTime)
	{
		return ($this->ShippingTime = $_ShippingTime);
	}
	/**
	 * Get ShippingTime
	 * @return dateTime
	 */
	public function getShippingTime()
	{
		return $this->ShippingTime;
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