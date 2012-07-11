<?php
/**
 * Class file for XiChartTypeSecurity
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeSecurity
 * @date 08/07/2012
 */
class XiChartTypeSecurity extends XiChartTypeCommon
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
	 * The Cusip
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Cusip;
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
	 * @param string Cusip
	 * @param string Symbol
	 * @param string ISIN
	 * @param string Valoren
	 * @param string Name
	 * @param string Market
	 * @param string CategoryOrIndustry
	 * @return XiChartTypeSecurity
	 */
	public function __construct($_CIK = null,$_Cusip = null,$_Symbol = null,$_ISIN = null,$_Valoren = null,$_Name = null,$_Market = null,$_CategoryOrIndustry = null)
	{
		XiChartWsdlClass::__construct(array('CIK'=>$_CIK,'Cusip'=>$_Cusip,'Symbol'=>$_Symbol,'ISIN'=>$_ISIN,'Valoren'=>$_Valoren,'Name'=>$_Name,'Market'=>$_Market,'CategoryOrIndustry'=>$_CategoryOrIndustry));
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