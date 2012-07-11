<?php
/**
 * Class file for XiScreenerTypeResult
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeResult
 * @date 08/07/2012
 */
class XiScreenerTypeResult extends XiScreenerWsdlClass
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
	 * The SearchValues
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeArrayOfSearchValue
	 */
	public $SearchValues;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string Name
	 * @param string Exchange
	 * @param string Sector
	 * @param string IndustryGroup
	 * @param string Industry
	 * @param double LastPrice
	 * @param string LastPriceDate
	 * @param string LastPriceTime
	 * @param double LastVolume
	 * @param double LastChange
	 * @param XiScreenerTypeChangeTypes LastChangeType
	 * @param XiScreenerTypeArrayOfSearchValue SearchValues
	 * @return XiScreenerTypeResult
	 */
	public function __construct($_Symbol = null,$_Name = null,$_Exchange = null,$_Sector = null,$_IndustryGroup = null,$_Industry = null,$_LastPrice,$_LastPriceDate = null,$_LastPriceTime = null,$_LastVolume,$_LastChange,$_LastChangeType,$_SearchValues = null)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'Name'=>$_Name,'Exchange'=>$_Exchange,'Sector'=>$_Sector,'IndustryGroup'=>$_IndustryGroup,'Industry'=>$_Industry,'LastPrice'=>$_LastPrice,'LastPriceDate'=>$_LastPriceDate,'LastPriceTime'=>$_LastPriceTime,'LastVolume'=>$_LastVolume,'LastChange'=>$_LastChange,'LastChangeType'=>$_LastChangeType,'SearchValues'=>new XiScreenerTypeArrayOfSearchValue($_SearchValues)));
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
	 * Set SearchValues
	 * @param ArrayOfSearchValue SearchValues
	 * @return ArrayOfSearchValue
	 */
	public function setSearchValues($_SearchValues)
	{
		return ($this->SearchValues = $_SearchValues);
	}
	/**
	 * Get SearchValues
	 * @return XiScreenerTypeArrayOfSearchValue
	 */
	public function getSearchValues()
	{
		return $this->SearchValues;
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