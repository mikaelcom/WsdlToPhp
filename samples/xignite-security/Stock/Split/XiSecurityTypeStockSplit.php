<?php
/**
 * Class file for XiSecurityTypeStockSplit
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeStockSplit
 * @date 08/07/2012
 */
class XiSecurityTypeStockSplit extends XiSecurityTypeCommon
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
	 * @param string Symbol
	 * @param double Ratio
	 * @param string FromDate
	 * @param string ToDate
	 * @return XiSecurityTypeStockSplit
	 */
	public function __construct($_Symbol = null,$_Ratio,$_FromDate = null,$_ToDate = null)
	{
		XiSecurityWsdlClass::__construct(array('Symbol'=>$_Symbol,'Ratio'=>$_Ratio,'FromDate'=>$_FromDate,'ToDate'=>$_ToDate));
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