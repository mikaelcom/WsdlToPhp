<?php
/**
 * Class file for AmazonEc2TypeNetworkAclEntryType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeNetworkAclEntryType
 * @date 10/07/2012
 */
class AmazonEc2TypeNetworkAclEntryType extends AmazonEc2WsdlClass
{
	/**
	 * The ruleNumber
	 * @var int
	 */
	public $ruleNumber;
	/**
	 * The protocol
	 * @var string
	 */
	public $protocol;
	/**
	 * The ruleAction
	 * @var string
	 */
	public $ruleAction;
	/**
	 * The egress
	 * @var boolean
	 */
	public $egress;
	/**
	 * The cidrBlock
	 * @var string
	 */
	public $cidrBlock;
	/**
	 * The icmpTypeCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeIcmpTypeCodeType
	 */
	public $icmpTypeCode;
	/**
	 * The portRange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypePortRangeType
	 */
	public $portRange;
	/**
	 * Constructor
	 * @param int ruleNumber
	 * @param string protocol
	 * @param string ruleAction
	 * @param boolean egress
	 * @param string cidrBlock
	 * @param AmazonEc2TypeIcmpTypeCodeType icmpTypeCode
	 * @param AmazonEc2TypePortRangeType portRange
	 * @return AmazonEc2TypeNetworkAclEntryType
	 */
	public function __construct($_ruleNumber = null,$_protocol = null,$_ruleAction = null,$_egress = null,$_cidrBlock = null,$_icmpTypeCode = null,$_portRange = null)
	{
		parent::__construct(array('ruleNumber'=>$_ruleNumber,'protocol'=>$_protocol,'ruleAction'=>$_ruleAction,'egress'=>$_egress,'cidrBlock'=>$_cidrBlock,'icmpTypeCode'=>$_icmpTypeCode,'portRange'=>$_portRange));
	}
	/**
	 * Set ruleNumber
	 * @param int ruleNumber
	 * @return int
	 */
	public function setRuleNumber($_ruleNumber)
	{
		return ($this->ruleNumber = $_ruleNumber);
	}
	/**
	 * Get ruleNumber
	 * @return int
	 */
	public function getRuleNumber()
	{
		return $this->ruleNumber;
	}
	/**
	 * Set protocol
	 * @param string protocol
	 * @return string
	 */
	public function setProtocol($_protocol)
	{
		return ($this->protocol = $_protocol);
	}
	/**
	 * Get protocol
	 * @return string
	 */
	public function getProtocol()
	{
		return $this->protocol;
	}
	/**
	 * Set ruleAction
	 * @param string ruleAction
	 * @return string
	 */
	public function setRuleAction($_ruleAction)
	{
		return ($this->ruleAction = $_ruleAction);
	}
	/**
	 * Get ruleAction
	 * @return string
	 */
	public function getRuleAction()
	{
		return $this->ruleAction;
	}
	/**
	 * Set egress
	 * @param boolean egress
	 * @return boolean
	 */
	public function setEgress($_egress)
	{
		return ($this->egress = $_egress);
	}
	/**
	 * Get egress
	 * @return boolean
	 */
	public function getEgress()
	{
		return $this->egress;
	}
	/**
	 * Set cidrBlock
	 * @param string cidrBlock
	 * @return string
	 */
	public function setCidrBlock($_cidrBlock)
	{
		return ($this->cidrBlock = $_cidrBlock);
	}
	/**
	 * Get cidrBlock
	 * @return string
	 */
	public function getCidrBlock()
	{
		return $this->cidrBlock;
	}
	/**
	 * Set icmpTypeCode
	 * @param IcmpTypeCodeType icmpTypeCode
	 * @return IcmpTypeCodeType
	 */
	public function setIcmpTypeCode($_icmpTypeCode)
	{
		return ($this->icmpTypeCode = $_icmpTypeCode);
	}
	/**
	 * Get icmpTypeCode
	 * @return AmazonEc2TypeIcmpTypeCodeType
	 */
	public function getIcmpTypeCode()
	{
		return $this->icmpTypeCode;
	}
	/**
	 * Set portRange
	 * @param PortRangeType portRange
	 * @return PortRangeType
	 */
	public function setPortRange($_portRange)
	{
		return ($this->portRange = $_portRange);
	}
	/**
	 * Get portRange
	 * @return AmazonEc2TypePortRangeType
	 */
	public function getPortRange()
	{
		return $this->portRange;
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