<?php
/**
 * Class file for ATReportingServiceQuery
 * @date 03/07/2012
 */
/**
 * Class ATReportingServiceQuery
 * @date 03/07/2012
 */
class ATReportingServiceQuery extends ATReportingWsdlClass
{
	/**
	 * Method to call queryReport
	 * Meta informations :
	 * 	- documentation : Launch a report query. (Asynchrone download)
	 * @uses ATReportingWsdlClass::getSoapClient()
	 * @uses ATReportingWsdlClass::setResult()
	 * @uses ATReportingWsdlClass::getResult()
	 * @uses ATReportingWsdlClass::saveLastError()
	 * @uses ATReportingTypeQueryReport::getStartDate()
	 * @uses ATReportingTypeQueryReport::getEndDate()
	 * @uses ATReportingTypeQueryReport::getQuery()
	 * @uses ATReportingTypeQueryReport::getParam()
	 * @uses ATReportingTypeQueryReport::getTypereport()
	 * @param ATReportingTypeQueryReport QueryReport
	 * @return ATReportingTypeQueryReportResponse
	 */
	public function queryReport(ATReportingTypeQueryReport $_ATReportingTypeQueryReport)
	{
		try
		{
			$this->setResult(self::getSoapClient()->queryReport(array('startDate'=>$_ATReportingTypeQueryReport->getStartDate(),'endDate'=>$_ATReportingTypeQueryReport->getEndDate(),'query'=>$_ATReportingTypeQueryReport->getQuery(),'param'=>$_ATReportingTypeQueryReport->getParam(),'typereport'=>$_ATReportingTypeQueryReport->getTypereport())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call queryInstantStreamUTF8
	 * Meta informations :
	 * 	- documentation : Launch an instant report query. (Synchrone download)
	 * @uses ATReportingWsdlClass::getSoapClient()
	 * @uses ATReportingWsdlClass::setResult()
	 * @uses ATReportingWsdlClass::getResult()
	 * @uses ATReportingWsdlClass::saveLastError()
	 * @uses ATReportingTypeQueryInstantStreamUTF8::getStartDate()
	 * @uses ATReportingTypeQueryInstantStreamUTF8::getEndDate()
	 * @uses ATReportingTypeQueryInstantStreamUTF8::getQuery()
	 * @uses ATReportingTypeQueryInstantStreamUTF8::getParam()
	 * @param ATReportingTypeQueryInstantStreamUTF8 QueryInstantStreamUTF8
	 * @return ATReportingTypeQueryInstantStreamUTF8Response
	 */
	public function queryInstantStreamUTF8(ATReportingTypeQueryInstantStreamUTF8 $_ATReportingTypeQueryInstantStreamUTF8)
	{
		try
		{
			$this->setResult(self::getSoapClient()->queryInstantStreamUTF8(array('startDate'=>$_ATReportingTypeQueryInstantStreamUTF8->getStartDate(),'endDate'=>$_ATReportingTypeQueryInstantStreamUTF8->getEndDate(),'query'=>$_ATReportingTypeQueryInstantStreamUTF8->getQuery(),'param'=>$_ATReportingTypeQueryInstantStreamUTF8->getParam())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call queryInstantStream
	 * Meta informations :
	 * 	- documentation : Launch an instant report query. (Synchrone download)
	 * @uses ATReportingWsdlClass::getSoapClient()
	 * @uses ATReportingWsdlClass::setResult()
	 * @uses ATReportingWsdlClass::getResult()
	 * @uses ATReportingWsdlClass::saveLastError()
	 * @uses ATReportingTypeQueryInstantStream::getStartDate()
	 * @uses ATReportingTypeQueryInstantStream::getEndDate()
	 * @uses ATReportingTypeQueryInstantStream::getQuery()
	 * @uses ATReportingTypeQueryInstantStream::getParam()
	 * @param ATReportingTypeQueryInstantStream QueryInstantStream
	 * @return ATReportingTypeQueryInstantStreamResponse
	 */
	public function queryInstantStream(ATReportingTypeQueryInstantStream $_ATReportingTypeQueryInstantStream)
	{
		try
		{
			$this->setResult(self::getSoapClient()->queryInstantStream(array('startDate'=>$_ATReportingTypeQueryInstantStream->getStartDate(),'endDate'=>$_ATReportingTypeQueryInstantStream->getEndDate(),'query'=>$_ATReportingTypeQueryInstantStream->getQuery(),'param'=>$_ATReportingTypeQueryInstantStream->getParam())));
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
	 * @return ATReportingTypeQueryInstantStreamResponse
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