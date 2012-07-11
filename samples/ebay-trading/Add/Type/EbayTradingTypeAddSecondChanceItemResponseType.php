<?php
/**
 * Class file for EbayTradingTypeAddSecondChanceItemResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddSecondChanceItemResponseType
 * Documentation : AddSecondChanceItem response for a new Second Chance Offer listing.
 * @date 04/07/2012
 */
class EbayTradingTypeAddSecondChanceItemResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the item ID for the new second chance offer listing. Different from the original ItemID passed in the request.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
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
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param dateTime StartTime
	 * @param dateTime EndTime
	 * @return EbayTradingTypeAddSecondChanceItemResponseType
	 */
	public function __construct($_ItemID = null,$_StartTime = null,$_EndTime = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime));
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
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