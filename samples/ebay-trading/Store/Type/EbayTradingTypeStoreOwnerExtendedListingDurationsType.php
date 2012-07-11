<?php
/**
 * Class file for EbayTradingTypeStoreOwnerExtendedListingDurationsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreOwnerExtendedListingDurationsType
 * Documentation : Defines the extended listing durations available to store owners. If the field is present, the corresponding feature applies to the category. The field is returned as an empty element (e.g., a boolean value is not returned). Applies to Fixed Price Listings as well as Store Inventory Format Listings.
 * @date 04/07/2012
 */
class EbayTradingTypeStoreOwnerExtendedListingDurationsType extends EbayTradingWsdlClass
{
	/**
	 * The Duration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the length of time an auction can be open, in days. The allowed durations vary according to the type of listing. The value GTC means Good Til Canceled.
	 * @var token
	 */
	public $Duration;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param token Duration
	 * @param DOMDocument any
	 * @return EbayTradingTypeStoreOwnerExtendedListingDurationsType
	 */
	public function __construct($_Duration = null,$_any = null)
	{
		parent::__construct(array('Duration'=>$_Duration,'any'=>$_any));
	}
	/**
	 * Set Duration
	 * @param token Duration
	 * @return token
	 */
	public function setDuration($_Duration)
	{
		return ($this->Duration = $_Duration);
	}
	/**
	 * Get Duration
	 * @return token
	 */
	public function getDuration()
	{
		return $this->Duration;
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