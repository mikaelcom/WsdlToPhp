<?php
/**
 * Class file for BingServiceSearch
 * @date 02/07/2012
 */
/**
 * Class BingServiceSearch
 * @date 02/07/2012
 */
class BingServiceSearch extends BingWsdlClass
{
	/**
	 * Method to call Search
	 * @uses BingWsdlClass::getSoapClient()
	 * @uses BingWsdlClass::setResult()
	 * @uses BingWsdlClass::getResult()
	 * @uses BingWsdlClass::saveLastError()
	 * @uses BingTypeSearchRequest::getVersion()
	 * @uses BingTypeSearchRequest::getMarket()
	 * @uses BingTypeSearchRequest::getUILanguage()
	 * @uses BingTypeSearchRequest::getQuery()
	 * @uses BingTypeSearchRequest::getAppId()
	 * @uses BingTypeSearchRequest::getAdult()
	 * @uses BingTypeSearchRequest::getLatitude()
	 * @uses BingTypeSearchRequest::getLongitude()
	 * @uses BingTypeSearchRequest::getRadius()
	 * @uses BingTypeSearchRequest::getOptions()
	 * @uses BingTypeSearchRequest::getSources()
	 * @uses BingTypeSearchRequest::getWeb()
	 * @uses BingTypeSearchRequest::getImage()
	 * @uses BingTypeSearchRequest::getPhonebook()
	 * @uses BingTypeSearchRequest::getVideo()
	 * @uses BingTypeSearchRequest::getNews()
	 * @uses BingTypeSearchRequest::getMobileWeb()
	 * @uses BingTypeSearchRequest::getTranslation()
	 * @param BingTypeSearchRequest SearchRequest
	 * @return BingTypeSearchResponse
	 */
	public function Search(BingTypeSearchRequest $_bingTypeSearchRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Search(array('parameters'=>array('Version'=>$_bingTypeSearchRequest->getVersion(),'Market'=>$_bingTypeSearchRequest->getMarket(),'UILanguage'=>$_bingTypeSearchRequest->getUILanguage(),'Query'=>$_bingTypeSearchRequest->getQuery(),'AppId'=>$_bingTypeSearchRequest->getAppId(),'Adult'=>$_bingTypeSearchRequest->getAdult(),'Latitude'=>$_bingTypeSearchRequest->getLatitude(),'Longitude'=>$_bingTypeSearchRequest->getLongitude(),'Radius'=>$_bingTypeSearchRequest->getRadius(),'Options'=>$_bingTypeSearchRequest->getOptions(),'Sources'=>$_bingTypeSearchRequest->getSources(),'Web'=>$_bingTypeSearchRequest->getWeb(),'Image'=>$_bingTypeSearchRequest->getImage(),'Phonebook'=>$_bingTypeSearchRequest->getPhonebook(),'Video'=>$_bingTypeSearchRequest->getVideo(),'News'=>$_bingTypeSearchRequest->getNews(),'MobileWeb'=>$_bingTypeSearchRequest->getMobileWeb(),'Translation'=>$_bingTypeSearchRequest->getTranslation())))->parameters);
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
	 * @return BingTypeSearchResponse
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