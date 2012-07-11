<?php
/**
 * Class file for XiHistoricalTypeSplitRatio
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeSplitRatio
 * @date 08/07/2012
 */
class XiHistoricalTypeSplitRatio extends XiHistoricalTypeCommon
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
	 * The Ratio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Ratio;
	/**
	 * The FromDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FromDate;
	/**
	 * The ToDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ToDate;
	/**
	 * Constructor
	 * @param XiHistoricalTypeSecurity Security
	 * @param double Ratio
	 * @param string FromDate
	 * @param string ToDate
	 * @return XiHistoricalTypeSplitRatio
	 */
	public function __construct($_Security = null,$_Ratio,$_FromDate = null,$_ToDate = null)
	{
		XiHistoricalWsdlClass::__construct(array('Security'=>$_Security,'Ratio'=>$_Ratio,'FromDate'=>$_FromDate,'ToDate'=>$_ToDate));
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
	 * Set Ratio
	 * @param double Ratio
	 * @return double
	 */
	public function setRatio($_Ratio)
	{
		return ($this->Ratio = $_Ratio);
	}
	/**
	 * Get Ratio
	 * @return double
	 */
	public function getRatio()
	{
		return $this->Ratio;
	}
	/**
	 * Set FromDate
	 * @param string FromDate
	 * @return string
	 */
	public function setFromDate($_FromDate)
	{
		return ($this->FromDate = $_FromDate);
	}
	/**
	 * Get FromDate
	 * @return string
	 */
	public function getFromDate()
	{
		return $this->FromDate;
	}
	/**
	 * Set ToDate
	 * @param string ToDate
	 * @return string
	 */
	public function setToDate($_ToDate)
	{
		return ($this->ToDate = $_ToDate);
	}
	/**
	 * Get ToDate
	 * @return string
	 */
	public function getToDate()
	{
		return $this->ToDate;
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