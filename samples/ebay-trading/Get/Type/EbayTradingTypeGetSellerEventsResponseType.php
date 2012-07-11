<?php
/**
 * Class file for EbayTradingTypeGetSellerEventsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellerEventsResponseType
 * Documentation : Contains the items returned by the call. Items for which a seller event has occurred (and that meet any filters specified as input) are returned in an ItemArrayType object, within which are zero, one, or multiple ItemType objects. Each ItemType object contains the detail data for one item listing.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellerEventsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The TimeTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the latest (most recent) date for any date-based filtering specified as input. Specifically, this field contains the value you specified in the StartTimeTo, EndTimeTo, or ModTimeTo filter, if you used a time filter in the request. If no time filter was specified, TimeTo returns the current time.
	 * @var dateTime
	 */
	public $TimeTo;
	/**
	 * The ItemArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Collection of items whose last modified time matches the filters specified in the request. Returns empty if no items were modified within the time range of the request. If 1 to 2999 items are returned, then the results are complete. If 3000 or more items are returned, it usually means additional items exist within the time range you requested, but they were not all returned. To retrieve complete results, use a smaller time range in the request so that fewer than 3000 are returned per response.
	 * @var EbayTradingTypeItemArrayType
	 */
	public $ItemArray;
	/**
	 * Constructor
	 * @param dateTime TimeTo
	 * @param EbayTradingTypeItemArrayType ItemArray
	 * @return EbayTradingTypeGetSellerEventsResponseType
	 */
	public function __construct($_TimeTo = null,$_ItemArray = null)
	{
		EbayTradingWsdlClass::__construct(array('TimeTo'=>$_TimeTo,'ItemArray'=>$_ItemArray));
	}
	/**
	 * Set TimeTo
	 * @param dateTime TimeTo
	 * @return dateTime
	 */
	public function setTimeTo($_TimeTo)
	{
		return ($this->TimeTo = $_TimeTo);
	}
	/**
	 * Get TimeTo
	 * @return dateTime
	 */
	public function getTimeTo()
	{
		return $this->TimeTo;
	}
	/**
	 * Set ItemArray
	 * @param ItemArrayType ItemArray
	 * @return ItemArrayType
	 */
	public function setItemArray($_ItemArray)
	{
		return ($this->ItemArray = $_ItemArray);
	}
	/**
	 * Get ItemArray
	 * @return EbayTradingTypeItemArrayType
	 */
	public function getItemArray()
	{
		return $this->ItemArray;
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