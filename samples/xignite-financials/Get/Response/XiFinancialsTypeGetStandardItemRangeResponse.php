<?php
/**
 * Class file for XiFinancialsTypeGetStandardItemRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetStandardItemRangeResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetStandardItemRangeResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetStandardItemRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeArrayOfStandardItem
	 */
	public $GetStandardItemRangeResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeArrayOfStandardItem GetStandardItemRangeResult
	 * @return XiFinancialsTypeGetStandardItemRangeResponse
	 */
	public function __construct($_GetStandardItemRangeResult = null)
	{
		parent::__construct(array('GetStandardItemRangeResult'=>new XiFinancialsTypeArrayOfStandardItem($_GetStandardItemRangeResult)));
	}
	/**
	 * Set GetStandardItemRangeResult
	 * @param ArrayOfStandardItem GetStandardItemRangeResult
	 * @return ArrayOfStandardItem
	 */
	public function setGetStandardItemRangeResult($_GetStandardItemRangeResult)
	{
		return ($this->GetStandardItemRangeResult = $_GetStandardItemRangeResult);
	}
	/**
	 * Get GetStandardItemRangeResult
	 * @return XiFinancialsTypeArrayOfStandardItem
	 */
	public function getGetStandardItemRangeResult()
	{
		return $this->GetStandardItemRangeResult;
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