<?php
/**
 * Class file for XiFundDataTypeFundTurnover
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeFundTurnover
 * @date 08/07/2012
 */
class XiFundDataTypeFundTurnover extends XiFundDataTypeCommon
{
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeSecurity
	 */
	public $Security;
	/**
	 * The Turnover
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Turnover;
	/**
	 * Constructor
	 * @param string AsOfDate
	 * @param XiFundDataTypeSecurity Security
	 * @param double Turnover
	 * @return XiFundDataTypeFundTurnover
	 */
	public function __construct($_AsOfDate = null,$_Security = null,$_Turnover)
	{
		XiFundDataWsdlClass::__construct(array('AsOfDate'=>$_AsOfDate,'Security'=>$_Security,'Turnover'=>$_Turnover));
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
	 * Set Turnover
	 * @param double Turnover
	 * @return double
	 */
	public function setTurnover($_Turnover)
	{
		return ($this->Turnover = $_Turnover);
	}
	/**
	 * Get Turnover
	 * @return double
	 */
	public function getTurnover()
	{
		return $this->Turnover;
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