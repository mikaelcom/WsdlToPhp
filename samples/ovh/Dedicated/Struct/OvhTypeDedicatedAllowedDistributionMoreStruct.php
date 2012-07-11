<?php
/**
 * Class file for OvhTypeDedicatedAllowedDistributionMoreStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedAllowedDistributionMoreStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedAllowedDistributionMoreStruct extends OvhWsdlClass
{
	/**
	 * The basicDistributions
	 * @var OvhTypeMyArrayOfDedicatedAllowedDistributionDetailsStructType
	 */
	public $basicDistributions;
	/**
	 * The readyToUse
	 * @var OvhTypeMyArrayOfDedicatedAllowedDistributionDetailsStructType
	 */
	public $readyToUse;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedAllowedDistributionDetailsStructType basicDistributions
	 * @param OvhTypeMyArrayOfDedicatedAllowedDistributionDetailsStructType readyToUse
	 * @param string type
	 * @return OvhTypeDedicatedAllowedDistributionMoreStruct
	 */
	public function __construct($_basicDistributions = null,$_readyToUse = null,$_type = null)
	{
		parent::__construct(array('basicDistributions'=>new OvhTypeMyArrayOfDedicatedAllowedDistributionDetailsStructType($_basicDistributions),'readyToUse'=>new OvhTypeMyArrayOfDedicatedAllowedDistributionDetailsStructType($_readyToUse),'type'=>$_type));
	}
	/**
	 * Set basicDistributions
	 * @param MyArrayOfDedicatedAllowedDistributionDetailsStructType basicDistributions
	 * @return MyArrayOfDedicatedAllowedDistributionDetailsStructType
	 */
	public function setBasicDistributions($_basicDistributions)
	{
		return ($this->basicDistributions = $_basicDistributions);
	}
	/**
	 * Get basicDistributions
	 * @return OvhTypeMyArrayOfDedicatedAllowedDistributionDetailsStructType
	 */
	public function getBasicDistributions()
	{
		return $this->basicDistributions;
	}
	/**
	 * Set readyToUse
	 * @param MyArrayOfDedicatedAllowedDistributionDetailsStructType readyToUse
	 * @return MyArrayOfDedicatedAllowedDistributionDetailsStructType
	 */
	public function setReadyToUse($_readyToUse)
	{
		return ($this->readyToUse = $_readyToUse);
	}
	/**
	 * Get readyToUse
	 * @return OvhTypeMyArrayOfDedicatedAllowedDistributionDetailsStructType
	 */
	public function getReadyToUse()
	{
		return $this->readyToUse;
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
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