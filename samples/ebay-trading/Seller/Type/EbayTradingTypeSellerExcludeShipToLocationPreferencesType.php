<?php
/**
 * Class file for EbayTradingTypeSellerExcludeShipToLocationPreferencesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerExcludeShipToLocationPreferencesType
 * Documentation : Container consisting for the list of locations to where the seller will not ship items.
 * @date 04/07/2012
 */
class EbayTradingTypeSellerExcludeShipToLocationPreferencesType extends EbayTradingWsdlClass
{
	/**
	 * The ExcludeShipToLocation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : One ExcludeShipToLocation field is returned for each region or country excluded as a possible shipping location in the seller's My eBay Shipping Preferences. Sellers can also exclude Alaska/Hawaii and Army Post Office/Fleet Post Office as possible shipping locations. For excluded countries, "http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm">ISO 3166</a> country codes are returned. <br><br> Domestically, the seller can specify Alaska/Hawaii, US Protectorates (including American Samoa, Guam, Mariana Island, Marshall Islands, Micronesia, Palau, Puerto Rico, and U.S. Virgin Islands) as places he/she will not ship to. Internationally, the sellers can exclude entire regions (including Africa, Asia, Central America and Caribbean, Europe, Middle East, North America, Oceania, Southeast Asia, and South America) or specific countries within those regions. <br><br> If a buyer's primary ship-to location is a location that you have listed as an excluded ship-to location (or if the buyer does not have a primary ship-to location), they will receive an error message if they attempt to buy or place a bid on your item. <br><br> To see the valid exclude ship-to locations for a specified site, call GeteBayDetails with DetailName set to ExcludeShippingLocationDetails. Repeat GeteBayDetails for each site on which you list. <br><br> <span class="tablenote"><strong>Note:</strong> To enable your default Exclude Ship-To List, you must enable Exclude Shipping Locations and Buyer Requirements in your My eBay Site Preferences. For details, see the KnowledgeBase Article <a href= "https://ebay.custhelp.com/cgi-bin/ebay.cfg/php/enduser/std_adp.php?p_faqid=1495" >HowTo: ExcludeShipToLocation</a>. </span> Code denoting a location to where the seller will not ship. <br> The codes reflect the <a href= "http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm" >ISO 3166</a> location codes.
	 * @var string
	 */
	public $ExcludeShipToLocation;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string ExcludeShipToLocation
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellerExcludeShipToLocationPreferencesType
	 */
	public function __construct($_ExcludeShipToLocation = null,$_any = null)
	{
		parent::__construct(array('ExcludeShipToLocation'=>$_ExcludeShipToLocation,'any'=>$_any));
	}
	/**
	 * Set ExcludeShipToLocation
	 * @param string ExcludeShipToLocation
	 * @return string
	 */
	public function setExcludeShipToLocation($_ExcludeShipToLocation)
	{
		return ($this->ExcludeShipToLocation = $_ExcludeShipToLocation);
	}
	/**
	 * Get ExcludeShipToLocation
	 * @return string
	 */
	public function getExcludeShipToLocation()
	{
		return $this->ExcludeShipToLocation;
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