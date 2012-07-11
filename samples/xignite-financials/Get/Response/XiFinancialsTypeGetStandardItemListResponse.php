<?php
/**
 * Class file for XiFinancialsTypeGetStandardItemListResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetStandardItemListResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetStandardItemListResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetStandardItemListResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeStandardItemList
	 */
	public $GetStandardItemListResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeStandardItemList GetStandardItemListResult
	 * @return XiFinancialsTypeGetStandardItemListResponse
	 */
	public function __construct($_GetStandardItemListResult = null)
	{
		parent::__construct(array('GetStandardItemListResult'=>$_GetStandardItemListResult));
	}
	/**
	 * Set GetStandardItemListResult
	 * @param StandardItemList GetStandardItemListResult
	 * @return StandardItemList
	 */
	public function setGetStandardItemListResult($_GetStandardItemListResult)
	{
		return ($this->GetStandardItemListResult = $_GetStandardItemListResult);
	}
	/**
	 * Get GetStandardItemListResult
	 * @return XiFinancialsTypeStandardItemList
	 */
	public function getGetStandardItemListResult()
	{
		return $this->GetStandardItemListResult;
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