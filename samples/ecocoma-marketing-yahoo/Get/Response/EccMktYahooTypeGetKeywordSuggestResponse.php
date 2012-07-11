<?php
/**
 * Class file for EccMktYahooTypeGetKeywordSuggestResponse
 * @date 03/07/2012
 */
/**
 * Class EccMktYahooTypeGetKeywordSuggestResponse
 * @date 03/07/2012
 */
class EccMktYahooTypeGetKeywordSuggestResponse extends EccMktYahooWsdlClass
{
	/**
	 * The GetKeywordSuggestResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccMktYahooTypeYahooKeywordSuggest
	 */
	public $GetKeywordSuggestResult;
	/**
	 * Constructor
	 * @param EccMktYahooTypeYahooKeywordSuggest GetKeywordSuggestResult
	 * @return EccMktYahooTypeGetKeywordSuggestResponse
	 */
	public function __construct($_GetKeywordSuggestResult = null)
	{
		parent::__construct(array('GetKeywordSuggestResult'=>$_GetKeywordSuggestResult));
	}
	/**
	 * Set GetKeywordSuggestResult
	 * @param YahooKeywordSuggest GetKeywordSuggestResult
	 * @return YahooKeywordSuggest
	 */
	public function setGetKeywordSuggestResult($_GetKeywordSuggestResult)
	{
		return ($this->GetKeywordSuggestResult = $_GetKeywordSuggestResult);
	}
	/**
	 * Get GetKeywordSuggestResult
	 * @return EccMktYahooTypeYahooKeywordSuggest
	 */
	public function getGetKeywordSuggestResult()
	{
		return $this->GetKeywordSuggestResult;
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