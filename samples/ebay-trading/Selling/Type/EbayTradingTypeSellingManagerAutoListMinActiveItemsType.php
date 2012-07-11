<?php
/**
 * Class file for EbayTradingTypeSellingManagerAutoListMinActiveItemsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerAutoListMinActiveItemsType
 * Documentation : Defines the options available for an automated listing rule that keeps a minimum number of items on the site.
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerAutoListMinActiveItemsType extends EbayTradingWsdlClass
{
	/**
	 * The MinActiveItemCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The minimum number of listings that should be active on the site.
	 * @var int
	 */
	public $MinActiveItemCount;
	/**
	 * The ListTimeFrom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The start time of the time interval during which new listings should start.
	 * @var time
	 */
	public $ListTimeFrom;
	/**
	 * The ListTimeTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The end time of the time interval during which new listings should start.
	 * @var time
	 */
	public $ListTimeTo;
	/**
	 * The SpacingIntervalInMinutes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Provides a number of minutes for spacing start times of listings. Used when you list multiple items at the same time. Delays subsequent listings by the specified number of minutes.
	 * @var int
	 */
	public $SpacingIntervalInMinutes;
	/**
	 * The ListingHoldInventoryLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sets a minimum inventory level for listings of associated products to occur.
	 * @var int
	 */
	public $ListingHoldInventoryLevel;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int MinActiveItemCount
	 * @param time ListTimeFrom
	 * @param time ListTimeTo
	 * @param int SpacingIntervalInMinutes
	 * @param int ListingHoldInventoryLevel
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellingManagerAutoListMinActiveItemsType
	 */
	public function __construct($_MinActiveItemCount = null,$_ListTimeFrom = null,$_ListTimeTo = null,$_SpacingIntervalInMinutes = null,$_ListingHoldInventoryLevel = null,$_any = null)
	{
		parent::__construct(array('MinActiveItemCount'=>$_MinActiveItemCount,'ListTimeFrom'=>$_ListTimeFrom,'ListTimeTo'=>$_ListTimeTo,'SpacingIntervalInMinutes'=>$_SpacingIntervalInMinutes,'ListingHoldInventoryLevel'=>$_ListingHoldInventoryLevel,'any'=>$_any));
	}
	/**
	 * Set MinActiveItemCount
	 * @param int MinActiveItemCount
	 * @return int
	 */
	public function setMinActiveItemCount($_MinActiveItemCount)
	{
		return ($this->MinActiveItemCount = $_MinActiveItemCount);
	}
	/**
	 * Get MinActiveItemCount
	 * @return int
	 */
	public function getMinActiveItemCount()
	{
		return $this->MinActiveItemCount;
	}
	/**
	 * Set ListTimeFrom
	 * @param time ListTimeFrom
	 * @return time
	 */
	public function setListTimeFrom($_ListTimeFrom)
	{
		return ($this->ListTimeFrom = $_ListTimeFrom);
	}
	/**
	 * Get ListTimeFrom
	 * @return time
	 */
	public function getListTimeFrom()
	{
		return $this->ListTimeFrom;
	}
	/**
	 * Set ListTimeTo
	 * @param time ListTimeTo
	 * @return time
	 */
	public function setListTimeTo($_ListTimeTo)
	{
		return ($this->ListTimeTo = $_ListTimeTo);
	}
	/**
	 * Get ListTimeTo
	 * @return time
	 */
	public function getListTimeTo()
	{
		return $this->ListTimeTo;
	}
	/**
	 * Set SpacingIntervalInMinutes
	 * @param int SpacingIntervalInMinutes
	 * @return int
	 */
	public function setSpacingIntervalInMinutes($_SpacingIntervalInMinutes)
	{
		return ($this->SpacingIntervalInMinutes = $_SpacingIntervalInMinutes);
	}
	/**
	 * Get SpacingIntervalInMinutes
	 * @return int
	 */
	public function getSpacingIntervalInMinutes()
	{
		return $this->SpacingIntervalInMinutes;
	}
	/**
	 * Set ListingHoldInventoryLevel
	 * @param int ListingHoldInventoryLevel
	 * @return int
	 */
	public function setListingHoldInventoryLevel($_ListingHoldInventoryLevel)
	{
		return ($this->ListingHoldInventoryLevel = $_ListingHoldInventoryLevel);
	}
	/**
	 * Get ListingHoldInventoryLevel
	 * @return int
	 */
	public function getListingHoldInventoryLevel()
	{
		return $this->ListingHoldInventoryLevel;
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