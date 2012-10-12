<?php
/**
 * Class file for ScienceGovSearchTypeGetSearchStatusRequest
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeGetSearchStatusRequest
 * @date 13/10/2012
 */
class ScienceGovSearchTypeGetSearchStatusRequest extends ScienceGovSearchWsdlClass
{
	/**
	 * The searchId
	 * @var string
	 */
	public $searchId;
	/**
	 * The filters
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeFilterType
	 */
	public $filters;
	/**
	 * Constructor
	 * @param string searchId
	 * @param ScienceGovSearchTypeFilterType filters
	 * @return ScienceGovSearchTypeGetSearchStatusRequest
	 */
	public function __construct($_searchId = null,$_filters = null)
	{
		parent::__construct(array('searchId'=>$_searchId,'filters'=>$_filters));
	}
	/**
	 * Set searchId
	 * @param string searchId
	 * @return string
	 */
	public function setSearchId($_searchId)
	{
		return ($this->searchId = $_searchId);
	}
	/**
	 * Get searchId
	 * @return string
	 */
	public function getSearchId()
	{
		return $this->searchId;
	}
	/**
	 * Set filters
	 * @param FilterType filters
	 * @return FilterType
	 */
	public function setFilters($_filters)
	{
		return ($this->filters = ScienceGovSearchTypeFilterType::valueIsValid($_filters)?$_filters:null);
	}
	/**
	 * Get filters
	 * @return ScienceGovSearchTypeFilterType
	 */
	public function getFilters()
	{
		return $this->filters;
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