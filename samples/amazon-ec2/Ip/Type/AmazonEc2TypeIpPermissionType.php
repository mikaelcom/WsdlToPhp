<?php
/**
 * Class file for AmazonEc2TypeIpPermissionType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeIpPermissionType
 * @date 10/07/2012
 */
class AmazonEc2TypeIpPermissionType extends AmazonEc2WsdlClass
{
	/**
	 * The ipProtocol
	 * @var string
	 */
	public $ipProtocol;
	/**
	 * The fromPort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $fromPort;
	/**
	 * The toPort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $toPort;
	/**
	 * The groups
	 * @var AmazonEc2TypeUserIdGroupPairSetType
	 */
	public $groups;
	/**
	 * The ipRanges
	 * @var AmazonEc2TypeIpRangeSetType
	 */
	public $ipRanges;
	/**
	 * Constructor
	 * @param string ipProtocol
	 * @param int fromPort
	 * @param int toPort
	 * @param AmazonEc2TypeUserIdGroupPairSetType groups
	 * @param AmazonEc2TypeIpRangeSetType ipRanges
	 * @return AmazonEc2TypeIpPermissionType
	 */
	public function __construct($_ipProtocol = null,$_fromPort = null,$_toPort = null,$_groups = null,$_ipRanges = null)
	{
		parent::__construct(array('ipProtocol'=>$_ipProtocol,'fromPort'=>$_fromPort,'toPort'=>$_toPort,'groups'=>$_groups,'ipRanges'=>$_ipRanges));
	}
	/**
	 * Set ipProtocol
	 * @param string ipProtocol
	 * @return string
	 */
	public function setIpProtocol($_ipProtocol)
	{
		return ($this->ipProtocol = $_ipProtocol);
	}
	/**
	 * Get ipProtocol
	 * @return string
	 */
	public function getIpProtocol()
	{
		return $this->ipProtocol;
	}
	/**
	 * Set fromPort
	 * @param int fromPort
	 * @return int
	 */
	public function setFromPort($_fromPort)
	{
		return ($this->fromPort = $_fromPort);
	}
	/**
	 * Get fromPort
	 * @return int
	 */
	public function getFromPort()
	{
		return $this->fromPort;
	}
	/**
	 * Set toPort
	 * @param int toPort
	 * @return int
	 */
	public function setToPort($_toPort)
	{
		return ($this->toPort = $_toPort);
	}
	/**
	 * Get toPort
	 * @return int
	 */
	public function getToPort()
	{
		return $this->toPort;
	}
	/**
	 * Set groups
	 * @param UserIdGroupPairSetType groups
	 * @return UserIdGroupPairSetType
	 */
	public function setGroups($_groups)
	{
		return ($this->groups = $_groups);
	}
	/**
	 * Get groups
	 * @return AmazonEc2TypeUserIdGroupPairSetType
	 */
	public function getGroups()
	{
		return $this->groups;
	}
	/**
	 * Set ipRanges
	 * @param IpRangeSetType ipRanges
	 * @return IpRangeSetType
	 */
	public function setIpRanges($_ipRanges)
	{
		return ($this->ipRanges = $_ipRanges);
	}
	/**
	 * Get ipRanges
	 * @return AmazonEc2TypeIpRangeSetType
	 */
	public function getIpRanges()
	{
		return $this->ipRanges;
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