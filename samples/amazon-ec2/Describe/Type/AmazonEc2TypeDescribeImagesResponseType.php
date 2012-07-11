<?php
/**
 * Class file for AmazonEc2TypeDescribeImagesResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeImagesResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeImagesResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The imagesSet
	 * @var AmazonEc2TypeDescribeImagesResponseInfoType
	 */
	public $imagesSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeDescribeImagesResponseInfoType imagesSet
	 * @return AmazonEc2TypeDescribeImagesResponseType
	 */
	public function __construct($_requestId = null,$_imagesSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'imagesSet'=>$_imagesSet));
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
	 * Set imagesSet
	 * @param DescribeImagesResponseInfoType imagesSet
	 * @return DescribeImagesResponseInfoType
	 */
	public function setImagesSet($_imagesSet)
	{
		return ($this->imagesSet = $_imagesSet);
	}
	/**
	 * Get imagesSet
	 * @return AmazonEc2TypeDescribeImagesResponseInfoType
	 */
	public function getImagesSet()
	{
		return $this->imagesSet;
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