<?php
/**
 * Class file for SPListsTypeCheckOutFileResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeCheckOutFileResponse
 * @date 07/07/2012
 */
class SPListsTypeCheckOutFileResponse extends SPListsWsdlClass
{
	/**
	 * The CheckOutFileResult
	 * @var boolean
	 */
	public $CheckOutFileResult;
	/**
	 * Constructor
	 * @param boolean CheckOutFileResult
	 * @return SPListsTypeCheckOutFileResponse
	 */
	public function __construct($_CheckOutFileResult = null)
	{
		parent::__construct(array('CheckOutFileResult'=>$_CheckOutFileResult));
	}
	/**
	 * Set CheckOutFileResult
	 * @param boolean CheckOutFileResult
	 * @return boolean
	 */
	public function setCheckOutFileResult($_CheckOutFileResult)
	{
		return ($this->CheckOutFileResult = $_CheckOutFileResult);
	}
	/**
	 * Get CheckOutFileResult
	 * @return boolean
	 */
	public function getCheckOutFileResult()
	{
		return $this->CheckOutFileResult;
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