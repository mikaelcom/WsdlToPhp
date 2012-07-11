<?php
/**
 * Class file for AmazonEc2TypeDescribeAddressesItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeAddressesItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeAddressesItemType extends AmazonEc2WsdlClass
{
	/**
	 * The publicIp
	 * @var string
	 */
	public $publicIp;
	/**
	 * Constructor
	 * @param string publicIp
	 * @return AmazonEc2TypeDescribeAddressesItemType
	 */
	public function __construct($_publicIp = null)
	{
		parent::__construct(array('publicIp'=>$_publicIp));
	}
	/**
	 * Set publicIp
	 * @param string publicIp
	 * @return string
	 */
	public function setPublicIp($_publicIp)
	{
		return ($this->publicIp = $_publicIp);
	}
	/**
	 * Get publicIp
	 * @return string
	 */
	public function getPublicIp()
	{
		return $this->publicIp;
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