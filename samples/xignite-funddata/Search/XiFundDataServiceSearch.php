<?php
/**
 * Class file for XiFundDataServiceSearch
 * @date 08/07/2012
 */
/**
 * Class XiFundDataServiceSearch
 * @date 08/07/2012
 */
class XiFundDataServiceSearch extends XiFundDataWsdlClass
{
	/**
	 * Method to call SearchFundReports
	 * Meta informations :
	 * 	- documentation : Returns a fund report.
	 * @uses XiFundDataWsdlClass::getSoapClient()
	 * @uses XiFundDataWsdlClass::setResult()
	 * @uses XiFundDataWsdlClass::getResult()
	 * @uses XiFundDataWsdlClass::saveLastError()
	 * @uses XiFundDataTypeSearchFundReports::getCIK()
	 * @uses XiFundDataTypeSearchFundReports::getSymbol()
	 * @uses XiFundDataTypeSearchFundReports::getName()
	 * @uses XiFundDataTypeSearchFundReports::getFamilyName()
	 * @uses XiFundDataTypeSearchFundReports::getStartDate()
	 * @uses XiFundDataTypeSearchFundReports::getEndDate()
	 * @uses XiFundDataTypeSearchFundReports::getReportType()
	 * @param XiFundDataTypeSearchFundReports SearchFundReports
	 * @return XiFundDataTypeSearchFundReportsResponse
	 */
	public function SearchFundReports(XiFundDataTypeSearchFundReports $_XiFundDataTypeSearchFundReports)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchFundReports(array('CIK'=>$_XiFundDataTypeSearchFundReports->getCIK(),'Symbol'=>$_XiFundDataTypeSearchFundReports->getSymbol(),'Name'=>$_XiFundDataTypeSearchFundReports->getName(),'FamilyName'=>$_XiFundDataTypeSearchFundReports->getFamilyName(),'StartDate'=>$_XiFundDataTypeSearchFundReports->getStartDate(),'EndDate'=>$_XiFundDataTypeSearchFundReports->getEndDate(),'ReportType'=>$_XiFundDataTypeSearchFundReports->getReportType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return XiFundDataTypeSearchFundReportsResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>