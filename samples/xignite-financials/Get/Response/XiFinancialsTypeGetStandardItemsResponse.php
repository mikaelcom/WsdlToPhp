<?php
/**
 * Class file for XiFinancialsTypeGetStandardItemsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetStandardItemsResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetStandardItemsResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetStandardItemsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeArrayOfStandardItem
	 */
	public $GetStandardItemsResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeArrayOfStandardItem GetStandardItemsResult
	 * @return XiFinancialsTypeGetStandardItemsResponse
	 */
	public function __construct($_GetStandardItemsResult = null)
	{
		parent::__construct(array('GetStandardItemsResult'=>new XiFinancialsTypeArrayOfStandardItem($_GetStandardItemsResult)));
	}
	/**
	 * Set GetStandardItemsResult
	 * @param ArrayOfStandardItem GetStandardItemsResult
	 * @return ArrayOfStandardItem
	 */
	public function setGetStandardItemsResult($_GetStandardItemsResult)
	{
		return ($this->GetStandardItemsResult = $_GetStandardItemsResult);
	}
	/**
	 * Get GetStandardItemsResult
	 * @return XiFinancialsTypeArrayOfStandardItem
	 */
	public function getGetStandardItemsResult()
	{
		return $this->GetStandardItemsResult;
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