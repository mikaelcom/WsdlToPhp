<?php
/**
 * Class file for SPWebsTypeUpdateContentTypeResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeUpdateContentTypeResponse
 * @date 06/07/2012
 */
class SPWebsTypeUpdateContentTypeResponse extends SPWebsWsdlClass
{
	/**
	 * The UpdateContentTypeResult
	 * @var SPWebsTypeUpdateContentTypeResult
	 */
	public $UpdateContentTypeResult;
	/**
	 * Constructor
	 * @param SPWebsTypeUpdateContentTypeResult UpdateContentTypeResult
	 * @return SPWebsTypeUpdateContentTypeResponse
	 */
	public function __construct($_UpdateContentTypeResult = null)
	{
		parent::__construct(array('UpdateContentTypeResult'=>$_UpdateContentTypeResult));
	}
	/**
	 * Set UpdateContentTypeResult
	 * @param UpdateContentTypeResult UpdateContentTypeResult
	 * @return UpdateContentTypeResult
	 */
	public function setUpdateContentTypeResult($_UpdateContentTypeResult)
	{
		return ($this->UpdateContentTypeResult = $_UpdateContentTypeResult);
	}
	/**
	 * Get UpdateContentTypeResult
	 * @return SPWebsTypeUpdateContentTypeResult
	 */
	public function getUpdateContentTypeResult()
	{
		return $this->UpdateContentTypeResult;
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