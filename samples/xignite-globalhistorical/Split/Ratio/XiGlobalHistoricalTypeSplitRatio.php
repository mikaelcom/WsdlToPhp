<?php
/**
 * Class file for XiGlobalHistoricalTypeSplitRatio
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeSplitRatio
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeSplitRatio extends XiGlobalHistoricalTypeCommon
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
	 * @param XiGlobalHistoricalTypeSecurity Security
	 * @param double Ratio
	 * @param string FromDate
	 * @param string ToDate
	 * @return XiGlobalHistoricalTypeSplitRatio
	 */
	public function __construct($_Security = null,$_Ratio,$_FromDate = null,$_ToDate = null)
	{
		XiGlobalHistoricalWsdlClass::__construct(array('Security'=>$_Security,'Ratio'=>$_Ratio,'FromDate'=>$_FromDate,'ToDate'=>$_ToDate));
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