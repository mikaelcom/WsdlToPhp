<?php
/**
 * Class file for XiWatchListsTypeListWatchListsResponse
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeListWatchListsResponse
 * @date 08/07/2012
 */
class XiWatchListsTypeListWatchListsResponse extends XiWatchListsWsdlClass
{
	/**
	 * The ListWatchListsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypeArrayOfWatchList
	 */
	public $ListWatchListsResult;
	/**
	 * Constructor
	 * @param XiWatchListsTypeArrayOfWatchList ListWatchListsResult
	 * @return XiWatchListsTypeListWatchListsResponse
	 */
	public function __construct($_ListWatchListsResult = null)
	{
		parent::__construct(array('ListWatchListsResult'=>new XiWatchListsTypeArrayOfWatchList($_ListWatchListsResult)));
	}
	/**
	 * Set ListWatchListsResult
	 * @param ArrayOfWatchList ListWatchListsResult
	 * @return ArrayOfWatchList
	 */
	public function setListWatchListsResult($_ListWatchListsResult)
	{
		return ($this->ListWatchListsResult = $_ListWatchListsResult);
	}
	/**
	 * Get ListWatchListsResult
	 * @return XiWatchListsTypeArrayOfWatchList
	 */
	public function getListWatchListsResult()
	{
		return $this->ListWatchListsResult;
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