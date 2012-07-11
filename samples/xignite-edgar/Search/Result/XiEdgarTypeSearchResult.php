<?php
/**
 * Class file for XiEdgarTypeSearchResult
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeSearchResult
 * @date 08/07/2012
 */
class XiEdgarTypeSearchResult extends XiEdgarTypeCommon
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
	 * The Company
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Company;
	/**
	 * The SICCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeSICCode
	 */
	public $SICCode;
	/**
	 * The State
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $State;
	/**
	 * The StateOfIncorporation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StateOfIncorporation;
	/**
	 * The FiscalYearEnd
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FiscalYearEnd;
	/**
	 * The BusinessAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BusinessAddress;
	/**
	 * The MailingAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MailingAddress;
	/**
	 * The Filings
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeArrayOfFiling
	 */
	public $Filings;
	/**
	 * Constructor
	 * @param string CIK
	 * @param string Company
	 * @param XiEdgarTypeSICCode SICCode
	 * @param string State
	 * @param string StateOfIncorporation
	 * @param string FiscalYearEnd
	 * @param string BusinessAddress
	 * @param string MailingAddress
	 * @param XiEdgarTypeArrayOfFiling Filings
	 * @return XiEdgarTypeSearchResult
	 */
	public function __construct($_CIK = null,$_Company = null,$_SICCode = null,$_State = null,$_StateOfIncorporation = null,$_FiscalYearEnd = null,$_BusinessAddress = null,$_MailingAddress = null,$_Filings = null)
	{
		XiEdgarWsdlClass::__construct(array('CIK'=>$_CIK,'Company'=>$_Company,'SICCode'=>$_SICCode,'State'=>$_State,'StateOfIncorporation'=>$_StateOfIncorporation,'FiscalYearEnd'=>$_FiscalYearEnd,'BusinessAddress'=>$_BusinessAddress,'MailingAddress'=>$_MailingAddress,'Filings'=>new XiEdgarTypeArrayOfFiling($_Filings)));
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
	 * Set Company
	 * @param string Company
	 * @return string
	 */
	public function setCompany($_Company)
	{
		return ($this->Company = $_Company);
	}
	/**
	 * Get Company
	 * @return string
	 */
	public function getCompany()
	{
		return $this->Company;
	}
	/**
	 * Set SICCode
	 * @param SICCode SICCode
	 * @return SICCode
	 */
	public function setSICCode($_SICCode)
	{
		return ($this->SICCode = $_SICCode);
	}
	/**
	 * Get SICCode
	 * @return XiEdgarTypeSICCode
	 */
	public function getSICCode()
	{
		return $this->SICCode;
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
	 * Set StateOfIncorporation
	 * @param string StateOfIncorporation
	 * @return string
	 */
	public function setStateOfIncorporation($_StateOfIncorporation)
	{
		return ($this->StateOfIncorporation = $_StateOfIncorporation);
	}
	/**
	 * Get StateOfIncorporation
	 * @return string
	 */
	public function getStateOfIncorporation()
	{
		return $this->StateOfIncorporation;
	}
	/**
	 * Set FiscalYearEnd
	 * @param string FiscalYearEnd
	 * @return string
	 */
	public function setFiscalYearEnd($_FiscalYearEnd)
	{
		return ($this->FiscalYearEnd = $_FiscalYearEnd);
	}
	/**
	 * Get FiscalYearEnd
	 * @return string
	 */
	public function getFiscalYearEnd()
	{
		return $this->FiscalYearEnd;
	}
	/**
	 * Set BusinessAddress
	 * @param string BusinessAddress
	 * @return string
	 */
	public function setBusinessAddress($_BusinessAddress)
	{
		return ($this->BusinessAddress = $_BusinessAddress);
	}
	/**
	 * Get BusinessAddress
	 * @return string
	 */
	public function getBusinessAddress()
	{
		return $this->BusinessAddress;
	}
	/**
	 * Set MailingAddress
	 * @param string MailingAddress
	 * @return string
	 */
	public function setMailingAddress($_MailingAddress)
	{
		return ($this->MailingAddress = $_MailingAddress);
	}
	/**
	 * Get MailingAddress
	 * @return string
	 */
	public function getMailingAddress()
	{
		return $this->MailingAddress;
	}
	/**
	 * Set Filings
	 * @param ArrayOfFiling Filings
	 * @return ArrayOfFiling
	 */
	public function setFilings($_Filings)
	{
		return ($this->Filings = $_Filings);
	}
	/**
	 * Get Filings
	 * @return XiEdgarTypeArrayOfFiling
	 */
	public function getFilings()
	{
		return $this->Filings;
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