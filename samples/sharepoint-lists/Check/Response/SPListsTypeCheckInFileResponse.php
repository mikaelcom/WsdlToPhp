<?php
/**
 * Class file for SPListsTypeCheckInFileResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeCheckInFileResponse
 * @date 07/07/2012
 */
class SPListsTypeCheckInFileResponse extends SPListsWsdlClass
{
	/**
	 * The CheckInFileResult
	 * @var boolean
	 */
	public $CheckInFileResult;
	/**
	 * Constructor
	 * @param boolean CheckInFileResult
	 * @return SPListsTypeCheckInFileResponse
	 */
	public function __construct($_CheckInFileResult = null)
	{
		parent::__construct(array('CheckInFileResult'=>$_CheckInFileResult));
	}
	/**
	 * Set CheckInFileResult
	 * @param boolean CheckInFileResult
	 * @return boolean
	 */
	public function setCheckInFileResult($_CheckInFileResult)
	{
		return ($this->CheckInFileResult = $_CheckInFileResult);
	}
	/**
	 * Get CheckInFileResult
	 * @return boolean
	 */
	public function getCheckInFileResult()
	{
		return $this->CheckInFileResult;
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