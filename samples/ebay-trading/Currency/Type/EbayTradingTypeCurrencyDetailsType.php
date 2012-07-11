<?php
/**
 * Class file for EbayTradingTypeCurrencyDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCurrencyDetailsType
 * Documentation : Details about a currency.
 * @date 04/07/2012
 */
class EbayTradingTypeCurrencyDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Currency abbreviation.<br><br> Related fields:<br> Item.Currency and Item.StartPrice in AddItem
	 * @var EbayTradingTypeCurrencyCodeType
	 */
	public $Currency;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Full currency name for display purposes.
	 * @var string
	 */
	public $Description;
	/**
	 * The DetailVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
	 * @var string
	 */
	public $DetailVersion;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
	 * @var dateTime
	 */
	public $UpdateTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeCurrencyCodeType Currency
	 * @param string Description
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeCurrencyDetailsType
	 */
	public function __construct($_Currency = null,$_Description = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('Currency'=>$_Currency,'Description'=>$_Description,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
	}
	/**
	 * Set Currency
	 * @param CurrencyCodeType Currency
	 * @return CurrencyCodeType
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = EbayTradingTypeCurrencyCodeType::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return EbayTradingTypeCurrencyCodeType
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set DetailVersion
	 * @param string DetailVersion
	 * @return string
	 */
	public function setDetailVersion($_DetailVersion)
	{
		return ($this->DetailVersion = $_DetailVersion);
	}
	/**
	 * Get DetailVersion
	 * @return string
	 */
	public function getDetailVersion()
	{
		return $this->DetailVersion;
	}
	/**
	 * Set UpdateTime
	 * @param dateTime UpdateTime
	 * @return dateTime
	 */
	public function setUpdateTime($_UpdateTime)
	{
		return ($this->UpdateTime = $_UpdateTime);
	}
	/**
	 * Get UpdateTime
	 * @return dateTime
	 */
	public function getUpdateTime()
	{
		return $this->UpdateTime;
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