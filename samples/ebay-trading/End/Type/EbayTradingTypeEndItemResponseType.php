<?php
/**
 * Class file for EbayTradingTypeEndItemResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeEndItemResponseType
 * Documentation : Includes the acknowledgement of date and time the auction was ended due to the call to EndItem.
 * @date 04/07/2012
 */
class EbayTradingTypeEndItemResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the date and time (returned in GMT) the specified item listing was ended. Also applicable to Half.com.
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * Constructor
	 * @param dateTime EndTime
	 * @return EbayTradingTypeEndItemResponseType
	 */
	public function __construct($_EndTime = null)
	{
		EbayTradingWsdlClass::__construct(array('EndTime'=>$_EndTime));
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