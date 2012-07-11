<?php
/**
 * Class file for XiSecurityTypeCusip
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeCusip
 * @date 08/07/2012
 */
class XiSecurityTypeCusip extends XiSecurityTypeCommon
{
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
	 * @param string Cusip
	 * @param string Symbol
	 * @param string CIK
	 * @param string Name
	 * @param string Market
	 * @param string CategoryOrIndustry
	 * @return XiSecurityTypeCusip
	 */
	public function __construct($_Cusip = null,$_Symbol = null,$_CIK = null,$_Name = null,$_Market = null,$_CategoryOrIndustry = null)
	{
		XiSecurityWsdlClass::__construct(array('Cusip'=>$_Cusip,'Symbol'=>$_Symbol,'CIK'=>$_CIK,'Name'=>$_Name,'Market'=>$_Market,'CategoryOrIndustry'=>$_CategoryOrIndustry));
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