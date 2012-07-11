<?php
/**
 * Class file for SPWebsTypeGetListTemplatesResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeGetListTemplatesResponse
 * @date 06/07/2012
 */
class SPWebsTypeGetListTemplatesResponse extends SPWebsWsdlClass
{
	/**
	 * The GetListTemplatesResult
	 * @var SPWebsTypeGetListTemplatesResult
	 */
	public $GetListTemplatesResult;
	/**
	 * Constructor
	 * @param SPWebsTypeGetListTemplatesResult GetListTemplatesResult
	 * @return SPWebsTypeGetListTemplatesResponse
	 */
	public function __construct($_GetListTemplatesResult = null)
	{
		parent::__construct(array('GetListTemplatesResult'=>$_GetListTemplatesResult));
	}
	/**
	 * Set GetListTemplatesResult
	 * @param GetListTemplatesResult GetListTemplatesResult
	 * @return GetListTemplatesResult
	 */
	public function setGetListTemplatesResult($_GetListTemplatesResult)
	{
		return ($this->GetListTemplatesResult = $_GetListTemplatesResult);
	}
	/**
	 * Get GetListTemplatesResult
	 * @return SPWebsTypeGetListTemplatesResult
	 */
	public function getGetListTemplatesResult()
	{
		return $this->GetListTemplatesResult;
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