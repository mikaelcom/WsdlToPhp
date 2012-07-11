<?php
/**
 * Class file for EccMktGoogleTypeGetKeywordSuggestResponse
 * @date 03/07/2012
 */
/**
 * Class EccMktGoogleTypeGetKeywordSuggestResponse
 * @date 03/07/2012
 */
class EccMktGoogleTypeGetKeywordSuggestResponse extends EccMktGoogleWsdlClass
{
	/**
	 * The GetKeywordSuggestResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccMktGoogleTypeGoogleKeywordSuggest
	 */
	public $GetKeywordSuggestResult;
	/**
	 * Constructor
	 * @param EccMktGoogleTypeGoogleKeywordSuggest GetKeywordSuggestResult
	 * @return EccMktGoogleTypeGetKeywordSuggestResponse
	 */
	public function __construct($_GetKeywordSuggestResult = null)
	{
		parent::__construct(array('GetKeywordSuggestResult'=>$_GetKeywordSuggestResult));
	}
	/**
	 * Set GetKeywordSuggestResult
	 * @param GoogleKeywordSuggest GetKeywordSuggestResult
	 * @return GoogleKeywordSuggest
	 */
	public function setGetKeywordSuggestResult($_GetKeywordSuggestResult)
	{
		return ($this->GetKeywordSuggestResult = $_GetKeywordSuggestResult);
	}
	/**
	 * Get GetKeywordSuggestResult
	 * @return EccMktGoogleTypeGoogleKeywordSuggest
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