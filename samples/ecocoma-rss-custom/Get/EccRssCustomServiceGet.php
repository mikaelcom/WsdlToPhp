<?php
/**
 * Class file for EccRssCustomServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccRssCustomServiceGet
 * @date 03/07/2012
 */
class EccRssCustomServiceGet extends EccRssCustomWsdlClass
{
	/**
	 * Method to call GetRSS
	 * Meta informations :
	 * 	- documentation : Combine multi-RSS feeds and create your own custom RSS feed.
	 * @uses EccRssCustomWsdlClass::getSoapClient()
	 * @uses EccRssCustomWsdlClass::setResult()
	 * @uses EccRssCustomWsdlClass::getResult()
	 * @uses EccRssCustomWsdlClass::saveLastError()
	 * @uses EccRssCustomTypeGetRSS::getKeyID()
	 * @uses EccRssCustomTypeGetRSS::getDomainID()
	 * @uses EccRssCustomTypeGetRSS::getEncoding()
	 * @uses EccRssCustomTypeGetRSS::getRssUrl1()
	 * @uses EccRssCustomTypeGetRSS::getRssUrl2()
	 * @uses EccRssCustomTypeGetRSS::getRssUrl3()
	 * @uses EccRssCustomTypeGetRSS::getRssUrl4()
	 * @uses EccRssCustomTypeGetRSS::getRssUrl5()
	 * @param EccRssCustomTypeGetRSS GetRSS
	 * @return EccRssCustomTypeGetRSSResponse
	 */
	public function GetRSS(EccRssCustomTypeGetRSS $_EccRssCustomTypeGetRSS)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRSS(array('KeyID'=>$_EccRssCustomTypeGetRSS->getKeyID(),'DomainID'=>$_EccRssCustomTypeGetRSS->getDomainID(),'Encoding'=>$_EccRssCustomTypeGetRSS->getEncoding(),'RssUrl1'=>$_EccRssCustomTypeGetRSS->getRssUrl1(),'RssUrl2'=>$_EccRssCustomTypeGetRSS->getRssUrl2(),'RssUrl3'=>$_EccRssCustomTypeGetRSS->getRssUrl3(),'RssUrl4'=>$_EccRssCustomTypeGetRSS->getRssUrl4(),'RssUrl5'=>$_EccRssCustomTypeGetRSS->getRssUrl5())));
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
	 * 	- documentation : Combine and filter multi-RSS feeds and create your own custom RSS feed.
	 * @uses EccRssCustomWsdlClass::getSoapClient()
	 * @uses EccRssCustomWsdlClass::setResult()
	 * @uses EccRssCustomWsdlClass::getResult()
	 * @uses EccRssCustomWsdlClass::saveLastError()
	 * @uses EccRssCustomTypeGetExtendedRSS::getKeyID()
	 * @uses EccRssCustomTypeGetExtendedRSS::getDomainID()
	 * @uses EccRssCustomTypeGetExtendedRSS::getEncoding()
	 * @uses EccRssCustomTypeGetExtendedRSS::getRssUrl1()
	 * @uses EccRssCustomTypeGetExtendedRSS::getRssUrl2()
	 * @uses EccRssCustomTypeGetExtendedRSS::getRssUrl3()
	 * @uses EccRssCustomTypeGetExtendedRSS::getRssUrl4()
	 * @uses EccRssCustomTypeGetExtendedRSS::getRssUrl5()
	 * @uses EccRssCustomTypeGetExtendedRSS::getInclude()
	 * @uses EccRssCustomTypeGetExtendedRSS::getExclude()
	 * @param EccRssCustomTypeGetExtendedRSS GetExtendedRSS
	 * @return EccRssCustomTypeGetExtendedRSSResponse
	 */
	public function GetExtendedRSS(EccRssCustomTypeGetExtendedRSS $_EccRssCustomTypeGetExtendedRSS)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExtendedRSS(array('KeyID'=>$_EccRssCustomTypeGetExtendedRSS->getKeyID(),'DomainID'=>$_EccRssCustomTypeGetExtendedRSS->getDomainID(),'Encoding'=>$_EccRssCustomTypeGetExtendedRSS->getEncoding(),'RssUrl1'=>$_EccRssCustomTypeGetExtendedRSS->getRssUrl1(),'RssUrl2'=>$_EccRssCustomTypeGetExtendedRSS->getRssUrl2(),'RssUrl3'=>$_EccRssCustomTypeGetExtendedRSS->getRssUrl3(),'RssUrl4'=>$_EccRssCustomTypeGetExtendedRSS->getRssUrl4(),'RssUrl5'=>$_EccRssCustomTypeGetExtendedRSS->getRssUrl5(),'Include'=>$_EccRssCustomTypeGetExtendedRSS->getInclude(),'Exclude'=>$_EccRssCustomTypeGetExtendedRSS->getExclude())));
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
	 * @return EccRssCustomTypeGetExtendedRSSResponse
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