<?php
/**
 * Class file for ScienceGovSearchTypeRetrieveFreeFormResponse
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeRetrieveFreeFormResponse
 * @date 13/10/2012
 */
class ScienceGovSearchTypeRetrieveFreeFormResponse extends ScienceGovSearchWsdlClass
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
	 * The totalCount
	 * @var int
	 */
	public $totalCount;
	/**
	 * The results
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * @var ScienceGovSearchTypeFreeFormResult
	 */
	public $results;
	/**
	 * The collectionCodeCounts
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeStringIntEntry
	 */
	public $collectionCodeCounts;
	/**
	 * The searchStatus
	 * Meta informations :
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeSearchStatus
	 */
	public $searchStatus;
	/**
	 * The snapshotId
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $snapshotId;
	/**
	 * The startPosition
	 * Meta informations :
	 * 	- nillable : true
	 * @var int
	 */
	public $startPosition;
	/**
	 * Constructor
	 * @param string searchId
	 * @param int retrievedCount
	 * @param int totalCount
	 * @param ScienceGovSearchTypeFreeFormResult results
	 * @param ScienceGovSearchTypeStringIntEntry collectionCodeCounts
	 * @param ScienceGovSearchTypeSearchStatus searchStatus
	 * @param string snapshotId
	 * @param int startPosition
	 * @return ScienceGovSearchTypeRetrieveFreeFormResponse
	 */
	public function __construct($_searchId = null,$_retrievedCount = null,$_totalCount = null,$_results = null,$_collectionCodeCounts = null,$_searchStatus = null,$_snapshotId = null,$_startPosition = null)
	{
		parent::__construct(array('searchId'=>$_searchId,'retrievedCount'=>$_retrievedCount,'totalCount'=>$_totalCount,'results'=>$_results,'collectionCodeCounts'=>$_collectionCodeCounts,'searchStatus'=>$_searchStatus,'snapshotId'=>$_snapshotId,'startPosition'=>$_startPosition));
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
	 * Set totalCount
	 * @param int totalCount
	 * @return int
	 */
	public function setTotalCount($_totalCount)
	{
		return ($this->totalCount = $_totalCount);
	}
	/**
	 * Get totalCount
	 * @return int
	 */
	public function getTotalCount()
	{
		return $this->totalCount;
	}
	/**
	 * Set results
	 * @param FreeFormResult results
	 * @return FreeFormResult
	 */
	public function setResults($_results)
	{
		return ($this->results = $_results);
	}
	/**
	 * Get results
	 * @return ScienceGovSearchTypeFreeFormResult
	 */
	public function getResults()
	{
		return $this->results;
	}
	/**
	 * Set collectionCodeCounts
	 * @param StringIntEntry collectionCodeCounts
	 * @return StringIntEntry
	 */
	public function setCollectionCodeCounts($_collectionCodeCounts)
	{
		return ($this->collectionCodeCounts = $_collectionCodeCounts);
	}
	/**
	 * Get collectionCodeCounts
	 * @return ScienceGovSearchTypeStringIntEntry
	 */
	public function getCollectionCodeCounts()
	{
		return $this->collectionCodeCounts;
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
	 * Set snapshotId
	 * @param string snapshotId
	 * @return string
	 */
	public function setSnapshotId($_snapshotId)
	{
		return ($this->snapshotId = $_snapshotId);
	}
	/**
	 * Get snapshotId
	 * @return string
	 */
	public function getSnapshotId()
	{
		return $this->snapshotId;
	}
	/**
	 * Set startPosition
	 * @param int startPosition
	 * @return int
	 */
	public function setStartPosition($_startPosition)
	{
		return ($this->startPosition = $_startPosition);
	}
	/**
	 * Get startPosition
	 * @return int
	 */
	public function getStartPosition()
	{
		return $this->startPosition;
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