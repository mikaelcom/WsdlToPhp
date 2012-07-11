<?php
/**
 * Class file for EccMktLiveTypeGetKeywordSuggestResponse
 * @date 03/07/2012
 */
/**
 * Class EccMktLiveTypeGetKeywordSuggestResponse
 * @date 03/07/2012
 */
class EccMktLiveTypeGetKeywordSuggestResponse extends EccMktLiveWsdlClass
{
	/**
	 * The GetKeywordSuggestResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccMktLiveTypeLiveKeywordSuggest
	 */
	public $GetKeywordSuggestResult;
	/**
	 * Constructor
	 * @param EccMktLiveTypeLiveKeywordSuggest GetKeywordSuggestResult
	 * @return EccMktLiveTypeGetKeywordSuggestResponse
	 */
	public function __construct($_GetKeywordSuggestResult = null)
	{
		parent::__construct(array('GetKeywordSuggestResult'=>$_GetKeywordSuggestResult));
	}
	/**
	 * Set GetKeywordSuggestResult
	 * @param LiveKeywordSuggest GetKeywordSuggestResult
	 * @return LiveKeywordSuggest
	 */
	public function setGetKeywordSuggestResult($_GetKeywordSuggestResult)
	{
		return ($this->GetKeywordSuggestResult = $_GetKeywordSuggestResult);
	}
	/**
	 * Get GetKeywordSuggestResult
	 * @return EccMktLiveTypeLiveKeywordSuggest
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