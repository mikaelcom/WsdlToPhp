<?php
/**
 * Class file for AmazonEc2TypeDescribeExportTasksResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeExportTasksResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeExportTasksResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The requestId
	 * @var string
	 */
	public $requestId;
	/**
	 * The exportTaskSet
	 * @var AmazonEc2TypeExportTaskSetResponseType
	 */
	public $exportTaskSet;
	/**
	 * Constructor
	 * @param string requestId
	 * @param AmazonEc2TypeExportTaskSetResponseType exportTaskSet
	 * @return AmazonEc2TypeDescribeExportTasksResponseType
	 */
	public function __construct($_requestId = null,$_exportTaskSet = null)
	{
		parent::__construct(array('requestId'=>$_requestId,'exportTaskSet'=>$_exportTaskSet));
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
	 * Set exportTaskSet
	 * @param ExportTaskSetResponseType exportTaskSet
	 * @return ExportTaskSetResponseType
	 */
	public function setExportTaskSet($_exportTaskSet)
	{
		return ($this->exportTaskSet = $_exportTaskSet);
	}
	/**
	 * Get exportTaskSet
	 * @return AmazonEc2TypeExportTaskSetResponseType
	 */
	public function getExportTaskSet()
	{
		return $this->exportTaskSet;
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