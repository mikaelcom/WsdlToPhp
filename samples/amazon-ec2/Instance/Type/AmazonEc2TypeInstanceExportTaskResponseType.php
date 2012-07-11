<?php
/**
 * Class file for AmazonEc2TypeInstanceExportTaskResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceExportTaskResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceExportTaskResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * The targetEnvironment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $targetEnvironment;
	/**
	 * Constructor
	 * @param string instanceId
	 * @param string targetEnvironment
	 * @return AmazonEc2TypeInstanceExportTaskResponseType
	 */
	public function __construct($_instanceId = null,$_targetEnvironment = null)
	{
		parent::__construct(array('instanceId'=>$_instanceId,'targetEnvironment'=>$_targetEnvironment));
	}
	/**
	 * Set instanceId
	 * @param string instanceId
	 * @return string
	 */
	public function setInstanceId($_instanceId)
	{
		return ($this->instanceId = $_instanceId);
	}
	/**
	 * Get instanceId
	 * @return string
	 */
	public function getInstanceId()
	{
		return $this->instanceId;
	}
	/**
	 * Set targetEnvironment
	 * @param string targetEnvironment
	 * @return string
	 */
	public function setTargetEnvironment($_targetEnvironment)
	{
		return ($this->targetEnvironment = $_targetEnvironment);
	}
	/**
	 * Get targetEnvironment
	 * @return string
	 */
	public function getTargetEnvironment()
	{
		return $this->targetEnvironment;
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