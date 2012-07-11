<?php
/**
 * Class file for XiWatchListsTypeAddWatchListRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeAddWatchListRateResponse
 * @date 08/07/2012
 */
class XiWatchListsTypeAddWatchListRateResponse extends XiWatchListsWsdlClass
{
	/**
	 * The AddWatchListRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypeWatchList
	 */
	public $AddWatchListRateResult;
	/**
	 * Constructor
	 * @param XiWatchListsTypeWatchList AddWatchListRateResult
	 * @return XiWatchListsTypeAddWatchListRateResponse
	 */
	public function __construct($_AddWatchListRateResult = null)
	{
		parent::__construct(array('AddWatchListRateResult'=>$_AddWatchListRateResult));
	}
	/**
	 * Set AddWatchListRateResult
	 * @param WatchList AddWatchListRateResult
	 * @return WatchList
	 */
	public function setAddWatchListRateResult($_AddWatchListRateResult)
	{
		return ($this->AddWatchListRateResult = $_AddWatchListRateResult);
	}
	/**
	 * Get AddWatchListRateResult
	 * @return XiWatchListsTypeWatchList
	 */
	public function getAddWatchListRateResult()
	{
		return $this->AddWatchListRateResult;
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