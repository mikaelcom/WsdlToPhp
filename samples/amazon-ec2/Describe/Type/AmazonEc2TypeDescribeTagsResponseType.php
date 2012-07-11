<?php
/**
 * Class file for AmazonEc2TypeDescribeTagsResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeTagsResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeTagsResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The tagSet
	 * @var AmazonEc2TypeTagSetType
	 */
	public $tagSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeTagSetType tagSet
	 * @return AmazonEc2TypeDescribeTagsResponseType
	 */
	public function __construct($_requestId = null,$_tagSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'tagSet'=>$_tagSet));
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
	 * Set tagSet
	 * @param TagSetType tagSet
	 * @return TagSetType
	 */
	public function setTagSet($_tagSet)
	{
		return ($this->tagSet = $_tagSet);
	}
	/**
	 * Get tagSet
	 * @return AmazonEc2TypeTagSetType
	 */
	public function getTagSet()
	{
		return $this->tagSet;
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