<?php
/**
 * Class file for UsgsRequestServiceGet
 * @date 08/07/2012
 */
/**
 * Class UsgsRequestServiceGet
 * @date 08/07/2012
 */
class UsgsRequestServiceGet extends UsgsRequestWsdlClass
{
	/**
	 * Method to call getTiledDataDirectURLs
	 * @uses UsgsRequestWsdlClass::getSoapClient()
	 * @uses UsgsRequestWsdlClass::setResult()
	 * @uses UsgsRequestWsdlClass::getResult()
	 * @uses UsgsRequestWsdlClass::saveLastError()
	 * @uses UsgsRequestTypeGetTiledDataDirectURLs::getRequestInfoXml()
	 * @param UsgsRequestTypeGetTiledDataDirectURLs GetTiledDataDirectURLs
	 * @return UsgsRequestTypeGetTiledDataDirectURLsResponse
	 */
	public function getTiledDataDirectURLs(UsgsRequestTypeGetTiledDataDirectURLs $_UsgsRequestTypeGetTiledDataDirectURLs)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getTiledDataDirectURLs(array('requestInfoXml'=>$_UsgsRequestTypeGetTiledDataDirectURLs->getRequestInfoXml())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call getTiledDataDirectURLs2
	 * @uses UsgsRequestWsdlClass::getSoapClient()
	 * @uses UsgsRequestWsdlClass::setResult()
	 * @uses UsgsRequestWsdlClass::getResult()
	 * @uses UsgsRequestWsdlClass::saveLastError()
	 * @uses UsgsRequestTypeGetTiledDataDirectURLs2::getRequestInfoXml()
	 * @param UsgsRequestTypeGetTiledDataDirectURLs2 GetTiledDataDirectURLs2
	 * @return UsgsRequestTypeGetTiledDataDirectURLs2Response
	 */
	public function getTiledDataDirectURLs2(UsgsRequestTypeGetTiledDataDirectURLs2 $_UsgsRequestTypeGetTiledDataDirectURLs2)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getTiledDataDirectURLs2(array('requestInfoXml'=>$_UsgsRequestTypeGetTiledDataDirectURLs2->getRequestInfoXml())));
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
	 * @return UsgsRequestTypeGetTiledDataDirectURLs2Response
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