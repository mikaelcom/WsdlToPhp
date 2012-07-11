<?php
/**
 * Class file for EbayTradingTypeSearchDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSearchDetailsType
 * @date 04/07/2012
 */
class EbayTradingTypeSearchDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The BuyItNowEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether a listing uses the Buy It Now feature. For GetProducts, only returned for listing types that support Buy It Now (like Chinese auctions.)
	 * @var boolean
	 */
	public $BuyItNowEnabled;
	/**
	 * The Picture
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether a listing has an image associated with it.
	 * @var boolean
	 */
	public $Picture;
	/**
	 * The RecentListing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether a listing is no more than one day old.
	 * @var boolean
	 */
	public $RecentListing;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean BuyItNowEnabled
	 * @param boolean Picture
	 * @param boolean RecentListing
	 * @param DOMDocument any
	 * @return EbayTradingTypeSearchDetailsType
	 */
	public function __construct($_BuyItNowEnabled = null,$_Picture = null,$_RecentListing = null,$_any = null)
	{
		parent::__construct(array('BuyItNowEnabled'=>$_BuyItNowEnabled,'Picture'=>$_Picture,'RecentListing'=>$_RecentListing,'any'=>$_any));
	}
	/**
	 * Set BuyItNowEnabled
	 * @param boolean BuyItNowEnabled
	 * @return boolean
	 */
	public function setBuyItNowEnabled($_BuyItNowEnabled)
	{
		return ($this->BuyItNowEnabled = $_BuyItNowEnabled);
	}
	/**
	 * Get BuyItNowEnabled
	 * @return boolean
	 */
	public function getBuyItNowEnabled()
	{
		return $this->BuyItNowEnabled;
	}
	/**
	 * Set Picture
	 * @param boolean Picture
	 * @return boolean
	 */
	public function setPicture($_Picture)
	{
		return ($this->Picture = $_Picture);
	}
	/**
	 * Get Picture
	 * @return boolean
	 */
	public function getPicture()
	{
		return $this->Picture;
	}
	/**
	 * Set RecentListing
	 * @param boolean RecentListing
	 * @return boolean
	 */
	public function setRecentListing($_RecentListing)
	{
		return ($this->RecentListing = $_RecentListing);
	}
	/**
	 * Get RecentListing
	 * @return boolean
	 */
	public function getRecentListing()
	{
		return $this->RecentListing;
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