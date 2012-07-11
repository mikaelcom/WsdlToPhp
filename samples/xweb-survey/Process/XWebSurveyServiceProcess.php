<?php
/**
 * Class file for XWebSurveyServiceProcess
 * @date 09/07/2012
 */
/**
 * Class XWebSurveyServiceProcess
 * @date 09/07/2012
 */
class XWebSurveyServiceProcess extends XWebSurveyWsdlClass
{
	/**
	 * Method to call ProcessSurvey
	 * @uses XWebSurveyWsdlClass::getSoapClient()
	 * @uses XWebSurveyWsdlClass::setResult()
	 * @uses XWebSurveyWsdlClass::getResult()
	 * @uses XWebSurveyWsdlClass::saveLastError()
	 * @uses XWebSurveyTypeProcessSurveyRequest::getSurvey()
	 * @param XWebSurveyTypeProcessSurveyRequest ProcessSurveyRequest
	 * @return XWebSurveyTypeUNKNOWN
	 */
	public function ProcessSurvey(XWebSurveyTypeProcessSurveyRequest $_XWebSurveyTypeProcessSurveyRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ProcessSurvey(array('Survey'=>$_XWebSurveyTypeProcessSurveyRequest->getSurvey())));
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