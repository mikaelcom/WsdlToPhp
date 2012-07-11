<?php
/**
 * Class file for AmazonEc2TypeDescribeVolumeStatusResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeVolumeStatusResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeVolumeStatusResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The volumeStatusSet
	 * @var AmazonEc2TypeVolumeStatusSetType
	 */
	public $volumeStatusSet;
	/**
	 * The nextToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $nextToken;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeVolumeStatusSetType volumeStatusSet
	 * @param string nextToken
	 * @return AmazonEc2TypeDescribeVolumeStatusResponseType
	 */
	public function __construct($_requestId = null,$_volumeStatusSet = null,$_nextToken = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'volumeStatusSet'=>$_volumeStatusSet,'nextToken'=>$_nextToken));
	}
	/**
	 * Set requestId
	 * @param string requestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->requestId = $_requestId);
	}
	/**
	 * Get requestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->requestId;
	}
	/**
	 * Set volumeStatusSet
	 * @param VolumeStatusSetType volumeStatusSet
	 * @return VolumeStatusSetType
	 */
	public function setVolumeStatusSet($_volumeStatusSet)
	{
		return ($this->volumeStatusSet = $_volumeStatusSet);
	}
	/**
	 * Get volumeStatusSet
	 * @return AmazonEc2TypeVolumeStatusSetType
	 */
	public function getVolumeStatusSet()
	{
		return $this->volumeStatusSet;
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