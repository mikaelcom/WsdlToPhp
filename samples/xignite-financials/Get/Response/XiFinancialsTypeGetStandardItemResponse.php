<?php
/**
 * Class file for XiFinancialsTypeGetStandardItemResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetStandardItemResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetStandardItemResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetStandardItemResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeStandardItem
	 */
	public $GetStandardItemResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeStandardItem GetStandardItemResult
	 * @return XiFinancialsTypeGetStandardItemResponse
	 */
	public function __construct($_GetStandardItemResult = null)
	{
		parent::__construct(array('GetStandardItemResult'=>$_GetStandardItemResult));
	}
	/**
	 * Set GetStandardItemResult
	 * @param StandardItem GetStandardItemResult
	 * @return StandardItem
	 */
	public function setGetStandardItemResult($_GetStandardItemResult)
	{
		return ($this->GetStandardItemResult = $_GetStandardItemResult);
	}
	/**
	 * Get GetStandardItemResult
	 * @return XiFinancialsTypeStandardItem
	 */
	public function getGetStandardItemResult()
	{
		return $this->GetStandardItemResult;
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