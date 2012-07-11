<?php
/**
 * Class file for AmazonEc2TypeNetworkInterfaceAssociationType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeNetworkInterfaceAssociationType
 * @date 10/07/2012
 */
class AmazonEc2TypeNetworkInterfaceAssociationType extends AmazonEc2WsdlClass
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
	 * The allocationId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $allocationId;
	/**
	 * The associationId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $associationId;
	/**
	 * Constructor
	 * @param string publicIp
	 * @param string ipOwnerId
	 * @param string allocationId
	 * @param string associationId
	 * @return AmazonEc2TypeNetworkInterfaceAssociationType
	 */
	public function __construct($_publicIp = null,$_ipOwnerId = null,$_allocationId = null,$_associationId = null)
	{
		parent::__construct(array('publicIp'=>$_publicIp,'ipOwnerId'=>$_ipOwnerId,'allocationId'=>$_allocationId,'associationId'=>$_associationId));
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
	 * Set associationId
	 * @param string associationId
	 * @return string
	 */
	public function setAssociationId($_associationId)
	{
		return ($this->associationId = $_associationId);
	}
	/**
	 * Get associationId
	 * @return string
	 */
	public function getAssociationId()
	{
		return $this->associationId;
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