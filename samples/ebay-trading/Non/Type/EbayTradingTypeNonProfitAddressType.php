<?php
/**
 * Class file for EbayTradingTypeNonProfitAddressType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNonProfitAddressType
 * Documentation : Type defining the <b>NonProfitAddress</b> container, which consists of the address (including latitude and longitude) of a nonprofit charity organization.
 * @date 04/07/2012
 */
class EbayTradingTypeNonProfitAddressType extends EbayTradingWsdlClass
{
	/**
	 * The AddressLine1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The street address of a nonprofit charity organization.
	 * @var string
	 */
	public $AddressLine1;
	/**
	 * The AddressLine2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The second line (if needed) of a nonprofit charity organization. This field is often used for a suite number, floor number, or P.O. Box.
	 * @var string
	 */
	public $AddressLine2;
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The city in which a nonprofit charity organization is located.
	 * @var string
	 */
	public $City;
	/**
	 * The State
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The state in which a nonprofit charity organization is located.
	 * @var string
	 */
	public $State;
	/**
	 * The ZipCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The zip code of a nonprofit charity organization.
	 * @var string
	 */
	public $ZipCode;
	/**
	 * The Latitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The latitude value of a nonprofit charity organization. Latitude and longitude coordinates pinpoint the location of the organization relative to the earth, and are useful for search purposes. The <b>Latitude</b> and <b>Longitude</b> fields are only returned in <b>GetCharities</b> if set by the organization.
	 * @var decimal
	 */
	public $Latitude;
	/**
	 * The Longitude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The longitude value of a nonprofit charity organization. Latitude and longitude coordinates pinpoint the location of the organization relative to the earth, and are useful for search purposes. The <b>Latitude</b> and <b>Longitude</b> fields are only returned in <b>GetCharities</b> if set by the organization.
	 * @var decimal
	 */
	public $Longitude;
	/**
	 * The AddressType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Enumeration value that indicates whether or not a nonprofit charity organization is registered with eBay Giving Works. See the <a href="http://pages.ebay.com/help/sell/nonprofit.html#certify">Certifying your organization with MissionFish</a> help topic for more information on registering with MissionFish and the benefits that come with being a registered eBay Giving Works organization.
	 * @var EbayTradingTypeAddressTypeCodeType
	 */
	public $AddressType;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string AddressLine1
	 * @param string AddressLine2
	 * @param string City
	 * @param string State
	 * @param string ZipCode
	 * @param decimal Latitude
	 * @param decimal Longitude
	 * @param EbayTradingTypeAddressTypeCodeType AddressType
	 * @param DOMDocument any
	 * @return EbayTradingTypeNonProfitAddressType
	 */
	public function __construct($_AddressLine1 = null,$_AddressLine2 = null,$_City = null,$_State = null,$_ZipCode = null,$_Latitude = null,$_Longitude = null,$_AddressType = null,$_any = null)
	{
		parent::__construct(array('AddressLine1'=>$_AddressLine1,'AddressLine2'=>$_AddressLine2,'City'=>$_City,'State'=>$_State,'ZipCode'=>$_ZipCode,'Latitude'=>$_Latitude,'Longitude'=>$_Longitude,'AddressType'=>$_AddressType,'any'=>$_any));
	}
	/**
	 * Set AddressLine1
	 * @param string AddressLine1
	 * @return string
	 */
	public function setAddressLine1($_AddressLine1)
	{
		return ($this->AddressLine1 = $_AddressLine1);
	}
	/**
	 * Get AddressLine1
	 * @return string
	 */
	public function getAddressLine1()
	{
		return $this->AddressLine1;
	}
	/**
	 * Set AddressLine2
	 * @param string AddressLine2
	 * @return string
	 */
	public function setAddressLine2($_AddressLine2)
	{
		return ($this->AddressLine2 = $_AddressLine2);
	}
	/**
	 * Get AddressLine2
	 * @return string
	 */
	public function getAddressLine2()
	{
		return $this->AddressLine2;
	}
	/**
	 * Set City
	 * @param string City
	 * @return string
	 */
	public function setCity($_City)
	{
		return ($this->City = $_City);
	}
	/**
	 * Get City
	 * @return string
	 */
	public function getCity()
	{
		return $this->City;
	}
	/**
	 * Set State
	 * @param string State
	 * @return string
	 */
	public function setState($_State)
	{
		return ($this->State = $_State);
	}
	/**
	 * Get State
	 * @return string
	 */
	public function getState()
	{
		return $this->State;
	}
	/**
	 * Set ZipCode
	 * @param string ZipCode
	 * @return string
	 */
	public function setZipCode($_ZipCode)
	{
		return ($this->ZipCode = $_ZipCode);
	}
	/**
	 * Get ZipCode
	 * @return string
	 */
	public function getZipCode()
	{
		return $this->ZipCode;
	}
	/**
	 * Set Latitude
	 * @param decimal Latitude
	 * @return decimal
	 */
	public function setLatitude($_Latitude)
	{
		return ($this->Latitude = $_Latitude);
	}
	/**
	 * Get Latitude
	 * @return decimal
	 */
	public function getLatitude()
	{
		return $this->Latitude;
	}
	/**
	 * Set Longitude
	 * @param decimal Longitude
	 * @return decimal
	 */
	public function setLongitude($_Longitude)
	{
		return ($this->Longitude = $_Longitude);
	}
	/**
	 * Get Longitude
	 * @return decimal
	 */
	public function getLongitude()
	{
		return $this->Longitude;
	}
	/**
	 * Set AddressType
	 * @param AddressTypeCodeType AddressType
	 * @return AddressTypeCodeType
	 */
	public function setAddressType($_AddressType)
	{
		return ($this->AddressType = EbayTradingTypeAddressTypeCodeType::valueIsValid($_AddressType)?$_AddressType:null);
	}
	/**
	 * Get AddressType
	 * @return EbayTradingTypeAddressTypeCodeType
	 */
	public function getAddressType()
	{
		return $this->AddressType;
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