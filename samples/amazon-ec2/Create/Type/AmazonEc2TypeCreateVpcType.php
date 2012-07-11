<?php
/**
 * Class file for AmazonEc2TypeCreateVpcType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateVpcType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateVpcType extends AmazonEc2WsdlClass
{
	/**
	 * The cidrBlock
	 * @var string
	 */
	public $cidrBlock;
	/**
	 * The instanceTenancy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $instanceTenancy;
	/**
	 * Constructor
	 * @param string cidrBlock
	 * @param string instanceTenancy
	 * @return AmazonEc2TypeCreateVpcType
	 */
	public function __construct($_cidrBlock = null,$_instanceTenancy = null)
	{
		parent::__construct(array('cidrBlock'=>$_cidrBlock,'instanceTenancy'=>$_instanceTenancy));
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
	 * Set instanceTenancy
	 * @param string instanceTenancy
	 * @return string
	 */
	public function setInstanceTenancy($_instanceTenancy)
	{
		return ($this->instanceTenancy = $_instanceTenancy);
	}
	/**
	 * Get instanceTenancy
	 * @return string
	 */
	public function getInstanceTenancy()
	{
		return $this->instanceTenancy;
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