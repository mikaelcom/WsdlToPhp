<?php
/**
 * Class file for EbayTradingTypeBidGroupItemStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBidGroupItemStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeBidGroupItemStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'CurrentBid'
	 * Meta informations :
	 * 	- documentation : (out) The items in the group currently being bid on.
	 * @return string 'CurrentBid'
	 */
	const VALUE_CURRENTBID = 'CurrentBid';
	/**
	 * Constant for value 'Cancelled'
	 * Meta informations :
	 * 	- documentation : (out) Items in the group that were not bid on because a user retracted a bid and closed his group or because eBay Customer Support ended a group and all the active and pending items within that group were cancelled.
	 * @return string 'Cancelled'
	 */
	const VALUE_CANCELLED = 'Cancelled';
	/**
	 * Constant for value 'Pending'
	 * Meta informations :
	 * 	- documentation : (out) Items in the bid group that are currently active, but have not yet been bid on.
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Constant for value 'Skipped'
	 * Meta informations :
	 * 	- documentation : (out) Items that have been skipped and not bid on (and bidded has ended).
	 * @return string 'Skipped'
	 */
	const VALUE_SKIPPED = 'Skipped';
	/**
	 * Constant for value 'Ended'
	 * Meta informations :
	 * 	- documentation : (out) Item has ended.
	 * @return string 'Ended'
	 */
	const VALUE_ENDED = 'Ended';
	/**
	 * Constant for value 'Won'
	 * Meta informations :
	 * 	- documentation : (out) Item was purchased and has ended.
	 * @return string 'Won'
	 */
	const VALUE_WON = 'Won';
	/**
	 * Constant for value 'GroupClosed'
	 * Meta informations :
	 * 	- documentation : (out) Item has ended.
	 * @return string 'GroupClosed'
	 */
	const VALUE_GROUPCLOSED = 'GroupClosed';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeBidGroupItemStatusCodeType
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
		return in_array($_value,array(self::VALUE_CURRENTBID,self::VALUE_CANCELLED,self::VALUE_PENDING,self::VALUE_SKIPPED,self::VALUE_ENDED,self::VALUE_WON,self::VALUE_GROUPCLOSED,self::VALUE_CUSTOMCODE));
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