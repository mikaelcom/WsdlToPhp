<?php
/**
 * Class file for XiScreenerTypeDetails
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeDetails
 * @date 08/07/2012
 */
class XiScreenerTypeDetails extends XiScreenerTypeCommon
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
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Exchange;
	/**
	 * The Sector
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Sector;
	/**
	 * The IndustryGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IndustryGroup;
	/**
	 * The Industry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Industry;
	/**
	 * The SICCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SICCode;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The Street1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Street1;
	/**
	 * The Street2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Street2;
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $City;
	/**
	 * The State
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $State;
	/**
	 * The Zip
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Zip;
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Country;
	/**
	 * The Phone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Phone;
	/**
	 * The Fax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Fax;
	/**
	 * The CEO
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CEO;
	/**
	 * The Employees
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Employees;
	/**
	 * The WebSite
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WebSite;
	/**
	 * The Beta
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Beta;
	/**
	 * The YearHigh
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $YearHigh;
	/**
	 * The YearLow
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $YearLow;
	/**
	 * The AverageVolume
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AverageVolume;
	/**
	 * The MarketCap
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MarketCap;
	/**
	 * The PERatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PERatio;
	/**
	 * The EPS
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $EPS;
	/**
	 * The Dividend
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Dividend;
	/**
	 * The LastPrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LastPrice;
	/**
	 * The LastPriceDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastPriceDate;
	/**
	 * The LastPriceTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastPriceTime;
	/**
	 * The LastVolume
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LastVolume;
	/**
	 * The LastChange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LastChange;
	/**
	 * The LastChangeType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeChangeTypes
	 */
	public $LastChangeType;
	/**
	 * The DayHigh
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DayHigh;
	/**
	 * The DayLow
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DayLow;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string Name
	 * @param string Exchange
	 * @param string Sector
	 * @param string IndustryGroup
	 * @param string Industry
	 * @param string SICCode
	 * @param string Description
	 * @param string Street1
	 * @param string Street2
	 * @param string City
	 * @param string State
	 * @param string Zip
	 * @param string Country
	 * @param string Phone
	 * @param string Fax
	 * @param string CEO
	 * @param double Employees
	 * @param string WebSite
	 * @param double Beta
	 * @param double YearHigh
	 * @param double YearLow
	 * @param double AverageVolume
	 * @param double MarketCap
	 * @param double PERatio
	 * @param double EPS
	 * @param double Dividend
	 * @param double LastPrice
	 * @param string LastPriceDate
	 * @param string LastPriceTime
	 * @param double LastVolume
	 * @param double LastChange
	 * @param XiScreenerTypeChangeTypes LastChangeType
	 * @param double DayHigh
	 * @param double DayLow
	 * @return XiScreenerTypeDetails
	 */
	public function __construct($_Symbol = null,$_Name = null,$_Exchange = null,$_Sector = null,$_IndustryGroup = null,$_Industry = null,$_SICCode = null,$_Description = null,$_Street1 = null,$_Street2 = null,$_City = null,$_State = null,$_Zip = null,$_Country = null,$_Phone = null,$_Fax = null,$_CEO = null,$_Employees,$_WebSite = null,$_Beta,$_YearHigh,$_YearLow,$_AverageVolume,$_MarketCap,$_PERatio,$_EPS,$_Dividend,$_LastPrice,$_LastPriceDate = null,$_LastPriceTime = null,$_LastVolume,$_LastChange,$_LastChangeType,$_DayHigh,$_DayLow)
	{
		XiScreenerWsdlClass::__construct(array('Symbol'=>$_Symbol,'Name'=>$_Name,'Exchange'=>$_Exchange,'Sector'=>$_Sector,'IndustryGroup'=>$_IndustryGroup,'Industry'=>$_Industry,'SICCode'=>$_SICCode,'Description'=>$_Description,'Street1'=>$_Street1,'Street2'=>$_Street2,'City'=>$_City,'State'=>$_State,'Zip'=>$_Zip,'Country'=>$_Country,'Phone'=>$_Phone,'Fax'=>$_Fax,'CEO'=>$_CEO,'Employees'=>$_Employees,'WebSite'=>$_WebSite,'Beta'=>$_Beta,'YearHigh'=>$_YearHigh,'YearLow'=>$_YearLow,'AverageVolume'=>$_AverageVolume,'MarketCap'=>$_MarketCap,'PERatio'=>$_PERatio,'EPS'=>$_EPS,'Dividend'=>$_Dividend,'LastPrice'=>$_LastPrice,'LastPriceDate'=>$_LastPriceDate,'LastPriceTime'=>$_LastPriceTime,'LastVolume'=>$_LastVolume,'LastChange'=>$_LastChange,'LastChangeType'=>$_LastChangeType,'DayHigh'=>$_DayHigh,'DayLow'=>$_DayLow));
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
	 * Set IndustryGroup
	 * @param string IndustryGroup
	 * @return string
	 */
	public function setIndustryGroup($_IndustryGroup)
	{
		return ($this->IndustryGroup = $_IndustryGroup);
	}
	/**
	 * Get IndustryGroup
	 * @return string
	 */
	public function getIndustryGroup()
	{
		return $this->IndustryGroup;
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
	 * Set SICCode
	 * @param string SICCode
	 * @return string
	 */
	public function setSICCode($_SICCode)
	{
		return ($this->SICCode = $_SICCode);
	}
	/**
	 * Get SICCode
	 * @return string
	 */
	public function getSICCode()
	{
		return $this->SICCode;
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
	 * Set Street1
	 * @param string Street1
	 * @return string
	 */
	public function setStreet1($_Street1)
	{
		return ($this->Street1 = $_Street1);
	}
	/**
	 * Get Street1
	 * @return string
	 */
	public function getStreet1()
	{
		return $this->Street1;
	}
	/**
	 * Set Street2
	 * @param string Street2
	 * @return string
	 */
	public function setStreet2($_Street2)
	{
		return ($this->Street2 = $_Street2);
	}
	/**
	 * Get Street2
	 * @return string
	 */
	public function getStreet2()
	{
		return $this->Street2;
	}
	/**
	 * Set City
	 * @param string City
	 * @return string
	 */
	public function setCity($_City)
	{
		return ($this->City = $_City);
	}
	/**
	 * Get City
	 * @return string
	 */
	public function getCity()
	{
		return $this->City;
	}
	/**
	 * Set State
	 * @param string State
	 * @return string
	 */
	public function setState($_State)
	{
		return ($this->State = $_State);
	}
	/**
	 * Get State
	 * @return string
	 */
	public function getState()
	{
		return $this->State;
	}
	/**
	 * Set Zip
	 * @param string Zip
	 * @return string
	 */
	public function setZip($_Zip)
	{
		return ($this->Zip = $_Zip);
	}
	/**
	 * Get Zip
	 * @return string
	 */
	public function getZip()
	{
		return $this->Zip;
	}
	/**
	 * Set Country
	 * @param string Country
	 * @return string
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = $_Country);
	}
	/**
	 * Get Country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->Country;
	}
	/**
	 * Set Phone
	 * @param string Phone
	 * @return string
	 */
	public function setPhone($_Phone)
	{
		return ($this->Phone = $_Phone);
	}
	/**
	 * Get Phone
	 * @return string
	 */
	public function getPhone()
	{
		return $this->Phone;
	}
	/**
	 * Set Fax
	 * @param string Fax
	 * @return string
	 */
	public function setFax($_Fax)
	{
		return ($this->Fax = $_Fax);
	}
	/**
	 * Get Fax
	 * @return string
	 */
	public function getFax()
	{
		return $this->Fax;
	}
	/**
	 * Set CEO
	 * @param string CEO
	 * @return string
	 */
	public function setCEO($_CEO)
	{
		return ($this->CEO = $_CEO);
	}
	/**
	 * Get CEO
	 * @return string
	 */
	public function getCEO()
	{
		return $this->CEO;
	}
	/**
	 * Set Employees
	 * @param double Employees
	 * @return double
	 */
	public function setEmployees($_Employees)
	{
		return ($this->Employees = $_Employees);
	}
	/**
	 * Get Employees
	 * @return double
	 */
	public function getEmployees()
	{
		return $this->Employees;
	}
	/**
	 * Set WebSite
	 * @param string WebSite
	 * @return string
	 */
	public function setWebSite($_WebSite)
	{
		return ($this->WebSite = $_WebSite);
	}
	/**
	 * Get WebSite
	 * @return string
	 */
	public function getWebSite()
	{
		return $this->WebSite;
	}
	/**
	 * Set Beta
	 * @param double Beta
	 * @return double
	 */
	public function setBeta($_Beta)
	{
		return ($this->Beta = $_Beta);
	}
	/**
	 * Get Beta
	 * @return double
	 */
	public function getBeta()
	{
		return $this->Beta;
	}
	/**
	 * Set YearHigh
	 * @param double YearHigh
	 * @return double
	 */
	public function setYearHigh($_YearHigh)
	{
		return ($this->YearHigh = $_YearHigh);
	}
	/**
	 * Get YearHigh
	 * @return double
	 */
	public function getYearHigh()
	{
		return $this->YearHigh;
	}
	/**
	 * Set YearLow
	 * @param double YearLow
	 * @return double
	 */
	public function setYearLow($_YearLow)
	{
		return ($this->YearLow = $_YearLow);
	}
	/**
	 * Get YearLow
	 * @return double
	 */
	public function getYearLow()
	{
		return $this->YearLow;
	}
	/**
	 * Set AverageVolume
	 * @param double AverageVolume
	 * @return double
	 */
	public function setAverageVolume($_AverageVolume)
	{
		return ($this->AverageVolume = $_AverageVolume);
	}
	/**
	 * Get AverageVolume
	 * @return double
	 */
	public function getAverageVolume()
	{
		return $this->AverageVolume;
	}
	/**
	 * Set MarketCap
	 * @param double MarketCap
	 * @return double
	 */
	public function setMarketCap($_MarketCap)
	{
		return ($this->MarketCap = $_MarketCap);
	}
	/**
	 * Get MarketCap
	 * @return double
	 */
	public function getMarketCap()
	{
		return $this->MarketCap;
	}
	/**
	 * Set PERatio
	 * @param double PERatio
	 * @return double
	 */
	public function setPERatio($_PERatio)
	{
		return ($this->PERatio = $_PERatio);
	}
	/**
	 * Get PERatio
	 * @return double
	 */
	public function getPERatio()
	{
		return $this->PERatio;
	}
	/**
	 * Set EPS
	 * @param double EPS
	 * @return double
	 */
	public function setEPS($_EPS)
	{
		return ($this->EPS = $_EPS);
	}
	/**
	 * Get EPS
	 * @return double
	 */
	public function getEPS()
	{
		return $this->EPS;
	}
	/**
	 * Set Dividend
	 * @param double Dividend
	 * @return double
	 */
	public function setDividend($_Dividend)
	{
		return ($this->Dividend = $_Dividend);
	}
	/**
	 * Get Dividend
	 * @return double
	 */
	public function getDividend()
	{
		return $this->Dividend;
	}
	/**
	 * Set LastPrice
	 * @param double LastPrice
	 * @return double
	 */
	public function setLastPrice($_LastPrice)
	{
		return ($this->LastPrice = $_LastPrice);
	}
	/**
	 * Get LastPrice
	 * @return double
	 */
	public function getLastPrice()
	{
		return $this->LastPrice;
	}
	/**
	 * Set LastPriceDate
	 * @param string LastPriceDate
	 * @return string
	 */
	public function setLastPriceDate($_LastPriceDate)
	{
		return ($this->LastPriceDate = $_LastPriceDate);
	}
	/**
	 * Get LastPriceDate
	 * @return string
	 */
	public function getLastPriceDate()
	{
		return $this->LastPriceDate;
	}
	/**
	 * Set LastPriceTime
	 * @param string LastPriceTime
	 * @return string
	 */
	public function setLastPriceTime($_LastPriceTime)
	{
		return ($this->LastPriceTime = $_LastPriceTime);
	}
	/**
	 * Get LastPriceTime
	 * @return string
	 */
	public function getLastPriceTime()
	{
		return $this->LastPriceTime;
	}
	/**
	 * Set LastVolume
	 * @param double LastVolume
	 * @return double
	 */
	public function setLastVolume($_LastVolume)
	{
		return ($this->LastVolume = $_LastVolume);
	}
	/**
	 * Get LastVolume
	 * @return double
	 */
	public function getLastVolume()
	{
		return $this->LastVolume;
	}
	/**
	 * Set LastChange
	 * @param double LastChange
	 * @return double
	 */
	public function setLastChange($_LastChange)
	{
		return ($this->LastChange = $_LastChange);
	}
	/**
	 * Get LastChange
	 * @return double
	 */
	public function getLastChange()
	{
		return $this->LastChange;
	}
	/**
	 * Set LastChangeType
	 * @param ChangeTypes LastChangeType
	 * @return ChangeTypes
	 */
	public function setLastChangeType($_LastChangeType)
	{
		return ($this->LastChangeType = XiScreenerTypeChangeTypes::valueIsValid($_LastChangeType)?$_LastChangeType:null);
	}
	/**
	 * Get LastChangeType
	 * @return XiScreenerTypeChangeTypes
	 */
	public function getLastChangeType()
	{
		return $this->LastChangeType;
	}
	/**
	 * Set DayHigh
	 * @param double DayHigh
	 * @return double
	 */
	public function setDayHigh($_DayHigh)
	{
		return ($this->DayHigh = $_DayHigh);
	}
	/**
	 * Get DayHigh
	 * @return double
	 */
	public function getDayHigh()
	{
		return $this->DayHigh;
	}
	/**
	 * Set DayLow
	 * @param double DayLow
	 * @return double
	 */
	public function setDayLow($_DayLow)
	{
		return ($this->DayLow = $_DayLow);
	}
	/**
	 * Get DayLow
	 * @return double
	 */
	public function getDayLow()
	{
		return $this->DayLow;
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