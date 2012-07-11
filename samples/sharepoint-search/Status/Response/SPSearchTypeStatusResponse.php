<?php
/**
 * Class file for SPSearchTypeStatusResponse
 * @date 06/07/2012
 */
/**
 * Class SPSearchTypeStatusResponse
 * @date 06/07/2012
 */
class SPSearchTypeStatusResponse extends SPSearchWsdlClass
{
	/**
	 * The StatusResult
	 * @var string
	 */
	public $StatusResult;
	/**
	 * Constructor
	 * @param string StatusResult
	 * @return SPSearchTypeStatusResponse
	 */
	public function __construct($_StatusResult = null)
	{
		parent::__construct(array('StatusResult'=>$_StatusResult));
	}
	/**
	 * Set StatusResult
	 * @param string StatusResult
	 * @return string
	 */
	public function setStatusResult($_StatusResult)
	{
		return ($this->StatusResult = $_StatusResult);
	}
	/**
	 * Get StatusResult
	 * @return string
	 */
	public function getStatusResult()
	{
		return $this->StatusResult;
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