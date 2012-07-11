<?php
/**
 * Class file for XWebSurveyServiceVote
 * @date 09/07/2012
 */
/**
 * Class XWebSurveyServiceVote
 * @date 09/07/2012
 */
class XWebSurveyServiceVote extends XWebSurveyWsdlClass
{
	/**
	 * Method to call Vote
	 * @uses XWebSurveyWsdlClass::getSoapClient()
	 * @uses XWebSurveyWsdlClass::setResult()
	 * @uses XWebSurveyWsdlClass::getResult()
	 * @uses XWebSurveyWsdlClass::saveLastError()
	 * @uses XWebSurveyTypeVoteRequest::getSurvey_ID()
	 * @uses XWebSurveyTypeVoteRequest::getOption_ID()
	 * @param XWebSurveyTypeVoteRequest VoteRequest
	 * @return XWebSurveyTypeUNKNOWN
	 */
	public function Vote(XWebSurveyTypeVoteRequest $_XWebSurveyTypeVoteRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Vote(array('Survey_ID'=>$_XWebSurveyTypeVoteRequest->getSurvey_ID(),'Option_ID'=>$_XWebSurveyTypeVoteRequest->getOption_ID())));
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