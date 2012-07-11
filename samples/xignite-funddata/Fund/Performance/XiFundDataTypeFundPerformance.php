<?php
/**
 * Class file for XiFundDataTypeFundPerformance
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeFundPerformance
 * @date 08/07/2012
 */
class XiFundDataTypeFundPerformance extends XiFundDataTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeSecurity
	 */
	public $Security;
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * The LoadAdjustedReturns
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeArrayOfReturn
	 */
	public $LoadAdjustedReturns;
	/**
	 * The TrailingReturns
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeArrayOfReturn
	 */
	public $TrailingReturns;
	/**
	 * Constructor
	 * @param XiFundDataTypeSecurity Security
	 * @param string AsOfDate
	 * @param XiFundDataTypeArrayOfReturn LoadAdjustedReturns
	 * @param XiFundDataTypeArrayOfReturn TrailingReturns
	 * @return XiFundDataTypeFundPerformance
	 */
	public function __construct($_Security = null,$_AsOfDate = null,$_LoadAdjustedReturns = null,$_TrailingReturns = null)
	{
		XiFundDataWsdlClass::__construct(array('Security'=>$_Security,'AsOfDate'=>$_AsOfDate,'LoadAdjustedReturns'=>new XiFundDataTypeArrayOfReturn($_LoadAdjustedReturns),'TrailingReturns'=>new XiFundDataTypeArrayOfReturn($_TrailingReturns)));
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
	 * @return XiFundDataTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
	}
	/**
	 * Set LoadAdjustedReturns
	 * @param ArrayOfReturn LoadAdjustedReturns
	 * @return ArrayOfReturn
	 */
	public function setLoadAdjustedReturns($_LoadAdjustedReturns)
	{
		return ($this->LoadAdjustedReturns = $_LoadAdjustedReturns);
	}
	/**
	 * Get LoadAdjustedReturns
	 * @return XiFundDataTypeArrayOfReturn
	 */
	public function getLoadAdjustedReturns()
	{
		return $this->LoadAdjustedReturns;
	}
	/**
	 * Set TrailingReturns
	 * @param ArrayOfReturn TrailingReturns
	 * @return ArrayOfReturn
	 */
	public function setTrailingReturns($_TrailingReturns)
	{
		return ($this->TrailingReturns = $_TrailingReturns);
	}
	/**
	 * Get TrailingReturns
	 * @return XiFundDataTypeArrayOfReturn
	 */
	public function getTrailingReturns()
	{
		return $this->TrailingReturns;
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