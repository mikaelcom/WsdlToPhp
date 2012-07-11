<?php
/**
 * Class file for SPViewsTypeUpdateViewResponse
 * @date 06/07/2012
 */
/**
 * Class SPViewsTypeUpdateViewResponse
 * @date 06/07/2012
 */
class SPViewsTypeUpdateViewResponse extends SPViewsWsdlClass
{
	/**
	 * The UpdateViewResult
	 * @var SPViewsTypeUpdateViewResult
	 */
	public $UpdateViewResult;
	/**
	 * Constructor
	 * @param SPViewsTypeUpdateViewResult UpdateViewResult
	 * @return SPViewsTypeUpdateViewResponse
	 */
	public function __construct($_UpdateViewResult = null)
	{
		parent::__construct(array('UpdateViewResult'=>$_UpdateViewResult));
	}
	/**
	 * Set UpdateViewResult
	 * @param UpdateViewResult UpdateViewResult
	 * @return UpdateViewResult
	 */
	public function setUpdateViewResult($_UpdateViewResult)
	{
		return ($this->UpdateViewResult = $_UpdateViewResult);
	}
	/**
	 * Get UpdateViewResult
	 * @return SPViewsTypeUpdateViewResult
	 */
	public function getUpdateViewResult()
	{
		return $this->UpdateViewResult;
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