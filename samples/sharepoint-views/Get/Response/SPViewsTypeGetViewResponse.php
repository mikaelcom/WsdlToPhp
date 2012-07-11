<?php
/**
 * Class file for SPViewsTypeGetViewResponse
 * @date 06/07/2012
 */
/**
 * Class SPViewsTypeGetViewResponse
 * @date 06/07/2012
 */
class SPViewsTypeGetViewResponse extends SPViewsWsdlClass
{
	/**
	 * The GetViewResult
	 * @var SPViewsTypeGetViewResult
	 */
	public $GetViewResult;
	/**
	 * Constructor
	 * @param SPViewsTypeGetViewResult GetViewResult
	 * @return SPViewsTypeGetViewResponse
	 */
	public function __construct($_GetViewResult = null)
	{
		parent::__construct(array('GetViewResult'=>$_GetViewResult));
	}
	/**
	 * Set GetViewResult
	 * @param GetViewResult GetViewResult
	 * @return GetViewResult
	 */
	public function setGetViewResult($_GetViewResult)
	{
		return ($this->GetViewResult = $_GetViewResult);
	}
	/**
	 * Get GetViewResult
	 * @return SPViewsTypeGetViewResult
	 */
	public function getGetViewResult()
	{
		return $this->GetViewResult;
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