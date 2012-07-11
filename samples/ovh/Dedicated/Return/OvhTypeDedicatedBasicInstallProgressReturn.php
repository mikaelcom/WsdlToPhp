<?php
/**
 * Class file for OvhTypeDedicatedBasicInstallProgressReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedBasicInstallProgressReturn
 * @date 02/07/2012
 */
class OvhTypeDedicatedBasicInstallProgressReturn extends OvhWsdlClass
{
	/**
	 * The progress
	 * @var OvhTypeMyArrayOfDedicatedBasicInstallProgressStructType
	 */
	public $progress;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDedicatedBasicInstallProgressStructType progress
	 * @return OvhTypeDedicatedBasicInstallProgressReturn
	 */
	public function __construct($_progress = null)
	{
		parent::__construct(array('progress'=>new OvhTypeMyArrayOfDedicatedBasicInstallProgressStructType($_progress)));
	}
	/**
	 * Set progress
	 * @param MyArrayOfDedicatedBasicInstallProgressStructType progress
	 * @return MyArrayOfDedicatedBasicInstallProgressStructType
	 */
	public function setProgress($_progress)
	{
		return ($this->progress = $_progress);
	}
	/**
	 * Get progress
	 * @return OvhTypeMyArrayOfDedicatedBasicInstallProgressStructType
	 */
	public function getProgress()
	{
		return $this->progress;
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