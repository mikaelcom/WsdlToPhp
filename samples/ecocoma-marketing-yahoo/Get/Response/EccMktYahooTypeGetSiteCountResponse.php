<?php
/**
 * Class file for EccMktYahooTypeGetSiteCountResponse
 * @date 03/07/2012
 */
/**
 * Class EccMktYahooTypeGetSiteCountResponse
 * @date 03/07/2012
 */
class EccMktYahooTypeGetSiteCountResponse extends EccMktYahooWsdlClass
{
	/**
	 * The GetSiteCountResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccMktYahooTypeYahooCount
	 */
	public $GetSiteCountResult;
	/**
	 * Constructor
	 * @param EccMktYahooTypeYahooCount GetSiteCountResult
	 * @return EccMktYahooTypeGetSiteCountResponse
	 */
	public function __construct($_GetSiteCountResult = null)
	{
		parent::__construct(array('GetSiteCountResult'=>$_GetSiteCountResult));
	}
	/**
	 * Set GetSiteCountResult
	 * @param YahooCount GetSiteCountResult
	 * @return YahooCount
	 */
	public function setGetSiteCountResult($_GetSiteCountResult)
	{
		return ($this->GetSiteCountResult = $_GetSiteCountResult);
	}
	/**
	 * Get GetSiteCountResult
	 * @return EccMktYahooTypeYahooCount
	 */
	public function getGetSiteCountResult()
	{
		return $this->GetSiteCountResult;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>