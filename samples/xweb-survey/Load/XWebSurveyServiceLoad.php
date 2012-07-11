<?php
/**
 * Class file for XWebSurveyServiceLoad
 * @date 09/07/2012
 */
/**
 * Class XWebSurveyServiceLoad
 * @date 09/07/2012
 */
class XWebSurveyServiceLoad extends XWebSurveyWsdlClass
{
	/**
	 * Method to call LoadSurvey
	 * @uses XWebSurveyWsdlClass::getSoapClient()
	 * @uses XWebSurveyWsdlClass::setResult()
	 * @uses XWebSurveyWsdlClass::getResult()
	 * @uses XWebSurveyWsdlClass::saveLastError()
	 * @uses XWebSurveyTypeLoadSurveyRequest::getSurvey_ID()
	 * @param XWebSurveyTypeLoadSurveyRequest LoadSurveyRequest
	 * @return XWebSurveyTypeLoadSurveyResponse
	 */
	public function LoadSurvey(XWebSurveyTypeLoadSurveyRequest $_XWebSurveyTypeLoadSurveyRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadSurvey(array('Survey_ID'=>$_XWebSurveyTypeLoadSurveyRequest->getSurvey_ID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadSurveys
	 * @uses XWebSurveyWsdlClass::getSoapClient()
	 * @uses XWebSurveyWsdlClass::setResult()
	 * @uses XWebSurveyWsdlClass::getResult()
	 * @uses XWebSurveyWsdlClass::saveLastError()
	 * @param UNKNOWN UNKNOWN
	 * @return XWebSurveyTypeLoadSurveysResponse
	 */
	public function LoadSurveys(XWebSurveyTypeUNKNOWN $_XWebSurveyTypeUNKNOWN)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadSurveys(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call LoadSurveysPaged
	 * @uses XWebSurveyWsdlClass::getSoapClient()
	 * @uses XWebSurveyWsdlClass::setResult()
	 * @uses XWebSurveyWsdlClass::getResult()
	 * @uses XWebSurveyWsdlClass::saveLastError()
	 * @uses XWebSurveyTypeLoadSurveysPagedRequest::getPage_Number()
	 * @uses XWebSurveyTypeLoadSurveysPagedRequest::getPage_Size()
	 * @param XWebSurveyTypeLoadSurveysPagedRequest LoadSurveysPagedRequest
	 * @return XWebSurveyTypeLoadSurveysPagedResponse
	 */
	public function LoadSurveysPaged(XWebSurveyTypeLoadSurveysPagedRequest $_XWebSurveyTypeLoadSurveysPagedRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LoadSurveysPaged(array('Page_Number'=>$_XWebSurveyTypeLoadSurveysPagedRequest->getPage_Number(),'Page_Size'=>$_XWebSurveyTypeLoadSurveysPagedRequest->getPage_Size())));
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
	 * @return XWebSurveyTypeLoadSurveysPagedResponse
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