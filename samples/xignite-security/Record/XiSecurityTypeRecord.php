<?php
/**
 * Class file for XiSecurityTypeRecord
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeRecord
 * @date 08/07/2012
 */
class XiSecurityTypeRecord extends XiSecurityTypeCommon
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
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Exchange;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The ShortName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ShortName;
	/**
	 * The Issue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Issue;
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
	 * The LastUpdateDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastUpdateDate;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string CUSIP
	 * @param string CIK
	 * @param string ISIN
	 * @param string SEDOL
	 * @param string Valoren
	 * @param string Exchange
	 * @param string Name
	 * @param string ShortName
	 * @param string Issue
	 * @param string Sector
	 * @param string Industry
	 * @param string LastUpdateDate
	 * @return XiSecurityTypeRecord
	 */
	public function __construct($_Symbol = null,$_CUSIP = null,$_CIK = null,$_ISIN = null,$_SEDOL = null,$_Valoren = null,$_Exchange = null,$_Name = null,$_ShortName = null,$_Issue = null,$_Sector = null,$_Industry = null,$_LastUpdateDate = null)
	{
		XiSecurityWsdlClass::__construct(array('Symbol'=>$_Symbol,'CUSIP'=>$_CUSIP,'CIK'=>$_CIK,'ISIN'=>$_ISIN,'SEDOL'=>$_SEDOL,'Valoren'=>$_Valoren,'Exchange'=>$_Exchange,'Name'=>$_Name,'ShortName'=>$_ShortName,'Issue'=>$_Issue,'Sector'=>$_Sector,'Industry'=>$_Industry,'LastUpdateDate'=>$_LastUpdateDate));
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
	 * Set ShortName
	 * @param string ShortName
	 * @return string
	 */
	public function setShortName($_ShortName)
	{
		return ($this->ShortName = $_ShortName);
	}
	/**
	 * Get ShortName
	 * @return string
	 */
	public function getShortName()
	{
		return $this->ShortName;
	}
	/**
	 * Set Issue
	 * @param string Issue
	 * @return string
	 */
	public function setIssue($_Issue)
	{
		return ($this->Issue = $_Issue);
	}
	/**
	 * Get Issue
	 * @return string
	 */
	public function getIssue()
	{
		return $this->Issue;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>