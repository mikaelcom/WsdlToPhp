<?php
/**
 * Class file for AmazonEc2TypeCreateNetworkAclResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateNetworkAclResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateNetworkAclResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The networkAcl
	 * @var AmazonEc2TypeNetworkAclType
	 */
	public $networkAcl;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeNetworkAclType networkAcl
	 * @return AmazonEc2TypeCreateNetworkAclResponseType
	 */
	public function __construct($_requestId = null,$_networkAcl = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'networkAcl'=>$_networkAcl));
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
	 * Set networkAcl
	 * @param NetworkAclType networkAcl
	 * @return NetworkAclType
	 */
	public function setNetworkAcl($_networkAcl)
	{
		return ($this->networkAcl = $_networkAcl);
	}
	/**
	 * Get networkAcl
	 * @return AmazonEc2TypeNetworkAclType
	 */
	public function getNetworkAcl()
	{
		return $this->networkAcl;
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