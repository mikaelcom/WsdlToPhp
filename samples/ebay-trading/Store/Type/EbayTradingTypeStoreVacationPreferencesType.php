<?php
/**
 * Class file for EbayTradingTypeStoreVacationPreferencesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreVacationPreferencesType
 * Documentation : Specifies a set of Store vacation preferences.
 * @date 04/07/2012
 */
class EbayTradingTypeStoreVacationPreferencesType extends EbayTradingWsdlClass
{
	/**
	 * The OnVacation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether the Store owner is on vacation.
	 * @var boolean
	 */
	public $OnVacation;
	/**
	 * The ReturnDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Seller return date from vacation.
	 * @var dateTime
	 */
	public $ReturnDate;
	/**
	 * The HideFixedPriceStoreItems
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Hide Store Inventory format items when the Store owner is on vacation.
	 * @var boolean
	 */
	public $HideFixedPriceStoreItems;
	/**
	 * The MessageItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Add a message when the Store owner is on vacation to all their active items.
	 * @var boolean
	 */
	public $MessageItem;
	/**
	 * The MessageStore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Add a message to all the Store pages when the Store owner is on vacation.
	 * @var boolean
	 */
	public $MessageStore;
	/**
	 * The DisplayMessageStoreCustomText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display custom message on the Store pages instead of the default message.
	 * @var boolean
	 */
	public $DisplayMessageStoreCustomText;
	/**
	 * The MessageStoreCustomText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The custom message to display for the Store when the user is on vacation. May contain HTML markup.
	 * @var string
	 */
	public $MessageStoreCustomText;
	/**
	 * Constructor
	 * @param boolean OnVacation
	 * @param dateTime ReturnDate
	 * @param boolean HideFixedPriceStoreItems
	 * @param boolean MessageItem
	 * @param boolean MessageStore
	 * @param boolean DisplayMessageStoreCustomText
	 * @param string MessageStoreCustomText
	 * @return EbayTradingTypeStoreVacationPreferencesType
	 */
	public function __construct($_OnVacation = null,$_ReturnDate = null,$_HideFixedPriceStoreItems = null,$_MessageItem = null,$_MessageStore = null,$_DisplayMessageStoreCustomText = null,$_MessageStoreCustomText = null)
	{
		parent::__construct(array('OnVacation'=>$_OnVacation,'ReturnDate'=>$_ReturnDate,'HideFixedPriceStoreItems'=>$_HideFixedPriceStoreItems,'MessageItem'=>$_MessageItem,'MessageStore'=>$_MessageStore,'DisplayMessageStoreCustomText'=>$_DisplayMessageStoreCustomText,'MessageStoreCustomText'=>$_MessageStoreCustomText));
	}
	/**
	 * Set OnVacation
	 * @param boolean OnVacation
	 * @return boolean
	 */
	public function setOnVacation($_OnVacation)
	{
		return ($this->OnVacation = $_OnVacation);
	}
	/**
	 * Get OnVacation
	 * @return boolean
	 */
	public function getOnVacation()
	{
		return $this->OnVacation;
	}
	/**
	 * Set ReturnDate
	 * @param dateTime ReturnDate
	 * @return dateTime
	 */
	public function setReturnDate($_ReturnDate)
	{
		return ($this->ReturnDate = $_ReturnDate);
	}
	/**
	 * Get ReturnDate
	 * @return dateTime
	 */
	public function getReturnDate()
	{
		return $this->ReturnDate;
	}
	/**
	 * Set HideFixedPriceStoreItems
	 * @param boolean HideFixedPriceStoreItems
	 * @return boolean
	 */
	public function setHideFixedPriceStoreItems($_HideFixedPriceStoreItems)
	{
		return ($this->HideFixedPriceStoreItems = $_HideFixedPriceStoreItems);
	}
	/**
	 * Get HideFixedPriceStoreItems
	 * @return boolean
	 */
	public function getHideFixedPriceStoreItems()
	{
		return $this->HideFixedPriceStoreItems;
	}
	/**
	 * Set MessageItem
	 * @param boolean MessageItem
	 * @return boolean
	 */
	public function setMessageItem($_MessageItem)
	{
		return ($this->MessageItem = $_MessageItem);
	}
	/**
	 * Get MessageItem
	 * @return boolean
	 */
	public function getMessageItem()
	{
		return $this->MessageItem;
	}
	/**
	 * Set MessageStore
	 * @param boolean MessageStore
	 * @return boolean
	 */
	public function setMessageStore($_MessageStore)
	{
		return ($this->MessageStore = $_MessageStore);
	}
	/**
	 * Get MessageStore
	 * @return boolean
	 */
	public function getMessageStore()
	{
		return $this->MessageStore;
	}
	/**
	 * Set DisplayMessageStoreCustomText
	 * @param boolean DisplayMessageStoreCustomText
	 * @return boolean
	 */
	public function setDisplayMessageStoreCustomText($_DisplayMessageStoreCustomText)
	{
		return ($this->DisplayMessageStoreCustomText = $_DisplayMessageStoreCustomText);
	}
	/**
	 * Get DisplayMessageStoreCustomText
	 * @return boolean
	 */
	public function getDisplayMessageStoreCustomText()
	{
		return $this->DisplayMessageStoreCustomText;
	}
	/**
	 * Set MessageStoreCustomText
	 * @param string MessageStoreCustomText
	 * @return string
	 */
	public function setMessageStoreCustomText($_MessageStoreCustomText)
	{
		return ($this->MessageStoreCustomText = $_MessageStoreCustomText);
	}
	/**
	 * Get MessageStoreCustomText
	 * @return string
	 */
	public function getMessageStoreCustomText()
	{
		return $this->MessageStoreCustomText;
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