<?php
/**
 * Class file for XiBondsRealTimeTypeGetPriceCompositesResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeGetPriceCompositesResponse
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeGetPriceCompositesResponse extends XiBondsRealTimeWsdlClass
{
	/**
	 * The GetPriceCompositesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeArrayOfPriceComposite
	 */
	public $GetPriceCompositesResult;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeArrayOfPriceComposite GetPriceCompositesResult
	 * @return XiBondsRealTimeTypeGetPriceCompositesResponse
	 */
	public function __construct($_GetPriceCompositesResult = null)
	{
		parent::__construct(array('GetPriceCompositesResult'=>new XiBondsRealTimeTypeArrayOfPriceComposite($_GetPriceCompositesResult)));
	}
	/**
	 * Set GetPriceCompositesResult
	 * @param ArrayOfPriceComposite GetPriceCompositesResult
	 * @return ArrayOfPriceComposite
	 */
	public function setGetPriceCompositesResult($_GetPriceCompositesResult)
	{
		return ($this->GetPriceCompositesResult = $_GetPriceCompositesResult);
	}
	/**
	 * Get GetPriceCompositesResult
	 * @return XiBondsRealTimeTypeArrayOfPriceComposite
	 */
	public function getGetPriceCompositesResult()
	{
		return $this->GetPriceCompositesResult;
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