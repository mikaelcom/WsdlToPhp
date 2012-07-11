<?php
/**
 * Class file for AmazonEc2TypeCreateImageResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateImageResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateImageResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The imageId
	 * @var string
	 */
	public $imageId;
	/**
	 * Constructor
	 * @param string requestId
	 * @param string imageId
	 * @return AmazonEc2TypeCreateImageResponseType
	 */
	public function __construct($_requestId = null,$_imageId = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'imageId'=>$_imageId));
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
	 * Set imageId
	 * @param string imageId
	 * @return string
	 */
	public function setImageId($_imageId)
	{
		return ($this->imageId = $_imageId);
	}
	/**
	 * Get imageId
	 * @return string
	 */
	public function getImageId()
	{
		return $this->imageId;
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