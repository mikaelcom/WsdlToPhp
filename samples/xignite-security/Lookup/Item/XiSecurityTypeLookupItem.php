<?php
/**
 * Class file for XiSecurityTypeLookupItem
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeLookupItem
 * @date 08/07/2012
 */
class XiSecurityTypeLookupItem extends XiSecurityTypeCommon
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
	 * @param string Symbol
	 * @param string CUSIP
	 * @param string CIK
	 * @param string Name
	 * @param string Market
	 * @param string CategoryOrIndustry
	 * @return XiSecurityTypeLookupItem
	 */
	public function __construct($_Symbol = null,$_CUSIP = null,$_CIK = null,$_Name = null,$_Market = null,$_CategoryOrIndustry = null)
	{
		XiSecurityWsdlClass::__construct(array('Symbol'=>$_Symbol,'CUSIP'=>$_CUSIP,'CIK'=>$_CIK,'Name'=>$_Name,'Market'=>$_Market,'CategoryOrIndustry'=>$_CategoryOrIndustry));
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