<?php
/**
 * Class file for AmazonEc2TypeAllocateAddressResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAllocateAddressResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeAllocateAddressResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The publicIp
	 * @var string
	 */
	public $publicIp;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The allocationId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $allocationId;
	/**
	 * Constructor
	 * @param string requestId
	 * @param string publicIp
	 * @param string domain
	 * @param string allocationId
	 * @return AmazonEc2TypeAllocateAddressResponseType
	 */
	public function __construct($_requestId = null,$_publicIp = null,$_domain = null,$_allocationId = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'publicIp'=>$_publicIp,'domain'=>$_domain,'allocationId'=>$_allocationId));
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
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
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