<?php
/**
 * Class file for XiFundDataTypeFundFinancials
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeFundFinancials
 * @date 08/07/2012
 */
class XiFundDataTypeFundFinancials extends XiFundDataTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeSecurity
	 */
	public $Security;
	/**
	 * The ReportFinancials
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeArrayOfReportFinancials
	 */
	public $ReportFinancials;
	/**
	 * Constructor
	 * @param XiFundDataTypeSecurity Security
	 * @param XiFundDataTypeArrayOfReportFinancials ReportFinancials
	 * @return XiFundDataTypeFundFinancials
	 */
	public function __construct($_Security = null,$_ReportFinancials = null)
	{
		XiFundDataWsdlClass::__construct(array('Security'=>$_Security,'ReportFinancials'=>new XiFundDataTypeArrayOfReportFinancials($_ReportFinancials)));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiFundDataTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set ReportFinancials
	 * @param ArrayOfReportFinancials ReportFinancials
	 * @return ArrayOfReportFinancials
	 */
	public function setReportFinancials($_ReportFinancials)
	{
		return ($this->ReportFinancials = $_ReportFinancials);
	}
	/**
	 * Get ReportFinancials
	 * @return XiFundDataTypeArrayOfReportFinancials
	 */
	public function getReportFinancials()
	{
		return $this->ReportFinancials;
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