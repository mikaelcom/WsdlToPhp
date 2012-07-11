<?php
/**
 * Class file for EbayTradingTypeDetailLevelCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDetailLevelCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDetailLevelCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ReturnAll'
	 * Meta informations :
	 * 	- documentation : (in) Returns all available data. With GetSellerList and other calls that retrieve large data sets, please avoid using ReturnAll when possible. For example, if you use GetSellerList, use a GranularityLevel or use the GetSellerEvents call instead. If you use ReturnAll with GetSellerList, use a small EntriesPerPage value and a short EndTimeFrom/EndTimeTo range for better performance.
	 * @return string 'ReturnAll'
	 */
	const VALUE_RETURNALL = 'ReturnAll';
	/**
	 * Constant for value 'ItemReturnDescription'
	 * Meta informations :
	 * 	- documentation : (in) Returns Description, plus the ListingDesigner node and some additional information if applicable
	 * @return string 'ItemReturnDescription'
	 */
	const VALUE_ITEMRETURNDESCRIPTION = 'ItemReturnDescription';
	/**
	 * Constant for value 'ItemReturnAttributes'
	 * Meta informations :
	 * 	- documentation : (in) For GetItem, returns Item Specifics and Pre-filled Item Information, if any. For GetSearchResults, only returns Item Specifics (if any) that are applicable to search results, and only under certain conditions. See the description of Item.AttributeSetArray for details about the effects for applicable calls. Also see the description of Item.ProductListingDetails for GetItem.
	 * @return string 'ItemReturnAttributes'
	 */
	const VALUE_ITEMRETURNATTRIBUTES = 'ItemReturnAttributes';
	/**
	 * Constant for value 'ItemReturnCategories'
	 * Meta informations :
	 * 	- documentation : (in) For the GetSearchResults call, returns the primary category and, if applicable, the secondary category
	 * @return string 'ItemReturnCategories'
	 */
	const VALUE_ITEMRETURNCATEGORIES = 'ItemReturnCategories';
	/**
	 * Constant for value 'ReturnSummary'
	 * Meta informations :
	 * 	- documentation : (in) Returns the summary data. For GetMyMessages, this detail level returns the same data whether or not you include MessageIDs or AlertIDs in the request. Returns up to 10 FolderID and FolderName values. Currently, this detail level is the only way to retrieve FolderID and FolderName values. See "GetMyMessages" in the eBay Web Services Guide for a code sample that demonstrates this.
	 * @return string 'ReturnSummary'
	 */
	const VALUE_RETURNSUMMARY = 'ReturnSummary';
	/**
	 * Constant for value 'ReturnHeaders'
	 * Meta informations :
	 * 	- documentation : (in) Returns message headers. For GetMyMessages, if you include MessageIDs or AlertIDs in the request, this detail level returns header information, without body text, for the specified message ID or alert ID values. If you include a FolderID, header information is returned only for the messages and alerts in the specified folder. If you do not include MessageIDs or AlertIDs, this detail level returns header information for Alerts and Messages as follows: - If all the Alerts have been read, they are sorted in date order, with the most recent first. - If one of the Alerts has not been read, the Read Alerts come first, sorted most recent first, followed by the Unread Alert(s). - All messages in ascending order by date received with the oldest messages first. Note that even when restricted by this detail level to return only header information, GetMyMessages may return a high volume of data.
	 * @return string 'ReturnHeaders'
	 */
	const VALUE_RETURNHEADERS = 'ReturnHeaders';
	/**
	 * Constant for value 'ReturnMessages'
	 * Meta informations :
	 * 	- documentation : (in) Returns full message information. For GetMyMessages, if you include MessageIDs or AlertIDs in the request, this detail level returns message information for the specified message ID or alert ID values. If you include a FolderID, message information is returned only for the messages and alerts in the specified folder.
	 * @return string 'ReturnMessages'
	 */
	const VALUE_RETURNMESSAGES = 'ReturnMessages';
	/**
	 * Constructor
	 * @return EbayTradingTypeDetailLevelCodeType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_RETURNALL,self::VALUE_ITEMRETURNDESCRIPTION,self::VALUE_ITEMRETURNATTRIBUTES,self::VALUE_ITEMRETURNCATEGORIES,self::VALUE_RETURNSUMMARY,self::VALUE_RETURNHEADERS,self::VALUE_RETURNMESSAGES));
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