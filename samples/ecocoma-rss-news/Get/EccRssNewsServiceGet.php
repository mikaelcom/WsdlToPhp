<?php
/**
 * Class file for EccRssNewsServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccRssNewsServiceGet
 * @date 03/07/2012
 */
class EccRssNewsServiceGet extends EccRssNewsWsdlClass
{
	/**
	 * Method to call GetRSS
	 * Meta informations :
	 * 	- documentation : Search through news content or information and create your own custom RSS feed.
	 * @uses EccRssNewsWsdlClass::getSoapClient()
	 * @uses EccRssNewsWsdlClass::setResult()
	 * @uses EccRssNewsWsdlClass::getResult()
	 * @uses EccRssNewsWsdlClass::saveLastError()
	 * @uses EccRssNewsTypeGetRSS::getKeyID()
	 * @uses EccRssNewsTypeGetRSS::getDomainID()
	 * @uses EccRssNewsTypeGetRSS::getEncoding()
	 * @uses EccRssNewsTypeGetRSS::getKeyword()
	 * @param EccRssNewsTypeGetRSS GetRSS
	 * @return EccRssNewsTypeGetRSSResponse
	 */
	public function GetRSS(EccRssNewsTypeGetRSS $_EccRssNewsTypeGetRSS)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRSS(array('KeyID'=>$_EccRssNewsTypeGetRSS->getKeyID(),'DomainID'=>$_EccRssNewsTypeGetRSS->getDomainID(),'Encoding'=>$_EccRssNewsTypeGetRSS->getEncoding(),'Keyword'=>$_EccRssNewsTypeGetRSS->getKeyword())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExtendedRSS
	 * Meta informations :
	 * 	- documentation : Search and filter through news content or information and create your own custom RSS feed.
	 * @uses EccRssNewsWsdlClass::getSoapClient()
	 * @uses EccRssNewsWsdlClass::setResult()
	 * @uses EccRssNewsWsdlClass::getResult()
	 * @uses EccRssNewsWsdlClass::saveLastError()
	 * @uses EccRssNewsTypeGetExtendedRSS::getKeyID()
	 * @uses EccRssNewsTypeGetExtendedRSS::getDomainID()
	 * @uses EccRssNewsTypeGetExtendedRSS::getEncoding()
	 * @uses EccRssNewsTypeGetExtendedRSS::getKeyword()
	 * @uses EccRssNewsTypeGetExtendedRSS::getInclude()
	 * @uses EccRssNewsTypeGetExtendedRSS::getExclude()
	 * @param EccRssNewsTypeGetExtendedRSS GetExtendedRSS
	 * @return EccRssNewsTypeGetExtendedRSSResponse
	 */
	public function GetExtendedRSS(EccRssNewsTypeGetExtendedRSS $_EccRssNewsTypeGetExtendedRSS)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedRSS(array('KeyID'=>$_EccRssNewsTypeGetExtendedRSS->getKeyID(),'DomainID'=>$_EccRssNewsTypeGetExtendedRSS->getDomainID(),'Encoding'=>$_EccRssNewsTypeGetExtendedRSS->getEncoding(),'Keyword'=>$_EccRssNewsTypeGetExtendedRSS->getKeyword(),'Include'=>$_EccRssNewsTypeGetExtendedRSS->getInclude(),'Exclude'=>$_EccRssNewsTypeGetExtendedRSS->getExclude())));
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
	 * @return EccRssNewsTypeGetExtendedRSSResponse
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