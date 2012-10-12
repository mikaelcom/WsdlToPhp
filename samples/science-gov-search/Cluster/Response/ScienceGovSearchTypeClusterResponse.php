<?php
/**
 * Class file for ScienceGovSearchTypeClusterResponse
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeClusterResponse
 * @date 13/10/2012
 */
class ScienceGovSearchTypeClusterResponse extends ScienceGovSearchWsdlClass
{
	/**
	 * The cluster
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 1
	 * @var ScienceGovSearchTypeCluster
	 */
	public $cluster;
	/**
	 * Constructor
	 * @param ScienceGovSearchTypeCluster cluster
	 * @return ScienceGovSearchTypeClusterResponse
	 */
	public function __construct($_cluster)
	{
		parent::__construct(array('cluster'=>$_cluster));
	}
	/**
	 * Set cluster
	 * @param Cluster cluster
	 * @return Cluster
	 */
	public function setCluster($_cluster)
	{
		return ($this->cluster = $_cluster);
	}
	/**
	 * Get cluster
	 * @return ScienceGovSearchTypeCluster
	 */
	public function getCluster()
	{
		return $this->cluster;
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