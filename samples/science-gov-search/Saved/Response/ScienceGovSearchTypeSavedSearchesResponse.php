<?php
/**
 * Class file for ScienceGovSearchTypeSavedSearchesResponse
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeSavedSearchesResponse
 * @date 13/10/2012
 */
class ScienceGovSearchTypeSavedSearchesResponse extends ScienceGovSearchWsdlClass
{
	/**
	 * The savedSearch
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * @var ScienceGovSearchTypeStringStringEntry
	 */
	public $savedSearch;
	/**
	 * Constructor
	 * @param ScienceGovSearchTypeStringStringEntry savedSearch
	 * @return ScienceGovSearchTypeSavedSearchesResponse
	 */
	public function __construct($_savedSearch = null)
	{
		parent::__construct(array('savedSearch'=>$_savedSearch));
	}
	/**
	 * Set savedSearch
	 * @param StringStringEntry savedSearch
	 * @return StringStringEntry
	 */
	public function setSavedSearch($_savedSearch)
	{
		return ($this->savedSearch = $_savedSearch);
	}
	/**
	 * Get savedSearch
	 * @return ScienceGovSearchTypeStringStringEntry
	 */
	public function getSavedSearch()
	{
		return $this->savedSearch;
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