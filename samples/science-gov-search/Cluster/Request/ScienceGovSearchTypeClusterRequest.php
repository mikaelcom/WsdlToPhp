<?php
/**
 * Class file for ScienceGovSearchTypeClusterRequest
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeClusterRequest
 * @date 13/10/2012
 */
class ScienceGovSearchTypeClusterRequest extends ScienceGovSearchWsdlClass
{
	/**
	 * The clusterGroup
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $clusterGroup;
	/**
	 * The clusterTypes
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 1
	 * @var ScienceGovSearchTypeClusterType
	 */
	public $clusterTypes;
	/**
	 * The additionalTypes
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $additionalTypes;
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
	 * The maxClusterDepth
	 * @var int
	 */
	public $maxClusterDepth;
	/**
	 * The minClusterSize
	 * @var int
	 */
	public $minClusterSize;
	/**
	 * The searchId
	 * @var string
	 */
	public $searchId;
	/**
	 * The snapshotId
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $snapshotId;
	/**
	 * Constructor
	 * @param string clusterGroup
	 * @param ScienceGovSearchTypeClusterType clusterTypes
	 * @param string additionalTypes
	 * @param string collectionCodes
	 * @param ScienceGovSearchTypeFilterType filters
	 * @param int maxClusterDepth
	 * @param int minClusterSize
	 * @param string searchId
	 * @param string snapshotId
	 * @return ScienceGovSearchTypeClusterRequest
	 */
	public function __construct($_clusterGroup = null,$_clusterTypes,$_additionalTypes = null,$_collectionCodes = null,$_filters = null,$_maxClusterDepth = null,$_minClusterSize = null,$_searchId = null,$_snapshotId = null)
	{
		parent::__construct(array('clusterGroup'=>$_clusterGroup,'clusterTypes'=>$_clusterTypes,'additionalTypes'=>$_additionalTypes,'collectionCodes'=>$_collectionCodes,'filters'=>$_filters,'maxClusterDepth'=>$_maxClusterDepth,'minClusterSize'=>$_minClusterSize,'searchId'=>$_searchId,'snapshotId'=>$_snapshotId));
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
	 * Set clusterTypes
	 * @param ClusterType clusterTypes
	 * @return ClusterType
	 */
	public function setClusterTypes($_clusterTypes)
	{
		return ($this->clusterTypes = ScienceGovSearchTypeClusterType::valueIsValid($_clusterTypes)?$_clusterTypes:null);
	}
	/**
	 * Get clusterTypes
	 * @return ScienceGovSearchTypeClusterType
	 */
	public function getClusterTypes()
	{
		return $this->clusterTypes;
	}
	/**
	 * Set additionalTypes
	 * @param string additionalTypes
	 * @return string
	 */
	public function setAdditionalTypes($_additionalTypes)
	{
		return ($this->additionalTypes = $_additionalTypes);
	}
	/**
	 * Get additionalTypes
	 * @return string
	 */
	public function getAdditionalTypes()
	{
		return $this->additionalTypes;
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
	 * Set maxClusterDepth
	 * @param int maxClusterDepth
	 * @return int
	 */
	public function setMaxClusterDepth($_maxClusterDepth)
	{
		return ($this->maxClusterDepth = $_maxClusterDepth);
	}
	/**
	 * Get maxClusterDepth
	 * @return int
	 */
	public function getMaxClusterDepth()
	{
		return $this->maxClusterDepth;
	}
	/**
	 * Set minClusterSize
	 * @param int minClusterSize
	 * @return int
	 */
	public function setMinClusterSize($_minClusterSize)
	{
		return ($this->minClusterSize = $_minClusterSize);
	}
	/**
	 * Get minClusterSize
	 * @return int
	 */
	public function getMinClusterSize()
	{
		return $this->minClusterSize;
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