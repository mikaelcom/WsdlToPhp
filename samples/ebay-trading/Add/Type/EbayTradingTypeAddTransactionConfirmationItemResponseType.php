<?php
/**
 * Class file for EbayTradingTypeAddTransactionConfirmationItemResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddTransactionConfirmationItemResponseType
 * Documentation : Returns an item ID for a new Transaction Confirmation Request (TCR).
 * @date 04/07/2012
 */
class EbayTradingTypeAddTransactionConfirmationItemResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The new item ID for the item in the new Transaction Confirmation Request (TCR). This field is not returned if the request was only used to verify that a new TCR could be created.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time when the item in the new Transaction Confirmation Request (TCR) becomes available for purchase.
	 * @var dateTime
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time when the item in the new Transaction Confirmation Request (TCR) is no longer available for purchase.
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param dateTime StartTime
	 * @param dateTime EndTime
	 * @return EbayTradingTypeAddTransactionConfirmationItemResponseType
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