<?php
/**
 * Class file for XiWatchListsTypeGetWatchListResponse
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeGetWatchListResponse
 * @date 08/07/2012
 */
class XiWatchListsTypeGetWatchListResponse extends XiWatchListsWsdlClass
{
	/**
	 * The GetWatchListResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypeWatchList
	 */
	public $GetWatchListResult;
	/**
	 * Constructor
	 * @param XiWatchListsTypeWatchList GetWatchListResult
	 * @return XiWatchListsTypeGetWatchListResponse
	 */
	public function __construct($_GetWatchListResult = null)
	{
		parent::__construct(array('GetWatchListResult'=>$_GetWatchListResult));
	}
	/**
	 * Set GetWatchListResult
	 * @param WatchList GetWatchListResult
	 * @return WatchList
	 */
	public function setGetWatchListResult($_GetWatchListResult)
	{
		return ($this->GetWatchListResult = $_GetWatchListResult);
	}
	/**
	 * Get GetWatchListResult
	 * @return XiWatchListsTypeWatchList
	 */
	public function getGetWatchListResult()
	{
		return $this->GetWatchListResult;
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