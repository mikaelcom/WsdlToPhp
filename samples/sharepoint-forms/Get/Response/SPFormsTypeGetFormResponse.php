<?php
/**
 * Class file for SPFormsTypeGetFormResponse
 * @date 06/07/2012
 */
/**
 * Class SPFormsTypeGetFormResponse
 * @date 06/07/2012
 */
class SPFormsTypeGetFormResponse extends SPFormsWsdlClass
{
	/**
	 * The GetFormResult
	 * @var SPFormsTypeGetFormResult
	 */
	public $GetFormResult;
	/**
	 * Constructor
	 * @param SPFormsTypeGetFormResult GetFormResult
	 * @return SPFormsTypeGetFormResponse
	 */
	public function __construct($_GetFormResult = null)
	{
		parent::__construct(array('GetFormResult'=>$_GetFormResult));
	}
	/**
	 * Set GetFormResult
	 * @param GetFormResult GetFormResult
	 * @return GetFormResult
	 */
	public function setGetFormResult($_GetFormResult)
	{
		return ($this->GetFormResult = $_GetFormResult);
	}
	/**
	 * Get GetFormResult
	 * @return SPFormsTypeGetFormResult
	 */
	public function getGetFormResult()
	{
		return $this->GetFormResult;
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