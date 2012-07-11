<?php
/**
 * Class file for SPViewsTypeAddViewResponse
 * @date 06/07/2012
 */
/**
 * Class SPViewsTypeAddViewResponse
 * @date 06/07/2012
 */
class SPViewsTypeAddViewResponse extends SPViewsWsdlClass
{
	/**
	 * The AddViewResult
	 * @var SPViewsTypeAddViewResult
	 */
	public $AddViewResult;
	/**
	 * Constructor
	 * @param SPViewsTypeAddViewResult AddViewResult
	 * @return SPViewsTypeAddViewResponse
	 */
	public function __construct($_AddViewResult = null)
	{
		parent::__construct(array('AddViewResult'=>$_AddViewResult));
	}
	/**
	 * Set AddViewResult
	 * @param AddViewResult AddViewResult
	 * @return AddViewResult
	 */
	public function setAddViewResult($_AddViewResult)
	{
		return ($this->AddViewResult = $_AddViewResult);
	}
	/**
	 * Get AddViewResult
	 * @return SPViewsTypeAddViewResult
	 */
	public function getAddViewResult()
	{
		return $this->AddViewResult;
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