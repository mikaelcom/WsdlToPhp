<?php
/**
 * Class file for XiIndexComponentsTypePricedComponent
 * @date 08/07/2012
 */
/**
 * Class XiIndexComponentsTypePricedComponent
 * @date 08/07/2012
 */
class XiIndexComponentsTypePricedComponent extends XiIndexComponentsTypeCommon
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
	 * The CIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CIK;
	/**
	 * The Cusip
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Cusip;
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
	 * The Valoren
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Valoren;
	/**
	 * The Sector
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Sector;
	/**
	 * The Class
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Class;
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
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Country;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Currency;
	/**
	 * The Style
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Style;
	/**
	 * The Price
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Price;
	/**
	 * The Weight
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Weight;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Value;
	/**
	 * The MarketCapitalization
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MarketCapitalization;
	/**
	 * The AdjustmentFactor
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AdjustmentFactor;
	/**
	 * The IndexComponentWeightType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiIndexComponentsTypeIndexComponentWeightTypes
	 */
	public $IndexComponentWeightType;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string Name
	 * @param string Exchange
	 * @param string CIK
	 * @param string Cusip
	 * @param string ISIN
	 * @param string SEDOL
	 * @param string Valoren
	 * @param string Sector
	 * @param string Class
	 * @param string IndustryGroup
	 * @param string Industry
	 * @param string Country
	 * @param string Currency
	 * @param string Style
	 * @param double Price
	 * @param double Weight
	 * @param double Value
	 * @param double MarketCapitalization
	 * @param double AdjustmentFactor
	 * @param XiIndexComponentsTypeIndexComponentWeightTypes IndexComponentWeightType
	 * @return XiIndexComponentsTypePricedComponent
	 */
	public function __construct($_Symbol = null,$_Name = null,$_Exchange = null,$_CIK = null,$_Cusip = null,$_ISIN = null,$_SEDOL = null,$_Valoren = null,$_Sector = null,$_Class = null,$_IndustryGroup = null,$_Industry = null,$_Country = null,$_Currency = null,$_Style = null,$_Price,$_Weight,$_Value,$_MarketCapitalization,$_AdjustmentFactor,$_IndexComponentWeightType)
	{
		XiIndexComponentsWsdlClass::__construct(array('Symbol'=>$_Symbol,'Name'=>$_Name,'Exchange'=>$_Exchange,'CIK'=>$_CIK,'Cusip'=>$_Cusip,'ISIN'=>$_ISIN,'SEDOL'=>$_SEDOL,'Valoren'=>$_Valoren,'Sector'=>$_Sector,'Class'=>$_Class,'IndustryGroup'=>$_IndustryGroup,'Industry'=>$_Industry,'Country'=>$_Country,'Currency'=>$_Currency,'Style'=>$_Style,'Price'=>$_Price,'Weight'=>$_Weight,'Value'=>$_Value,'MarketCapitalization'=>$_MarketCapitalization,'AdjustmentFactor'=>$_AdjustmentFactor,'IndexComponentWeightType'=>$_IndexComponentWeightType));
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
	 * Set Cusip
	 * @param string Cusip
	 * @return string
	 */
	public function setCusip($_Cusip)
	{
		return ($this->Cusip = $_Cusip);
	}
	/**
	 * Get Cusip
	 * @return string
	 */
	public function getCusip()
	{
		return $this->Cusip;
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
	 * Set Class
	 * @param string Class
	 * @return string
	 */
	public function setClass($_Class)
	{
		return ($this->Class = $_Class);
	}
	/**
	 * Get Class
	 * @return string
	 */
	public function getClass()
	{
		return $this->Class;
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
	 * Set Style
	 * @param string Style
	 * @return string
	 */
	public function setStyle($_Style)
	{
		return ($this->Style = $_Style);
	}
	/**
	 * Get Style
	 * @return string
	 */
	public function getStyle()
	{
		return $this->Style;
	}
	/**
	 * Set Price
	 * @param double Price
	 * @return double
	 */
	public function setPrice($_Price)
	{
		return ($this->Price = $_Price);
	}
	/**
	 * Get Price
	 * @return double
	 */
	public function getPrice()
	{
		return $this->Price;
	}
	/**
	 * Set Weight
	 * @param double Weight
	 * @return double
	 */
	public function setWeight($_Weight)
	{
		return ($this->Weight = $_Weight);
	}
	/**
	 * Get Weight
	 * @return double
	 */
	public function getWeight()
	{
		return $this->Weight;
	}
	/**
	 * Set Value
	 * @param double Value
	 * @return double
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return double
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set MarketCapitalization
	 * @param double MarketCapitalization
	 * @return double
	 */
	public function setMarketCapitalization($_MarketCapitalization)
	{
		return ($this->MarketCapitalization = $_MarketCapitalization);
	}
	/**
	 * Get MarketCapitalization
	 * @return double
	 */
	public function getMarketCapitalization()
	{
		return $this->MarketCapitalization;
	}
	/**
	 * Set AdjustmentFactor
	 * @param double AdjustmentFactor
	 * @return double
	 */
	public function setAdjustmentFactor($_AdjustmentFactor)
	{
		return ($this->AdjustmentFactor = $_AdjustmentFactor);
	}
	/**
	 * Get AdjustmentFactor
	 * @return double
	 */
	public function getAdjustmentFactor()
	{
		return $this->AdjustmentFactor;
	}
	/**
	 * Set IndexComponentWeightType
	 * @param IndexComponentWeightTypes IndexComponentWeightType
	 * @return IndexComponentWeightTypes
	 */
	public function setIndexComponentWeightType($_IndexComponentWeightType)
	{
		return ($this->IndexComponentWeightType = XiIndexComponentsTypeIndexComponentWeightTypes::valueIsValid($_IndexComponentWeightType)?$_IndexComponentWeightType:null);
	}
	/**
	 * Get IndexComponentWeightType
	 * @return XiIndexComponentsTypeIndexComponentWeightTypes
	 */
	public function getIndexComponentWeightType()
	{
		return $this->IndexComponentWeightType;
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