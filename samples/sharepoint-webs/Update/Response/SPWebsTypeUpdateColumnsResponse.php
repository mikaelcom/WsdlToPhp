<?php
/**
 * Class file for SPWebsTypeUpdateColumnsResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeUpdateColumnsResponse
 * @date 06/07/2012
 */
class SPWebsTypeUpdateColumnsResponse extends SPWebsWsdlClass
{
	/**
	 * The UpdateColumnsResult
	 * @var SPWebsTypeUpdateColumnsResult
	 */
	public $UpdateColumnsResult;
	/**
	 * Constructor
	 * @param SPWebsTypeUpdateColumnsResult UpdateColumnsResult
	 * @return SPWebsTypeUpdateColumnsResponse
	 */
	public function __construct($_UpdateColumnsResult = null)
	{
		parent::__construct(array('UpdateColumnsResult'=>$_UpdateColumnsResult));
	}
	/**
	 * Set UpdateColumnsResult
	 * @param UpdateColumnsResult UpdateColumnsResult
	 * @return UpdateColumnsResult
	 */
	public function setUpdateColumnsResult($_UpdateColumnsResult)
	{
		return ($this->UpdateColumnsResult = $_UpdateColumnsResult);
	}
	/**
	 * Get UpdateColumnsResult
	 * @return SPWebsTypeUpdateColumnsResult
	 */
	public function getUpdateColumnsResult()
	{
		return $this->UpdateColumnsResult;
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