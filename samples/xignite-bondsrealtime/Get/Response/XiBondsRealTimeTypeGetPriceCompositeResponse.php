<?php
/**
 * Class file for XiBondsRealTimeTypeGetPriceCompositeResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeGetPriceCompositeResponse
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeGetPriceCompositeResponse extends XiBondsRealTimeWsdlClass
{
	/**
	 * The GetPriceCompositeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypePriceComposite
	 */
	public $GetPriceCompositeResult;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypePriceComposite GetPriceCompositeResult
	 * @return XiBondsRealTimeTypeGetPriceCompositeResponse
	 */
	public function __construct($_GetPriceCompositeResult = null)
	{
		parent::__construct(array('GetPriceCompositeResult'=>$_GetPriceCompositeResult));
	}
	/**
	 * Set GetPriceCompositeResult
	 * @param PriceComposite GetPriceCompositeResult
	 * @return PriceComposite
	 */
	public function setGetPriceCompositeResult($_GetPriceCompositeResult)
	{
		return ($this->GetPriceCompositeResult = $_GetPriceCompositeResult);
	}
	/**
	 * Get GetPriceCompositeResult
	 * @return XiBondsRealTimeTypePriceComposite
	 */
	public function getGetPriceCompositeResult()
	{
		return $this->GetPriceCompositeResult;
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