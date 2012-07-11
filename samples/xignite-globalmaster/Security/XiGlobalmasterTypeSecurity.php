<?php
/**
 * Class file for XiGlobalmasterTypeSecurity
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeSecurity
 * @date 08/07/2012
 */
class XiGlobalmasterTypeSecurity extends XiGlobalmasterTypeCommon
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The SEDOL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SEDOL;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Currency;
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Exchange;
	/**
	 * The ActiveDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ActiveDate;
	/**
	 * The InactiveDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InactiveDate;
	/**
	 * The HomeTradingPlace
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $HomeTradingPlace;
	/**
	 * The Active
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Active;
	/**
	 * The AlternateSecurityIdentifiers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfAlternateSecurityIdentifier
	 */
	public $AlternateSecurityIdentifiers;
	/**
	 * The CustomAttributes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfCustomAttribute
	 */
	public $CustomAttributes;
	/**
	 * The DataProvider
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeDataProviders
	 */
	public $DataProvider;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string Name
	 * @param string SEDOL
	 * @param string Currency
	 * @param string Exchange
	 * @param string ActiveDate
	 * @param string InactiveDate
	 * @param boolean HomeTradingPlace
	 * @param boolean Active
	 * @param XiGlobalmasterTypeArrayOfAlternateSecurityIdentifier AlternateSecurityIdentifiers
	 * @param XiGlobalmasterTypeArrayOfCustomAttribute CustomAttributes
	 * @param XiGlobalmasterTypeDataProviders DataProvider
	 * @return XiGlobalmasterTypeSecurity
	 */
	public function __construct($_Symbol = null,$_Name = null,$_SEDOL = null,$_Currency = null,$_Exchange = null,$_ActiveDate = null,$_InactiveDate = null,$_HomeTradingPlace,$_Active,$_AlternateSecurityIdentifiers = null,$_CustomAttributes = null,$_DataProvider)
	{
		XiGlobalmasterWsdlClass::__construct(array('Symbol'=>$_Symbol,'Name'=>$_Name,'SEDOL'=>$_SEDOL,'Currency'=>$_Currency,'Exchange'=>$_Exchange,'ActiveDate'=>$_ActiveDate,'InactiveDate'=>$_InactiveDate,'HomeTradingPlace'=>$_HomeTradingPlace,'Active'=>$_Active,'AlternateSecurityIdentifiers'=>new XiGlobalmasterTypeArrayOfAlternateSecurityIdentifier($_AlternateSecurityIdentifiers),'CustomAttributes'=>new XiGlobalmasterTypeArrayOfCustomAttribute($_CustomAttributes),'DataProvider'=>$_DataProvider));
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set SEDOL
	 * @param string SEDOL
	 * @return string
	 */
	public function setSEDOL($_SEDOL)
	{
		return ($this->SEDOL = $_SEDOL);
	}
	/**
	 * Get SEDOL
	 * @return string
	 */
	public function getSEDOL()
	{
		return $this->SEDOL;
	}
	/**
	 * Set Currency
	 * @param string Currency
	 * @return string
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = $_Currency);
	}
	/**
	 * Get Currency
	 * @return string
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set Exchange
	 * @param string Exchange
	 * @return string
	 */
	public function setExchange($_Exchange)
	{
		return ($this->Exchange = $_Exchange);
	}
	/**
	 * Get Exchange
	 * @return string
	 */
	public function getExchange()
	{
		return $this->Exchange;
	}
	/**
	 * Set ActiveDate
	 * @param string ActiveDate
	 * @return string
	 */
	public function setActiveDate($_ActiveDate)
	{
		return ($this->ActiveDate = $_ActiveDate);
	}
	/**
	 * Get ActiveDate
	 * @return string
	 */
	public function getActiveDate()
	{
		return $this->ActiveDate;
	}
	/**
	 * Set InactiveDate
	 * @param string InactiveDate
	 * @return string
	 */
	public function setInactiveDate($_InactiveDate)
	{
		return ($this->InactiveDate = $_InactiveDate);
	}
	/**
	 * Get InactiveDate
	 * @return string
	 */
	public function getInactiveDate()
	{
		return $this->InactiveDate;
	}
	/**
	 * Set HomeTradingPlace
	 * @param boolean HomeTradingPlace
	 * @return boolean
	 */
	public function setHomeTradingPlace($_HomeTradingPlace)
	{
		return ($this->HomeTradingPlace = $_HomeTradingPlace);
	}
	/**
	 * Get HomeTradingPlace
	 * @return boolean
	 */
	public function getHomeTradingPlace()
	{
		return $this->HomeTradingPlace;
	}
	/**
	 * Set Active
	 * @param boolean Active
	 * @return boolean
	 */
	public function setActive($_Active)
	{
		return ($this->Active = $_Active);
	}
	/**
	 * Get Active
	 * @return boolean
	 */
	public function getActive()
	{
		return $this->Active;
	}
	/**
	 * Set AlternateSecurityIdentifiers
	 * @param ArrayOfAlternateSecurityIdentifier AlternateSecurityIdentifiers
	 * @return ArrayOfAlternateSecurityIdentifier
	 */
	public function setAlternateSecurityIdentifiers($_AlternateSecurityIdentifiers)
	{
		return ($this->AlternateSecurityIdentifiers = $_AlternateSecurityIdentifiers);
	}
	/**
	 * Get AlternateSecurityIdentifiers
	 * @return XiGlobalmasterTypeArrayOfAlternateSecurityIdentifier
	 */
	public function getAlternateSecurityIdentifiers()
	{
		return $this->AlternateSecurityIdentifiers;
	}
	/**
	 * Set CustomAttributes
	 * @param ArrayOfCustomAttribute CustomAttributes
	 * @return ArrayOfCustomAttribute
	 */
	public function setCustomAttributes($_CustomAttributes)
	{
		return ($this->CustomAttributes = $_CustomAttributes);
	}
	/**
	 * Get CustomAttributes
	 * @return XiGlobalmasterTypeArrayOfCustomAttribute
	 */
	public function getCustomAttributes()
	{
		return $this->CustomAttributes;
	}
	/**
	 * Set DataProvider
	 * @param DataProviders DataProvider
	 * @return DataProviders
	 */
	public function setDataProvider($_DataProvider)
	{
		return ($this->DataProvider = XiGlobalmasterTypeDataProviders::valueIsValid($_DataProvider)?$_DataProvider:null);
	}
	/**
	 * Get DataProvider
	 * @return XiGlobalmasterTypeDataProviders
	 */
	public function getDataProvider()
	{
		return $this->DataProvider;
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