<?php
/**
 * Class file for XiBondsTypeGetPriceCompositeResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeGetPriceCompositeResponse
 * @date 08/07/2012
 */
class XiBondsTypeGetPriceCompositeResponse extends XiBondsWsdlClass
{
	/**
	 * The GetPriceCompositeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypePriceComposite
	 */
	public $GetPriceCompositeResult;
	/**
	 * Constructor
	 * @param XiBondsTypePriceComposite GetPriceCompositeResult
	 * @return XiBondsTypeGetPriceCompositeResponse
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
	 * @return XiBondsTypePriceComposite
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