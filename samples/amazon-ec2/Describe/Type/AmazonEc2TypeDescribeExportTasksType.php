<?php
/**
 * Class file for AmazonEc2TypeDescribeExportTasksType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDescribeExportTasksType
 * @date 10/07/2012
 */
class AmazonEc2TypeDescribeExportTasksType extends AmazonEc2WsdlClass
{
	/**
	 * The exportTaskIdSet
	 * @var AmazonEc2TypeExportTaskIdSetType
	 */
	public $exportTaskIdSet;
	/**
	 * Constructor
	 * @param AmazonEc2TypeExportTaskIdSetType exportTaskIdSet
	 * @return AmazonEc2TypeDescribeExportTasksType
	 */
	public function __construct($_exportTaskIdSet = null)
	{
		parent::__construct(array('exportTaskIdSet'=>$_exportTaskIdSet));
	}
	/**
	 * Set exportTaskIdSet
	 * @param ExportTaskIdSetType exportTaskIdSet
	 * @return ExportTaskIdSetType
	 */
	public function setExportTaskIdSet($_exportTaskIdSet)
	{
		return ($this->exportTaskIdSet = $_exportTaskIdSet);
	}
	/**
	 * Get exportTaskIdSet
	 * @return AmazonEc2TypeExportTaskIdSetType
	 */
	public function getExportTaskIdSet()
	{
		return $this->exportTaskIdSet;
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