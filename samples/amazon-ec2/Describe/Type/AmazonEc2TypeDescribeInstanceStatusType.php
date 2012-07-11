<?php
/**
 * Class file for AmazonEc2TypeDescribeInstanceStatusType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeInstanceStatusType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeInstanceStatusType extends AmazonEc2WsdlClass
{
	/**
	 * The instancesSet
	 * @var AmazonEc2TypeInstanceIdSetType
	 */
	public $instancesSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * The nextToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $nextToken;
	/**
	 * The maxResults
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $maxResults;
	/**
	 * The includeAllInstances
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $includeAllInstances;
	/**
	 * Constructor
	 * @param AmazonEc2TypeInstanceIdSetType instancesSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @param string nextToken
	 * @param int maxResults
	 * @param boolean includeAllInstances
	 * @return AmazonEc2TypeDescribeInstanceStatusType
	 */
	public function __construct($_instancesSet = null,$_filterSet = null,$_nextToken = null,$_maxResults = null,$_includeAllInstances = null)
	{
		parent::__construct(array('instancesSet'=>$_instancesSet,'filterSet'=>$_filterSet,'nextToken'=>$_nextToken,'maxResults'=>$_maxResults,'includeAllInstances'=>$_includeAllInstances));
	}
	/**
	 * Set instancesSet
	 * @param InstanceIdSetType instancesSet
	 * @return InstanceIdSetType
	 */
	public function setInstancesSet($_instancesSet)
	{
		return ($this->instancesSet = $_instancesSet);
	}
	/**
	 * Get instancesSet
	 * @return AmazonEc2TypeInstanceIdSetType
	 */
	public function getInstancesSet()
	{
		return $this->instancesSet;
	}
	/**
	 * Set filterSet
	 * @param FilterSetType filterSet
	 * @return FilterSetType
	 */
	public function setFilterSet($_filterSet)
	{
		return ($this->filterSet = $_filterSet);
	}
	/**
	 * Get filterSet
	 * @return AmazonEc2TypeFilterSetType
	 */
	public function getFilterSet()
	{
		return $this->filterSet;
	}
	/**
	 * Set nextToken
	 * @param string nextToken
	 * @return string
	 */
	public function setNextToken($_nextToken)
	{
		return ($this->nextToken = $_nextToken);
	}
	/**
	 * Get nextToken
	 * @return string
	 */
	public function getNextToken()
	{
		return $this->nextToken;
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
	 * Set includeAllInstances
	 * @param boolean includeAllInstances
	 * @return boolean
	 */
	public function setIncludeAllInstances($_includeAllInstances)
	{
		return ($this->includeAllInstances = $_includeAllInstances);
	}
	/**
	 * Get includeAllInstances
	 * @return boolean
	 */
	public function getIncludeAllInstances()
	{
		return $this->includeAllInstances;
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