<?php
/**
 * Class file for EbayTradingTypeGetMyeBayRemindersResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetMyeBayRemindersResponseType
 * Documentation : Returns totals of various reminder types from the user's My eBay account.
 * @date 04/07/2012
 */
class EbayTradingTypeGetMyeBayRemindersResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The BuyingReminders
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the buying reminders in the user's My eBay account that match the request criteria.
	 * @var EbayTradingTypeRemindersType
	 */
	public $BuyingReminders;
	/**
	 * The SellingReminders
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the selling reminders in the user's My eBay account that match the request criteria.
	 * @var EbayTradingTypeRemindersType
	 */
	public $SellingReminders;
	/**
	 * Constructor
	 * @param EbayTradingTypeRemindersType BuyingReminders
	 * @param EbayTradingTypeRemindersType SellingReminders
	 * @return EbayTradingTypeGetMyeBayRemindersResponseType
	 */
	public function __construct($_BuyingReminders = null,$_SellingReminders = null)
	{
		EbayTradingWsdlClass::__construct(array('BuyingReminders'=>$_BuyingReminders,'SellingReminders'=>$_SellingReminders));
	}
	/**
	 * Set BuyingReminders
	 * @param RemindersType BuyingReminders
	 * @return RemindersType
	 */
	public function setBuyingReminders($_BuyingReminders)
	{
		return ($this->BuyingReminders = $_BuyingReminders);
	}
	/**
	 * Get BuyingReminders
	 * @return EbayTradingTypeRemindersType
	 */
	public function getBuyingReminders()
	{
		return $this->BuyingReminders;
	}
	/**
	 * Set SellingReminders
	 * @param RemindersType SellingReminders
	 * @return RemindersType
	 */
	public function setSellingReminders($_SellingReminders)
	{
		return ($this->SellingReminders = $_SellingReminders);
	}
	/**
	 * Get SellingReminders
	 * @return EbayTradingTypeRemindersType
	 */
	public function getSellingReminders()
	{
		return $this->SellingReminders;
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