<?php
/**
 * Class file for XWeb1003TypeOther_Income_Sources
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeOther_Income_Sources
 * @date 09/07/2012
 */
class XWeb1003TypeOther_Income_Sources extends XWeb1003WsdlClass
{
	/**
	 * The Other_Income
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 3
	 * @var XWeb1003TypeOtherIncomeType
	 */
	public $Other_Income;
	/**
	 * Constructor
	 * @param XWeb1003TypeOtherIncomeType Other_Income
	 * @return XWeb1003TypeOther_Income_Sources
	 */
	public function __construct($_Other_Income = null)
	{
		parent::__construct(array('Other_Income'=>$_Other_Income));
	}
	/**
	 * Set Other_Income
	 * @param OtherIncomeType Other_Income
	 * @return OtherIncomeType
	 */
	public function setOther_Income($_Other_Income)
	{
		return ($this->Other_Income = $_Other_Income);
	}
	/**
	 * Get Other_Income
	 * @return XWeb1003TypeOtherIncomeType
	 */
	public function getOther_Income()
	{
		return $this->Other_Income;
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