<?php
/**
 * Class file for AmazonEc2TypeExportTaskResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeExportTaskResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeExportTaskResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The exportTaskId
	 * @var string
	 */
	public $exportTaskId;
	/**
	 * The description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $description;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * The statusMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $statusMessage;
	/**
	 * The instanceExport
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeInstanceExportTaskResponseType
	 */
	public $instanceExport;
	/**
	 * The exportToS3
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeExportToS3TaskResponseType
	 */
	public $exportToS3;
	/**
	 * Constructor
	 * @param string exportTaskId
	 * @param string description
	 * @param string state
	 * @param string statusMessage
	 * @param AmazonEc2TypeInstanceExportTaskResponseType instanceExport
	 * @param AmazonEc2TypeExportToS3TaskResponseType exportToS3
	 * @return AmazonEc2TypeExportTaskResponseType
	 */
	public function __construct($_exportTaskId = null,$_description = null,$_state = null,$_statusMessage = null,$_instanceExport = null,$_exportToS3 = null)
	{
		parent::__construct(array('exportTaskId'=>$_exportTaskId,'description'=>$_description,'state'=>$_state,'statusMessage'=>$_statusMessage,'instanceExport'=>$_instanceExport,'exportToS3'=>$_exportToS3));
	}
	/**
	 * Set exportTaskId
	 * @param string exportTaskId
	 * @return string
	 */
	public function setExportTaskId($_exportTaskId)
	{
		return ($this->exportTaskId = $_exportTaskId);
	}
	/**
	 * Get exportTaskId
	 * @return string
	 */
	public function getExportTaskId()
	{
		return $this->exportTaskId;
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
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
	}
	/**
	 * Set statusMessage
	 * @param string statusMessage
	 * @return string
	 */
	public function setStatusMessage($_statusMessage)
	{
		return ($this->statusMessage = $_statusMessage);
	}
	/**
	 * Get statusMessage
	 * @return string
	 */
	public function getStatusMessage()
	{
		return $this->statusMessage;
	}
	/**
	 * Set instanceExport
	 * @param InstanceExportTaskResponseType instanceExport
	 * @return InstanceExportTaskResponseType
	 */
	public function setInstanceExport($_instanceExport)
	{
		return ($this->instanceExport = $_instanceExport);
	}
	/**
	 * Get instanceExport
	 * @return AmazonEc2TypeInstanceExportTaskResponseType
	 */
	public function getInstanceExport()
	{
		return $this->instanceExport;
	}
	/**
	 * Set exportToS3
	 * @param ExportToS3TaskResponseType exportToS3
	 * @return ExportToS3TaskResponseType
	 */
	public function setExportToS3($_exportToS3)
	{
		return ($this->exportToS3 = $_exportToS3);
	}
	/**
	 * Get exportToS3
	 * @return AmazonEc2TypeExportToS3TaskResponseType
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