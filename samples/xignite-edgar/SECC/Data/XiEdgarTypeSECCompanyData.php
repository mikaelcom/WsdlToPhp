<?php
/**
 * Class file for XiEdgarTypeSECCompanyData
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeSECCompanyData
 * @date 08/07/2012
 */
class XiEdgarTypeSECCompanyData extends XiEdgarWsdlClass
{
	/**
	 * The CompanyConformedName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CompanyConformedName;
	/**
	 * The CentralIndexKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CentralIndexKey;
	/**
	 * The SICCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeSICCode
	 */
	public $SICCode;
	/**
	 * The IRSNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IRSNumber;
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
	 * Constructor
	 * @param string CompanyConformedName
	 * @param string CentralIndexKey
	 * @param XiEdgarTypeSICCode SICCode
	 * @param string IRSNumber
	 * @param string StateOfIncorporation
	 * @param string FiscalYearEnd
	 * @return XiEdgarTypeSECCompanyData
	 */
	public function __construct($_CompanyConformedName = null,$_CentralIndexKey = null,$_SICCode = null,$_IRSNumber = null,$_StateOfIncorporation = null,$_FiscalYearEnd = null)
	{
		parent::__construct(array('CompanyConformedName'=>$_CompanyConformedName,'CentralIndexKey'=>$_CentralIndexKey,'SICCode'=>$_SICCode,'IRSNumber'=>$_IRSNumber,'StateOfIncorporation'=>$_StateOfIncorporation,'FiscalYearEnd'=>$_FiscalYearEnd));
	}
	/**
	 * Set CompanyConformedName
	 * @param string CompanyConformedName
	 * @return string
	 */
	public function setCompanyConformedName($_CompanyConformedName)
	{
		return ($this->CompanyConformedName = $_CompanyConformedName);
	}
	/**
	 * Get CompanyConformedName
	 * @return string
	 */
	public function getCompanyConformedName()
	{
		return $this->CompanyConformedName;
	}
	/**
	 * Set CentralIndexKey
	 * @param string CentralIndexKey
	 * @return string
	 */
	public function setCentralIndexKey($_CentralIndexKey)
	{
		return ($this->CentralIndexKey = $_CentralIndexKey);
	}
	/**
	 * Get CentralIndexKey
	 * @return string
	 */
	public function getCentralIndexKey()
	{
		return $this->CentralIndexKey;
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
	 * Set IRSNumber
	 * @param string IRSNumber
	 * @return string
	 */
	public function setIRSNumber($_IRSNumber)
	{
		return ($this->IRSNumber = $_IRSNumber);
	}
	/**
	 * Get IRSNumber
	 * @return string
	 */
	public function getIRSNumber()
	{
		return $this->IRSNumber;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>