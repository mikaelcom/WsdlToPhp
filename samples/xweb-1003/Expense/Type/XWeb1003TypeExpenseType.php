<?php
/**
 * Class file for XWeb1003TypeExpenseType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeExpenseType
 * @date 09/07/2012
 */
class XWeb1003TypeExpenseType extends XWeb1003WsdlClass
{
	/**
	 * The Rent
	 * @var Rent
	 */
	public $Rent;
	/**
	 * The First_Mortgage
	 * @var First_Mortgage
	 */
	public $First_Mortgage;
	/**
	 * The Other_Financing
	 * @var Other_Financing
	 */
	public $Other_Financing;
	/**
	 * The Hazard_Insurance
	 * @var Hazard_Insurance
	 */
	public $Hazard_Insurance;
	/**
	 * The Real_Estate_Taxes
	 * @var Real_Estate_Taxes
	 */
	public $Real_Estate_Taxes;
	/**
	 * The Mortgage_Insurance
	 * @var Mortgage_Insurance
	 */
	public $Mortgage_Insurance;
	/**
	 * The Homeowner_Assn_Dues
	 * @var Homeowner_Assn_Dues
	 */
	public $Homeowner_Assn_Dues;
	/**
	 * The Other
	 * @var Other
	 */
	public $Other;
	/**
	 * The Expense_Type
	 * @var anonymous113
	 */
	public $Expense_Type;
	/**
	 * Constructor
	 * @param Rent Rent
	 * @param First_Mortgage First_Mortgage
	 * @param Other_Financing Other_Financing
	 * @param Hazard_Insurance Hazard_Insurance
	 * @param Real_Estate_Taxes Real_Estate_Taxes
	 * @param Mortgage_Insurance Mortgage_Insurance
	 * @param Homeowner_Assn_Dues Homeowner_Assn_Dues
	 * @param Other Other
	 * @param anonymous113 Expense_Type
	 * @return XWeb1003TypeExpenseType
	 */
	public function __construct($_Rent = null,$_First_Mortgage = null,$_Other_Financing = null,$_Hazard_Insurance = null,$_Real_Estate_Taxes = null,$_Mortgage_Insurance = null,$_Homeowner_Assn_Dues = null,$_Other = null,$_Expense_Type = null)
	{
		parent::__construct(array('Rent'=>$_Rent,'First_Mortgage'=>$_First_Mortgage,'Other_Financing'=>$_Other_Financing,'Hazard_Insurance'=>$_Hazard_Insurance,'Real_Estate_Taxes'=>$_Real_Estate_Taxes,'Mortgage_Insurance'=>$_Mortgage_Insurance,'Homeowner_Assn_Dues'=>$_Homeowner_Assn_Dues,'Other'=>$_Other,'Expense_Type'=>$_Expense_Type));
	}
	/**
	 * Set Rent
	 * @param Rent Rent
	 * @return Rent
	 */
	public function setRent($_Rent)
	{
		return ($this->Rent = $_Rent);
	}
	/**
	 * Get Rent
	 * @return Rent
	 */
	public function getRent()
	{
		return $this->Rent;
	}
	/**
	 * Set First_Mortgage
	 * @param First_Mortgage First_Mortgage
	 * @return First_Mortgage
	 */
	public function setFirst_Mortgage($_First_Mortgage)
	{
		return ($this->First_Mortgage = $_First_Mortgage);
	}
	/**
	 * Get First_Mortgage
	 * @return First_Mortgage
	 */
	public function getFirst_Mortgage()
	{
		return $this->First_Mortgage;
	}
	/**
	 * Set Other_Financing
	 * @param Other_Financing Other_Financing
	 * @return Other_Financing
	 */
	public function setOther_Financing($_Other_Financing)
	{
		return ($this->Other_Financing = $_Other_Financing);
	}
	/**
	 * Get Other_Financing
	 * @return Other_Financing
	 */
	public function getOther_Financing()
	{
		return $this->Other_Financing;
	}
	/**
	 * Set Hazard_Insurance
	 * @param Hazard_Insurance Hazard_Insurance
	 * @return Hazard_Insurance
	 */
	public function setHazard_Insurance($_Hazard_Insurance)
	{
		return ($this->Hazard_Insurance = $_Hazard_Insurance);
	}
	/**
	 * Get Hazard_Insurance
	 * @return Hazard_Insurance
	 */
	public function getHazard_Insurance()
	{
		return $this->Hazard_Insurance;
	}
	/**
	 * Set Real_Estate_Taxes
	 * @param Real_Estate_Taxes Real_Estate_Taxes
	 * @return Real_Estate_Taxes
	 */
	public function setReal_Estate_Taxes($_Real_Estate_Taxes)
	{
		return ($this->Real_Estate_Taxes = $_Real_Estate_Taxes);
	}
	/**
	 * Get Real_Estate_Taxes
	 * @return Real_Estate_Taxes
	 */
	public function getReal_Estate_Taxes()
	{
		return $this->Real_Estate_Taxes;
	}
	/**
	 * Set Mortgage_Insurance
	 * @param Mortgage_Insurance Mortgage_Insurance
	 * @return Mortgage_Insurance
	 */
	public function setMortgage_Insurance($_Mortgage_Insurance)
	{
		return ($this->Mortgage_Insurance = $_Mortgage_Insurance);
	}
	/**
	 * Get Mortgage_Insurance
	 * @return Mortgage_Insurance
	 */
	public function getMortgage_Insurance()
	{
		return $this->Mortgage_Insurance;
	}
	/**
	 * Set Homeowner_Assn_Dues
	 * @param Homeowner_Assn_Dues Homeowner_Assn_Dues
	 * @return Homeowner_Assn_Dues
	 */
	public function setHomeowner_Assn_Dues($_Homeowner_Assn_Dues)
	{
		return ($this->Homeowner_Assn_Dues = $_Homeowner_Assn_Dues);
	}
	/**
	 * Get Homeowner_Assn_Dues
	 * @return Homeowner_Assn_Dues
	 */
	public function getHomeowner_Assn_Dues()
	{
		return $this->Homeowner_Assn_Dues;
	}
	/**
	 * Set Other
	 * @param Other Other
	 * @return Other
	 */
	public function setOther($_Other)
	{
		return ($this->Other = $_Other);
	}
	/**
	 * Get Other
	 * @return Other
	 */
	public function getOther()
	{
		return $this->Other;
	}
	/**
	 * Set Expense_Type
	 * @param anonymous113 Expense_Type
	 * @return anonymous113
	 */
	public function setExpense_Type($_Expense_Type)
	{
		return ($this->Expense_Type = $_Expense_Type);
	}
	/**
	 * Get Expense_Type
	 * @return anonymous113
	 */
	public function getExpense_Type()
	{
		return $this->Expense_Type;
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