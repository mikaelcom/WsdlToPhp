<?php
/**
 * Class file for SPViewsTypeUpdateViewHtml2Response
 * @date 06/07/2012
 */
/**
 * Class SPViewsTypeUpdateViewHtml2Response
 * @date 06/07/2012
 */
class SPViewsTypeUpdateViewHtml2Response extends SPViewsWsdlClass
{
	/**
	 * The UpdateViewHtml2Result
	 * @var SPViewsTypeUpdateViewHtml2Result
	 */
	public $UpdateViewHtml2Result;
	/**
	 * Constructor
	 * @param SPViewsTypeUpdateViewHtml2Result UpdateViewHtml2Result
	 * @return SPViewsTypeUpdateViewHtml2Response
	 */
	public function __construct($_UpdateViewHtml2Result = null)
	{
		parent::__construct(array('UpdateViewHtml2Result'=>$_UpdateViewHtml2Result));
	}
	/**
	 * Set UpdateViewHtml2Result
	 * @param UpdateViewHtml2Result UpdateViewHtml2Result
	 * @return UpdateViewHtml2Result
	 */
	public function setUpdateViewHtml2Result($_UpdateViewHtml2Result)
	{
		return ($this->UpdateViewHtml2Result = $_UpdateViewHtml2Result);
	}
	/**
	 * Get UpdateViewHtml2Result
	 * @return SPViewsTypeUpdateViewHtml2Result
	 */
	public function getUpdateViewHtml2Result()
	{
		return $this->UpdateViewHtml2Result;
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