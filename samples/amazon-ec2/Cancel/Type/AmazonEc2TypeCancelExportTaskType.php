<?php
/**
 * Class file for AmazonEc2TypeCancelExportTaskType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCancelExportTaskType
 * @date 10/07/2012
 */
class AmazonEc2TypeCancelExportTaskType extends AmazonEc2WsdlClass
{
	/**
	 * The exportTaskId
	 * @var string
	 */
	public $exportTaskId;
	/**
	 * Constructor
	 * @param string exportTaskId
	 * @return AmazonEc2TypeCancelExportTaskType
	 */
	public function __construct($_exportTaskId = null)
	{
		parent::__construct(array('exportTaskId'=>$_exportTaskId));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>