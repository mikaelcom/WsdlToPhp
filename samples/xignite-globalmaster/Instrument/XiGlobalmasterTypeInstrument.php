<?php
/**
 * Class file for XiGlobalmasterTypeInstrument
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeInstrument
 * @date 08/07/2012
 */
class XiGlobalmasterTypeInstrument extends XiGlobalmasterTypeCommon
{
	/**
	 * The InstrumentClass
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InstrumentClass;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The CUSIP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CUSIP;
	/**
	 * The ISIN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ISIN;
	/**
	 * The Valoren
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Valoren;
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
	 * The MostLiquidExchange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MostLiquidExchange;
	/**
	 * The CFICode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CFICode;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The Active
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Active;
	/**
	 * The CustomAttributes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfCustomAttribute
	 */
	public $CustomAttributes;
	/**
	 * The Securities
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfSecurity
	 */
	public $Securities;
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
	 * @param string InstrumentClass
	 * @param string Name
	 * @param string CUSIP
	 * @param string ISIN
	 * @param string Valoren
	 * @param string ActiveDate
	 * @param string InactiveDate
	 * @param string MostLiquidExchange
	 * @param string CFICode
	 * @param string Description
	 * @param boolean Active
	 * @param XiGlobalmasterTypeArrayOfCustomAttribute CustomAttributes
	 * @param XiGlobalmasterTypeArrayOfSecurity Securities
	 * @param XiGlobalmasterTypeDataProviders DataProvider
	 * @return XiGlobalmasterTypeInstrument
	 */
	public function __construct($_InstrumentClass = null,$_Name = null,$_CUSIP = null,$_ISIN = null,$_Valoren = null,$_ActiveDate = null,$_InactiveDate = null,$_MostLiquidExchange = null,$_CFICode = null,$_Description = null,$_Active,$_CustomAttributes = null,$_Securities = null,$_DataProvider)
	{
		XiGlobalmasterWsdlClass::__construct(array('InstrumentClass'=>$_InstrumentClass,'Name'=>$_Name,'CUSIP'=>$_CUSIP,'ISIN'=>$_ISIN,'Valoren'=>$_Valoren,'ActiveDate'=>$_ActiveDate,'InactiveDate'=>$_InactiveDate,'MostLiquidExchange'=>$_MostLiquidExchange,'CFICode'=>$_CFICode,'Description'=>$_Description,'Active'=>$_Active,'CustomAttributes'=>new XiGlobalmasterTypeArrayOfCustomAttribute($_CustomAttributes),'Securities'=>new XiGlobalmasterTypeArrayOfSecurity($_Securities),'DataProvider'=>$_DataProvider));
	}
	/**
	 * Set InstrumentClass
	 * @param string InstrumentClass
	 * @return string
	 */
	public function setInstrumentClass($_InstrumentClass)
	{
		return ($this->InstrumentClass = $_InstrumentClass);
	}
	/**
	 * Get InstrumentClass
	 * @return string
	 */
	public function getInstrumentClass()
	{
		return $this->InstrumentClass;
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
	 * Set CUSIP
	 * @param string CUSIP
	 * @return string
	 */
	public function setCUSIP($_CUSIP)
	{
		return ($this->CUSIP = $_CUSIP);
	}
	/**
	 * Get CUSIP
	 * @return string
	 */
	public function getCUSIP()
	{
		return $this->CUSIP;
	}
	/**
	 * Set ISIN
	 * @param string ISIN
	 * @return string
	 */
	public function setISIN($_ISIN)
	{
		return ($this->ISIN = $_ISIN);
	}
	/**
	 * Get ISIN
	 * @return string
	 */
	public function getISIN()
	{
		return $this->ISIN;
	}
	/**
	 * Set Valoren
	 * @param string Valoren
	 * @return string
	 */
	public function setValoren($_Valoren)
	{
		return ($this->Valoren = $_Valoren);
	}
	/**
	 * Get Valoren
	 * @return string
	 */
	public function getValoren()
	{
		return $this->Valoren;
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
	 * Set MostLiquidExchange
	 * @param string MostLiquidExchange
	 * @return string
	 */
	public function setMostLiquidExchange($_MostLiquidExchange)
	{
		return ($this->MostLiquidExchange = $_MostLiquidExchange);
	}
	/**
	 * Get MostLiquidExchange
	 * @return string
	 */
	public function getMostLiquidExchange()
	{
		return $this->MostLiquidExchange;
	}
	/**
	 * Set CFICode
	 * @param string CFICode
	 * @return string
	 */
	public function setCFICode($_CFICode)
	{
		return ($this->CFICode = $_CFICode);
	}
	/**
	 * Get CFICode
	 * @return string
	 */
	public function getCFICode()
	{
		return $this->CFICode;
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
	 * Set Securities
	 * @param ArrayOfSecurity Securities
	 * @return ArrayOfSecurity
	 */
	public function setSecurities($_Securities)
	{
		return ($this->Securities = $_Securities);
	}
	/**
	 * Get Securities
	 * @return XiGlobalmasterTypeArrayOfSecurity
	 */
	public function getSecurities()
	{
		return $this->Securities;
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