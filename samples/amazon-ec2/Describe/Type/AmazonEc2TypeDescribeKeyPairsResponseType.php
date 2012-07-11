<?php
/**
 * Class file for AmazonEc2TypeDescribeKeyPairsResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeKeyPairsResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeKeyPairsResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The keySet
	 * @var AmazonEc2TypeDescribeKeyPairsResponseInfoType
	 */
	public $keySet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeDescribeKeyPairsResponseInfoType keySet
	 * @return AmazonEc2TypeDescribeKeyPairsResponseType
	 */
	public function __construct($_requestId = null,$_keySet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'keySet'=>$_keySet));
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
	 * Set keySet
	 * @param DescribeKeyPairsResponseInfoType keySet
	 * @return DescribeKeyPairsResponseInfoType
	 */
	public function setKeySet($_keySet)
	{
		return ($this->keySet = $_keySet);
	}
	/**
	 * Get keySet
	 * @return AmazonEc2TypeDescribeKeyPairsResponseInfoType
	 */
	public function getKeySet()
	{
		return $this->keySet;
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