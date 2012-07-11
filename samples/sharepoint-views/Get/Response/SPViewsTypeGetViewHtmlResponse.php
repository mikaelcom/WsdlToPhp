<?php
/**
 * Class file for SPViewsTypeGetViewHtmlResponse
 * @date 06/07/2012
 */
/**
 * Class SPViewsTypeGetViewHtmlResponse
 * @date 06/07/2012
 */
class SPViewsTypeGetViewHtmlResponse extends SPViewsWsdlClass
{
	/**
	 * The GetViewHtmlResult
	 * @var SPViewsTypeGetViewHtmlResult
	 */
	public $GetViewHtmlResult;
	/**
	 * Constructor
	 * @param SPViewsTypeGetViewHtmlResult GetViewHtmlResult
	 * @return SPViewsTypeGetViewHtmlResponse
	 */
	public function __construct($_GetViewHtmlResult = null)
	{
		parent::__construct(array('GetViewHtmlResult'=>$_GetViewHtmlResult));
	}
	/**
	 * Set GetViewHtmlResult
	 * @param GetViewHtmlResult GetViewHtmlResult
	 * @return GetViewHtmlResult
	 */
	public function setGetViewHtmlResult($_GetViewHtmlResult)
	{
		return ($this->GetViewHtmlResult = $_GetViewHtmlResult);
	}
	/**
	 * Get GetViewHtmlResult
	 * @return SPViewsTypeGetViewHtmlResult
	 */
	public function getGetViewHtmlResult()
	{
		return $this->GetViewHtmlResult;
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