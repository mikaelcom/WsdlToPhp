<?php
/**
 * Class file for AmazonEc2TypeDescribeInstanceStatusResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeInstanceStatusResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeInstanceStatusResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The instanceStatusSet
	 * @var AmazonEc2TypeInstanceStatusSetType
	 */
	public $instanceStatusSet;
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
	 * @param AmazonEc2TypeInstanceStatusSetType instanceStatusSet
	 * @param string nextToken
	 * @return AmazonEc2TypeDescribeInstanceStatusResponseType
	 */
	public function __construct($_requestId = null,$_instanceStatusSet = null,$_nextToken = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'instanceStatusSet'=>$_instanceStatusSet,'nextToken'=>$_nextToken));
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
	 * Set instanceStatusSet
	 * @param InstanceStatusSetType instanceStatusSet
	 * @return InstanceStatusSetType
	 */
	public function setInstanceStatusSet($_instanceStatusSet)
	{
		return ($this->instanceStatusSet = $_instanceStatusSet);
	}
	/**
	 * Get instanceStatusSet
	 * @return AmazonEc2TypeInstanceStatusSetType
	 */
	public function getInstanceStatusSet()
	{
		return $this->instanceStatusSet;
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