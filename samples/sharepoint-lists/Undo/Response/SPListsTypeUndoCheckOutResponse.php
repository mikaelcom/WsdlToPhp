<?php
/**
 * Class file for SPListsTypeUndoCheckOutResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeUndoCheckOutResponse
 * @date 07/07/2012
 */
class SPListsTypeUndoCheckOutResponse extends SPListsWsdlClass
{
	/**
	 * The UndoCheckOutResult
	 * @var boolean
	 */
	public $UndoCheckOutResult;
	/**
	 * Constructor
	 * @param boolean UndoCheckOutResult
	 * @return SPListsTypeUndoCheckOutResponse
	 */
	public function __construct($_UndoCheckOutResult = null)
	{
		parent::__construct(array('UndoCheckOutResult'=>$_UndoCheckOutResult));
	}
	/**
	 * Set UndoCheckOutResult
	 * @param boolean UndoCheckOutResult
	 * @return boolean
	 */
	public function setUndoCheckOutResult($_UndoCheckOutResult)
	{
		return ($this->UndoCheckOutResult = $_UndoCheckOutResult);
	}
	/**
	 * Get UndoCheckOutResult
	 * @return boolean
	 */
	public function getUndoCheckOutResult()
	{
		return $this->UndoCheckOutResult;
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