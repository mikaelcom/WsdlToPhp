<?php
/**
 * Class file for SPSearchTypeGetQuerySuggestionsResponse
 * @date 06/07/2012
 */
/**
 * Class SPSearchTypeGetQuerySuggestionsResponse
 * @date 06/07/2012
 */
class SPSearchTypeGetQuerySuggestionsResponse extends SPSearchWsdlClass
{
	/**
	 * The GetQuerySuggestionsResult
	 * @var SPSearchTypeArrayOfString
	 */
	public $GetQuerySuggestionsResult;
	/**
	 * Constructor
	 * @param SPSearchTypeArrayOfString GetQuerySuggestionsResult
	 * @return SPSearchTypeGetQuerySuggestionsResponse
	 */
	public function __construct($_GetQuerySuggestionsResult = null)
	{
		parent::__construct(array('GetQuerySuggestionsResult'=>new SPSearchTypeArrayOfString($_GetQuerySuggestionsResult)));
	}
	/**
	 * Set GetQuerySuggestionsResult
	 * @param ArrayOfString GetQuerySuggestionsResult
	 * @return ArrayOfString
	 */
	public function setGetQuerySuggestionsResult($_GetQuerySuggestionsResult)
	{
		return ($this->GetQuerySuggestionsResult = $_GetQuerySuggestionsResult);
	}
	/**
	 * Get GetQuerySuggestionsResult
	 * @return SPSearchTypeArrayOfString
	 */
	public function getGetQuerySuggestionsResult()
	{
		return $this->GetQuerySuggestionsResult;
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