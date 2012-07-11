<?php
/**
 * Class file for EbayTradingTypeVerifyAddSecondChanceItemResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVerifyAddSecondChanceItemResponseType
 * Documentation : VerifyAddSecondChanceItem request to emulate creation of a new Second Chance Offer for an item to one of that item's bidders.
 * @date 04/07/2012
 */
class EbayTradingTypeVerifyAddSecondChanceItemResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the date and time when the the new second chance offer listing became active and the recipient user could purchase the item.
	 * @var dateTime
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the date and time when the second chance offer listing expires, at which time the listing ends (if the recipient user does not purchase the item first).
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * Constructor
	 * @param dateTime StartTime
	 * @param dateTime EndTime
	 * @return EbayTradingTypeVerifyAddSecondChanceItemResponseType
	 */
	public function __construct($_StartTime = null,$_EndTime = null)
	{
		EbayTradingWsdlClass::__construct(array('StartTime'=>$_StartTime,'EndTime'=>$_EndTime));
	}
	/**
	 * Set StartTime
	 * @param dateTime StartTime
	 * @return dateTime
	 */
	public function setStartTime($_StartTime)
	{
		return ($this->StartTime = $_StartTime);
	}
	/**
	 * Get StartTime
	 * @return dateTime
	 */
	public function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * Set EndTime
	 * @param dateTime EndTime
	 * @return dateTime
	 */
	public function setEndTime($_EndTime)
	{
		return ($this->EndTime = $_EndTime);
	}
	/**
	 * Get EndTime
	 * @return dateTime
	 */
	public function getEndTime()
	{
		return $this->EndTime;
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