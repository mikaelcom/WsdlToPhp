<?php
/**
 * Class file for SPVersionsTypeRestoreVersionResponse
 * @date 06/07/2012
 */
/**
 * Class SPVersionsTypeRestoreVersionResponse
 * @date 06/07/2012
 */
class SPVersionsTypeRestoreVersionResponse extends SPVersionsWsdlClass
{
	/**
	 * The RestoreVersionResult
	 * @var SPVersionsTypeRestoreVersionResult
	 */
	public $RestoreVersionResult;
	/**
	 * Constructor
	 * @param SPVersionsTypeRestoreVersionResult RestoreVersionResult
	 * @return SPVersionsTypeRestoreVersionResponse
	 */
	public function __construct($_RestoreVersionResult = null)
	{
		parent::__construct(array('RestoreVersionResult'=>$_RestoreVersionResult));
	}
	/**
	 * Set RestoreVersionResult
	 * @param RestoreVersionResult RestoreVersionResult
	 * @return RestoreVersionResult
	 */
	public function setRestoreVersionResult($_RestoreVersionResult)
	{
		return ($this->RestoreVersionResult = $_RestoreVersionResult);
	}
	/**
	 * Get RestoreVersionResult
	 * @return SPVersionsTypeRestoreVersionResult
	 */
	public function getRestoreVersionResult()
	{
		return $this->RestoreVersionResult;
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