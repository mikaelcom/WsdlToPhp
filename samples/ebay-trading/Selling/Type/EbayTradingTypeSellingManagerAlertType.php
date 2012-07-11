<?php
/**
 * Class file for EbayTradingTypeSellingManagerAlertType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerAlertType
 * Documentation : Contains alert type information, along with the duration.
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerAlertType extends EbayTradingWsdlClass
{
	/**
	 * The AlertType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for Selling Manager alert types.
	 * @var EbayTradingTypeSellingManagerAlertTypeCodeType
	 */
	public $AlertType;
	/**
	 * The SoldAlert
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Represents the SoldAlert.
	 * @var EbayTradingTypeSellingManagerSoldListingsPropertyTypeCodeType
	 */
	public $SoldAlert;
	/**
	 * The InventoryAlert
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains an alert related to a user's inventory, such as a re-stocking alerts.
	 * @var EbayTradingTypeSellingManagerInventoryPropertyTypeCodeType
	 */
	public $InventoryAlert;
	/**
	 * The AutomationAlert
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains an alert about the the failure of an automation rule. For example, an item scheduled to be listed has not been listed.
	 * @var EbayTradingTypeSellingManagerAutomationPropertyTypeCodeType
	 */
	public $AutomationAlert;
	/**
	 * The PaisaPayAlert
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains an alert related to an item that is being paid for via PaisaPay.
	 * @var EbayTradingTypeSellingManagerPaisaPayPropertyTypeCodeType
	 */
	public $PaisaPayAlert;
	/**
	 * The GeneralAlert
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains a general alert about a dispute or negative feedback or email not sent.
	 * @var EbayTradingTypeSellingManagerGeneralPropertyTypeCodeType
	 */
	public $GeneralAlert;
	/**
	 * The DurationInDays
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Represents the duration for which this alert is computed. Conditional, and not returned if the alert is not based on duration.
	 * @var int
	 */
	public $DurationInDays;
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of items referenced in this alert, if the number is greater than zero.
	 * @var long
	 */
	public $Count;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerAlertTypeCodeType AlertType
	 * @param EbayTradingTypeSellingManagerSoldListingsPropertyTypeCodeType SoldAlert
	 * @param EbayTradingTypeSellingManagerInventoryPropertyTypeCodeType InventoryAlert
	 * @param EbayTradingTypeSellingManagerAutomationPropertyTypeCodeType AutomationAlert
	 * @param EbayTradingTypeSellingManagerPaisaPayPropertyTypeCodeType PaisaPayAlert
	 * @param EbayTradingTypeSellingManagerGeneralPropertyTypeCodeType GeneralAlert
	 * @param int DurationInDays
	 * @param long Count
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellingManagerAlertType
	 */
	public function __construct($_AlertType = null,$_SoldAlert = null,$_InventoryAlert = null,$_AutomationAlert = null,$_PaisaPayAlert = null,$_GeneralAlert = null,$_DurationInDays = null,$_Count = null,$_any = null)
	{
		parent::__construct(array('AlertType'=>$_AlertType,'SoldAlert'=>$_SoldAlert,'InventoryAlert'=>$_InventoryAlert,'AutomationAlert'=>$_AutomationAlert,'PaisaPayAlert'=>$_PaisaPayAlert,'GeneralAlert'=>$_GeneralAlert,'DurationInDays'=>$_DurationInDays,'Count'=>$_Count,'any'=>$_any));
	}
	/**
	 * Set AlertType
	 * @param SellingManagerAlertTypeCodeType AlertType
	 * @return SellingManagerAlertTypeCodeType
	 */
	public function setAlertType($_AlertType)
	{
		return ($this->AlertType = EbayTradingTypeSellingManagerAlertTypeCodeType::valueIsValid($_AlertType)?$_AlertType:null);
	}
	/**
	 * Get AlertType
	 * @return EbayTradingTypeSellingManagerAlertTypeCodeType
	 */
	public function getAlertType()
	{
		return $this->AlertType;
	}
	/**
	 * Set SoldAlert
	 * @param SellingManagerSoldListingsPropertyTypeCodeType SoldAlert
	 * @return SellingManagerSoldListingsPropertyTypeCodeType
	 */
	public function setSoldAlert($_SoldAlert)
	{
		return ($this->SoldAlert = EbayTradingTypeSellingManagerSoldListingsPropertyTypeCodeType::valueIsValid($_SoldAlert)?$_SoldAlert:null);
	}
	/**
	 * Get SoldAlert
	 * @return EbayTradingTypeSellingManagerSoldListingsPropertyTypeCodeType
	 */
	public function getSoldAlert()
	{
		return $this->SoldAlert;
	}
	/**
	 * Set InventoryAlert
	 * @param SellingManagerInventoryPropertyTypeCodeType InventoryAlert
	 * @return SellingManagerInventoryPropertyTypeCodeType
	 */
	public function setInventoryAlert($_InventoryAlert)
	{
		return ($this->InventoryAlert = EbayTradingTypeSellingManagerInventoryPropertyTypeCodeType::valueIsValid($_InventoryAlert)?$_InventoryAlert:null);
	}
	/**
	 * Get InventoryAlert
	 * @return EbayTradingTypeSellingManagerInventoryPropertyTypeCodeType
	 */
	public function getInventoryAlert()
	{
		return $this->InventoryAlert;
	}
	/**
	 * Set AutomationAlert
	 * @param SellingManagerAutomationPropertyTypeCodeType AutomationAlert
	 * @return SellingManagerAutomationPropertyTypeCodeType
	 */
	public function setAutomationAlert($_AutomationAlert)
	{
		return ($this->AutomationAlert = EbayTradingTypeSellingManagerAutomationPropertyTypeCodeType::valueIsValid($_AutomationAlert)?$_AutomationAlert:null);
	}
	/**
	 * Get AutomationAlert
	 * @return EbayTradingTypeSellingManagerAutomationPropertyTypeCodeType
	 */
	public function getAutomationAlert()
	{
		return $this->AutomationAlert;
	}
	/**
	 * Set PaisaPayAlert
	 * @param SellingManagerPaisaPayPropertyTypeCodeType PaisaPayAlert
	 * @return SellingManagerPaisaPayPropertyTypeCodeType
	 */
	public function setPaisaPayAlert($_PaisaPayAlert)
	{
		return ($this->PaisaPayAlert = EbayTradingTypeSellingManagerPaisaPayPropertyTypeCodeType::valueIsValid($_PaisaPayAlert)?$_PaisaPayAlert:null);
	}
	/**
	 * Get PaisaPayAlert
	 * @return EbayTradingTypeSellingManagerPaisaPayPropertyTypeCodeType
	 */
	public function getPaisaPayAlert()
	{
		return $this->PaisaPayAlert;
	}
	/**
	 * Set GeneralAlert
	 * @param SellingManagerGeneralPropertyTypeCodeType GeneralAlert
	 * @return SellingManagerGeneralPropertyTypeCodeType
	 */
	public function setGeneralAlert($_GeneralAlert)
	{
		return ($this->GeneralAlert = EbayTradingTypeSellingManagerGeneralPropertyTypeCodeType::valueIsValid($_GeneralAlert)?$_GeneralAlert:null);
	}
	/**
	 * Get GeneralAlert
	 * @return EbayTradingTypeSellingManagerGeneralPropertyTypeCodeType
	 */
	public function getGeneralAlert()
	{
		return $this->GeneralAlert;
	}
	/**
	 * Set DurationInDays
	 * @param int DurationInDays
	 * @return int
	 */
	public function setDurationInDays($_DurationInDays)
	{
		return ($this->DurationInDays = $_DurationInDays);
	}
	/**
	 * Get DurationInDays
	 * @return int
	 */
	public function getDurationInDays()
	{
		return $this->DurationInDays;
	}
	/**
	 * Set Count
	 * @param long Count
	 * @return long
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return long
	 */
	public function getCount()
	{
		return $this->Count;
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