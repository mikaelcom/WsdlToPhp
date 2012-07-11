<?php
/**
 * Class file for EccMktYahooServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccMktYahooServiceGet
 * @date 03/07/2012
 */
class EccMktYahooServiceGet extends EccMktYahooWsdlClass
{
	/**
	 * Method to call GetSiteCount
	 * Meta informations :
	 * 	- documentation : Shows a list of all pages belonging to a domain in the index.
	 * @uses EccMktYahooWsdlClass::getSoapClient()
	 * @uses EccMktYahooWsdlClass::setResult()
	 * @uses EccMktYahooWsdlClass::getResult()
	 * @uses EccMktYahooWsdlClass::saveLastError()
	 * @uses EccMktYahooTypeGetSiteCount::getKeyID()
	 * @uses EccMktYahooTypeGetSiteCount::getDomainID()
	 * @uses EccMktYahooTypeGetSiteCount::getUrl()
	 * @param EccMktYahooTypeGetSiteCount GetSiteCount
	 * @return EccMktYahooTypeGetSiteCountResponse
	 */
	public function GetSiteCount(EccMktYahooTypeGetSiteCount $_EccMktYahooTypeGetSiteCount)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSiteCount(array('KeyID'=>$_EccMktYahooTypeGetSiteCount->getKeyID(),'DomainID'=>$_EccMktYahooTypeGetSiteCount->getDomainID(),'Url'=>$_EccMktYahooTypeGetSiteCount->getUrl())));
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
	 * 	- documentation : Shows the pages from other sites linking in to a page.
	 * @uses EccMktYahooWsdlClass::getSoapClient()
	 * @uses EccMktYahooWsdlClass::setResult()
	 * @uses EccMktYahooWsdlClass::getResult()
	 * @uses EccMktYahooWsdlClass::saveLastError()
	 * @uses EccMktYahooTypeGetLinkCount::getKeyID()
	 * @uses EccMktYahooTypeGetLinkCount::getDomainID()
	 * @uses EccMktYahooTypeGetLinkCount::getUrl()
	 * @param EccMktYahooTypeGetLinkCount GetLinkCount
	 * @return EccMktYahooTypeGetLinkCountResponse
	 */
	public function GetLinkCount(EccMktYahooTypeGetLinkCount $_EccMktYahooTypeGetLinkCount)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLinkCount(array('KeyID'=>$_EccMktYahooTypeGetLinkCount->getKeyID(),'DomainID'=>$_EccMktYahooTypeGetLinkCount->getDomainID(),'Url'=>$_EccMktYahooTypeGetLinkCount->getUrl())));
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
	 * @uses EccMktYahooWsdlClass::getSoapClient()
	 * @uses EccMktYahooWsdlClass::setResult()
	 * @uses EccMktYahooWsdlClass::getResult()
	 * @uses EccMktYahooWsdlClass::saveLastError()
	 * @uses EccMktYahooTypeGetRelatedCount::getKeyID()
	 * @uses EccMktYahooTypeGetRelatedCount::getDomainID()
	 * @uses EccMktYahooTypeGetRelatedCount::getUrl()
	 * @param EccMktYahooTypeGetRelatedCount GetRelatedCount
	 * @return EccMktYahooTypeGetRelatedCountResponse
	 */
	public function GetRelatedCount(EccMktYahooTypeGetRelatedCount $_EccMktYahooTypeGetRelatedCount)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRelatedCount(array('KeyID'=>$_EccMktYahooTypeGetRelatedCount->getKeyID(),'DomainID'=>$_EccMktYahooTypeGetRelatedCount->getDomainID(),'Url'=>$_EccMktYahooTypeGetRelatedCount->getUrl())));
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
	 * @uses EccMktYahooWsdlClass::getSoapClient()
	 * @uses EccMktYahooWsdlClass::setResult()
	 * @uses EccMktYahooWsdlClass::getResult()
	 * @uses EccMktYahooWsdlClass::saveLastError()
	 * @uses EccMktYahooTypeGetKeywordRankding::getKeyID()
	 * @uses EccMktYahooTypeGetKeywordRankding::getDomainID()
	 * @uses EccMktYahooTypeGetKeywordRankding::getKeyword()
	 * @uses EccMktYahooTypeGetKeywordRankding::getUrl()
	 * @param EccMktYahooTypeGetKeywordRankding GetKeywordRankding
	 * @return EccMktYahooTypeGetKeywordRankdingResponse
	 */
	public function GetKeywordRankding(EccMktYahooTypeGetKeywordRankding $_EccMktYahooTypeGetKeywordRankding)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetKeywordRankding(array('KeyID'=>$_EccMktYahooTypeGetKeywordRankding->getKeyID(),'DomainID'=>$_EccMktYahooTypeGetKeywordRankding->getDomainID(),'Keyword'=>$_EccMktYahooTypeGetKeywordRankding->getKeyword(),'Url'=>$_EccMktYahooTypeGetKeywordRankding->getUrl())));
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
	 * @uses EccMktYahooWsdlClass::getSoapClient()
	 * @uses EccMktYahooWsdlClass::setResult()
	 * @uses EccMktYahooWsdlClass::getResult()
	 * @uses EccMktYahooWsdlClass::saveLastError()
	 * @uses EccMktYahooTypeGetKeywordSuggest::getKeyID()
	 * @uses EccMktYahooTypeGetKeywordSuggest::getDomainID()
	 * @uses EccMktYahooTypeGetKeywordSuggest::getKeyword()
	 * @param EccMktYahooTypeGetKeywordSuggest GetKeywordSuggest
	 * @return EccMktYahooTypeGetKeywordSuggestResponse
	 */
	public function GetKeywordSuggest(EccMktYahooTypeGetKeywordSuggest $_EccMktYahooTypeGetKeywordSuggest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetKeywordSuggest(array('KeyID'=>$_EccMktYahooTypeGetKeywordSuggest->getKeyID(),'DomainID'=>$_EccMktYahooTypeGetKeywordSuggest->getDomainID(),'Keyword'=>$_EccMktYahooTypeGetKeywordSuggest->getKeyword())));
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
	 * @return EccMktYahooTypeGetKeywordSuggestResponse
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