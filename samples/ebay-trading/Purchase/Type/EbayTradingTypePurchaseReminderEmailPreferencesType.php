<?php
/**
 * Class file for EbayTradingTypePurchaseReminderEmailPreferencesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePurchaseReminderEmailPreferencesType
 * Documentation : Contains a seller's preference for sending a "Payment Reminder Email" to buyers.
 * @date 04/07/2012
 */
class EbayTradingTypePurchaseReminderEmailPreferencesType extends EbayTradingWsdlClass
{
	/**
	 * The PurchaseReminderEmailPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, a payment reminder Email is sent to buyers.
	 * @var boolean
	 */
	public $PurchaseReminderEmailPreferences;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean PurchaseReminderEmailPreferences
	 * @param DOMDocument any
	 * @return EbayTradingTypePurchaseReminderEmailPreferencesType
	 */
	public function __construct($_PurchaseReminderEmailPreferences = null,$_any = null)
	{
		parent::__construct(array('PurchaseReminderEmailPreferences'=>$_PurchaseReminderEmailPreferences,'any'=>$_any));
	}
	/**
	 * Set PurchaseReminderEmailPreferences
	 * @param boolean PurchaseReminderEmailPreferences
	 * @return boolean
	 */
	public function setPurchaseReminderEmailPreferences($_PurchaseReminderEmailPreferences)
	{
		return ($this->PurchaseReminderEmailPreferences = $_PurchaseReminderEmailPreferences);
	}
	/**
	 * Get PurchaseReminderEmailPreferences
	 * @return boolean
	 */
	public function getPurchaseReminderEmailPreferences()
	{
		return $this->PurchaseReminderEmailPreferences;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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