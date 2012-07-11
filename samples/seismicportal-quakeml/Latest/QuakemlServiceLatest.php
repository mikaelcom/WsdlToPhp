<?php
/**
 * Class file for QuakemlServiceLatest
 * @date 10/07/2012
 */
/**
 * Class QuakemlServiceLatest
 * @date 10/07/2012
 */
class QuakemlServiceLatest extends QuakemlWsdlClass
{
	/**
	 * Method to call latestEvents
	 * @uses QuakemlWsdlClass::getSoapClient()
	 * @uses QuakemlWsdlClass::setResult()
	 * @uses QuakemlWsdlClass::getResult()
	 * @uses QuakemlWsdlClass::saveLastError()
	 * @uses QuakemlTypeLatestEvents::getComplete()
	 * @uses QuakemlTypeLatestEvents::getNum()
	 * @param QuakemlTypeLatestEvents LatestEvents
	 * @return QuakemlTypeLatestEventsResponse
	 */
	public function latestEvents(QuakemlTypeLatestEvents $_QuakemlTypeLatestEvents)
	{
		try
		{
			$this->setResult(self::getSoapClient()->latestEvents(array('complete'=>$_QuakemlTypeLatestEvents->getComplete(),'num'=>$_QuakemlTypeLatestEvents->getNum())));
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
	 * @return QuakemlTypeLatestEventsResponse
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