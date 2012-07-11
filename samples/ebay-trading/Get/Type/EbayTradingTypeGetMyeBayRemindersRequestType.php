<?php
/**
 * Class file for EbayTradingTypeGetMyeBayRemindersRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetMyeBayRemindersRequestType
 * Documentation : Requests totals for the Buying and Selling reminders from the user's My eBay account.
 * @date 04/07/2012
 */
class EbayTradingTypeGetMyeBayRemindersRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The BuyingReminders
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the type of buying reminders for which you want information.
	 * @var EbayTradingTypeReminderCustomizationType
	 */
	public $BuyingReminders;
	/**
	 * The SellingReminders
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the type of selling reminders for which you want information.
	 * @var EbayTradingTypeReminderCustomizationType
	 */
	public $SellingReminders;
	/**
	 * Constructor
	 * @param EbayTradingTypeReminderCustomizationType BuyingReminders
	 * @param EbayTradingTypeReminderCustomizationType SellingReminders
	 * @return EbayTradingTypeGetMyeBayRemindersRequestType
	 */
	public function __construct($_BuyingReminders = null,$_SellingReminders = null)
	{
		EbayTradingWsdlClass::__construct(array('BuyingReminders'=>$_BuyingReminders,'SellingReminders'=>$_SellingReminders));
	}
	/**
	 * Set BuyingReminders
	 * @param ReminderCustomizationType BuyingReminders
	 * @return ReminderCustomizationType
	 */
	public function setBuyingReminders($_BuyingReminders)
	{
		return ($this->BuyingReminders = $_BuyingReminders);
	}
	/**
	 * Get BuyingReminders
	 * @return EbayTradingTypeReminderCustomizationType
	 */
	public function getBuyingReminders()
	{
		return $this->BuyingReminders;
	}
	/**
	 * Set SellingReminders
	 * @param ReminderCustomizationType SellingReminders
	 * @return ReminderCustomizationType
	 */
	public function setSellingReminders($_SellingReminders)
	{
		return ($this->SellingReminders = $_SellingReminders);
	}
	/**
	 * Get SellingReminders
	 * @return EbayTradingTypeReminderCustomizationType
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