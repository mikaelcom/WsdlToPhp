<?php
/**
 * Class file for SPVersionsTypeDeleteVersionResponse
 * @date 06/07/2012
 */
/**
 * Class SPVersionsTypeDeleteVersionResponse
 * @date 06/07/2012
 */
class SPVersionsTypeDeleteVersionResponse extends SPVersionsWsdlClass
{
	/**
	 * The DeleteVersionResult
	 * @var SPVersionsTypeDeleteVersionResult
	 */
	public $DeleteVersionResult;
	/**
	 * Constructor
	 * @param SPVersionsTypeDeleteVersionResult DeleteVersionResult
	 * @return SPVersionsTypeDeleteVersionResponse
	 */
	public function __construct($_DeleteVersionResult = null)
	{
		parent::__construct(array('DeleteVersionResult'=>$_DeleteVersionResult));
	}
	/**
	 * Set DeleteVersionResult
	 * @param DeleteVersionResult DeleteVersionResult
	 * @return DeleteVersionResult
	 */
	public function setDeleteVersionResult($_DeleteVersionResult)
	{
		return ($this->DeleteVersionResult = $_DeleteVersionResult);
	}
	/**
	 * Get DeleteVersionResult
	 * @return SPVersionsTypeDeleteVersionResult
	 */
	public function getDeleteVersionResult()
	{
		return $this->DeleteVersionResult;
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