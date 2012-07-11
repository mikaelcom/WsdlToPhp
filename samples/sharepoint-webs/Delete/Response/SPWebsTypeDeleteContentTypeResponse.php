<?php
/**
 * Class file for SPWebsTypeDeleteContentTypeResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeDeleteContentTypeResponse
 * @date 06/07/2012
 */
class SPWebsTypeDeleteContentTypeResponse extends SPWebsWsdlClass
{
	/**
	 * The DeleteContentTypeResult
	 * @var SPWebsTypeDeleteContentTypeResult
	 */
	public $DeleteContentTypeResult;
	/**
	 * Constructor
	 * @param SPWebsTypeDeleteContentTypeResult DeleteContentTypeResult
	 * @return SPWebsTypeDeleteContentTypeResponse
	 */
	public function __construct($_DeleteContentTypeResult = null)
	{
		parent::__construct(array('DeleteContentTypeResult'=>$_DeleteContentTypeResult));
	}
	/**
	 * Set DeleteContentTypeResult
	 * @param DeleteContentTypeResult DeleteContentTypeResult
	 * @return DeleteContentTypeResult
	 */
	public function setDeleteContentTypeResult($_DeleteContentTypeResult)
	{
		return ($this->DeleteContentTypeResult = $_DeleteContentTypeResult);
	}
	/**
	 * Get DeleteContentTypeResult
	 * @return SPWebsTypeDeleteContentTypeResult
	 */
	public function getDeleteContentTypeResult()
	{
		return $this->DeleteContentTypeResult;
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