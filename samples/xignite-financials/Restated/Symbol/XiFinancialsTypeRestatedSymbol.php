<?php
/**
 * Class file for XiFinancialsTypeRestatedSymbol
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeRestatedSymbol
 * @date 08/07/2012
 */
class XiFinancialsTypeRestatedSymbol extends XiFinancialsWsdlClass
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
	 * The LatestReportEndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LatestReportEndDate;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string LatestReportEndDate
	 * @return XiFinancialsTypeRestatedSymbol
	 */
	public function __construct($_Symbol = null,$_LatestReportEndDate = null)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'LatestReportEndDate'=>$_LatestReportEndDate));
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
	 * Set LatestReportEndDate
	 * @param string LatestReportEndDate
	 * @return string
	 */
	public function setLatestReportEndDate($_LatestReportEndDate)
	{
		return ($this->LatestReportEndDate = $_LatestReportEndDate);
	}
	/**
	 * Get LatestReportEndDate
	 * @return string
	 */
	public function getLatestReportEndDate()
	{
		return $this->LatestReportEndDate;
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