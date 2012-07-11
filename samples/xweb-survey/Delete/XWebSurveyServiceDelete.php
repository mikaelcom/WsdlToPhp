<?php
/**
 * Class file for XWebSurveyServiceDelete
 * @date 09/07/2012
 */
/**
 * Class XWebSurveyServiceDelete
 * @date 09/07/2012
 */
class XWebSurveyServiceDelete extends XWebSurveyWsdlClass
{
	/**
	 * Method to call DeleteSurvey
	 * @uses XWebSurveyWsdlClass::getSoapClient()
	 * @uses XWebSurveyWsdlClass::setResult()
	 * @uses XWebSurveyWsdlClass::getResult()
	 * @uses XWebSurveyWsdlClass::saveLastError()
	 * @uses XWebSurveyTypeDeleteSurveyRequest::getSurvey_ID()
	 * @param XWebSurveyTypeDeleteSurveyRequest DeleteSurveyRequest
	 * @return XWebSurveyTypeUNKNOWN
	 */
	public function DeleteSurvey(XWebSurveyTypeDeleteSurveyRequest $_XWebSurveyTypeDeleteSurveyRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteSurvey(array('Survey_ID'=>$_XWebSurveyTypeDeleteSurveyRequest->getSurvey_ID())));
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