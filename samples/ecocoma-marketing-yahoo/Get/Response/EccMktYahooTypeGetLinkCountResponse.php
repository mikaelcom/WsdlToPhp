<?php
/**
 * Class file for EccMktYahooTypeGetLinkCountResponse
 * @date 03/07/2012
 */
/**
 * Class EccMktYahooTypeGetLinkCountResponse
 * @date 03/07/2012
 */
class EccMktYahooTypeGetLinkCountResponse extends EccMktYahooWsdlClass
{
	/**
	 * The GetLinkCountResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccMktYahooTypeYahooCount
	 */
	public $GetLinkCountResult;
	/**
	 * Constructor
	 * @param EccMktYahooTypeYahooCount GetLinkCountResult
	 * @return EccMktYahooTypeGetLinkCountResponse
	 */
	public function __construct($_GetLinkCountResult = null)
	{
		parent::__construct(array('GetLinkCountResult'=>$_GetLinkCountResult));
	}
	/**
	 * Set GetLinkCountResult
	 * @param YahooCount GetLinkCountResult
	 * @return YahooCount
	 */
	public function setGetLinkCountResult($_GetLinkCountResult)
	{
		return ($this->GetLinkCountResult = $_GetLinkCountResult);
	}
	/**
	 * Get GetLinkCountResult
	 * @return EccMktYahooTypeYahooCount
	 */
	public function getGetLinkCountResult()
	{
		return $this->GetLinkCountResult;
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