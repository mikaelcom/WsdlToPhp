<?php
/**
 * Class file for XWebSurveyServiceAdd
 * @date 09/07/2012
 */
/**
 * Class XWebSurveyServiceAdd
 * @date 09/07/2012
 */
class XWebSurveyServiceAdd extends XWebSurveyWsdlClass
{
	/**
	 * Method to call AddSurvey
	 * @uses XWebSurveyWsdlClass::getSoapClient()
	 * @uses XWebSurveyWsdlClass::setResult()
	 * @uses XWebSurveyWsdlClass::getResult()
	 * @uses XWebSurveyWsdlClass::saveLastError()
	 * @uses XWebSurveyTypeAddSurveyRequest::getSurvey()
	 * @param XWebSurveyTypeAddSurveyRequest AddSurveyRequest
	 * @return XWebSurveyTypeUNKNOWN
	 */
	public function AddSurvey(XWebSurveyTypeAddSurveyRequest $_XWebSurveyTypeAddSurveyRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddSurvey(array('Survey'=>$_XWebSurveyTypeAddSurveyRequest->getSurvey())));
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