<?php
/**
 * Class file for XiWatchListsTypeDeleteWatchListRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeDeleteWatchListRateResponse
 * @date 08/07/2012
 */
class XiWatchListsTypeDeleteWatchListRateResponse extends XiWatchListsWsdlClass
{
	/**
	 * The DeleteWatchListRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypeWatchList
	 */
	public $DeleteWatchListRateResult;
	/**
	 * Constructor
	 * @param XiWatchListsTypeWatchList DeleteWatchListRateResult
	 * @return XiWatchListsTypeDeleteWatchListRateResponse
	 */
	public function __construct($_DeleteWatchListRateResult = null)
	{
		parent::__construct(array('DeleteWatchListRateResult'=>$_DeleteWatchListRateResult));
	}
	/**
	 * Set DeleteWatchListRateResult
	 * @param WatchList DeleteWatchListRateResult
	 * @return WatchList
	 */
	public function setDeleteWatchListRateResult($_DeleteWatchListRateResult)
	{
		return ($this->DeleteWatchListRateResult = $_DeleteWatchListRateResult);
	}
	/**
	 * Get DeleteWatchListRateResult
	 * @return XiWatchListsTypeWatchList
	 */
	public function getDeleteWatchListRateResult()
	{
		return $this->DeleteWatchListRateResult;
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