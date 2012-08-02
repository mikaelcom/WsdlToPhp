<?php
/**
 * Class file for DirectSmileServiceRestart
 * @date 02/08/2012
 */
/**
 * Class DirectSmileServiceRestart
 * @date 02/08/2012
 */
class DirectSmileServiceRestart extends DirectSmileWsdlClass
{
	/**
	 * Method to call RestartJob
	 * Meta informations :
	 * 	- documentation : Restarts a job stored in the database, requires a valid session.
	 * @uses DirectSmileWsdlClass::getSoapClient()
	 * @uses DirectSmileWsdlClass::setResult()
	 * @uses DirectSmileWsdlClass::getResult()
	 * @uses DirectSmileWsdlClass::saveLastError()
	 * @uses DirectSmileTypeRestartJob::getSid()
	 * @uses DirectSmileTypeRestartJob::getGUID()
	 * @param DirectSmileTypeRestartJob RestartJob
	 * @return DirectSmileTypeRestartJobResponse
	 */
	public function RestartJob(DirectSmileTypeRestartJob $_DirectSmileTypeRestartJob)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RestartJob(array('Sid'=>$_DirectSmileTypeRestartJob->getSid(),'GUID'=>$_DirectSmileTypeRestartJob->getGUID())));
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
	 * @return DirectSmileTypeRestartJobResponse
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