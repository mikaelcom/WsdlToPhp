<?php
/**
 * Class file for XiEdgarServiceQuery
 * @date 08/07/2012
 */
/**
 * Class XiEdgarServiceQuery
 * @date 08/07/2012
 */
class XiEdgarServiceQuery extends XiEdgarWsdlClass
{
	/**
	 * Method to call QueryFilings
	 * Meta informations :
	 * 	- documentation : Provide fast query of filing information to all filing data for a company.
	 * @uses XiEdgarWsdlClass::getSoapClient()
	 * @uses XiEdgarWsdlClass::setResult()
	 * @uses XiEdgarWsdlClass::getResult()
	 * @uses XiEdgarWsdlClass::saveLastError()
	 * @uses XiEdgarTypeQueryFilings::getIdentifier()
	 * @uses XiEdgarTypeQueryFilings::getIdentifierType()
	 * @uses XiEdgarTypeQueryFilings::getForm()
	 * @uses XiEdgarTypeQueryFilings::getOwnershipForms()
	 * @uses XiEdgarTypeQueryFilings::getFromDate()
	 * @uses XiEdgarTypeQueryFilings::getToDate()
	 * @param XiEdgarTypeQueryFilings QueryFilings
	 * @return XiEdgarTypeQueryFilingsResponse
	 */
	public function QueryFilings(XiEdgarTypeQueryFilings $_XiEdgarTypeQueryFilings)
	{
		try
		{
			$this->setResult(self::getSoapClient()->QueryFilings(array('Identifier'=>$_XiEdgarTypeQueryFilings->getIdentifier(),'IdentifierType'=>$_XiEdgarTypeQueryFilings->getIdentifierType(),'Form'=>$_XiEdgarTypeQueryFilings->getForm(),'OwnershipForms'=>$_XiEdgarTypeQueryFilings->getOwnershipForms(),'FromDate'=>$_XiEdgarTypeQueryFilings->getFromDate(),'ToDate'=>$_XiEdgarTypeQueryFilings->getToDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call QueryFilingsByReportingPeriod
	 * Meta informations :
	 * 	- documentation : Provide fast query of filing information to all filing data for a company.
	 * @uses XiEdgarWsdlClass::getSoapClient()
	 * @uses XiEdgarWsdlClass::setResult()
	 * @uses XiEdgarWsdlClass::getResult()
	 * @uses XiEdgarWsdlClass::saveLastError()
	 * @uses XiEdgarTypeQueryFilingsByReportingPeriod::getIdentifier()
	 * @uses XiEdgarTypeQueryFilingsByReportingPeriod::getIdentifierType()
	 * @uses XiEdgarTypeQueryFilingsByReportingPeriod::getForm()
	 * @uses XiEdgarTypeQueryFilingsByReportingPeriod::getOwnershipForms()
	 * @uses XiEdgarTypeQueryFilingsByReportingPeriod::getFromDate()
	 * @uses XiEdgarTypeQueryFilingsByReportingPeriod::getToDate()
	 * @param XiEdgarTypeQueryFilingsByReportingPeriod QueryFilingsByReportingPeriod
	 * @return XiEdgarTypeQueryFilingsByReportingPeriodResponse
	 */
	public function QueryFilingsByReportingPeriod(XiEdgarTypeQueryFilingsByReportingPeriod $_XiEdgarTypeQueryFilingsByReportingPeriod)
	{
		try
		{
			$this->setResult(self::getSoapClient()->QueryFilingsByReportingPeriod(array('Identifier'=>$_XiEdgarTypeQueryFilingsByReportingPeriod->getIdentifier(),'IdentifierType'=>$_XiEdgarTypeQueryFilingsByReportingPeriod->getIdentifierType(),'Form'=>$_XiEdgarTypeQueryFilingsByReportingPeriod->getForm(),'OwnershipForms'=>$_XiEdgarTypeQueryFilingsByReportingPeriod->getOwnershipForms(),'FromDate'=>$_XiEdgarTypeQueryFilingsByReportingPeriod->getFromDate(),'ToDate'=>$_XiEdgarTypeQueryFilingsByReportingPeriod->getToDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call QueryMasterDocuments
	 * Meta informations :
	 * 	- documentation : Provide fast query of filing information to all filing data for a company.
	 * @uses XiEdgarWsdlClass::getSoapClient()
	 * @uses XiEdgarWsdlClass::setResult()
	 * @uses XiEdgarWsdlClass::getResult()
	 * @uses XiEdgarWsdlClass::saveLastError()
	 * @uses XiEdgarTypeQueryMasterDocuments::getIdentifier()
	 * @uses XiEdgarTypeQueryMasterDocuments::getIdentifierType()
	 * @uses XiEdgarTypeQueryMasterDocuments::getForm()
	 * @uses XiEdgarTypeQueryMasterDocuments::getOwnershipForms()
	 * @uses XiEdgarTypeQueryMasterDocuments::getFromDate()
	 * @uses XiEdgarTypeQueryMasterDocuments::getToDate()
	 * @param XiEdgarTypeQueryMasterDocuments QueryMasterDocuments
	 * @return XiEdgarTypeQueryMasterDocumentsResponse
	 */
	public function QueryMasterDocuments(XiEdgarTypeQueryMasterDocuments $_XiEdgarTypeQueryMasterDocuments)
	{
		try
		{
			$this->setResult(self::getSoapClient()->QueryMasterDocuments(array('Identifier'=>$_XiEdgarTypeQueryMasterDocuments->getIdentifier(),'IdentifierType'=>$_XiEdgarTypeQueryMasterDocuments->getIdentifierType(),'Form'=>$_XiEdgarTypeQueryMasterDocuments->getForm(),'OwnershipForms'=>$_XiEdgarTypeQueryMasterDocuments->getOwnershipForms(),'FromDate'=>$_XiEdgarTypeQueryMasterDocuments->getFromDate(),'ToDate'=>$_XiEdgarTypeQueryMasterDocuments->getToDate())));
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
	 * @return XiEdgarTypeQueryMasterDocumentsResponse
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