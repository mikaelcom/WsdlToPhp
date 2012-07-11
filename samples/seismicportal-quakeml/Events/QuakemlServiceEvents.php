<?php
/**
 * Class file for QuakemlServiceEvents
 * @date 10/07/2012
 */
/**
 * Class QuakemlServiceEvents
 * @date 10/07/2012
 */
class QuakemlServiceEvents extends QuakemlWsdlClass
{
	/**
	 * Method to call events
	 * @uses QuakemlWsdlClass::getSoapClient()
	 * @uses QuakemlWsdlClass::setResult()
	 * @uses QuakemlWsdlClass::getResult()
	 * @uses QuakemlWsdlClass::saveLastError()
	 * @uses QuakemlTypeEvents::getUri()
	 * @uses QuakemlTypeEvents::getDateMin()
	 * @uses QuakemlTypeEvents::getDateMax()
	 * @uses QuakemlTypeEvents::getLatMin()
	 * @uses QuakemlTypeEvents::getLatMax()
	 * @uses QuakemlTypeEvents::getLonMin()
	 * @uses QuakemlTypeEvents::getLonMax()
	 * @uses QuakemlTypeEvents::getDepthMin()
	 * @uses QuakemlTypeEvents::getDepthMax()
	 * @uses QuakemlTypeEvents::getNetMagMin()
	 * @uses QuakemlTypeEvents::getNetMagMax()
	 * @uses QuakemlTypeEvents::getNetMagType()
	 * @uses QuakemlTypeEvents::getAuthor()
	 * @uses QuakemlTypeEvents::getStartRow()
	 * @uses QuakemlTypeEvents::getLimit()
	 * @param QuakemlTypeEvents Events
	 * @return QuakemlTypeEventsResponse
	 */
	public function events(QuakemlTypeEvents $_QuakemlTypeEvents)
	{
		try
		{
			$this->setResult(self::getSoapClient()->events(array('uri'=>$_QuakemlTypeEvents->getUri(),'dateMin'=>$_QuakemlTypeEvents->getDateMin(),'dateMax'=>$_QuakemlTypeEvents->getDateMax(),'latMin'=>$_QuakemlTypeEvents->getLatMin(),'latMax'=>$_QuakemlTypeEvents->getLatMax(),'lonMin'=>$_QuakemlTypeEvents->getLonMin(),'lonMax'=>$_QuakemlTypeEvents->getLonMax(),'depthMin'=>$_QuakemlTypeEvents->getDepthMin(),'depthMax'=>$_QuakemlTypeEvents->getDepthMax(),'netMagMin'=>$_QuakemlTypeEvents->getNetMagMin(),'netMagMax'=>$_QuakemlTypeEvents->getNetMagMax(),'netMagType'=>$_QuakemlTypeEvents->getNetMagType(),'author'=>$_QuakemlTypeEvents->getAuthor(),'startRow'=>$_QuakemlTypeEvents->getStartRow(),'limit'=>$_QuakemlTypeEvents->getLimit())));
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
	 * @return QuakemlTypeEventsResponse
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