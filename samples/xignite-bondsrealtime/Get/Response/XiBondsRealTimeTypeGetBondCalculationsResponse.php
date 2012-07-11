<?php
/**
 * Class file for XiBondsRealTimeTypeGetBondCalculationsResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeGetBondCalculationsResponse
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeGetBondCalculationsResponse extends XiBondsRealTimeWsdlClass
{
	/**
	 * The GetBondCalculationsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeArrayOfBondCalculation
	 */
	public $GetBondCalculationsResult;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeArrayOfBondCalculation GetBondCalculationsResult
	 * @return XiBondsRealTimeTypeGetBondCalculationsResponse
	 */
	public function __construct($_GetBondCalculationsResult = null)
	{
		parent::__construct(array('GetBondCalculationsResult'=>new XiBondsRealTimeTypeArrayOfBondCalculation($_GetBondCalculationsResult)));
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
	 * @return XiBondsRealTimeTypeArrayOfBondCalculation
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