<?php
/**
 * Class file for XiWatchListsTypeAddWatchListMetalResponse
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeAddWatchListMetalResponse
 * @date 08/07/2012
 */
class XiWatchListsTypeAddWatchListMetalResponse extends XiWatchListsWsdlClass
{
	/**
	 * The AddWatchListMetalResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypeWatchList
	 */
	public $AddWatchListMetalResult;
	/**
	 * Constructor
	 * @param XiWatchListsTypeWatchList AddWatchListMetalResult
	 * @return XiWatchListsTypeAddWatchListMetalResponse
	 */
	public function __construct($_AddWatchListMetalResult = null)
	{
		parent::__construct(array('AddWatchListMetalResult'=>$_AddWatchListMetalResult));
	}
	/**
	 * Set AddWatchListMetalResult
	 * @param WatchList AddWatchListMetalResult
	 * @return WatchList
	 */
	public function setAddWatchListMetalResult($_AddWatchListMetalResult)
	{
		return ($this->AddWatchListMetalResult = $_AddWatchListMetalResult);
	}
	/**
	 * Get AddWatchListMetalResult
	 * @return XiWatchListsTypeWatchList
	 */
	public function getAddWatchListMetalResult()
	{
		return $this->AddWatchListMetalResult;
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