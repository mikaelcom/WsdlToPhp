<?php
/**
 * Class file for SPWebsTypeCreateContentTypeResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeCreateContentTypeResponse
 * @date 06/07/2012
 */
class SPWebsTypeCreateContentTypeResponse extends SPWebsWsdlClass
{
	/**
	 * The CreateContentTypeResult
	 * @var string
	 */
	public $CreateContentTypeResult;
	/**
	 * Constructor
	 * @param string CreateContentTypeResult
	 * @return SPWebsTypeCreateContentTypeResponse
	 */
	public function __construct($_CreateContentTypeResult = null)
	{
		parent::__construct(array('CreateContentTypeResult'=>$_CreateContentTypeResult));
	}
	/**
	 * Set CreateContentTypeResult
	 * @param string CreateContentTypeResult
	 * @return string
	 */
	public function setCreateContentTypeResult($_CreateContentTypeResult)
	{
		return ($this->CreateContentTypeResult = $_CreateContentTypeResult);
	}
	/**
	 * Get CreateContentTypeResult
	 * @return string
	 */
	public function getCreateContentTypeResult()
	{
		return $this->CreateContentTypeResult;
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