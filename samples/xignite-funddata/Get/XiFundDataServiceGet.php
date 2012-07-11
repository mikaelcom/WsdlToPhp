<?php
/**
 * Class file for XiFundDataServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiFundDataServiceGet
 * @date 08/07/2012
 */
class XiFundDataServiceGet extends XiFundDataWsdlClass
{
	/**
	 * Method to call GetFundPerformance
	 * Meta informations :
	 * 	- documentation : Returns trailing performance information for a fund.
	 * @uses XiFundDataWsdlClass::getSoapClient()
	 * @uses XiFundDataWsdlClass::setResult()
	 * @uses XiFundDataWsdlClass::getResult()
	 * @uses XiFundDataWsdlClass::saveLastError()
	 * @uses XiFundDataTypeGetFundPerformance::getIdentifier()
	 * @uses XiFundDataTypeGetFundPerformance::getIdentifierType()
	 * @param XiFundDataTypeGetFundPerformance GetFundPerformance
	 * @return XiFundDataTypeGetFundPerformanceResponse
	 */
	public function GetFundPerformance(XiFundDataTypeGetFundPerformance $_XiFundDataTypeGetFundPerformance)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundPerformance(array('Identifier'=>$_XiFundDataTypeGetFundPerformance->getIdentifier(),'IdentifierType'=>$_XiFundDataTypeGetFundPerformance->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFundsPerformance
	 * Meta informations :
	 * 	- documentation : Returns trailing performance information for multiple funds.
	 * @uses XiFundDataWsdlClass::getSoapClient()
	 * @uses XiFundDataWsdlClass::setResult()
	 * @uses XiFundDataWsdlClass::getResult()
	 * @uses XiFundDataWsdlClass::saveLastError()
	 * @uses XiFundDataTypeGetFundsPerformance::getIdentifiers()
	 * @uses XiFundDataTypeGetFundsPerformance::getIdentifierType()
	 * @param XiFundDataTypeGetFundsPerformance GetFundsPerformance
	 * @return XiFundDataTypeGetFundsPerformanceResponse
	 */
	public function GetFundsPerformance(XiFundDataTypeGetFundsPerformance $_XiFundDataTypeGetFundsPerformance)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundsPerformance(array('Identifiers'=>$_XiFundDataTypeGetFundsPerformance->getIdentifiers(),'IdentifierType'=>$_XiFundDataTypeGetFundsPerformance->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFundReport
	 * Meta informations :
	 * 	- documentation : Returns a fund report.
	 * @uses XiFundDataWsdlClass::getSoapClient()
	 * @uses XiFundDataWsdlClass::setResult()
	 * @uses XiFundDataWsdlClass::getResult()
	 * @uses XiFundDataWsdlClass::saveLastError()
	 * @uses XiFundDataTypeGetFundReport::getCIK()
	 * @uses XiFundDataTypeGetFundReport::getYear()
	 * @uses XiFundDataTypeGetFundReport::getReportType()
	 * @param XiFundDataTypeGetFundReport GetFundReport
	 * @return XiFundDataTypeGetFundReportResponse
	 */
	public function GetFundReport(XiFundDataTypeGetFundReport $_XiFundDataTypeGetFundReport)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundReport(array('CIK'=>$_XiFundDataTypeGetFundReport->getCIK(),'Year'=>$_XiFundDataTypeGetFundReport->getYear(),'ReportType'=>$_XiFundDataTypeGetFundReport->getReportType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFundRegistrant
	 * Meta informations :
	 * 	- documentation : Returns registrant data for a fund.
	 * @uses XiFundDataWsdlClass::getSoapClient()
	 * @uses XiFundDataWsdlClass::setResult()
	 * @uses XiFundDataWsdlClass::getResult()
	 * @uses XiFundDataWsdlClass::saveLastError()
	 * @uses XiFundDataTypeGetFundRegistrant::getCIK()
	 * @param XiFundDataTypeGetFundRegistrant GetFundRegistrant
	 * @return XiFundDataTypeGetFundRegistrantResponse
	 */
	public function GetFundRegistrant(XiFundDataTypeGetFundRegistrant $_XiFundDataTypeGetFundRegistrant)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundRegistrant(array('CIK'=>$_XiFundDataTypeGetFundRegistrant->getCIK())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFundClassification
	 * Meta informations :
	 * 	- documentation : Returns classfication data for a fund.
	 * @uses XiFundDataWsdlClass::getSoapClient()
	 * @uses XiFundDataWsdlClass::setResult()
	 * @uses XiFundDataWsdlClass::getResult()
	 * @uses XiFundDataWsdlClass::saveLastError()
	 * @uses XiFundDataTypeGetFundClassification::getCIK()
	 * @param XiFundDataTypeGetFundClassification GetFundClassification
	 * @return XiFundDataTypeGetFundClassificationResponse
	 */
	public function GetFundClassification(XiFundDataTypeGetFundClassification $_XiFundDataTypeGetFundClassification)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundClassification(array('CIK'=>$_XiFundDataTypeGetFundClassification->getCIK())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFundLoad
	 * Meta informations :
	 * 	- documentation : Returns load data for a fund.
	 * @uses XiFundDataWsdlClass::getSoapClient()
	 * @uses XiFundDataWsdlClass::setResult()
	 * @uses XiFundDataWsdlClass::getResult()
	 * @uses XiFundDataWsdlClass::saveLastError()
	 * @uses XiFundDataTypeGetFundLoad::getCIK()
	 * @param XiFundDataTypeGetFundLoad GetFundLoad
	 * @return XiFundDataTypeGetFundLoadResponse
	 */
	public function GetFundLoad(XiFundDataTypeGetFundLoad $_XiFundDataTypeGetFundLoad)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundLoad(array('CIK'=>$_XiFundDataTypeGetFundLoad->getCIK())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFundFinancials
	 * Meta informations :
	 * 	- documentation : Returns financials for a fund.
	 * @uses XiFundDataWsdlClass::getSoapClient()
	 * @uses XiFundDataWsdlClass::setResult()
	 * @uses XiFundDataWsdlClass::getResult()
	 * @uses XiFundDataWsdlClass::saveLastError()
	 * @uses XiFundDataTypeGetFundFinancials::getCIK()
	 * @uses XiFundDataTypeGetFundFinancials::getYear()
	 * @param XiFundDataTypeGetFundFinancials GetFundFinancials
	 * @return XiFundDataTypeGetFundFinancialsResponse
	 */
	public function GetFundFinancials(XiFundDataTypeGetFundFinancials $_XiFundDataTypeGetFundFinancials)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundFinancials(array('CIK'=>$_XiFundDataTypeGetFundFinancials->getCIK(),'Year'=>$_XiFundDataTypeGetFundFinancials->getYear())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAllFundFinancials
	 * Meta informations :
	 * 	- documentation : Returns multiple financials for a fund.
	 * @uses XiFundDataWsdlClass::getSoapClient()
	 * @uses XiFundDataWsdlClass::setResult()
	 * @uses XiFundDataWsdlClass::getResult()
	 * @uses XiFundDataWsdlClass::saveLastError()
	 * @uses XiFundDataTypeGetAllFundFinancials::getCIK()
	 * @uses XiFundDataTypeGetAllFundFinancials::getStartYear()
	 * @uses XiFundDataTypeGetAllFundFinancials::getEndYear()
	 * @param XiFundDataTypeGetAllFundFinancials GetAllFundFinancials
	 * @return XiFundDataTypeGetAllFundFinancialsResponse
	 */
	public function GetAllFundFinancials(XiFundDataTypeGetAllFundFinancials $_XiFundDataTypeGetAllFundFinancials)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllFundFinancials(array('CIK'=>$_XiFundDataTypeGetAllFundFinancials->getCIK(),'StartYear'=>$_XiFundDataTypeGetAllFundFinancials->getStartYear(),'EndYear'=>$_XiFundDataTypeGetAllFundFinancials->getEndYear())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFundExpenseRatio
	 * Meta informations :
	 * 	- documentation : Returns expense information for a fund.
	 * @uses XiFundDataWsdlClass::getSoapClient()
	 * @uses XiFundDataWsdlClass::setResult()
	 * @uses XiFundDataWsdlClass::getResult()
	 * @uses XiFundDataWsdlClass::saveLastError()
	 * @uses XiFundDataTypeGetFundExpenseRatio::getIdentifier()
	 * @uses XiFundDataTypeGetFundExpenseRatio::getIdentifierType()
	 * @param XiFundDataTypeGetFundExpenseRatio GetFundExpenseRatio
	 * @return XiFundDataTypeGetFundExpenseRatioResponse
	 */
	public function GetFundExpenseRatio(XiFundDataTypeGetFundExpenseRatio $_XiFundDataTypeGetFundExpenseRatio)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundExpenseRatio(array('Identifier'=>$_XiFundDataTypeGetFundExpenseRatio->getIdentifier(),'IdentifierType'=>$_XiFundDataTypeGetFundExpenseRatio->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFundTurnover
	 * Meta informations :
	 * 	- documentation : Returns turnover information for a fund.
	 * @uses XiFundDataWsdlClass::getSoapClient()
	 * @uses XiFundDataWsdlClass::setResult()
	 * @uses XiFundDataWsdlClass::getResult()
	 * @uses XiFundDataWsdlClass::saveLastError()
	 * @uses XiFundDataTypeGetFundTurnover::getIdentifier()
	 * @uses XiFundDataTypeGetFundTurnover::getIdentifierType()
	 * @param XiFundDataTypeGetFundTurnover GetFundTurnover
	 * @return XiFundDataTypeGetFundTurnoverResponse
	 */
	public function GetFundTurnover(XiFundDataTypeGetFundTurnover $_XiFundDataTypeGetFundTurnover)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundTurnover(array('Identifier'=>$_XiFundDataTypeGetFundTurnover->getIdentifier(),'IdentifierType'=>$_XiFundDataTypeGetFundTurnover->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFundLoads
	 * Meta informations :
	 * 	- documentation : Returns expense information for a fund.
	 * @uses XiFundDataWsdlClass::getSoapClient()
	 * @uses XiFundDataWsdlClass::setResult()
	 * @uses XiFundDataWsdlClass::getResult()
	 * @uses XiFundDataWsdlClass::saveLastError()
	 * @uses XiFundDataTypeGetFundLoads::getIdentifier()
	 * @uses XiFundDataTypeGetFundLoads::getIdentifierType()
	 * @param XiFundDataTypeGetFundLoads GetFundLoads
	 * @return XiFundDataTypeGetFundLoadsResponse
	 */
	public function GetFundLoads(XiFundDataTypeGetFundLoads $_XiFundDataTypeGetFundLoads)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundLoads(array('Identifier'=>$_XiFundDataTypeGetFundLoads->getIdentifier(),'IdentifierType'=>$_XiFundDataTypeGetFundLoads->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFundFamily
	 * Meta informations :
	 * 	- documentation : Returns family information for a fund.
	 * @uses XiFundDataWsdlClass::getSoapClient()
	 * @uses XiFundDataWsdlClass::setResult()
	 * @uses XiFundDataWsdlClass::getResult()
	 * @uses XiFundDataWsdlClass::saveLastError()
	 * @uses XiFundDataTypeGetFundFamily::getIdentifier()
	 * @uses XiFundDataTypeGetFundFamily::getIdentifierType()
	 * @param XiFundDataTypeGetFundFamily GetFundFamily
	 * @return XiFundDataTypeGetFundFamilyResponse
	 */
	public function GetFundFamily(XiFundDataTypeGetFundFamily $_XiFundDataTypeGetFundFamily)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundFamily(array('Identifier'=>$_XiFundDataTypeGetFundFamily->getIdentifier(),'IdentifierType'=>$_XiFundDataTypeGetFundFamily->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFundInceptionDate
	 * Meta informations :
	 * 	- documentation : Returns the inception date for a fund.
	 * @uses XiFundDataWsdlClass::getSoapClient()
	 * @uses XiFundDataWsdlClass::setResult()
	 * @uses XiFundDataWsdlClass::getResult()
	 * @uses XiFundDataWsdlClass::saveLastError()
	 * @uses XiFundDataTypeGetFundInceptionDate::getIdentifier()
	 * @uses XiFundDataTypeGetFundInceptionDate::getIdentifierType()
	 * @param XiFundDataTypeGetFundInceptionDate GetFundInceptionDate
	 * @return XiFundDataTypeGetFundInceptionDateResponse
	 */
	public function GetFundInceptionDate(XiFundDataTypeGetFundInceptionDate $_XiFundDataTypeGetFundInceptionDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundInceptionDate(array('Identifier'=>$_XiFundDataTypeGetFundInceptionDate->getIdentifier(),'IdentifierType'=>$_XiFundDataTypeGetFundInceptionDate->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFundCategory
	 * Meta informations :
	 * 	- documentation : Returns category information for a fund.
	 * @uses XiFundDataWsdlClass::getSoapClient()
	 * @uses XiFundDataWsdlClass::setResult()
	 * @uses XiFundDataWsdlClass::getResult()
	 * @uses XiFundDataWsdlClass::saveLastError()
	 * @uses XiFundDataTypeGetFundCategory::getIdentifier()
	 * @uses XiFundDataTypeGetFundCategory::getIdentifierType()
	 * @param XiFundDataTypeGetFundCategory GetFundCategory
	 * @return XiFundDataTypeGetFundCategoryResponse
	 */
	public function GetFundCategory(XiFundDataTypeGetFundCategory $_XiFundDataTypeGetFundCategory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFundCategory(array('Identifier'=>$_XiFundDataTypeGetFundCategory->getIdentifier(),'IdentifierType'=>$_XiFundDataTypeGetFundCategory->getIdentifierType())));
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
	 * @return XiFundDataTypeGetFundCategoryResponse
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