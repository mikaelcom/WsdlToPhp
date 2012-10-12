<?php
/**
 * Class file for ScienceGovSearchTypeSearchRequest
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeSearchRequest
 * @date 13/10/2012
 */
class ScienceGovSearchTypeSearchRequest extends ScienceGovSearchWsdlClass
{
	/**
	 * The query
	 * @var ScienceGovSearchTypeQuery
	 */
	public $query;
	/**
	 * The appName
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $appName;
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
	 * @var ScienceGovSearchTypeResultOrder
	 */
	public $order;
	/**
	 * The advancedOrder
	 * Meta informations :
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeSnapshotOrder
	 */
	public $advancedOrder;
	/**
	 * The refineSearchId
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $refineSearchId;
	/**
	 * The searchTimeout
	 * Meta informations :
	 * 	- nillable : true
	 * @var long
	 */
	public $searchTimeout;
	/**
	 * The synchronousResults
	 * Meta informations :
	 * 	- nillable : true
	 * @var int
	 */
	public $synchronousResults;
	/**
	 * Constructor
	 * @param ScienceGovSearchTypeQuery query
	 * @param string appName
	 * @param ScienceGovSearchTypeFilterType filters
	 * @param int maxResultsPerCollection
	 * @param ScienceGovSearchTypeResultOrder order
	 * @param ScienceGovSearchTypeSnapshotOrder advancedOrder
	 * @param string refineSearchId
	 * @param long searchTimeout
	 * @param int synchronousResults
	 * @return ScienceGovSearchTypeSearchRequest
	 */
	public function __construct($_query = null,$_appName = null,$_filters = null,$_maxResultsPerCollection = null,$_order = null,$_advancedOrder = null,$_refineSearchId = null,$_searchTimeout = null,$_synchronousResults = null)
	{
		parent::__construct(array('query'=>$_query,'appName'=>$_appName,'filters'=>$_filters,'maxResultsPerCollection'=>$_maxResultsPerCollection,'order'=>$_order,'advancedOrder'=>$_advancedOrder,'refineSearchId'=>$_refineSearchId,'searchTimeout'=>$_searchTimeout,'synchronousResults'=>$_synchronousResults));
	}
	/**
	 * Set query
	 * @param Query query
	 * @return Query
	 */
	public function setQuery($_query)
	{
		return ($this->query = $_query);
	}
	/**
	 * Get query
	 * @return ScienceGovSearchTypeQuery
	 */
	public function getQuery()
	{
		return $this->query;
	}
	/**
	 * Set appName
	 * @param string appName
	 * @return string
	 */
	public function setAppName($_appName)
	{
		return ($this->appName = $_appName);
	}
	/**
	 * Get appName
	 * @return string
	 */
	public function getAppName()
	{
		return $this->appName;
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
	 * @param ResultOrder order
	 * @return ResultOrder
	 */
	public function setOrder($_order)
	{
		return ($this->order = $_order);
	}
	/**
	 * Get order
	 * @return ScienceGovSearchTypeResultOrder
	 */
	public function getOrder()
	{
		return $this->order;
	}
	/**
	 * Set advancedOrder
	 * @param SnapshotOrder advancedOrder
	 * @return SnapshotOrder
	 */
	public function setAdvancedOrder($_advancedOrder)
	{
		return ($this->advancedOrder = $_advancedOrder);
	}
	/**
	 * Get advancedOrder
	 * @return ScienceGovSearchTypeSnapshotOrder
	 */
	public function getAdvancedOrder()
	{
		return $this->advancedOrder;
	}
	/**
	 * Set refineSearchId
	 * @param string refineSearchId
	 * @return string
	 */
	public function setRefineSearchId($_refineSearchId)
	{
		return ($this->refineSearchId = $_refineSearchId);
	}
	/**
	 * Get refineSearchId
	 * @return string
	 */
	public function getRefineSearchId()
	{
		return $this->refineSearchId;
	}
	/**
	 * Set searchTimeout
	 * @param long searchTimeout
	 * @return long
	 */
	public function setSearchTimeout($_searchTimeout)
	{
		return ($this->searchTimeout = $_searchTimeout);
	}
	/**
	 * Get searchTimeout
	 * @return long
	 */
	public function getSearchTimeout()
	{
		return $this->searchTimeout;
	}
	/**
	 * Set synchronousResults
	 * @param int synchronousResults
	 * @return int
	 */
	public function setSynchronousResults($_synchronousResults)
	{
		return ($this->synchronousResults = $_synchronousResults);
	}
	/**
	 * Get synchronousResults
	 * @return int
	 */
	public function getSynchronousResults()
	{
		return $this->synchronousResults;
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