<?php
/**
 * Class file for XiFundDataTypeGetFundReport
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeGetFundReport
 * @date 08/07/2012
 */
class XiFundDataTypeGetFundReport extends XiFundDataWsdlClass
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
	 * The Year
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Year;
	/**
	 * The ReportType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFundReportTypes
	 */
	public $ReportType;
	/**
	 * Constructor
	 * @param string CIK
	 * @param int Year
	 * @param XiFundDataTypeFundReportTypes ReportType
	 * @return XiFundDataTypeGetFundReport
	 */
	public function __construct($_CIK = null,$_Year,$_ReportType)
	{
		parent::__construct(array('CIK'=>$_CIK,'Year'=>$_Year,'ReportType'=>$_ReportType));
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
	 * Set Year
	 * @param int Year
	 * @return int
	 */
	public function setYear($_Year)
	{
		return ($this->Year = $_Year);
	}
	/**
	 * Get Year
	 * @return int
	 */
	public function getYear()
	{
		return $this->Year;
	}
	/**
	 * Set ReportType
	 * @param FundReportTypes ReportType
	 * @return FundReportTypes
	 */
	public function setReportType($_ReportType)
	{
		return ($this->ReportType = XiFundDataTypeFundReportTypes::valueIsValid($_ReportType)?$_ReportType:null);
	}
	/**
	 * Get ReportType
	 * @return XiFundDataTypeFundReportTypes
	 */
	public function getReportType()
	{
		return $this->ReportType;
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