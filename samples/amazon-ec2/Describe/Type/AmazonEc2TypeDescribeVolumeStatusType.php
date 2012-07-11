<?php
/**
 * Class file for AmazonEc2TypeDescribeVolumeStatusType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeVolumeStatusType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeVolumeStatusType extends AmazonEc2WsdlClass
{
	/**
	 * The volumeSet
	 * @var AmazonEc2TypeDescribeVolumesSetType
	 */
	public $volumeSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * The maxResults
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var integer
	 */
	public $maxResults;
	/**
	 * The nextToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $nextToken;
	/**
	 * Constructor
	 * @param AmazonEc2TypeDescribeVolumesSetType volumeSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @param integer maxResults
	 * @param string nextToken
	 * @return AmazonEc2TypeDescribeVolumeStatusType
	 */
	public function __construct($_volumeSet = null,$_filterSet = null,$_maxResults = null,$_nextToken = null)
	{
		parent::__construct(array('volumeSet'=>$_volumeSet,'filterSet'=>$_filterSet,'maxResults'=>$_maxResults,'nextToken'=>$_nextToken));
	}
	/**
	 * Set volumeSet
	 * @param DescribeVolumesSetType volumeSet
	 * @return DescribeVolumesSetType
	 */
	public function setVolumeSet($_volumeSet)
	{
		return ($this->volumeSet = $_volumeSet);
	}
	/**
	 * Get volumeSet
	 * @return AmazonEc2TypeDescribeVolumesSetType
	 */
	public function getVolumeSet()
	{
		return $this->volumeSet;
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
	 * Set maxResults
	 * @param integer maxResults
	 * @return integer
	 */
	public function setMaxResults($_maxResults)
	{
		return ($this->maxResults = $_maxResults);
	}
	/**
	 * Get maxResults
	 * @return integer
	 */
	public function getMaxResults()
	{
		return $this->maxResults;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>