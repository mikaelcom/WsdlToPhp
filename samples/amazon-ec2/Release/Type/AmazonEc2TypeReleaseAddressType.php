<?php
/**
 * Class file for AmazonEc2TypeReleaseAddressType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeReleaseAddressType
 * @date 10/07/2012
 */
class AmazonEc2TypeReleaseAddressType extends AmazonEc2WsdlClass
{
	/**
	 * The publicIp
	 * @var string
	 */
	public $publicIp;
	/**
	 * The allocationId
	 * @var string
	 */
	public $allocationId;
	/**
	 * Constructor
	 * @param string publicIp
	 * @param string allocationId
	 * @return AmazonEc2TypeReleaseAddressType
	 */
	public function __construct($_publicIp = null,$_allocationId = null)
	{
		parent::__construct(array('publicIp'=>$_publicIp,'allocationId'=>$_allocationId));
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
	 * Set allocationId
	 * @param string allocationId
	 * @return string
	 */
	public function setAllocationId($_allocationId)
	{
		return ($this->allocationId = $_allocationId);
	}
	/**
	 * Get allocationId
	 * @return string
	 */
	public function getAllocationId()
	{
		return $this->allocationId;
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