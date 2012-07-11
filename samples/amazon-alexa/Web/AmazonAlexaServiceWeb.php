<?php
/**
 * Class file for AmazonAlexaServiceWeb
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaServiceWeb
 * @date 10/07/2012
 */
class AmazonAlexaServiceWeb extends AmazonAlexaWsdlClass
{
	/**
	 * Method to call WebMap
	 * @uses AmazonAlexaWsdlClass::getSoapClient()
	 * @uses AmazonAlexaWsdlClass::setResult()
	 * @uses AmazonAlexaWsdlClass::getResult()
	 * @uses AmazonAlexaWsdlClass::saveLastError()
	 * @uses AmazonAlexaTypeWebMap::getRequest()
	 * @param AmazonAlexaTypeWebMap WebMap
	 * @return AmazonAlexaTypeWebMapResponse
	 */
	public function WebMap(AmazonAlexaTypeWebMap $_AmazonAlexaTypeWebMap)
	{
		try
		{
			$this->setResult(self::getSoapClient()->WebMap(array('Request'=>$_AmazonAlexaTypeWebMap->getRequest())));
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
	 * @return AmazonAlexaTypeWebMapResponse
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