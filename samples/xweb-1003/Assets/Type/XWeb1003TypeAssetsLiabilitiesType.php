<?php
/**
 * Class file for XWeb1003TypeAssetsLiabilitiesType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeAssetsLiabilitiesType
 * @date 09/07/2012
 */
class XWeb1003TypeAssetsLiabilitiesType extends XWeb1003WsdlClass
{
	/**
	 * The Completed_Type
	 * @var Completed_Type
	 */
	public $Completed_Type;
	/**
	 * The Real_Estate_Owned
	 * @var Real_Estate_Owned
	 */
	public $Real_Estate_Owned;
	/**
	 * The Retirement_Fund
	 * @var Retirement_Fund
	 */
	public $Retirement_Fund;
	/**
	 * The Businesses_Owned
	 * @var Businesses_Owned
	 */
	public $Businesses_Owned;
	/**
	 * The Cash_Deposits
	 * @var XWeb1003TypeCash_Deposits
	 */
	public $Cash_Deposits;
	/**
	 * The Checking_Savings
	 * @var XWeb1003TypeChecking_Savings
	 */
	public $Checking_Savings;
	/**
	 * The Stocks_Bonds
	 * @var XWeb1003TypeStocks_Bonds
	 */
	public $Stocks_Bonds;
	/**
	 * The Life_Insurance
	 * @var XWeb1003TypeLife_Insurance
	 */
	public $Life_Insurance;
	/**
	 * The Automobiles
	 * @var XWeb1003TypeAutomobiles
	 */
	public $Automobiles;
	/**
	 * The Other_Assets
	 * @var XWeb1003TypeOther_Assets
	 */
	public $Other_Assets;
	/**
	 * The Liabilities
	 * @var XWeb1003TypeLiabilities
	 */
	public $Liabilities;
	/**
	 * The Alimony_Child_Support
	 * @var XWeb1003TypeAlimony_Child_Support
	 */
	public $Alimony_Child_Support;
	/**
	 * The Job_Related_Expenses
	 * @var XWeb1003TypeJob_Related_Expenses
	 */
	public $Job_Related_Expenses;
	/**
	 * The Real_Estate
	 * @var XWeb1003TypeReal_Estate
	 */
	public $Real_Estate;
	/**
	 * The Credit_Previously_Received
	 * @var XWeb1003TypeCredit_Previously_Received
	 */
	public $Credit_Previously_Received;
	/**
	 * Constructor
	 * @param Completed_Type Completed_Type
	 * @param Real_Estate_Owned Real_Estate_Owned
	 * @param Retirement_Fund Retirement_Fund
	 * @param Businesses_Owned Businesses_Owned
	 * @param XWeb1003TypeCash_Deposits Cash_Deposits
	 * @param XWeb1003TypeChecking_Savings Checking_Savings
	 * @param XWeb1003TypeStocks_Bonds Stocks_Bonds
	 * @param XWeb1003TypeLife_Insurance Life_Insurance
	 * @param XWeb1003TypeAutomobiles Automobiles
	 * @param XWeb1003TypeOther_Assets Other_Assets
	 * @param XWeb1003TypeLiabilities Liabilities
	 * @param XWeb1003TypeAlimony_Child_Support Alimony_Child_Support
	 * @param XWeb1003TypeJob_Related_Expenses Job_Related_Expenses
	 * @param XWeb1003TypeReal_Estate Real_Estate
	 * @param XWeb1003TypeCredit_Previously_Received Credit_Previously_Received
	 * @return XWeb1003TypeAssetsLiabilitiesType
	 */
	public function __construct($_Completed_Type = null,$_Real_Estate_Owned = null,$_Retirement_Fund = null,$_Businesses_Owned = null,$_Cash_Deposits = null,$_Checking_Savings = null,$_Stocks_Bonds = null,$_Life_Insurance = null,$_Automobiles = null,$_Other_Assets = null,$_Liabilities = null,$_Alimony_Child_Support = null,$_Job_Related_Expenses = null,$_Real_Estate = null,$_Credit_Previously_Received = null)
	{
		parent::__construct(array('Completed_Type'=>$_Completed_Type,'Real_Estate_Owned'=>$_Real_Estate_Owned,'Retirement_Fund'=>$_Retirement_Fund,'Businesses_Owned'=>$_Businesses_Owned,'Cash_Deposits'=>$_Cash_Deposits,'Checking_Savings'=>$_Checking_Savings,'Stocks_Bonds'=>$_Stocks_Bonds,'Life_Insurance'=>$_Life_Insurance,'Automobiles'=>$_Automobiles,'Other_Assets'=>$_Other_Assets,'Liabilities'=>$_Liabilities,'Alimony_Child_Support'=>$_Alimony_Child_Support,'Job_Related_Expenses'=>$_Job_Related_Expenses,'Real_Estate'=>$_Real_Estate,'Credit_Previously_Received'=>$_Credit_Previously_Received));
	}
	/**
	 * Set Completed_Type
	 * @param Completed_Type Completed_Type
	 * @return Completed_Type
	 */
	public function setCompleted_Type($_Completed_Type)
	{
		return ($this->Completed_Type = $_Completed_Type);
	}
	/**
	 * Get Completed_Type
	 * @return Completed_Type
	 */
	public function getCompleted_Type()
	{
		return $this->Completed_Type;
	}
	/**
	 * Set Real_Estate_Owned
	 * @param Real_Estate_Owned Real_Estate_Owned
	 * @return Real_Estate_Owned
	 */
	public function setReal_Estate_Owned($_Real_Estate_Owned)
	{
		return ($this->Real_Estate_Owned = $_Real_Estate_Owned);
	}
	/**
	 * Get Real_Estate_Owned
	 * @return Real_Estate_Owned
	 */
	public function getReal_Estate_Owned()
	{
		return $this->Real_Estate_Owned;
	}
	/**
	 * Set Retirement_Fund
	 * @param Retirement_Fund Retirement_Fund
	 * @return Retirement_Fund
	 */
	public function setRetirement_Fund($_Retirement_Fund)
	{
		return ($this->Retirement_Fund = $_Retirement_Fund);
	}
	/**
	 * Get Retirement_Fund
	 * @return Retirement_Fund
	 */
	public function getRetirement_Fund()
	{
		return $this->Retirement_Fund;
	}
	/**
	 * Set Businesses_Owned
	 * @param Businesses_Owned Businesses_Owned
	 * @return Businesses_Owned
	 */
	public function setBusinesses_Owned($_Businesses_Owned)
	{
		return ($this->Businesses_Owned = $_Businesses_Owned);
	}
	/**
	 * Get Businesses_Owned
	 * @return Businesses_Owned
	 */
	public function getBusinesses_Owned()
	{
		return $this->Businesses_Owned;
	}
	/**
	 * Set Cash_Deposits
	 * @param Cash_Deposits Cash_Deposits
	 * @return Cash_Deposits
	 */
	public function setCash_Deposits($_Cash_Deposits)
	{
		return ($this->Cash_Deposits = $_Cash_Deposits);
	}
	/**
	 * Get Cash_Deposits
	 * @return XWeb1003TypeCash_Deposits
	 */
	public function getCash_Deposits()
	{
		return $this->Cash_Deposits;
	}
	/**
	 * Set Checking_Savings
	 * @param Checking_Savings Checking_Savings
	 * @return Checking_Savings
	 */
	public function setChecking_Savings($_Checking_Savings)
	{
		return ($this->Checking_Savings = $_Checking_Savings);
	}
	/**
	 * Get Checking_Savings
	 * @return XWeb1003TypeChecking_Savings
	 */
	public function getChecking_Savings()
	{
		return $this->Checking_Savings;
	}
	/**
	 * Set Stocks_Bonds
	 * @param Stocks_Bonds Stocks_Bonds
	 * @return Stocks_Bonds
	 */
	public function setStocks_Bonds($_Stocks_Bonds)
	{
		return ($this->Stocks_Bonds = $_Stocks_Bonds);
	}
	/**
	 * Get Stocks_Bonds
	 * @return XWeb1003TypeStocks_Bonds
	 */
	public function getStocks_Bonds()
	{
		return $this->Stocks_Bonds;
	}
	/**
	 * Set Life_Insurance
	 * @param Life_Insurance Life_Insurance
	 * @return Life_Insurance
	 */
	public function setLife_Insurance($_Life_Insurance)
	{
		return ($this->Life_Insurance = $_Life_Insurance);
	}
	/**
	 * Get Life_Insurance
	 * @return XWeb1003TypeLife_Insurance
	 */
	public function getLife_Insurance()
	{
		return $this->Life_Insurance;
	}
	/**
	 * Set Automobiles
	 * @param Automobiles Automobiles
	 * @return Automobiles
	 */
	public function setAutomobiles($_Automobiles)
	{
		return ($this->Automobiles = $_Automobiles);
	}
	/**
	 * Get Automobiles
	 * @return XWeb1003TypeAutomobiles
	 */
	public function getAutomobiles()
	{
		return $this->Automobiles;
	}
	/**
	 * Set Other_Assets
	 * @param Other_Assets Other_Assets
	 * @return Other_Assets
	 */
	public function setOther_Assets($_Other_Assets)
	{
		return ($this->Other_Assets = $_Other_Assets);
	}
	/**
	 * Get Other_Assets
	 * @return XWeb1003TypeOther_Assets
	 */
	public function getOther_Assets()
	{
		return $this->Other_Assets;
	}
	/**
	 * Set Liabilities
	 * @param Liabilities Liabilities
	 * @return Liabilities
	 */
	public function setLiabilities($_Liabilities)
	{
		return ($this->Liabilities = $_Liabilities);
	}
	/**
	 * Get Liabilities
	 * @return XWeb1003TypeLiabilities
	 */
	public function getLiabilities()
	{
		return $this->Liabilities;
	}
	/**
	 * Set Alimony_Child_Support
	 * @param Alimony_Child_Support Alimony_Child_Support
	 * @return Alimony_Child_Support
	 */
	public function setAlimony_Child_Support($_Alimony_Child_Support)
	{
		return ($this->Alimony_Child_Support = $_Alimony_Child_Support);
	}
	/**
	 * Get Alimony_Child_Support
	 * @return XWeb1003TypeAlimony_Child_Support
	 */
	public function getAlimony_Child_Support()
	{
		return $this->Alimony_Child_Support;
	}
	/**
	 * Set Job_Related_Expenses
	 * @param Job_Related_Expenses Job_Related_Expenses
	 * @return Job_Related_Expenses
	 */
	public function setJob_Related_Expenses($_Job_Related_Expenses)
	{
		return ($this->Job_Related_Expenses = $_Job_Related_Expenses);
	}
	/**
	 * Get Job_Related_Expenses
	 * @return XWeb1003TypeJob_Related_Expenses
	 */
	public function getJob_Related_Expenses()
	{
		return $this->Job_Related_Expenses;
	}
	/**
	 * Set Real_Estate
	 * @param Real_Estate Real_Estate
	 * @return Real_Estate
	 */
	public function setReal_Estate($_Real_Estate)
	{
		return ($this->Real_Estate = $_Real_Estate);
	}
	/**
	 * Get Real_Estate
	 * @return XWeb1003TypeReal_Estate
	 */
	public function getReal_Estate()
	{
		return $this->Real_Estate;
	}
	/**
	 * Set Credit_Previously_Received
	 * @param Credit_Previously_Received Credit_Previously_Received
	 * @return Credit_Previously_Received
	 */
	public function setCredit_Previously_Received($_Credit_Previously_Received)
	{
		return ($this->Credit_Previously_Received = $_Credit_Previously_Received);
	}
	/**
	 * Get Credit_Previously_Received
	 * @return XWeb1003TypeCredit_Previously_Received
	 */
	public function getCredit_Previously_Received()
	{
		return $this->Credit_Previously_Received;
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