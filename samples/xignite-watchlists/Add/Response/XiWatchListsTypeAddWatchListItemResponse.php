<?php
/**
 * Class file for XiWatchListsTypeAddWatchListItemResponse
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeAddWatchListItemResponse
 * @date 08/07/2012
 */
class XiWatchListsTypeAddWatchListItemResponse extends XiWatchListsWsdlClass
{
	/**
	 * The AddWatchListItemResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypeWatchList
	 */
	public $AddWatchListItemResult;
	/**
	 * Constructor
	 * @param XiWatchListsTypeWatchList AddWatchListItemResult
	 * @return XiWatchListsTypeAddWatchListItemResponse
	 */
	public function __construct($_AddWatchListItemResult = null)
	{
		parent::__construct(array('AddWatchListItemResult'=>$_AddWatchListItemResult));
	}
	/**
	 * Set AddWatchListItemResult
	 * @param WatchList AddWatchListItemResult
	 * @return WatchList
	 */
	public function setAddWatchListItemResult($_AddWatchListItemResult)
	{
		return ($this->AddWatchListItemResult = $_AddWatchListItemResult);
	}
	/**
	 * Get AddWatchListItemResult
	 * @return XiWatchListsTypeWatchList
	 */
	public function getAddWatchListItemResult()
	{
		return $this->AddWatchListItemResult;
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