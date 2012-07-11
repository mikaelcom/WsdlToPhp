<?php
/**
 * Class file for XiSecurityTypeSplitHistory
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeSplitHistory
 * @date 08/07/2012
 */
class XiSecurityTypeSplitHistory extends XiSecurityTypeCommon
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The Splits
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeArrayOfSplit
	 */
	public $Splits;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiSecurityTypeArrayOfSplit Splits
	 * @return XiSecurityTypeSplitHistory
	 */
	public function __construct($_Symbol = null,$_Splits = null)
	{
		XiSecurityWsdlClass::__construct(array('Symbol'=>$_Symbol,'Splits'=>new XiSecurityTypeArrayOfSplit($_Splits)));
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Set Splits
	 * @param ArrayOfSplit Splits
	 * @return ArrayOfSplit
	 */
	public function setSplits($_Splits)
	{
		return ($this->Splits = $_Splits);
	}
	/**
	 * Get Splits
	 * @return XiSecurityTypeArrayOfSplit
	 */
	public function getSplits()
	{
		return $this->Splits;
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