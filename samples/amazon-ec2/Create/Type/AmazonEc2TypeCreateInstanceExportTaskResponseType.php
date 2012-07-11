<?php
/**
 * Class file for AmazonEc2TypeCreateInstanceExportTaskResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateInstanceExportTaskResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateInstanceExportTaskResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The exportTask
	 * @var AmazonEc2TypeExportTaskResponseType
	 */
	public $exportTask;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeExportTaskResponseType exportTask
	 * @return AmazonEc2TypeCreateInstanceExportTaskResponseType
	 */
	public function __construct($_requestId = null,$_exportTask = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'exportTask'=>$_exportTask));
	}
	/**
	 * Set requestId
	 * @param string requestId
	 * @return string
	 */
	public function setRequestId($_requestId)
	{
		return ($this->requestId = $_requestId);
	}
	/**
	 * Get requestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->requestId;
	}
	/**
	 * Set exportTask
	 * @param ExportTaskResponseType exportTask
	 * @return ExportTaskResponseType
	 */
	public function setExportTask($_exportTask)
	{
		return ($this->exportTask = $_exportTask);
	}
	/**
	 * Get exportTask
	 * @return AmazonEc2TypeExportTaskResponseType
	 */
	public function getExportTask()
	{
		return $this->exportTask;
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