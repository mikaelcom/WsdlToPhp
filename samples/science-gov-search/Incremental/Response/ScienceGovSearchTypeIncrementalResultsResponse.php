<?php
/**
 * Class file for ScienceGovSearchTypeIncrementalResultsResponse
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeIncrementalResultsResponse
 * @date 13/10/2012
 */
class ScienceGovSearchTypeIncrementalResultsResponse extends ScienceGovSearchWsdlClass
{
	/**
	 * The searchId
	 * @var string
	 */
	public $searchId;
	/**
	 * The retrievedCount
	 * @var int
	 */
	public $retrievedCount;
	/**
	 * The results
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * @var ScienceGovSearchTypeSearchResult
	 */
	public $results;
	/**
	 * The updatedResults
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * @var ScienceGovSearchTypeSearchResult
	 */
	public $updatedResults;
	/**
	 * The newSnapshotId
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $newSnapshotId;
	/**
	 * The searchStatus
	 * Meta informations :
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeSearchStatus
	 */
	public $searchStatus;
	/**
	 * Constructor
	 * @param string searchId
	 * @param int retrievedCount
	 * @param ScienceGovSearchTypeSearchResult results
	 * @param ScienceGovSearchTypeSearchResult updatedResults
	 * @param string newSnapshotId
	 * @param ScienceGovSearchTypeSearchStatus searchStatus
	 * @return ScienceGovSearchTypeIncrementalResultsResponse
	 */
	public function __construct($_searchId = null,$_retrievedCount = null,$_results = null,$_updatedResults = null,$_newSnapshotId = null,$_searchStatus = null)
	{
		parent::__construct(array('searchId'=>$_searchId,'retrievedCount'=>$_retrievedCount,'results'=>$_results,'updatedResults'=>$_updatedResults,'newSnapshotId'=>$_newSnapshotId,'searchStatus'=>$_searchStatus));
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
	 * Set retrievedCount
	 * @param int retrievedCount
	 * @return int
	 */
	public function setRetrievedCount($_retrievedCount)
	{
		return ($this->retrievedCount = $_retrievedCount);
	}
	/**
	 * Get retrievedCount
	 * @return int
	 */
	public function getRetrievedCount()
	{
		return $this->retrievedCount;
	}
	/**
	 * Set results
	 * @param SearchResult results
	 * @return SearchResult
	 */
	public function setResults($_results)
	{
		return ($this->results = $_results);
	}
	/**
	 * Get results
	 * @return ScienceGovSearchTypeSearchResult
	 */
	public function getResults()
	{
		return $this->results;
	}
	/**
	 * Set updatedResults
	 * @param SearchResult updatedResults
	 * @return SearchResult
	 */
	public function setUpdatedResults($_updatedResults)
	{
		return ($this->updatedResults = $_updatedResults);
	}
	/**
	 * Get updatedResults
	 * @return ScienceGovSearchTypeSearchResult
	 */
	public function getUpdatedResults()
	{
		return $this->updatedResults;
	}
	/**
	 * Set newSnapshotId
	 * @param string newSnapshotId
	 * @return string
	 */
	public function setNewSnapshotId($_newSnapshotId)
	{
		return ($this->newSnapshotId = $_newSnapshotId);
	}
	/**
	 * Get newSnapshotId
	 * @return string
	 */
	public function getNewSnapshotId()
	{
		return $this->newSnapshotId;
	}
	/**
	 * Set searchStatus
	 * @param SearchStatus searchStatus
	 * @return SearchStatus
	 */
	public function setSearchStatus($_searchStatus)
	{
		return ($this->searchStatus = $_searchStatus);
	}
	/**
	 * Get searchStatus
	 * @return ScienceGovSearchTypeSearchStatus
	 */
	public function getSearchStatus()
	{
		return $this->searchStatus;
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