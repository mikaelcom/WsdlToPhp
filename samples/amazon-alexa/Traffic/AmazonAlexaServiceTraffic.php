<?php
/**
 * Class file for AmazonAlexaServiceTraffic
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaServiceTraffic
 * @date 10/07/2012
 */
class AmazonAlexaServiceTraffic extends AmazonAlexaWsdlClass
{
	/**
	 * Method to call TrafficHistory
	 * @uses AmazonAlexaWsdlClass::getSoapClient()
	 * @uses AmazonAlexaWsdlClass::setResult()
	 * @uses AmazonAlexaWsdlClass::getResult()
	 * @uses AmazonAlexaWsdlClass::saveLastError()
	 * @uses AmazonAlexaTypeTrafficHistory::getRequest()
	 * @param AmazonAlexaTypeTrafficHistory TrafficHistory
	 * @return AmazonAlexaTypeTrafficHistoryResponse
	 */
	public function TrafficHistory(AmazonAlexaTypeTrafficHistory $_AmazonAlexaTypeTrafficHistory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->TrafficHistory(array('Request'=>$_AmazonAlexaTypeTrafficHistory->getRequest())));
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
	 * @return AmazonAlexaTypeTrafficHistoryResponse
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