<?php
/**
 * Class file for XiGlobalHistoricalTypeSplitHistory
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeSplitHistory
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeSplitHistory extends XiGlobalHistoricalTypeAbstractGlobalHistoricalObject
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeSecurity
	 */
	public $Security;
	/**
	 * The Splits
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeArrayOfSplit
	 */
	public $Splits;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeSecurity Security
	 * @param XiGlobalHistoricalTypeArrayOfSplit Splits
	 * @return XiGlobalHistoricalTypeSplitHistory
	 */
	public function __construct($_Security = null,$_Splits = null)
	{
		XiGlobalHistoricalWsdlClass::__construct(array('Security'=>$_Security,'Splits'=>new XiGlobalHistoricalTypeArrayOfSplit($_Splits)));
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
	 * @return XiGlobalHistoricalTypeSecurity
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
	 * @return XiGlobalHistoricalTypeArrayOfSplit
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