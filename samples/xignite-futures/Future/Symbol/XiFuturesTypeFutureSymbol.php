<?php
/**
 * Class file for XiFuturesTypeFutureSymbol
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeFutureSymbol
 * @date 08/07/2012
 */
class XiFuturesTypeFutureSymbol extends XiFuturesTypeCommon
{
	/**
	 * The FutureSymbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FutureSymbol;
	/**
	 * The CommoditySymbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CommoditySymbol;
	/**
	 * The Year
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Year;
	/**
	 * The Month
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Month;
	/**
	 * Constructor
	 * @param string FutureSymbol
	 * @param string CommoditySymbol
	 * @param int Year
	 * @param int Month
	 * @return XiFuturesTypeFutureSymbol
	 */
	public function __construct($_FutureSymbol = null,$_CommoditySymbol = null,$_Year,$_Month)
	{
		XiFuturesWsdlClass::__construct(array('FutureSymbol'=>$_FutureSymbol,'CommoditySymbol'=>$_CommoditySymbol,'Year'=>$_Year,'Month'=>$_Month));
	}
	/**
	 * Set FutureSymbol
	 * @param string FutureSymbol
	 * @return string
	 */
	public function setFutureSymbol($_FutureSymbol)
	{
		return ($this->FutureSymbol = $_FutureSymbol);
	}
	/**
	 * Get FutureSymbol
	 * @return string
	 */
	public function getFutureSymbol()
	{
		return $this->FutureSymbol;
	}
	/**
	 * Set CommoditySymbol
	 * @param string CommoditySymbol
	 * @return string
	 */
	public function setCommoditySymbol($_CommoditySymbol)
	{
		return ($this->CommoditySymbol = $_CommoditySymbol);
	}
	/**
	 * Get CommoditySymbol
	 * @return string
	 */
	public function getCommoditySymbol()
	{
		return $this->CommoditySymbol;
	}
	/**
	 * Set Year
	 * @param int Year
	 * @return int
	 */
	public function setYear($_Year)
	{
		return ($this->Year = $_Year);
	}
	/**
	 * Get Year
	 * @return int
	 */
	public function getYear()
	{
		return $this->Year;
	}
	/**
	 * Set Month
	 * @param int Month
	 * @return int
	 */
	public function setMonth($_Month)
	{
		return ($this->Month = $_Month);
	}
	/**
	 * Get Month
	 * @return int
	 */
	public function getMonth()
	{
		return $this->Month;
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