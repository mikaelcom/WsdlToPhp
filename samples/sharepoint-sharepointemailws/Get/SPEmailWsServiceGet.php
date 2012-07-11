<?php
/**
 * Class file for SPEmailWsServiceGet
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsServiceGet
 * @date 06/07/2012
 */
class SPEmailWsServiceGet extends SPEmailWsWsdlClass
{
	/**
	 * Method to call GetJobStatus
	 * @uses SPEmailWsWsdlClass::getSoapClient()
	 * @uses SPEmailWsWsdlClass::setResult()
	 * @uses SPEmailWsWsdlClass::getResult()
	 * @uses SPEmailWsWsdlClass::saveLastError()
	 * @uses SPEmailWsTypeGetJobStatus::getJobId()
	 * @param SPEmailWsTypeGetJobStatus GetJobStatus
	 * @return SPEmailWsTypeGetJobStatusResponse
	 */
	public function GetJobStatus(SPEmailWsTypeGetJobStatus $_SPEmailWsTypeGetJobStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetJobStatus(array('JobId'=>$_SPEmailWsTypeGetJobStatus->getJobId())));
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
	 * @return SPEmailWsTypeGetJobStatusResponse
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