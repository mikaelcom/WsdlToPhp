<?php
/**
 * Class file for ScienceGovSearchTypeSearchResultResponse
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeSearchResultResponse
 * @date 13/10/2012
 */
class ScienceGovSearchTypeSearchResultResponse extends ScienceGovSearchWsdlClass
{
	/**
	 * The result
	 * @var ScienceGovSearchTypeSearchResult
	 */
	public $result;
	/**
	 * Constructor
	 * @param ScienceGovSearchTypeSearchResult result
	 * @return ScienceGovSearchTypeSearchResultResponse
	 */
	public function __construct($_result = null)
	{
		parent::__construct(array('result'=>$_result));
	}
	/**
	 * Set result
	 * @param SearchResult result
	 * @return SearchResult
	 */
	public function setResult($_result)
	{
		return ($this->result = $_result);
	}
	/**
	 * Get result
	 * @return ScienceGovSearchTypeSearchResult
	 */
	public function getResult()
	{
		return $this->result;
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