<?php
/**
 * Class file for XWebSurveyServiceUpdate
 * @date 09/07/2012
 */
/**
 * Class XWebSurveyServiceUpdate
 * @date 09/07/2012
 */
class XWebSurveyServiceUpdate extends XWebSurveyWsdlClass
{
	/**
	 * Method to call UpdateSurvey
	 * @uses XWebSurveyWsdlClass::getSoapClient()
	 * @uses XWebSurveyWsdlClass::setResult()
	 * @uses XWebSurveyWsdlClass::getResult()
	 * @uses XWebSurveyWsdlClass::saveLastError()
	 * @uses XWebSurveyTypeUpdateSurveyRequest::getSurvey()
	 * @param XWebSurveyTypeUpdateSurveyRequest UpdateSurveyRequest
	 * @return XWebSurveyTypeUNKNOWN
	 */
	public function UpdateSurvey(XWebSurveyTypeUpdateSurveyRequest $_XWebSurveyTypeUpdateSurveyRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateSurvey(array('Survey'=>$_XWebSurveyTypeUpdateSurveyRequest->getSurvey())));
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
	 * @return XWebSurveyTypeUNKNOWN
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