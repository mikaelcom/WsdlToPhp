<?php
/**
 * Class file for EbayTradingTypeVeROReportItemType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVeROReportItemType
 * Documentation : Contains the item information to report.
 * @date 04/07/2012
 */
class EbayTradingTypeVeROReportItemType extends EbayTradingWsdlClass
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The item ID for the item being reported for alleged infringement.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The VeROReasonCodeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The reason code identifier for the type of claimed infringement. Use GetVeROReasonCodeDetails to retrieve a list of reason codes for a given site or for all sites.
	 * @var long
	 */
	public $VeROReasonCodeID;
	/**
	 * The MessageToSeller
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Message from the VeRO Program member to the seller of the item being reported.
	 * @var string
	 */
	public $MessageToSeller;
	/**
	 * The CopyEmailToRightsOwner
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : When set to true, this specifies that the VeRO Program member be copied on the Notice of Claimed Infringement (NOCI) email sent to sellers of reported items.
	 * @var boolean
	 */
	public $CopyEmailToRightsOwner;
	/**
	 * The Region
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Region whose intellectual property laws are being violated.
	 * @var EbayTradingTypeShippingRegionCodeType
	 */
	public $Region;
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Country whose intellectual property laws are being violated. Required when VeROReasonCodeID is 9037 (Item(s) is unlawful importation of product bearing trademark).
	 * @var EbayTradingTypeCountryCodeType
	 */
	public $Country;
	/**
	 * The Patent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Patent number of the item, required when the VeROReasonCodeID is 9048 (Item(s) infringes a valid patent).
	 * @var string
	 */
	public $Patent;
	/**
	 * The DetailedMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Explanatory text from VeRO Program member, required when the VeROReasonCodeID is "others."
	 * @var string
	 */
	public $DetailedMessage;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param long VeROReasonCodeID
	 * @param string MessageToSeller
	 * @param boolean CopyEmailToRightsOwner
	 * @param EbayTradingTypeShippingRegionCodeType Region
	 * @param EbayTradingTypeCountryCodeType Country
	 * @param string Patent
	 * @param string DetailedMessage
	 * @param DOMDocument any
	 * @return EbayTradingTypeVeROReportItemType
	 */
	public function __construct($_ItemID = null,$_VeROReasonCodeID = null,$_MessageToSeller = null,$_CopyEmailToRightsOwner = null,$_Region = null,$_Country = null,$_Patent = null,$_DetailedMessage = null,$_any = null)
	{
		parent::__construct(array('ItemID'=>$_ItemID,'VeROReasonCodeID'=>$_VeROReasonCodeID,'MessageToSeller'=>$_MessageToSeller,'CopyEmailToRightsOwner'=>$_CopyEmailToRightsOwner,'Region'=>$_Region,'Country'=>$_Country,'Patent'=>$_Patent,'DetailedMessage'=>$_DetailedMessage,'any'=>$_any));
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
	 * Set VeROReasonCodeID
	 * @param long VeROReasonCodeID
	 * @return long
	 */
	public function setVeROReasonCodeID($_VeROReasonCodeID)
	{
		return ($this->VeROReasonCodeID = $_VeROReasonCodeID);
	}
	/**
	 * Get VeROReasonCodeID
	 * @return long
	 */
	public function getVeROReasonCodeID()
	{
		return $this->VeROReasonCodeID;
	}
	/**
	 * Set MessageToSeller
	 * @param string MessageToSeller
	 * @return string
	 */
	public function setMessageToSeller($_MessageToSeller)
	{
		return ($this->MessageToSeller = $_MessageToSeller);
	}
	/**
	 * Get MessageToSeller
	 * @return string
	 */
	public function getMessageToSeller()
	{
		return $this->MessageToSeller;
	}
	/**
	 * Set CopyEmailToRightsOwner
	 * @param boolean CopyEmailToRightsOwner
	 * @return boolean
	 */
	public function setCopyEmailToRightsOwner($_CopyEmailToRightsOwner)
	{
		return ($this->CopyEmailToRightsOwner = $_CopyEmailToRightsOwner);
	}
	/**
	 * Get CopyEmailToRightsOwner
	 * @return boolean
	 */
	public function getCopyEmailToRightsOwner()
	{
		return $this->CopyEmailToRightsOwner;
	}
	/**
	 * Set Region
	 * @param ShippingRegionCodeType Region
	 * @return ShippingRegionCodeType
	 */
	public function setRegion($_Region)
	{
		return ($this->Region = EbayTradingTypeShippingRegionCodeType::valueIsValid($_Region)?$_Region:null);
	}
	/**
	 * Get Region
	 * @return EbayTradingTypeShippingRegionCodeType
	 */
	public function getRegion()
	{
		return $this->Region;
	}
	/**
	 * Set Country
	 * @param CountryCodeType Country
	 * @return CountryCodeType
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = EbayTradingTypeCountryCodeType::valueIsValid($_Country)?$_Country:null);
	}
	/**
	 * Get Country
	 * @return EbayTradingTypeCountryCodeType
	 */
	public function getCountry()
	{
		return $this->Country;
	}
	/**
	 * Set Patent
	 * @param string Patent
	 * @return string
	 */
	public function setPatent($_Patent)
	{
		return ($this->Patent = $_Patent);
	}
	/**
	 * Get Patent
	 * @return string
	 */
	public function getPatent()
	{
		return $this->Patent;
	}
	/**
	 * Set DetailedMessage
	 * @param string DetailedMessage
	 * @return string
	 */
	public function setDetailedMessage($_DetailedMessage)
	{
		return ($this->DetailedMessage = $_DetailedMessage);
	}
	/**
	 * Get DetailedMessage
	 * @return string
	 */
	public function getDetailedMessage()
	{
		return $this->DetailedMessage;
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