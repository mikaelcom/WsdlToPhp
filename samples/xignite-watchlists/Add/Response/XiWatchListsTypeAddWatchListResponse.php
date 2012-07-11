<?php
/**
 * Class file for XiWatchListsTypeAddWatchListResponse
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeAddWatchListResponse
 * @date 08/07/2012
 */
class XiWatchListsTypeAddWatchListResponse extends XiWatchListsWsdlClass
{
	/**
	 * The AddWatchListResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypeWatchList
	 */
	public $AddWatchListResult;
	/**
	 * Constructor
	 * @param XiWatchListsTypeWatchList AddWatchListResult
	 * @return XiWatchListsTypeAddWatchListResponse
	 */
	public function __construct($_AddWatchListResult = null)
	{
		parent::__construct(array('AddWatchListResult'=>$_AddWatchListResult));
	}
	/**
	 * Set AddWatchListResult
	 * @param WatchList AddWatchListResult
	 * @return WatchList
	 */
	public function setAddWatchListResult($_AddWatchListResult)
	{
		return ($this->AddWatchListResult = $_AddWatchListResult);
	}
	/**
	 * Get AddWatchListResult
	 * @return XiWatchListsTypeWatchList
	 */
	public function getAddWatchListResult()
	{
		return $this->AddWatchListResult;
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