<?php
/**
 * Class file for XiWatchListsTypeDeleteWatchListResponse
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeDeleteWatchListResponse
 * @date 08/07/2012
 */
class XiWatchListsTypeDeleteWatchListResponse extends XiWatchListsWsdlClass
{
	/**
	 * The DeleteWatchListResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypeBooleanResult
	 */
	public $DeleteWatchListResult;
	/**
	 * Constructor
	 * @param XiWatchListsTypeBooleanResult DeleteWatchListResult
	 * @return XiWatchListsTypeDeleteWatchListResponse
	 */
	public function __construct($_DeleteWatchListResult = null)
	{
		parent::__construct(array('DeleteWatchListResult'=>$_DeleteWatchListResult));
	}
	/**
	 * Set DeleteWatchListResult
	 * @param BooleanResult DeleteWatchListResult
	 * @return BooleanResult
	 */
	public function setDeleteWatchListResult($_DeleteWatchListResult)
	{
		return ($this->DeleteWatchListResult = $_DeleteWatchListResult);
	}
	/**
	 * Get DeleteWatchListResult
	 * @return XiWatchListsTypeBooleanResult
	 */
	public function getDeleteWatchListResult()
	{
		return $this->DeleteWatchListResult;
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