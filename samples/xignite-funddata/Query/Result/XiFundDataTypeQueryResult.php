<?php
/**
 * Class file for XiFundDataTypeQueryResult
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeQueryResult
 * @date 08/07/2012
 */
class XiFundDataTypeQueryResult extends XiFundDataTypeCommon
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
	 * The FamilyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FamilyName;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFundReportTypes
	 */
	public $Type;
	/**
	 * The ReportDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReportDate;
	/**
	 * Constructor
	 * @param string CIK
	 * @param string Symbol
	 * @param string Name
	 * @param string FamilyName
	 * @param XiFundDataTypeFundReportTypes Type
	 * @param string ReportDate
	 * @return XiFundDataTypeQueryResult
	 */
	public function __construct($_CIK = null,$_Symbol = null,$_Name = null,$_FamilyName = null,$_Type,$_ReportDate = null)
	{
		XiFundDataWsdlClass::__construct(array('CIK'=>$_CIK,'Symbol'=>$_Symbol,'Name'=>$_Name,'FamilyName'=>$_FamilyName,'Type'=>$_Type,'ReportDate'=>$_ReportDate));
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
	 * Set FamilyName
	 * @param string FamilyName
	 * @return string
	 */
	public function setFamilyName($_FamilyName)
	{
		return ($this->FamilyName = $_FamilyName);
	}
	/**
	 * Get FamilyName
	 * @return string
	 */
	public function getFamilyName()
	{
		return $this->FamilyName;
	}
	/**
	 * Set Type
	 * @param FundReportTypes Type
	 * @return FundReportTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiFundDataTypeFundReportTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiFundDataTypeFundReportTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set ReportDate
	 * @param string ReportDate
	 * @return string
	 */
	public function setReportDate($_ReportDate)
	{
		return ($this->ReportDate = $_ReportDate);
	}
	/**
	 * Get ReportDate
	 * @return string
	 */
	public function getReportDate()
	{
		return $this->ReportDate;
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