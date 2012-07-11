<?php
/**
 * Class file for EbayTradingTypeAffiliateTrackingDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAffiliateTrackingDetailsType
 * Documentation : Container for fields related to affiliate tracking. For additional information, see the annotations to the elements in this type.
 * @date 04/07/2012
 */
class EbayTradingTypeAffiliateTrackingDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The TrackingID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The value you specify is obtained from your tracking partner. For eBay Partner Network, the TrackingID is the Campaign ID ("campid") provided by eBay Partner Network. A Campaign ID is a 10-digit, unique number for associating traffic. A Campaign ID is valid across all programs to which you have been accepted.
	 * @var string
	 */
	public $TrackingID;
	/**
	 * The TrackingPartnerCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies your tracking partner for affiliate commissions. Required if you specify a TrackingID. Depending on your tracking partner, specify one of the following values. Not all partners are valid for all sites. For PlaceOffer, only eBay Partner Network and Mediaplex are valid: <br> <br>2 = Be Free <br>3 = Affilinet <br>4 = TradeDoubler <br>5 = Mediaplex <br>6 = DoubleClick <br>7 = Allyes <br>8 = BJMT <br>9 = eBay Partner Network <br> <br> For information about the eBay Partner Network, see <a href="https://www.ebaypartnernetwork.com" target="_blank">eBay Partner Network</a>.
	 * @var string
	 */
	public $TrackingPartnerCode;
	/**
	 * The ApplicationDeviceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Type of device from which the call originated. For PlaceOffer, if you are using affiliate tracking, this field is required as part of the set of tags you use in the AffiliateTrackingDetails container.
	 * @var EbayTradingTypeApplicationDeviceTypeCodeType
	 */
	public $ApplicationDeviceType;
	/**
	 * The AffiliateUserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Need not be specified. You can define an AffiliateUserID (up to 256 characters) if you want to leverage it to better monitor your marketing efforts. If you are using the eBay Partner Network, and you provide an AffiliateUserID, the tracking URL returned by eBay Partner Network will contain the AffiliateUserID, but it will be referred to as a "customid".
	 * @var string
	 */
	public $AffiliateUserID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string TrackingID
	 * @param string TrackingPartnerCode
	 * @param EbayTradingTypeApplicationDeviceTypeCodeType ApplicationDeviceType
	 * @param string AffiliateUserID
	 * @param DOMDocument any
	 * @return EbayTradingTypeAffiliateTrackingDetailsType
	 */
	public function __construct($_TrackingID = null,$_TrackingPartnerCode = null,$_ApplicationDeviceType = null,$_AffiliateUserID = null,$_any = null)
	{
		parent::__construct(array('TrackingID'=>$_TrackingID,'TrackingPartnerCode'=>$_TrackingPartnerCode,'ApplicationDeviceType'=>$_ApplicationDeviceType,'AffiliateUserID'=>$_AffiliateUserID,'any'=>$_any));
	}
	/**
	 * Set TrackingID
	 * @param string TrackingID
	 * @return string
	 */
	public function setTrackingID($_TrackingID)
	{
		return ($this->TrackingID = $_TrackingID);
	}
	/**
	 * Get TrackingID
	 * @return string
	 */
	public function getTrackingID()
	{
		return $this->TrackingID;
	}
	/**
	 * Set TrackingPartnerCode
	 * @param string TrackingPartnerCode
	 * @return string
	 */
	public function setTrackingPartnerCode($_TrackingPartnerCode)
	{
		return ($this->TrackingPartnerCode = $_TrackingPartnerCode);
	}
	/**
	 * Get TrackingPartnerCode
	 * @return string
	 */
	public function getTrackingPartnerCode()
	{
		return $this->TrackingPartnerCode;
	}
	/**
	 * Set ApplicationDeviceType
	 * @param ApplicationDeviceTypeCodeType ApplicationDeviceType
	 * @return ApplicationDeviceTypeCodeType
	 */
	public function setApplicationDeviceType($_ApplicationDeviceType)
	{
		return ($this->ApplicationDeviceType = EbayTradingTypeApplicationDeviceTypeCodeType::valueIsValid($_ApplicationDeviceType)?$_ApplicationDeviceType:null);
	}
	/**
	 * Get ApplicationDeviceType
	 * @return EbayTradingTypeApplicationDeviceTypeCodeType
	 */
	public function getApplicationDeviceType()
	{
		return $this->ApplicationDeviceType;
	}
	/**
	 * Set AffiliateUserID
	 * @param string AffiliateUserID
	 * @return string
	 */
	public function setAffiliateUserID($_AffiliateUserID)
	{
		return ($this->AffiliateUserID = $_AffiliateUserID);
	}
	/**
	 * Get AffiliateUserID
	 * @return string
	 */
	public function getAffiliateUserID()
	{
		return $this->AffiliateUserID;
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