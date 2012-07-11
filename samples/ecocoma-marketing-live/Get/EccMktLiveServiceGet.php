<?php
/**
 * Class file for EccMktLiveServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccMktLiveServiceGet
 * @date 03/07/2012
 */
class EccMktLiveServiceGet extends EccMktLiveWsdlClass
{
	/**
	 * Method to call GetSiteCount
	 * Meta informations :
	 * 	- documentation : Returns web pages that belong to the specified site.
	 * @uses EccMktLiveWsdlClass::getSoapClient()
	 * @uses EccMktLiveWsdlClass::setResult()
	 * @uses EccMktLiveWsdlClass::getResult()
	 * @uses EccMktLiveWsdlClass::saveLastError()
	 * @uses EccMktLiveTypeGetSiteCount::getKeyID()
	 * @uses EccMktLiveTypeGetSiteCount::getDomainID()
	 * @uses EccMktLiveTypeGetSiteCount::getUrl()
	 * @param EccMktLiveTypeGetSiteCount GetSiteCount
	 * @return EccMktLiveTypeGetSiteCountResponse
	 */
	public function GetSiteCount(EccMktLiveTypeGetSiteCount $_EccMktLiveTypeGetSiteCount)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSiteCount(array('KeyID'=>$_EccMktLiveTypeGetSiteCount->getKeyID(),'DomainID'=>$_EccMktLiveTypeGetSiteCount->getDomainID(),'Url'=>$_EccMktLiveTypeGetSiteCount->getUrl())));
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
	 * 	- documentation : Finds sites that have links to the specified website or domain.
	 * @uses EccMktLiveWsdlClass::getSoapClient()
	 * @uses EccMktLiveWsdlClass::setResult()
	 * @uses EccMktLiveWsdlClass::getResult()
	 * @uses EccMktLiveWsdlClass::saveLastError()
	 * @uses EccMktLiveTypeGetLinkCount::getKeyID()
	 * @uses EccMktLiveTypeGetLinkCount::getDomainID()
	 * @uses EccMktLiveTypeGetLinkCount::getUrl()
	 * @param EccMktLiveTypeGetLinkCount GetLinkCount
	 * @return EccMktLiveTypeGetLinkCountResponse
	 */
	public function GetLinkCount(EccMktLiveTypeGetLinkCount $_EccMktLiveTypeGetLinkCount)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLinkCount(array('KeyID'=>$_EccMktLiveTypeGetLinkCount->getKeyID(),'DomainID'=>$_EccMktLiveTypeGetLinkCount->getDomainID(),'Url'=>$_EccMktLiveTypeGetLinkCount->getUrl())));
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
	 * @uses EccMktLiveWsdlClass::getSoapClient()
	 * @uses EccMktLiveWsdlClass::setResult()
	 * @uses EccMktLiveWsdlClass::getResult()
	 * @uses EccMktLiveWsdlClass::saveLastError()
	 * @uses EccMktLiveTypeGetRelatedCount::getKeyID()
	 * @uses EccMktLiveTypeGetRelatedCount::getDomainID()
	 * @uses EccMktLiveTypeGetRelatedCount::getUrl()
	 * @param EccMktLiveTypeGetRelatedCount GetRelatedCount
	 * @return EccMktLiveTypeGetRelatedCountResponse
	 */
	public function GetRelatedCount(EccMktLiveTypeGetRelatedCount $_EccMktLiveTypeGetRelatedCount)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRelatedCount(array('KeyID'=>$_EccMktLiveTypeGetRelatedCount->getKeyID(),'DomainID'=>$_EccMktLiveTypeGetRelatedCount->getDomainID(),'Url'=>$_EccMktLiveTypeGetRelatedCount->getUrl())));
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
	 * @uses EccMktLiveWsdlClass::getSoapClient()
	 * @uses EccMktLiveWsdlClass::setResult()
	 * @uses EccMktLiveWsdlClass::getResult()
	 * @uses EccMktLiveWsdlClass::saveLastError()
	 * @uses EccMktLiveTypeGetKeywordRankding::getKeyID()
	 * @uses EccMktLiveTypeGetKeywordRankding::getDomainID()
	 * @uses EccMktLiveTypeGetKeywordRankding::getKeyword()
	 * @uses EccMktLiveTypeGetKeywordRankding::getUrl()
	 * @param EccMktLiveTypeGetKeywordRankding GetKeywordRankding
	 * @return EccMktLiveTypeGetKeywordRankdingResponse
	 */
	public function GetKeywordRankding(EccMktLiveTypeGetKeywordRankding $_EccMktLiveTypeGetKeywordRankding)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetKeywordRankding(array('KeyID'=>$_EccMktLiveTypeGetKeywordRankding->getKeyID(),'DomainID'=>$_EccMktLiveTypeGetKeywordRankding->getDomainID(),'Keyword'=>$_EccMktLiveTypeGetKeywordRankding->getKeyword(),'Url'=>$_EccMktLiveTypeGetKeywordRankding->getUrl())));
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
	 * @uses EccMktLiveWsdlClass::getSoapClient()
	 * @uses EccMktLiveWsdlClass::setResult()
	 * @uses EccMktLiveWsdlClass::getResult()
	 * @uses EccMktLiveWsdlClass::saveLastError()
	 * @uses EccMktLiveTypeGetKeywordSuggest::getKeyID()
	 * @uses EccMktLiveTypeGetKeywordSuggest::getDomainID()
	 * @uses EccMktLiveTypeGetKeywordSuggest::getKeyword()
	 * @param EccMktLiveTypeGetKeywordSuggest GetKeywordSuggest
	 * @return EccMktLiveTypeGetKeywordSuggestResponse
	 */
	public function GetKeywordSuggest(EccMktLiveTypeGetKeywordSuggest $_EccMktLiveTypeGetKeywordSuggest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetKeywordSuggest(array('KeyID'=>$_EccMktLiveTypeGetKeywordSuggest->getKeyID(),'DomainID'=>$_EccMktLiveTypeGetKeywordSuggest->getDomainID(),'Keyword'=>$_EccMktLiveTypeGetKeywordSuggest->getKeyword())));
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
	 * @return EccMktLiveTypeGetKeywordSuggestResponse
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