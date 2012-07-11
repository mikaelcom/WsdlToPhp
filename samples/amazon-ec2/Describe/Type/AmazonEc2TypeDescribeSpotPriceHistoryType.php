<?php
/**
 * Class file for AmazonEc2TypeDescribeSpotPriceHistoryType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeSpotPriceHistoryType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeSpotPriceHistoryType extends AmazonEc2WsdlClass
{
	/**
	 * The startTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $startTime;
	/**
	 * The endTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $endTime;
	/**
	 * The instanceTypeSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeInstanceTypeSetType
	 */
	public $instanceTypeSet;
	/**
	 * The productDescriptionSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeProductDescriptionSetType
	 */
	public $productDescriptionSet;
	/**
	 * The filterSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeFilterSetType
	 */
	public $filterSet;
	/**
	 * The availabilityZone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $availabilityZone;
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
	 * @param dateTime startTime
	 * @param dateTime endTime
	 * @param AmazonEc2TypeInstanceTypeSetType instanceTypeSet
	 * @param AmazonEc2TypeProductDescriptionSetType productDescriptionSet
	 * @param AmazonEc2TypeFilterSetType filterSet
	 * @param string availabilityZone
	 * @param integer maxResults
	 * @param string nextToken
	 * @return AmazonEc2TypeDescribeSpotPriceHistoryType
	 */
	public function __construct($_startTime = null,$_endTime = null,$_instanceTypeSet = null,$_productDescriptionSet = null,$_filterSet = null,$_availabilityZone = null,$_maxResults = null,$_nextToken = null)
	{
		parent::__construct(array('startTime'=>$_startTime,'endTime'=>$_endTime,'instanceTypeSet'=>$_instanceTypeSet,'productDescriptionSet'=>$_productDescriptionSet,'filterSet'=>$_filterSet,'availabilityZone'=>$_availabilityZone,'maxResults'=>$_maxResults,'nextToken'=>$_nextToken));
	}
	/**
	 * Set startTime
	 * @param dateTime startTime
	 * @return dateTime
	 */
	public function setStartTime($_startTime)
	{
		return ($this->startTime = $_startTime);
	}
	/**
	 * Get startTime
	 * @return dateTime
	 */
	public function getStartTime()
	{
		return $this->startTime;
	}
	/**
	 * Set endTime
	 * @param dateTime endTime
	 * @return dateTime
	 */
	public function setEndTime($_endTime)
	{
		return ($this->endTime = $_endTime);
	}
	/**
	 * Get endTime
	 * @return dateTime
	 */
	public function getEndTime()
	{
		return $this->endTime;
	}
	/**
	 * Set instanceTypeSet
	 * @param InstanceTypeSetType instanceTypeSet
	 * @return InstanceTypeSetType
	 */
	public function setInstanceTypeSet($_instanceTypeSet)
	{
		return ($this->instanceTypeSet = $_instanceTypeSet);
	}
	/**
	 * Get instanceTypeSet
	 * @return AmazonEc2TypeInstanceTypeSetType
	 */
	public function getInstanceTypeSet()
	{
		return $this->instanceTypeSet;
	}
	/**
	 * Set productDescriptionSet
	 * @param ProductDescriptionSetType productDescriptionSet
	 * @return ProductDescriptionSetType
	 */
	public function setProductDescriptionSet($_productDescriptionSet)
	{
		return ($this->productDescriptionSet = $_productDescriptionSet);
	}
	/**
	 * Get productDescriptionSet
	 * @return AmazonEc2TypeProductDescriptionSetType
	 */
	public function getProductDescriptionSet()
	{
		return $this->productDescriptionSet;
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
	 * Set availabilityZone
	 * @param string availabilityZone
	 * @return string
	 */
	public function setAvailabilityZone($_availabilityZone)
	{
		return ($this->availabilityZone = $_availabilityZone);
	}
	/**
	 * Get availabilityZone
	 * @return string
	 */
	public function getAvailabilityZone()
	{
		return $this->availabilityZone;
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