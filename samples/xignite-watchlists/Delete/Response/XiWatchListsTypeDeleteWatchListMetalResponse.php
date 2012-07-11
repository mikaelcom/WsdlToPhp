<?php
/**
 * Class file for XiWatchListsTypeDeleteWatchListMetalResponse
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeDeleteWatchListMetalResponse
 * @date 08/07/2012
 */
class XiWatchListsTypeDeleteWatchListMetalResponse extends XiWatchListsWsdlClass
{
	/**
	 * The DeleteWatchListMetalResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypeWatchList
	 */
	public $DeleteWatchListMetalResult;
	/**
	 * Constructor
	 * @param XiWatchListsTypeWatchList DeleteWatchListMetalResult
	 * @return XiWatchListsTypeDeleteWatchListMetalResponse
	 */
	public function __construct($_DeleteWatchListMetalResult = null)
	{
		parent::__construct(array('DeleteWatchListMetalResult'=>$_DeleteWatchListMetalResult));
	}
	/**
	 * Set DeleteWatchListMetalResult
	 * @param WatchList DeleteWatchListMetalResult
	 * @return WatchList
	 */
	public function setDeleteWatchListMetalResult($_DeleteWatchListMetalResult)
	{
		return ($this->DeleteWatchListMetalResult = $_DeleteWatchListMetalResult);
	}
	/**
	 * Get DeleteWatchListMetalResult
	 * @return XiWatchListsTypeWatchList
	 */
	public function getDeleteWatchListMetalResult()
	{
		return $this->DeleteWatchListMetalResult;
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