<?php
/**
 * Class file for ScienceGovSearchTypeRetrieveFreeFormRequest
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeRetrieveFreeFormRequest
 * @date 13/10/2012
 */
class ScienceGovSearchTypeRetrieveFreeFormRequest extends ScienceGovSearchWsdlClass
{
	/**
	 * The searchId
	 * @var string
	 */
	public $searchId;
	/**
	 * The startPosition
	 * @var int
	 */
	public $startPosition;
	/**
	 * The maxResults
	 * @var int
	 */
	public $maxResults;
	/**
	 * The collectionCodes
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $collectionCodes;
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
	 * The maxResultsPerCollection
	 * Meta informations :
	 * 	- nillable : true
	 * @var int
	 */
	public $maxResultsPerCollection;
	/**
	 * The order
	 * Meta informations :
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeSnapshotOrder
	 */
	public $order;
	/**
	 * The snapshotId
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $snapshotId;
	/**
	 * Constructor
	 * @param string searchId
	 * @param int startPosition
	 * @param int maxResults
	 * @param string collectionCodes
	 * @param ScienceGovSearchTypeFilterType filters
	 * @param int maxResultsPerCollection
	 * @param ScienceGovSearchTypeSnapshotOrder order
	 * @param string snapshotId
	 * @return ScienceGovSearchTypeRetrieveFreeFormRequest
	 */
	public function __construct($_searchId = null,$_startPosition = null,$_maxResults = null,$_collectionCodes = null,$_filters = null,$_maxResultsPerCollection = null,$_order = null,$_snapshotId = null)
	{
		parent::__construct(array('searchId'=>$_searchId,'startPosition'=>$_startPosition,'maxResults'=>$_maxResults,'collectionCodes'=>$_collectionCodes,'filters'=>$_filters,'maxResultsPerCollection'=>$_maxResultsPerCollection,'order'=>$_order,'snapshotId'=>$_snapshotId));
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
	 * Set maxResults
	 * @param int maxResults
	 * @return int
	 */
	public function setMaxResults($_maxResults)
	{
		return ($this->maxResults = $_maxResults);
	}
	/**
	 * Get maxResults
	 * @return int
	 */
	public function getMaxResults()
	{
		return $this->maxResults;
	}
	/**
	 * Set collectionCodes
	 * @param string collectionCodes
	 * @return string
	 */
	public function setCollectionCodes($_collectionCodes)
	{
		return ($this->collectionCodes = $_collectionCodes);
	}
	/**
	 * Get collectionCodes
	 * @return string
	 */
	public function getCollectionCodes()
	{
		return $this->collectionCodes;
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
	 * Set maxResultsPerCollection
	 * @param int maxResultsPerCollection
	 * @return int
	 */
	public function setMaxResultsPerCollection($_maxResultsPerCollection)
	{
		return ($this->maxResultsPerCollection = $_maxResultsPerCollection);
	}
	/**
	 * Get maxResultsPerCollection
	 * @return int
	 */
	public function getMaxResultsPerCollection()
	{
		return $this->maxResultsPerCollection;
	}
	/**
	 * Set order
	 * @param SnapshotOrder order
	 * @return SnapshotOrder
	 */
	public function setOrder($_order)
	{
		return ($this->order = $_order);
	}
	/**
	 * Get order
	 * @return ScienceGovSearchTypeSnapshotOrder
	 */
	public function getOrder()
	{
		return $this->order;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>