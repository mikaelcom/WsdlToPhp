<?php
/**
 * Class file for RFGeoIPServiceAnalyse
 * @date 15/08/2012
 */
/**
 * Class RFGeoIPServiceAnalyse
 * @date 15/08/2012
 */
class RFGeoIPServiceAnalyse extends RFGeoIPWsdlClass
{
	/**
	 * Method to call Analyse
	 * @uses RFGeoIPWsdlClass::getSoapClient()
	 * @uses RFGeoIPWsdlClass::setResult()
	 * @uses RFGeoIPWsdlClass::getResult()
	 * @uses RFGeoIPWsdlClass::saveLastError()
	 * @uses RFGeoIPTypeAnalyse::getRequest()
	 * @param RFGeoIPTypeAnalyse Analyse
	 * @return RFGeoIPTypeAnalyseResponse
	 */
	public function Analyse(RFGeoIPTypeAnalyse $_RFGeoIPTypeAnalyse)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Analyse(array('request'=>$_RFGeoIPTypeAnalyse->getRequest())));
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
	 * @return RFGeoIPTypeAnalyseResponse
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