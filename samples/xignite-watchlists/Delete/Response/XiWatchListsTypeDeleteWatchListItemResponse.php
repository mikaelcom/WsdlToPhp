<?php
/**
 * Class file for XiWatchListsTypeDeleteWatchListItemResponse
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeDeleteWatchListItemResponse
 * @date 08/07/2012
 */
class XiWatchListsTypeDeleteWatchListItemResponse extends XiWatchListsWsdlClass
{
	/**
	 * The DeleteWatchListItemResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypeWatchList
	 */
	public $DeleteWatchListItemResult;
	/**
	 * Constructor
	 * @param XiWatchListsTypeWatchList DeleteWatchListItemResult
	 * @return XiWatchListsTypeDeleteWatchListItemResponse
	 */
	public function __construct($_DeleteWatchListItemResult = null)
	{
		parent::__construct(array('DeleteWatchListItemResult'=>$_DeleteWatchListItemResult));
	}
	/**
	 * Set DeleteWatchListItemResult
	 * @param WatchList DeleteWatchListItemResult
	 * @return WatchList
	 */
	public function setDeleteWatchListItemResult($_DeleteWatchListItemResult)
	{
		return ($this->DeleteWatchListItemResult = $_DeleteWatchListItemResult);
	}
	/**
	 * Get DeleteWatchListItemResult
	 * @return XiWatchListsTypeWatchList
	 */
	public function getDeleteWatchListItemResult()
	{
		return $this->DeleteWatchListItemResult;
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