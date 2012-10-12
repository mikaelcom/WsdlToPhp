<?php
/**
 * Class file for ScienceGovSearchTypeCluster
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeCluster
 * @date 13/10/2012
 */
class ScienceGovSearchTypeCluster extends ScienceGovSearchWsdlClass
{
	/**
	 * The children
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeCluster
	 */
	public $children;
	/**
	 * The clusterId
	 * @var string
	 */
	public $clusterId;
	/**
	 * The clusterType
	 * @var string
	 */
	public $clusterType;
	/**
	 * The count
	 * @var int
	 */
	public $count;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The resultIds
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $resultIds;
	/**
	 * Constructor
	 * @param ScienceGovSearchTypeCluster children
	 * @param string clusterId
	 * @param string clusterType
	 * @param int count
	 * @param string name
	 * @param string resultIds
	 * @return ScienceGovSearchTypeCluster
	 */
	public function __construct($_children = null,$_clusterId = null,$_clusterType = null,$_count = null,$_name = null,$_resultIds = null)
	{
		parent::__construct(array('children'=>$_children,'clusterId'=>$_clusterId,'clusterType'=>$_clusterType,'count'=>$_count,'name'=>$_name,'resultIds'=>$_resultIds));
	}
	/**
	 * Set children
	 * @param Cluster children
	 * @return Cluster
	 */
	public function setChildren($_children)
	{
		return ($this->children = $_children);
	}
	/**
	 * Get children
	 * @return ScienceGovSearchTypeCluster
	 */
	public function getChildren()
	{
		return $this->children;
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
	 * Set clusterType
	 * @param string clusterType
	 * @return string
	 */
	public function setClusterType($_clusterType)
	{
		return ($this->clusterType = $_clusterType);
	}
	/**
	 * Get clusterType
	 * @return string
	 */
	public function getClusterType()
	{
		return $this->clusterType;
	}
	/**
	 * Set count
	 * @param int count
	 * @return int
	 */
	public function setCount($_count)
	{
		return ($this->count = $_count);
	}
	/**
	 * Get count
	 * @return int
	 */
	public function getCount()
	{
		return $this->count;
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set resultIds
	 * @param string resultIds
	 * @return string
	 */
	public function setResultIds($_resultIds)
	{
		return ($this->resultIds = $_resultIds);
	}
	/**
	 * Get resultIds
	 * @return string
	 */
	public function getResultIds()
	{
		return $this->resultIds;
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