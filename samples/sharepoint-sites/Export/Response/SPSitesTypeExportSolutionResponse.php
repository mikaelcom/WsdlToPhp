<?php
/**
 * Class file for SPSitesTypeExportSolutionResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitesTypeExportSolutionResponse
 * @date 06/07/2012
 */
class SPSitesTypeExportSolutionResponse extends SPSitesWsdlClass
{
	/**
	 * The ExportSolutionResult
	 * @var string
	 */
	public $ExportSolutionResult;
	/**
	 * Constructor
	 * @param string ExportSolutionResult
	 * @return SPSitesTypeExportSolutionResponse
	 */
	public function __construct($_ExportSolutionResult = null)
	{
		parent::__construct(array('ExportSolutionResult'=>$_ExportSolutionResult));
	}
	/**
	 * Set ExportSolutionResult
	 * @param string ExportSolutionResult
	 * @return string
	 */
	public function setExportSolutionResult($_ExportSolutionResult)
	{
		return ($this->ExportSolutionResult = $_ExportSolutionResult);
	}
	/**
	 * Get ExportSolutionResult
	 * @return string
	 */
	public function getExportSolutionResult()
	{
		return $this->ExportSolutionResult;
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