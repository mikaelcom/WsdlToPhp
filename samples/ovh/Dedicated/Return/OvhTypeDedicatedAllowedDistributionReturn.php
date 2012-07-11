<?php
/**
 * Class file for OvhTypeDedicatedAllowedDistributionReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedAllowedDistributionReturn
 * @date 02/07/2012
 */
class OvhTypeDedicatedAllowedDistributionReturn extends OvhWsdlClass
{
	/**
	 * The distribution
	 * @var OvhTypeMyArrayOfDedicatedAllowedDistributionMoreStructType
	 */
	public $distribution;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedAllowedDistributionMoreStructType distribution
	 * @return OvhTypeDedicatedAllowedDistributionReturn
	 */
	public function __construct($_distribution = null)
	{
		parent::__construct(array('distribution'=>new OvhTypeMyArrayOfDedicatedAllowedDistributionMoreStructType($_distribution)));
	}
	/**
	 * Set distribution
	 * @param MyArrayOfDedicatedAllowedDistributionMoreStructType distribution
	 * @return MyArrayOfDedicatedAllowedDistributionMoreStructType
	 */
	public function setDistribution($_distribution)
	{
		return ($this->distribution = $_distribution);
	}
	/**
	 * Get distribution
	 * @return OvhTypeMyArrayOfDedicatedAllowedDistributionMoreStructType
	 */
	public function getDistribution()
	{
		return $this->distribution;
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