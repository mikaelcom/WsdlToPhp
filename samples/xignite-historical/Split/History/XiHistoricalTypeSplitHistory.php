<?php
/**
 * Class file for XiHistoricalTypeSplitHistory
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeSplitHistory
 * @date 08/07/2012
 */
class XiHistoricalTypeSplitHistory extends XiHistoricalTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeSecurity
	 */
	public $Security;
	/**
	 * The Splits
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHistoricalTypeArrayOfSplit
	 */
	public $Splits;
	/**
	 * Constructor
	 * @param XiHistoricalTypeSecurity Security
	 * @param XiHistoricalTypeArrayOfSplit Splits
	 * @return XiHistoricalTypeSplitHistory
	 */
	public function __construct($_Security = null,$_Splits = null)
	{
		XiHistoricalWsdlClass::__construct(array('Security'=>$_Security,'Splits'=>new XiHistoricalTypeArrayOfSplit($_Splits)));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiHistoricalTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
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
	 * @return XiHistoricalTypeArrayOfSplit
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