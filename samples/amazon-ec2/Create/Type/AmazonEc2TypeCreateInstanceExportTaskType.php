<?php
/**
 * Class file for AmazonEc2TypeCreateInstanceExportTaskType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateInstanceExportTaskType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateInstanceExportTaskType extends AmazonEc2WsdlClass
{
	/**
	 * The description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $description;
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * The targetEnvironment
	 * @var string
	 */
	public $targetEnvironment;
	/**
	 * The exportToS3
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeExportToS3TaskType
	 */
	public $exportToS3;
	/**
	 * Constructor
	 * @param string description
	 * @param string instanceId
	 * @param string targetEnvironment
	 * @param AmazonEc2TypeExportToS3TaskType exportToS3
	 * @return AmazonEc2TypeCreateInstanceExportTaskType
	 */
	public function __construct($_description = null,$_instanceId = null,$_targetEnvironment = null,$_exportToS3 = null)
	{
		parent::__construct(array('description'=>$_description,'instanceId'=>$_instanceId,'targetEnvironment'=>$_targetEnvironment,'exportToS3'=>$_exportToS3));
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
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
	 * Set exportToS3
	 * @param ExportToS3TaskType exportToS3
	 * @return ExportToS3TaskType
	 */
	public function setExportToS3($_exportToS3)
	{
		return ($this->exportToS3 = $_exportToS3);
	}
	/**
	 * Get exportToS3
	 * @return AmazonEc2TypeExportToS3TaskType
	 */
	public function getExportToS3()
	{
		return $this->exportToS3;
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