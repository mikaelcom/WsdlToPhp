<?php
/**
 * Class file for XiFundDataTypeReportFinancials
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeReportFinancials
 * @date 08/07/2012
 */
class XiFundDataTypeReportFinancials extends XiFundDataTypeCommon
{
	/**
	 * The ReportInformation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeReportInformation
	 */
	public $ReportInformation;
	/**
	 * The Financials
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFinancials
	 */
	public $Financials;
	/**
	 * Constructor
	 * @param XiFundDataTypeReportInformation ReportInformation
	 * @param XiFundDataTypeFinancials Financials
	 * @return XiFundDataTypeReportFinancials
	 */
	public function __construct($_ReportInformation = null,$_Financials = null)
	{
		XiFundDataWsdlClass::__construct(array('ReportInformation'=>$_ReportInformation,'Financials'=>$_Financials));
	}
	/**
	 * Set ReportInformation
	 * @param ReportInformation ReportInformation
	 * @return ReportInformation
	 */
	public function setReportInformation($_ReportInformation)
	{
		return ($this->ReportInformation = $_ReportInformation);
	}
	/**
	 * Get ReportInformation
	 * @return XiFundDataTypeReportInformation
	 */
	public function getReportInformation()
	{
		return $this->ReportInformation;
	}
	/**
	 * Set Financials
	 * @param Financials Financials
	 * @return Financials
	 */
	public function setFinancials($_Financials)
	{
		return ($this->Financials = $_Financials);
	}
	/**
	 * Get Financials
	 * @return XiFundDataTypeFinancials
	 */
	public function getFinancials()
	{
		return $this->Financials;
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