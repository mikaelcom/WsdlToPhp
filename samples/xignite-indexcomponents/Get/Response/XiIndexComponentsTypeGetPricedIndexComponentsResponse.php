<?php
/**
 * Class file for XiIndexComponentsTypeGetPricedIndexComponentsResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndexComponentsTypeGetPricedIndexComponentsResponse
 * @date 08/07/2012
 */
class XiIndexComponentsTypeGetPricedIndexComponentsResponse extends XiIndexComponentsWsdlClass
{
	/**
	 * The GetPricedIndexComponentsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndexComponentsTypePricedComponents
	 */
	public $GetPricedIndexComponentsResult;
	/**
	 * Constructor
	 * @param XiIndexComponentsTypePricedComponents GetPricedIndexComponentsResult
	 * @return XiIndexComponentsTypeGetPricedIndexComponentsResponse
	 */
	public function __construct($_GetPricedIndexComponentsResult = null)
	{
		parent::__construct(array('GetPricedIndexComponentsResult'=>$_GetPricedIndexComponentsResult));
	}
	/**
	 * Set GetPricedIndexComponentsResult
	 * @param PricedComponents GetPricedIndexComponentsResult
	 * @return PricedComponents
	 */
	public function setGetPricedIndexComponentsResult($_GetPricedIndexComponentsResult)
	{
		return ($this->GetPricedIndexComponentsResult = $_GetPricedIndexComponentsResult);
	}
	/**
	 * Get GetPricedIndexComponentsResult
	 * @return XiIndexComponentsTypePricedComponents
	 */
	public function getGetPricedIndexComponentsResult()
	{
		return $this->GetPricedIndexComponentsResult;
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