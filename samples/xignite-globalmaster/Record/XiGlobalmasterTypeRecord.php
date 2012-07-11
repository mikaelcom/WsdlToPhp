<?php
/**
 * Class file for XiGlobalmasterTypeRecord
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeRecord
 * @date 08/07/2012
 */
class XiGlobalmasterTypeRecord extends XiGlobalmasterTypeCommon
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
	 * The CUSIP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CUSIP;
	/**
	 * The CIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CIK;
	/**
	 * The Valoren
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Valoren;
	/**
	 * The ISIN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ISIN;
	/**
	 * The SEDOL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SEDOL;
	/**
	 * The CFICode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CFICode;
	/**
	 * The InstrumentClass
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InstrumentClass;
	/**
	 * The ExchangeName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ExchangeName;
	/**
	 * The Sector
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Sector;
	/**
	 * The Industry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Industry;
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Exchange;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Currency;
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
	 * The LastUpdateDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastUpdateDate;
	/**
	 * The HomeTradingPlace
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $HomeTradingPlace;
	/**
	 * The CompanyIdentifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CompanyIdentifier;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string Name
	 * @param string CUSIP
	 * @param string CIK
	 * @param string Valoren
	 * @param string ISIN
	 * @param string SEDOL
	 * @param string CFICode
	 * @param string InstrumentClass
	 * @param string ExchangeName
	 * @param string Sector
	 * @param string Industry
	 * @param string Exchange
	 * @param string Currency
	 * @param string ActiveDate
	 * @param string InactiveDate
	 * @param string LastUpdateDate
	 * @param boolean HomeTradingPlace
	 * @param string CompanyIdentifier
	 * @return XiGlobalmasterTypeRecord
	 */
	public function __construct($_Symbol = null,$_Name = null,$_CUSIP = null,$_CIK = null,$_Valoren = null,$_ISIN = null,$_SEDOL = null,$_CFICode = null,$_InstrumentClass = null,$_ExchangeName = null,$_Sector = null,$_Industry = null,$_Exchange = null,$_Currency = null,$_ActiveDate = null,$_InactiveDate = null,$_LastUpdateDate = null,$_HomeTradingPlace,$_CompanyIdentifier = null)
	{
		XiGlobalmasterWsdlClass::__construct(array('Symbol'=>$_Symbol,'Name'=>$_Name,'CUSIP'=>$_CUSIP,'CIK'=>$_CIK,'Valoren'=>$_Valoren,'ISIN'=>$_ISIN,'SEDOL'=>$_SEDOL,'CFICode'=>$_CFICode,'InstrumentClass'=>$_InstrumentClass,'ExchangeName'=>$_ExchangeName,'Sector'=>$_Sector,'Industry'=>$_Industry,'Exchange'=>$_Exchange,'Currency'=>$_Currency,'ActiveDate'=>$_ActiveDate,'InactiveDate'=>$_InactiveDate,'LastUpdateDate'=>$_LastUpdateDate,'HomeTradingPlace'=>$_HomeTradingPlace,'CompanyIdentifier'=>$_CompanyIdentifier));
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
	 * Set CIK
	 * @param string CIK
	 * @return string
	 */
	public function setCIK($_CIK)
	{
		return ($this->CIK = $_CIK);
	}
	/**
	 * Get CIK
	 * @return string
	 */
	public function getCIK()
	{
		return $this->CIK;
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
	 * Set ExchangeName
	 * @param string ExchangeName
	 * @return string
	 */
	public function setExchangeName($_ExchangeName)
	{
		return ($this->ExchangeName = $_ExchangeName);
	}
	/**
	 * Get ExchangeName
	 * @return string
	 */
	public function getExchangeName()
	{
		return $this->ExchangeName;
	}
	/**
	 * Set Sector
	 * @param string Sector
	 * @return string
	 */
	public function setSector($_Sector)
	{
		return ($this->Sector = $_Sector);
	}
	/**
	 * Get Sector
	 * @return string
	 */
	public function getSector()
	{
		return $this->Sector;
	}
	/**
	 * Set Industry
	 * @param string Industry
	 * @return string
	 */
	public function setIndustry($_Industry)
	{
		return ($this->Industry = $_Industry);
	}
	/**
	 * Get Industry
	 * @return string
	 */
	public function getIndustry()
	{
		return $this->Industry;
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
	 * Set LastUpdateDate
	 * @param string LastUpdateDate
	 * @return string
	 */
	public function setLastUpdateDate($_LastUpdateDate)
	{
		return ($this->LastUpdateDate = $_LastUpdateDate);
	}
	/**
	 * Get LastUpdateDate
	 * @return string
	 */
	public function getLastUpdateDate()
	{
		return $this->LastUpdateDate;
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
	 * Set CompanyIdentifier
	 * @param string CompanyIdentifier
	 * @return string
	 */
	public function setCompanyIdentifier($_CompanyIdentifier)
	{
		return ($this->CompanyIdentifier = $_CompanyIdentifier);
	}
	/**
	 * Get CompanyIdentifier
	 * @return string
	 */
	public function getCompanyIdentifier()
	{
		return $this->CompanyIdentifier;
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