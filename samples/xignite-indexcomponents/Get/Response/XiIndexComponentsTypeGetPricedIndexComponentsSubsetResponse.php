<?php
/**
 * Class file for XiIndexComponentsTypeGetPricedIndexComponentsSubsetResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndexComponentsTypeGetPricedIndexComponentsSubsetResponse
 * @date 08/07/2012
 */
class XiIndexComponentsTypeGetPricedIndexComponentsSubsetResponse extends XiIndexComponentsWsdlClass
{
	/**
	 * The GetPricedIndexComponentsSubsetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndexComponentsTypePricedComponents
	 */
	public $GetPricedIndexComponentsSubsetResult;
	/**
	 * Constructor
	 * @param XiIndexComponentsTypePricedComponents GetPricedIndexComponentsSubsetResult
	 * @return XiIndexComponentsTypeGetPricedIndexComponentsSubsetResponse
	 */
	public function __construct($_GetPricedIndexComponentsSubsetResult = null)
	{
		parent::__construct(array('GetPricedIndexComponentsSubsetResult'=>$_GetPricedIndexComponentsSubsetResult));
	}
	/**
	 * Set GetPricedIndexComponentsSubsetResult
	 * @param PricedComponents GetPricedIndexComponentsSubsetResult
	 * @return PricedComponents
	 */
	public function setGetPricedIndexComponentsSubsetResult($_GetPricedIndexComponentsSubsetResult)
	{
		return ($this->GetPricedIndexComponentsSubsetResult = $_GetPricedIndexComponentsSubsetResult);
	}
	/**
	 * Get GetPricedIndexComponentsSubsetResult
	 * @return XiIndexComponentsTypePricedComponents
	 */
	public function getGetPricedIndexComponentsSubsetResult()
	{
		return $this->GetPricedIndexComponentsSubsetResult;
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