<?php
/**
 * Class file for ScienceGovSearchTypeClusterRetrieveRequest
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeClusterRetrieveRequest
 * @date 13/10/2012
 */
class ScienceGovSearchTypeClusterRetrieveRequest extends ScienceGovSearchWsdlClass
{
	/**
	 * The searchId
	 * @var string
	 */
	public $searchId;
	/**
	 * The clusterId
	 * @var string
	 */
	public $clusterId;
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
	 * The clusterGroup
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $clusterGroup;
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
	 * Constructor
	 * @param string searchId
	 * @param string clusterId
	 * @param int startPosition
	 * @param int maxResults
	 * @param string clusterGroup
	 * @param ScienceGovSearchTypeFilterType filters
	 * @param ScienceGovSearchTypeResultOrder order
	 * @param ScienceGovSearchTypeSnapshotOrder advancedOrder
	 * @return ScienceGovSearchTypeClusterRetrieveRequest
	 */
	public function __construct($_searchId = null,$_clusterId = null,$_startPosition = null,$_maxResults = null,$_clusterGroup = null,$_filters = null,$_order = null,$_advancedOrder = null)
	{
		parent::__construct(array('searchId'=>$_searchId,'clusterId'=>$_clusterId,'startPosition'=>$_startPosition,'maxResults'=>$_maxResults,'clusterGroup'=>$_clusterGroup,'filters'=>$_filters,'order'=>$_order,'advancedOrder'=>$_advancedOrder));
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
	 * Set clusterId
	 * @param string clusterId
	 * @return string
	 */
	public function setClusterId($_clusterId)
	{
		return ($this->clusterId = $_clusterId);
	}
	/**
	 * Get clusterId
	 * @return string
	 */
	public function getClusterId()
	{
		return $this->clusterId;
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
	 * Set clusterGroup
	 * @param string clusterGroup
	 * @return string
	 */
	public function setClusterGroup($_clusterGroup)
	{
		return ($this->clusterGroup = $_clusterGroup);
	}
	/**
	 * Get clusterGroup
	 * @return string
	 */
	public function getClusterGroup()
	{
		return $this->clusterGroup;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>