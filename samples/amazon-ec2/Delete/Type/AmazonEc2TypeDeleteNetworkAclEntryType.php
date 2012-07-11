<?php
/**
 * Class file for AmazonEc2TypeDeleteNetworkAclEntryType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDeleteNetworkAclEntryType
 * @date 10/07/2012
 */
class AmazonEc2TypeDeleteNetworkAclEntryType extends AmazonEc2WsdlClass
{
	/**
	 * The networkAclId
	 * @var string
	 */
	public $networkAclId;
	/**
	 * The ruleNumber
	 * @var int
	 */
	public $ruleNumber;
	/**
	 * The egress
	 * @var boolean
	 */
	public $egress;
	/**
	 * Constructor
	 * @param string networkAclId
	 * @param int ruleNumber
	 * @param boolean egress
	 * @return AmazonEc2TypeDeleteNetworkAclEntryType
	 */
	public function __construct($_networkAclId = null,$_ruleNumber = null,$_egress = null)
	{
		parent::__construct(array('networkAclId'=>$_networkAclId,'ruleNumber'=>$_ruleNumber,'egress'=>$_egress));
	}
	/**
	 * Set networkAclId
	 * @param string networkAclId
	 * @return string
	 */
	public function setNetworkAclId($_networkAclId)
	{
		return ($this->networkAclId = $_networkAclId);
	}
	/**
	 * Get networkAclId
	 * @return string
	 */
	public function getNetworkAclId()
	{
		return $this->networkAclId;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>