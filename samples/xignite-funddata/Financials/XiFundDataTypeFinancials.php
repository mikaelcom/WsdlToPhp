<?php
/**
 * Class file for XiFundDataTypeFinancials
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeFinancials
 * @date 08/07/2012
 */
class XiFundDataTypeFinancials extends XiFundDataWsdlClass
{
	/**
	 * The MonthsCovered
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $MonthsCovered;
	/**
	 * The Income
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeIncome
	 */
	public $Income;
	/**
	 * The Expenses
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeExpenses
	 */
	public $Expenses;
	/**
	 * The BalanceSheet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeBalanceSheet
	 */
	public $BalanceSheet;
	/**
	 * The DailyAverageNetAssetsDuringPeriod
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DailyAverageNetAssetsDuringPeriod;
	/**
	 * The MonthlyAverageNetAssetsDuringPeriod
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MonthlyAverageNetAssetsDuringPeriod;
	/**
	 * The MarketPricePerShareAtEndOfPeriod
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MarketPricePerShareAtEndOfPeriod;
	/**
	 * Constructor
	 * @param int MonthsCovered
	 * @param XiFundDataTypeIncome Income
	 * @param XiFundDataTypeExpenses Expenses
	 * @param XiFundDataTypeBalanceSheet BalanceSheet
	 * @param double DailyAverageNetAssetsDuringPeriod
	 * @param double MonthlyAverageNetAssetsDuringPeriod
	 * @param double MarketPricePerShareAtEndOfPeriod
	 * @return XiFundDataTypeFinancials
	 */
	public function __construct($_MonthsCovered,$_Income = null,$_Expenses = null,$_BalanceSheet = null,$_DailyAverageNetAssetsDuringPeriod,$_MonthlyAverageNetAssetsDuringPeriod,$_MarketPricePerShareAtEndOfPeriod)
	{
		parent::__construct(array('MonthsCovered'=>$_MonthsCovered,'Income'=>$_Income,'Expenses'=>$_Expenses,'BalanceSheet'=>$_BalanceSheet,'DailyAverageNetAssetsDuringPeriod'=>$_DailyAverageNetAssetsDuringPeriod,'MonthlyAverageNetAssetsDuringPeriod'=>$_MonthlyAverageNetAssetsDuringPeriod,'MarketPricePerShareAtEndOfPeriod'=>$_MarketPricePerShareAtEndOfPeriod));
	}
	/**
	 * Set MonthsCovered
	 * @param int MonthsCovered
	 * @return int
	 */
	public function setMonthsCovered($_MonthsCovered)
	{
		return ($this->MonthsCovered = $_MonthsCovered);
	}
	/**
	 * Get MonthsCovered
	 * @return int
	 */
	public function getMonthsCovered()
	{
		return $this->MonthsCovered;
	}
	/**
	 * Set Income
	 * @param Income Income
	 * @return Income
	 */
	public function setIncome($_Income)
	{
		return ($this->Income = $_Income);
	}
	/**
	 * Get Income
	 * @return XiFundDataTypeIncome
	 */
	public function getIncome()
	{
		return $this->Income;
	}
	/**
	 * Set Expenses
	 * @param Expenses Expenses
	 * @return Expenses
	 */
	public function setExpenses($_Expenses)
	{
		return ($this->Expenses = $_Expenses);
	}
	/**
	 * Get Expenses
	 * @return XiFundDataTypeExpenses
	 */
	public function getExpenses()
	{
		return $this->Expenses;
	}
	/**
	 * Set BalanceSheet
	 * @param BalanceSheet BalanceSheet
	 * @return BalanceSheet
	 */
	public function setBalanceSheet($_BalanceSheet)
	{
		return ($this->BalanceSheet = $_BalanceSheet);
	}
	/**
	 * Get BalanceSheet
	 * @return XiFundDataTypeBalanceSheet
	 */
	public function getBalanceSheet()
	{
		return $this->BalanceSheet;
	}
	/**
	 * Set DailyAverageNetAssetsDuringPeriod
	 * @param double DailyAverageNetAssetsDuringPeriod
	 * @return double
	 */
	public function setDailyAverageNetAssetsDuringPeriod($_DailyAverageNetAssetsDuringPeriod)
	{
		return ($this->DailyAverageNetAssetsDuringPeriod = $_DailyAverageNetAssetsDuringPeriod);
	}
	/**
	 * Get DailyAverageNetAssetsDuringPeriod
	 * @return double
	 */
	public function getDailyAverageNetAssetsDuringPeriod()
	{
		return $this->DailyAverageNetAssetsDuringPeriod;
	}
	/**
	 * Set MonthlyAverageNetAssetsDuringPeriod
	 * @param double MonthlyAverageNetAssetsDuringPeriod
	 * @return double
	 */
	public function setMonthlyAverageNetAssetsDuringPeriod($_MonthlyAverageNetAssetsDuringPeriod)
	{
		return ($this->MonthlyAverageNetAssetsDuringPeriod = $_MonthlyAverageNetAssetsDuringPeriod);
	}
	/**
	 * Get MonthlyAverageNetAssetsDuringPeriod
	 * @return double
	 */
	public function getMonthlyAverageNetAssetsDuringPeriod()
	{
		return $this->MonthlyAverageNetAssetsDuringPeriod;
	}
	/**
	 * Set MarketPricePerShareAtEndOfPeriod
	 * @param double MarketPricePerShareAtEndOfPeriod
	 * @return double
	 */
	public function setMarketPricePerShareAtEndOfPeriod($_MarketPricePerShareAtEndOfPeriod)
	{
		return ($this->MarketPricePerShareAtEndOfPeriod = $_MarketPricePerShareAtEndOfPeriod);
	}
	/**
	 * Get MarketPricePerShareAtEndOfPeriod
	 * @return double
	 */
	public function getMarketPricePerShareAtEndOfPeriod()
	{
		return $this->MarketPricePerShareAtEndOfPeriod;
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