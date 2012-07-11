<?php
/**
 * Class file for XiWatchListsTypeAddWatchListCurrencyResponse
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeAddWatchListCurrencyResponse
 * @date 08/07/2012
 */
class XiWatchListsTypeAddWatchListCurrencyResponse extends XiWatchListsWsdlClass
{
	/**
	 * The AddWatchListCurrencyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypeWatchList
	 */
	public $AddWatchListCurrencyResult;
	/**
	 * Constructor
	 * @param XiWatchListsTypeWatchList AddWatchListCurrencyResult
	 * @return XiWatchListsTypeAddWatchListCurrencyResponse
	 */
	public function __construct($_AddWatchListCurrencyResult = null)
	{
		parent::__construct(array('AddWatchListCurrencyResult'=>$_AddWatchListCurrencyResult));
	}
	/**
	 * Set AddWatchListCurrencyResult
	 * @param WatchList AddWatchListCurrencyResult
	 * @return WatchList
	 */
	public function setAddWatchListCurrencyResult($_AddWatchListCurrencyResult)
	{
		return ($this->AddWatchListCurrencyResult = $_AddWatchListCurrencyResult);
	}
	/**
	 * Get AddWatchListCurrencyResult
	 * @return XiWatchListsTypeWatchList
	 */
	public function getAddWatchListCurrencyResult()
	{
		return $this->AddWatchListCurrencyResult;
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