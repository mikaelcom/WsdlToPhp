<?php
/**
 * Class file for XiFundDataTypeTurnover
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeTurnover
 * @date 08/07/2012
 */
class XiFundDataTypeTurnover extends XiFundDataWsdlClass
{
	/**
	 * The Purchases
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Purchases;
	/**
	 * The Sales
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Sales;
	/**
	 * The MonthlyAverageValue
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MonthlyAverageValue;
	/**
	 * The PercentTurnover
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentTurnover;
	/**
	 * Constructor
	 * @param double Purchases
	 * @param double Sales
	 * @param double MonthlyAverageValue
	 * @param double PercentTurnover
	 * @return XiFundDataTypeTurnover
	 */
	public function __construct($_Purchases,$_Sales,$_MonthlyAverageValue,$_PercentTurnover)
	{
		parent::__construct(array('Purchases'=>$_Purchases,'Sales'=>$_Sales,'MonthlyAverageValue'=>$_MonthlyAverageValue,'PercentTurnover'=>$_PercentTurnover));
	}
	/**
	 * Set Purchases
	 * @param double Purchases
	 * @return double
	 */
	public function setPurchases($_Purchases)
	{
		return ($this->Purchases = $_Purchases);
	}
	/**
	 * Get Purchases
	 * @return double
	 */
	public function getPurchases()
	{
		return $this->Purchases;
	}
	/**
	 * Set Sales
	 * @param double Sales
	 * @return double
	 */
	public function setSales($_Sales)
	{
		return ($this->Sales = $_Sales);
	}
	/**
	 * Get Sales
	 * @return double
	 */
	public function getSales()
	{
		return $this->Sales;
	}
	/**
	 * Set MonthlyAverageValue
	 * @param double MonthlyAverageValue
	 * @return double
	 */
	public function setMonthlyAverageValue($_MonthlyAverageValue)
	{
		return ($this->MonthlyAverageValue = $_MonthlyAverageValue);
	}
	/**
	 * Get MonthlyAverageValue
	 * @return double
	 */
	public function getMonthlyAverageValue()
	{
		return $this->MonthlyAverageValue;
	}
	/**
	 * Set PercentTurnover
	 * @param double PercentTurnover
	 * @return double
	 */
	public function setPercentTurnover($_PercentTurnover)
	{
		return ($this->PercentTurnover = $_PercentTurnover);
	}
	/**
	 * Get PercentTurnover
	 * @return double
	 */
	public function getPercentTurnover()
	{
		return $this->PercentTurnover;
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