<?php
/**
 * Class file for EccMktGoogleServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccMktGoogleServiceGet
 * @date 03/07/2012
 */
class EccMktGoogleServiceGet extends EccMktGoogleWsdlClass
{
	/**
	 * Method to call GetSiteCount
	 * Meta informations :
	 * 	- documentation : Indexed pages in your site.
	 * @uses EccMktGoogleWsdlClass::getSoapClient()
	 * @uses EccMktGoogleWsdlClass::setResult()
	 * @uses EccMktGoogleWsdlClass::getResult()
	 * @uses EccMktGoogleWsdlClass::saveLastError()
	 * @uses EccMktGoogleTypeGetSiteCount::getKeyID()
	 * @uses EccMktGoogleTypeGetSiteCount::getDomainID()
	 * @uses EccMktGoogleTypeGetSiteCount::getUrl()
	 * @param EccMktGoogleTypeGetSiteCount GetSiteCount
	 * @return EccMktGoogleTypeGetSiteCountResponse
	 */
	public function GetSiteCount(EccMktGoogleTypeGetSiteCount $_EccMktGoogleTypeGetSiteCount)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSiteCount(array('KeyID'=>$_EccMktGoogleTypeGetSiteCount->getKeyID(),'DomainID'=>$_EccMktGoogleTypeGetSiteCount->getDomainID(),'Url'=>$_EccMktGoogleTypeGetSiteCount->getUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLinkCount
	 * Meta informations :
	 * 	- documentation : Pages that link to your site's front page.
	 * @uses EccMktGoogleWsdlClass::getSoapClient()
	 * @uses EccMktGoogleWsdlClass::setResult()
	 * @uses EccMktGoogleWsdlClass::getResult()
	 * @uses EccMktGoogleWsdlClass::saveLastError()
	 * @uses EccMktGoogleTypeGetLinkCount::getKeyID()
	 * @uses EccMktGoogleTypeGetLinkCount::getDomainID()
	 * @uses EccMktGoogleTypeGetLinkCount::getUrl()
	 * @param EccMktGoogleTypeGetLinkCount GetLinkCount
	 * @return EccMktGoogleTypeGetLinkCountResponse
	 */
	public function GetLinkCount(EccMktGoogleTypeGetLinkCount $_EccMktGoogleTypeGetLinkCount)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLinkCount(array('KeyID'=>$_EccMktGoogleTypeGetLinkCount->getKeyID(),'DomainID'=>$_EccMktGoogleTypeGetLinkCount->getDomainID(),'Url'=>$_EccMktGoogleTypeGetLinkCount->getUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRelatedCount
	 * Meta informations :
	 * 	- documentation : Pages that are similar to your site.
	 * @uses EccMktGoogleWsdlClass::getSoapClient()
	 * @uses EccMktGoogleWsdlClass::setResult()
	 * @uses EccMktGoogleWsdlClass::getResult()
	 * @uses EccMktGoogleWsdlClass::saveLastError()
	 * @uses EccMktGoogleTypeGetRelatedCount::getKeyID()
	 * @uses EccMktGoogleTypeGetRelatedCount::getDomainID()
	 * @uses EccMktGoogleTypeGetRelatedCount::getUrl()
	 * @param EccMktGoogleTypeGetRelatedCount GetRelatedCount
	 * @return EccMktGoogleTypeGetRelatedCountResponse
	 */
	public function GetRelatedCount(EccMktGoogleTypeGetRelatedCount $_EccMktGoogleTypeGetRelatedCount)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRelatedCount(array('KeyID'=>$_EccMktGoogleTypeGetRelatedCount->getKeyID(),'DomainID'=>$_EccMktGoogleTypeGetRelatedCount->getDomainID(),'Url'=>$_EccMktGoogleTypeGetRelatedCount->getUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetKeywordRankding
	 * Meta informations :
	 * 	- documentation : Check your search engine placement and page ranking.
	 * @uses EccMktGoogleWsdlClass::getSoapClient()
	 * @uses EccMktGoogleWsdlClass::setResult()
	 * @uses EccMktGoogleWsdlClass::getResult()
	 * @uses EccMktGoogleWsdlClass::saveLastError()
	 * @uses EccMktGoogleTypeGetKeywordRankding::getKeyID()
	 * @uses EccMktGoogleTypeGetKeywordRankding::getDomainID()
	 * @uses EccMktGoogleTypeGetKeywordRankding::getKeyword()
	 * @uses EccMktGoogleTypeGetKeywordRankding::getUrl()
	 * @param EccMktGoogleTypeGetKeywordRankding GetKeywordRankding
	 * @return EccMktGoogleTypeGetKeywordRankdingResponse
	 */
	public function GetKeywordRankding(EccMktGoogleTypeGetKeywordRankding $_EccMktGoogleTypeGetKeywordRankding)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetKeywordRankding(array('KeyID'=>$_EccMktGoogleTypeGetKeywordRankding->getKeyID(),'DomainID'=>$_EccMktGoogleTypeGetKeywordRankding->getDomainID(),'Keyword'=>$_EccMktGoogleTypeGetKeywordRankding->getKeyword(),'Url'=>$_EccMktGoogleTypeGetKeywordRankding->getUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetKeywordSuggest
	 * Meta informations :
	 * 	- documentation : Provide suggestions for keywords related to the submitted keyword.
	 * @uses EccMktGoogleWsdlClass::getSoapClient()
	 * @uses EccMktGoogleWsdlClass::setResult()
	 * @uses EccMktGoogleWsdlClass::getResult()
	 * @uses EccMktGoogleWsdlClass::saveLastError()
	 * @uses EccMktGoogleTypeGetKeywordSuggest::getKeyID()
	 * @uses EccMktGoogleTypeGetKeywordSuggest::getDomainID()
	 * @uses EccMktGoogleTypeGetKeywordSuggest::getKeyword()
	 * @param EccMktGoogleTypeGetKeywordSuggest GetKeywordSuggest
	 * @return EccMktGoogleTypeGetKeywordSuggestResponse
	 */
	public function GetKeywordSuggest(EccMktGoogleTypeGetKeywordSuggest $_EccMktGoogleTypeGetKeywordSuggest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetKeywordSuggest(array('KeyID'=>$_EccMktGoogleTypeGetKeywordSuggest->getKeyID(),'DomainID'=>$_EccMktGoogleTypeGetKeywordSuggest->getDomainID(),'Keyword'=>$_EccMktGoogleTypeGetKeywordSuggest->getKeyword())));
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
	 * @return EccMktGoogleTypeGetKeywordSuggestResponse
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