<?php
/**
 * Class file for XiGlobalrealtimeTypeSecurity
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeTypeSecurity
 * @date 08/07/2012
 */
class XiGlobalrealtimeTypeSecurity extends XiGlobalrealtimeTypeCommon
{
	/**
	 * The CIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CIK;
	/**
	 * The CUSIP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CUSIP;
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
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
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Market
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Market;
	/**
	 * The MarketIdentificationCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MarketIdentificationCode;
	/**
	 * The MostLiquidExchange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $MostLiquidExchange;
	/**
	 * The CategoryOrIndustry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CategoryOrIndustry;
	/**
	 * Constructor
	 * @param string CIK
	 * @param string CUSIP
	 * @param string Symbol
	 * @param string ISIN
	 * @param string Valoren
	 * @param string Name
	 * @param string Market
	 * @param string MarketIdentificationCode
	 * @param boolean MostLiquidExchange
	 * @param string CategoryOrIndustry
	 * @return XiGlobalrealtimeTypeSecurity
	 */
	public function __construct($_CIK = null,$_CUSIP = null,$_Symbol = null,$_ISIN = null,$_Valoren = null,$_Name = null,$_Market = null,$_MarketIdentificationCode = null,$_MostLiquidExchange,$_CategoryOrIndustry = null)
	{
		XiGlobalrealtimeWsdlClass::__construct(array('CIK'=>$_CIK,'CUSIP'=>$_CUSIP,'Symbol'=>$_Symbol,'ISIN'=>$_ISIN,'Valoren'=>$_Valoren,'Name'=>$_Name,'Market'=>$_Market,'MarketIdentificationCode'=>$_MarketIdentificationCode,'MostLiquidExchange'=>$_MostLiquidExchange,'CategoryOrIndustry'=>$_CategoryOrIndustry));
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
	 * Set Market
	 * @param string Market
	 * @return string
	 */
	public function setMarket($_Market)
	{
		return ($this->Market = $_Market);
	}
	/**
	 * Get Market
	 * @return string
	 */
	public function getMarket()
	{
		return $this->Market;
	}
	/**
	 * Set MarketIdentificationCode
	 * @param string MarketIdentificationCode
	 * @return string
	 */
	public function setMarketIdentificationCode($_MarketIdentificationCode)
	{
		return ($this->MarketIdentificationCode = $_MarketIdentificationCode);
	}
	/**
	 * Get MarketIdentificationCode
	 * @return string
	 */
	public function getMarketIdentificationCode()
	{
		return $this->MarketIdentificationCode;
	}
	/**
	 * Set MostLiquidExchange
	 * @param boolean MostLiquidExchange
	 * @return boolean
	 */
	public function setMostLiquidExchange($_MostLiquidExchange)
	{
		return ($this->MostLiquidExchange = $_MostLiquidExchange);
	}
	/**
	 * Get MostLiquidExchange
	 * @return boolean
	 */
	public function getMostLiquidExchange()
	{
		return $this->MostLiquidExchange;
	}
	/**
	 * Set CategoryOrIndustry
	 * @param string CategoryOrIndustry
	 * @return string
	 */
	public function setCategoryOrIndustry($_CategoryOrIndustry)
	{
		return ($this->CategoryOrIndustry = $_CategoryOrIndustry);
	}
	/**
	 * Get CategoryOrIndustry
	 * @return string
	 */
	public function getCategoryOrIndustry()
	{
		return $this->CategoryOrIndustry;
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