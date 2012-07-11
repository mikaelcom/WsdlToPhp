<?php
/**
 * Class file for AmazonEc2TypeCreateSpotDatafeedSubscriptionType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateSpotDatafeedSubscriptionType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateSpotDatafeedSubscriptionType extends AmazonEc2WsdlClass
{
	/**
	 * The bucket
	 * @var string
	 */
	public $bucket;
	/**
	 * The prefix
	 * @var string
	 */
	public $prefix;
	/**
	 * Constructor
	 * @param string bucket
	 * @param string prefix
	 * @return AmazonEc2TypeCreateSpotDatafeedSubscriptionType
	 */
	public function __construct($_bucket = null,$_prefix = null)
	{
		parent::__construct(array('bucket'=>$_bucket,'prefix'=>$_prefix));
	}
	/**
	 * Set bucket
	 * @param string bucket
	 * @return string
	 */
	public function setBucket($_bucket)
	{
		return ($this->bucket = $_bucket);
	}
	/**
	 * Get bucket
	 * @return string
	 */
	public function getBucket()
	{
		return $this->bucket;
	}
	/**
	 * Set prefix
	 * @param string prefix
	 * @return string
	 */
	public function setPrefix($_prefix)
	{
		return ($this->prefix = $_prefix);
	}
	/**
	 * Get prefix
	 * @return string
	 */
	public function getPrefix()
	{
		return $this->prefix;
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