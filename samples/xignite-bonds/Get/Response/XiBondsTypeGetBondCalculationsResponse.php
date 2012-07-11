<?php
/**
 * Class file for XiBondsTypeGetBondCalculationsResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeGetBondCalculationsResponse
 * @date 08/07/2012
 */
class XiBondsTypeGetBondCalculationsResponse extends XiBondsWsdlClass
{
	/**
	 * The GetBondCalculationsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeArrayOfBondCalculation
	 */
	public $GetBondCalculationsResult;
	/**
	 * Constructor
	 * @param XiBondsTypeArrayOfBondCalculation GetBondCalculationsResult
	 * @return XiBondsTypeGetBondCalculationsResponse
	 */
	public function __construct($_GetBondCalculationsResult = null)
	{
		parent::__construct(array('GetBondCalculationsResult'=>new XiBondsTypeArrayOfBondCalculation($_GetBondCalculationsResult)));
	}
	/**
	 * Set GetBondCalculationsResult
	 * @param ArrayOfBondCalculation GetBondCalculationsResult
	 * @return ArrayOfBondCalculation
	 */
	public function setGetBondCalculationsResult($_GetBondCalculationsResult)
	{
		return ($this->GetBondCalculationsResult = $_GetBondCalculationsResult);
	}
	/**
	 * Get GetBondCalculationsResult
	 * @return XiBondsTypeArrayOfBondCalculation
	 */
	public function getGetBondCalculationsResult()
	{
		return $this->GetBondCalculationsResult;
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