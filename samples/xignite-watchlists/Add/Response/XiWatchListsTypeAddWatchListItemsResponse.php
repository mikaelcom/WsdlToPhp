<?php
/**
 * Class file for XiWatchListsTypeAddWatchListItemsResponse
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeAddWatchListItemsResponse
 * @date 08/07/2012
 */
class XiWatchListsTypeAddWatchListItemsResponse extends XiWatchListsWsdlClass
{
	/**
	 * The AddWatchListItemsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypeWatchList
	 */
	public $AddWatchListItemsResult;
	/**
	 * Constructor
	 * @param XiWatchListsTypeWatchList AddWatchListItemsResult
	 * @return XiWatchListsTypeAddWatchListItemsResponse
	 */
	public function __construct($_AddWatchListItemsResult = null)
	{
		parent::__construct(array('AddWatchListItemsResult'=>$_AddWatchListItemsResult));
	}
	/**
	 * Set AddWatchListItemsResult
	 * @param WatchList AddWatchListItemsResult
	 * @return WatchList
	 */
	public function setAddWatchListItemsResult($_AddWatchListItemsResult)
	{
		return ($this->AddWatchListItemsResult = $_AddWatchListItemsResult);
	}
	/**
	 * Get AddWatchListItemsResult
	 * @return XiWatchListsTypeWatchList
	 */
	public function getAddWatchListItemsResult()
	{
		return $this->AddWatchListItemsResult;
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