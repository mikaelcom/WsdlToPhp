<?php
/**
 * Class file for AmazonEc2TypeInstanceNetworkInterfaceAssociationType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceNetworkInterfaceAssociationType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceNetworkInterfaceAssociationType extends AmazonEc2WsdlClass
{
	/**
	 * The publicIp
	 * @var string
	 */
	public $publicIp;
	/**
	 * The ipOwnerId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ipOwnerId;
	/**
	 * Constructor
	 * @param string publicIp
	 * @param string ipOwnerId
	 * @return AmazonEc2TypeInstanceNetworkInterfaceAssociationType
	 */
	public function __construct($_publicIp = null,$_ipOwnerId = null)
	{
		parent::__construct(array('publicIp'=>$_publicIp,'ipOwnerId'=>$_ipOwnerId));
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
	 * Set ipOwnerId
	 * @param string ipOwnerId
	 * @return string
	 */
	public function setIpOwnerId($_ipOwnerId)
	{
		return ($this->ipOwnerId = $_ipOwnerId);
	}
	/**
	 * Get ipOwnerId
	 * @return string
	 */
	public function getIpOwnerId()
	{
		return $this->ipOwnerId;
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