<?php
/**
 * Class file for SPSitesTypeImportWebResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitesTypeImportWebResponse
 * @date 06/07/2012
 */
class SPSitesTypeImportWebResponse extends SPSitesWsdlClass
{
	/**
	 * The ImportWebResult
	 * @var int
	 */
	public $ImportWebResult;
	/**
	 * Constructor
	 * @param int ImportWebResult
	 * @return SPSitesTypeImportWebResponse
	 */
	public function __construct($_ImportWebResult = null)
	{
		parent::__construct(array('ImportWebResult'=>$_ImportWebResult));
	}
	/**
	 * Set ImportWebResult
	 * @param int ImportWebResult
	 * @return int
	 */
	public function setImportWebResult($_ImportWebResult)
	{
		return ($this->ImportWebResult = $_ImportWebResult);
	}
	/**
	 * Get ImportWebResult
	 * @return int
	 */
	public function getImportWebResult()
	{
		return $this->ImportWebResult;
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