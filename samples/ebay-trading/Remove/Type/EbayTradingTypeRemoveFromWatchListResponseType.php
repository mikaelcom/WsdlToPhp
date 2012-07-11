<?php
/**
 * Class file for EbayTradingTypeRemoveFromWatchListResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRemoveFromWatchListResponseType
 * Documentation : Returns information about the user's My eBay watch list.
 * @date 04/07/2012
 */
class EbayTradingTypeRemoveFromWatchListResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The WatchListCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The current number of items in the user's watch list (after those specified in the call request have been removed)
	 * @var int
	 */
	public $WatchListCount;
	/**
	 * The WatchListMaximum
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The maximum number of items allowed in watch lists. Currently this value is 200, and is the same for all sites and all users.
	 * @var int
	 */
	public $WatchListMaximum;
	/**
	 * Constructor
	 * @param int WatchListCount
	 * @param int WatchListMaximum
	 * @return EbayTradingTypeRemoveFromWatchListResponseType
	 */
	public function __construct($_WatchListCount = null,$_WatchListMaximum = null)
	{
		EbayTradingWsdlClass::__construct(array('WatchListCount'=>$_WatchListCount,'WatchListMaximum'=>$_WatchListMaximum));
	}
	/**
	 * Set WatchListCount
	 * @param int WatchListCount
	 * @return int
	 */
	public function setWatchListCount($_WatchListCount)
	{
		return ($this->WatchListCount = $_WatchListCount);
	}
	/**
	 * Get WatchListCount
	 * @return int
	 */
	public function getWatchListCount()
	{
		return $this->WatchListCount;
	}
	/**
	 * Set WatchListMaximum
	 * @param int WatchListMaximum
	 * @return int
	 */
	public function setWatchListMaximum($_WatchListMaximum)
	{
		return ($this->WatchListMaximum = $_WatchListMaximum);
	}
	/**
	 * Get WatchListMaximum
	 * @return int
	 */
	public function getWatchListMaximum()
	{
		return $this->WatchListMaximum;
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