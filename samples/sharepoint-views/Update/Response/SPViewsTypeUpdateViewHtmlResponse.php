<?php
/**
 * Class file for SPViewsTypeUpdateViewHtmlResponse
 * @date 06/07/2012
 */
/**
 * Class SPViewsTypeUpdateViewHtmlResponse
 * @date 06/07/2012
 */
class SPViewsTypeUpdateViewHtmlResponse extends SPViewsWsdlClass
{
	/**
	 * The UpdateViewHtmlResult
	 * @var SPViewsTypeUpdateViewHtmlResult
	 */
	public $UpdateViewHtmlResult;
	/**
	 * Constructor
	 * @param SPViewsTypeUpdateViewHtmlResult UpdateViewHtmlResult
	 * @return SPViewsTypeUpdateViewHtmlResponse
	 */
	public function __construct($_UpdateViewHtmlResult = null)
	{
		parent::__construct(array('UpdateViewHtmlResult'=>$_UpdateViewHtmlResult));
	}
	/**
	 * Set UpdateViewHtmlResult
	 * @param UpdateViewHtmlResult UpdateViewHtmlResult
	 * @return UpdateViewHtmlResult
	 */
	public function setUpdateViewHtmlResult($_UpdateViewHtmlResult)
	{
		return ($this->UpdateViewHtmlResult = $_UpdateViewHtmlResult);
	}
	/**
	 * Get UpdateViewHtmlResult
	 * @return SPViewsTypeUpdateViewHtmlResult
	 */
	public function getUpdateViewHtmlResult()
	{
		return $this->UpdateViewHtmlResult;
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