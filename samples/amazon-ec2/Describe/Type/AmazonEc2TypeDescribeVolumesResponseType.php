<?php
/**
 * Class file for AmazonEc2TypeDescribeVolumesResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeVolumesResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeVolumesResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The volumeSet
	 * @var AmazonEc2TypeDescribeVolumesSetResponseType
	 */
	public $volumeSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeDescribeVolumesSetResponseType volumeSet
	 * @return AmazonEc2TypeDescribeVolumesResponseType
	 */
	public function __construct($_requestId = null,$_volumeSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'volumeSet'=>$_volumeSet));
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
	 * Set volumeSet
	 * @param DescribeVolumesSetResponseType volumeSet
	 * @return DescribeVolumesSetResponseType
	 */
	public function setVolumeSet($_volumeSet)
	{
		return ($this->volumeSet = $_volumeSet);
	}
	/**
	 * Get volumeSet
	 * @return AmazonEc2TypeDescribeVolumesSetResponseType
	 */
	public function getVolumeSet()
	{
		return $this->volumeSet;
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