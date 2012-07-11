<?php
/**
 * Class file for XiSecurityTypeExtendedDividendHistory
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeExtendedDividendHistory
 * @date 08/07/2012
 */
class XiSecurityTypeExtendedDividendHistory extends XiSecurityTypeCommon
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
	 * The Dividends
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeArrayOfExtendedDividend
	 */
	public $Dividends;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiSecurityTypeArrayOfExtendedDividend Dividends
	 * @return XiSecurityTypeExtendedDividendHistory
	 */
	public function __construct($_Symbol = null,$_Dividends = null)
	{
		XiSecurityWsdlClass::__construct(array('Symbol'=>$_Symbol,'Dividends'=>new XiSecurityTypeArrayOfExtendedDividend($_Dividends)));
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
	 * Set Dividends
	 * @param ArrayOfExtendedDividend Dividends
	 * @return ArrayOfExtendedDividend
	 */
	public function setDividends($_Dividends)
	{
		return ($this->Dividends = $_Dividends);
	}
	/**
	 * Get Dividends
	 * @return XiSecurityTypeArrayOfExtendedDividend
	 */
	public function getDividends()
	{
		return $this->Dividends;
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