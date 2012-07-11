<?php
/**
 * Class file for XiBondsTypeGetPriceCompositesResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeGetPriceCompositesResponse
 * @date 08/07/2012
 */
class XiBondsTypeGetPriceCompositesResponse extends XiBondsWsdlClass
{
	/**
	 * The GetPriceCompositesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeArrayOfPriceComposite
	 */
	public $GetPriceCompositesResult;
	/**
	 * Constructor
	 * @param XiBondsTypeArrayOfPriceComposite GetPriceCompositesResult
	 * @return XiBondsTypeGetPriceCompositesResponse
	 */
	public function __construct($_GetPriceCompositesResult = null)
	{
		parent::__construct(array('GetPriceCompositesResult'=>new XiBondsTypeArrayOfPriceComposite($_GetPriceCompositesResult)));
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
	 * @return XiBondsTypeArrayOfPriceComposite
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