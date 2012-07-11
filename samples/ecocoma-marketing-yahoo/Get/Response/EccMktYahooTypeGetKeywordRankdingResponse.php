<?php
/**
 * Class file for EccMktYahooTypeGetKeywordRankdingResponse
 * @date 03/07/2012
 */
/**
 * Class EccMktYahooTypeGetKeywordRankdingResponse
 * @date 03/07/2012
 */
class EccMktYahooTypeGetKeywordRankdingResponse extends EccMktYahooWsdlClass
{
	/**
	 * The GetKeywordRankdingResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccMktYahooTypeYahooKeywordRanking
	 */
	public $GetKeywordRankdingResult;
	/**
	 * Constructor
	 * @param EccMktYahooTypeYahooKeywordRanking GetKeywordRankdingResult
	 * @return EccMktYahooTypeGetKeywordRankdingResponse
	 */
	public function __construct($_GetKeywordRankdingResult = null)
	{
		parent::__construct(array('GetKeywordRankdingResult'=>$_GetKeywordRankdingResult));
	}
	/**
	 * Set GetKeywordRankdingResult
	 * @param YahooKeywordRanking GetKeywordRankdingResult
	 * @return YahooKeywordRanking
	 */
	public function setGetKeywordRankdingResult($_GetKeywordRankdingResult)
	{
		return ($this->GetKeywordRankdingResult = $_GetKeywordRankdingResult);
	}
	/**
	 * Get GetKeywordRankdingResult
	 * @return EccMktYahooTypeYahooKeywordRanking
	 */
	public function getGetKeywordRankdingResult()
	{
		return $this->GetKeywordRankdingResult;
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