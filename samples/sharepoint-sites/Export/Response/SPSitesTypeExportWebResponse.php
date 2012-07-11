<?php
/**
 * Class file for SPSitesTypeExportWebResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitesTypeExportWebResponse
 * @date 06/07/2012
 */
class SPSitesTypeExportWebResponse extends SPSitesWsdlClass
{
	/**
	 * The ExportWebResult
	 * @var int
	 */
	public $ExportWebResult;
	/**
	 * Constructor
	 * @param int ExportWebResult
	 * @return SPSitesTypeExportWebResponse
	 */
	public function __construct($_ExportWebResult = null)
	{
		parent::__construct(array('ExportWebResult'=>$_ExportWebResult));
	}
	/**
	 * Set ExportWebResult
	 * @param int ExportWebResult
	 * @return int
	 */
	public function setExportWebResult($_ExportWebResult)
	{
		return ($this->ExportWebResult = $_ExportWebResult);
	}
	/**
	 * Get ExportWebResult
	 * @return int
	 */
	public function getExportWebResult()
	{
		return $this->ExportWebResult;
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