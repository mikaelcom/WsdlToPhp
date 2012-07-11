<?php
/**
 * Class file for BingTypeRelatedSearchResponse
 * @date 02/07/2012
 */
/**
 * Class BingTypeRelatedSearchResponse
 * @date 02/07/2012
 */
class BingTypeRelatedSearchResponse extends BingWsdlClass
{
	/**
	 * The Results
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeArrayOfRelatedSearchResult
	 */
	public $Results;
	/**
	 * Constructor
	 * @param BingTypeArrayOfRelatedSearchResult Results
	 * @return BingTypeRelatedSearchResponse
	 */
	public function __construct($_Results = null)
	{
		parent::__construct(array('Results'=>new BingTypeArrayOfRelatedSearchResult($_Results)));
	}
	/**
	 * Set Results
	 * @param ArrayOfRelatedSearchResult Results
	 * @return ArrayOfRelatedSearchResult
	 */
	public function setResults($_Results)
	{
		return ($this->Results = $_Results);
	}
	/**
	 * Get Results
	 * @return BingTypeArrayOfRelatedSearchResult
	 */
	public function getResults()
	{
		return $this->Results;
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