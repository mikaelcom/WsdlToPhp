<?php
/**
 * Class file for XiReleasesServiceSearch
 * @date 08/07/2012
 */
/**
 * Class XiReleasesServiceSearch
 * @date 08/07/2012
 */
class XiReleasesServiceSearch extends XiReleasesWsdlClass
{
	/**
	 * Method to call SearchSecurityHeadlines
	 * Meta informations :
	 * 	- documentation : Search press releases for a security by date and title.
	 * @uses XiReleasesWsdlClass::getSoapClient()
	 * @uses XiReleasesWsdlClass::setResult()
	 * @uses XiReleasesWsdlClass::getResult()
	 * @uses XiReleasesWsdlClass::saveLastError()
	 * @uses XiReleasesTypeSearchSecurityHeadlines::getIdentifier()
	 * @uses XiReleasesTypeSearchSecurityHeadlines::getIdentifierType()
	 * @uses XiReleasesTypeSearchSecurityHeadlines::getSource()
	 * @uses XiReleasesTypeSearchSecurityHeadlines::getTitle()
	 * @uses XiReleasesTypeSearchSecurityHeadlines::getStartDate()
	 * @uses XiReleasesTypeSearchSecurityHeadlines::getEndDate()
	 * @param XiReleasesTypeSearchSecurityHeadlines SearchSecurityHeadlines
	 * @return XiReleasesTypeSearchSecurityHeadlinesResponse
	 */
	public function SearchSecurityHeadlines(XiReleasesTypeSearchSecurityHeadlines $_XiReleasesTypeSearchSecurityHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchSecurityHeadlines(array('Identifier'=>$_XiReleasesTypeSearchSecurityHeadlines->getIdentifier(),'IdentifierType'=>$_XiReleasesTypeSearchSecurityHeadlines->getIdentifierType(),'Source'=>$_XiReleasesTypeSearchSecurityHeadlines->getSource(),'Title'=>$_XiReleasesTypeSearchSecurityHeadlines->getTitle(),'StartDate'=>$_XiReleasesTypeSearchSecurityHeadlines->getStartDate(),'EndDate'=>$_XiReleasesTypeSearchSecurityHeadlines->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SearchMarketHeadlines
	 * Meta informations :
	 * 	- documentation : Search press releases by date and title.
	 * @uses XiReleasesWsdlClass::getSoapClient()
	 * @uses XiReleasesWsdlClass::setResult()
	 * @uses XiReleasesWsdlClass::getResult()
	 * @uses XiReleasesWsdlClass::saveLastError()
	 * @uses XiReleasesTypeSearchMarketHeadlines::getSource()
	 * @uses XiReleasesTypeSearchMarketHeadlines::getTitle()
	 * @uses XiReleasesTypeSearchMarketHeadlines::getStartDate()
	 * @uses XiReleasesTypeSearchMarketHeadlines::getEndDate()
	 * @param XiReleasesTypeSearchMarketHeadlines SearchMarketHeadlines
	 * @return XiReleasesTypeSearchMarketHeadlinesResponse
	 */
	public function SearchMarketHeadlines(XiReleasesTypeSearchMarketHeadlines $_XiReleasesTypeSearchMarketHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchMarketHeadlines(array('Source'=>$_XiReleasesTypeSearchMarketHeadlines->getSource(),'Title'=>$_XiReleasesTypeSearchMarketHeadlines->getTitle(),'StartDate'=>$_XiReleasesTypeSearchMarketHeadlines->getStartDate(),'EndDate'=>$_XiReleasesTypeSearchMarketHeadlines->getEndDate())));
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
	 * @return XiReleasesTypeSearchMarketHeadlinesResponse
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