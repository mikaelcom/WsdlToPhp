<?php
/**
 * Class file for EbayFindTypeAffiliate
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeAffiliate
 * Documentation : eBay uses specified details to build a View Item URL and Product URL string in the response. These URLs include correctly formatted affiliate tracking information. When a user clicks through one of these URLs to eBay, the respective affiliate might get a commission, based on the tasks performed by the user.
 * @date 04/07/2012
 */
class EbayFindTypeAffiliate extends EbayFindWsdlClass
{
	/**
	 * The trackingId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specify the affiliate value obtained from your tracking partner. For the eBay Partner Network, the tracking ID is the provided Campaign ID ("campid"). A Campaign ID is a unique 10-digit number used for associating traffic and is valid across all programs to which you have been accepted. Another example of this value is the Affiliate ID given to you by TradeDoubler.
	 * @var string
	 */
	public $trackingId;
	/**
	 * The networkId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies your tracking partner for affiliate commissions. Affiliates earn money from eBay for driving traffic to eBay. This field is required if you specify a tracking ID. Depending on your tracking partner, specify one of the following values. Not all partners are valid for all sites. For PlaceOffer, only the eBay Partner Network and Mediaplex are valid: <br> <br>2 = Be Free <br>3 = Affilinet <br>4 = TradeDoubler <br>5 = Mediaplex <br>6 = DoubleClick <br>7 = Allyes <br>8 = BJMT <br>9 = eBay Partner Network
	 * @var string
	 */
	public $networkId;
	/**
	 * The customId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : You can define an affiliate customId if you want an ID to monitor your marketing efforts. Chose an ID up to up to 256 characters in length. If you are using the eBay Partner Network, and you provide a customId, the tracking URL returned by the eBay Partner Network will contain your customId value.
	 * @var string
	 */
	public $customId;
	/**
	 * The geoTargeting
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether or not to return a lgeo affiliate link. If this parameter is set to 1, a <i>roverized</i> geo-targeted affiliate link is returned.
	 * @var boolean
	 */
	public $geoTargeting;
	/**
	 * The delimiter
	 * @var string
	 */
	public $delimiter;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string trackingId
	 * @param string networkId
	 * @param string customId
	 * @param boolean geoTargeting
	 * @param string delimiter
	 * @param DOMDocument any
	 * @return EbayFindTypeAffiliate
	 */
	public function __construct($_trackingId = null,$_networkId = null,$_customId = null,$_geoTargeting = null,$_delimiter = null,$_any = null)
	{
		parent::__construct(array('trackingId'=>$_trackingId,'networkId'=>$_networkId,'customId'=>$_customId,'geoTargeting'=>$_geoTargeting,'delimiter'=>$_delimiter,'any'=>$_any));
	}
	/**
	 * Set trackingId
	 * @param string trackingId
	 * @return string
	 */
	public function setTrackingId($_trackingId)
	{
		return ($this->trackingId = $_trackingId);
	}
	/**
	 * Get trackingId
	 * @return string
	 */
	public function getTrackingId()
	{
		return $this->trackingId;
	}
	/**
	 * Set networkId
	 * @param string networkId
	 * @return string
	 */
	public function setNetworkId($_networkId)
	{
		return ($this->networkId = $_networkId);
	}
	/**
	 * Get networkId
	 * @return string
	 */
	public function getNetworkId()
	{
		return $this->networkId;
	}
	/**
	 * Set customId
	 * @param string customId
	 * @return string
	 */
	public function setCustomId($_customId)
	{
		return ($this->customId = $_customId);
	}
	/**
	 * Get customId
	 * @return string
	 */
	public function getCustomId()
	{
		return $this->customId;
	}
	/**
	 * Set geoTargeting
	 * @param boolean geoTargeting
	 * @return boolean
	 */
	public function setGeoTargeting($_geoTargeting)
	{
		return ($this->geoTargeting = $_geoTargeting);
	}
	/**
	 * Get geoTargeting
	 * @return boolean
	 */
	public function getGeoTargeting()
	{
		return $this->geoTargeting;
	}
	/**
	 * Set delimiter
	 * @param string delimiter
	 * @return string
	 */
	public function setDelimiter($_delimiter)
	{
		return ($this->delimiter = $_delimiter);
	}
	/**
	 * Get delimiter
	 * @return string
	 */
	public function getDelimiter()
	{
		return $this->delimiter;
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