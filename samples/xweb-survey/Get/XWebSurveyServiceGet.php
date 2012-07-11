<?php
/**
 * Class file for XWebSurveyServiceGet
 * @date 09/07/2012
 */
/**
 * Class XWebSurveyServiceGet
 * @date 09/07/2012
 */
class XWebSurveyServiceGet extends XWebSurveyWsdlClass
{
	/**
	 * Method to call GetNewSurveyID
	 * @uses XWebSurveyWsdlClass::getSoapClient()
	 * @uses XWebSurveyWsdlClass::setResult()
	 * @uses XWebSurveyWsdlClass::getResult()
	 * @uses XWebSurveyWsdlClass::saveLastError()
	 * @param UNKNOWN UNKNOWN
	 * @return XWebSurveyTypeGetNewSurveyIDResponse
	 */
	public function GetNewSurveyID(XWebSurveyTypeUNKNOWN $_XWebSurveyTypeUNKNOWN)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNewSurveyID(array()));
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
	 * @return XWebSurveyTypeGetNewSurveyIDResponse
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