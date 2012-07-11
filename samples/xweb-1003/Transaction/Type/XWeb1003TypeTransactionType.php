<?php
/**
 * Class file for XWeb1003TypeTransactionType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeTransactionType
 * @date 09/07/2012
 */
class XWeb1003TypeTransactionType extends XWeb1003WsdlClass
{
	/**
	 * The Purchase_Price
	 * @var Purchase_Price
	 */
	public $Purchase_Price;
	/**
	 * The Alterations_Improvements
	 * @var Alterations_Improvements
	 */
	public $Alterations_Improvements;
	/**
	 * The Land
	 * @var Land
	 */
	public $Land;
	/**
	 * The Refinance
	 * @var Refinance
	 */
	public $Refinance;
	/**
	 * The Prepaid_Items
	 * @var Prepaid_Items
	 */
	public $Prepaid_Items;
	/**
	 * The Closing_Costs
	 * @var Closing_Costs
	 */
	public $Closing_Costs;
	/**
	 * The PMI_MIP
	 * @var PMI_MIP
	 */
	public $PMI_MIP;
	/**
	 * The Discount
	 * @var Discount
	 */
	public $Discount;
	/**
	 * The Subordinate_Financing
	 * @var Subordinate_Financing
	 */
	public $Subordinate_Financing;
	/**
	 * The Closing_Costs_Seller
	 * @var Closing_Costs_Seller
	 */
	public $Closing_Costs_Seller;
	/**
	 * The Loan_Amount
	 * @var Loan_Amount
	 */
	public $Loan_Amount;
	/**
	 * The PMI_MIP_Financed
	 * @var PMI_MIP_Financed
	 */
	public $PMI_MIP_Financed;
	/**
	 * The Other_Credits
	 * @var XWeb1003TypeOther_Credits
	 */
	public $Other_Credits;
	/**
	 * Constructor
	 * @param Purchase_Price Purchase_Price
	 * @param Alterations_Improvements Alterations_Improvements
	 * @param Land Land
	 * @param Refinance Refinance
	 * @param Prepaid_Items Prepaid_Items
	 * @param Closing_Costs Closing_Costs
	 * @param PMI_MIP PMI_MIP
	 * @param Discount Discount
	 * @param Subordinate_Financing Subordinate_Financing
	 * @param Closing_Costs_Seller Closing_Costs_Seller
	 * @param Loan_Amount Loan_Amount
	 * @param PMI_MIP_Financed PMI_MIP_Financed
	 * @param XWeb1003TypeOther_Credits Other_Credits
	 * @return XWeb1003TypeTransactionType
	 */
	public function __construct($_Purchase_Price = null,$_Alterations_Improvements = null,$_Land = null,$_Refinance = null,$_Prepaid_Items = null,$_Closing_Costs = null,$_PMI_MIP = null,$_Discount = null,$_Subordinate_Financing = null,$_Closing_Costs_Seller = null,$_Loan_Amount = null,$_PMI_MIP_Financed = null,$_Other_Credits = null)
	{
		parent::__construct(array('Purchase_Price'=>$_Purchase_Price,'Alterations_Improvements'=>$_Alterations_Improvements,'Land'=>$_Land,'Refinance'=>$_Refinance,'Prepaid_Items'=>$_Prepaid_Items,'Closing_Costs'=>$_Closing_Costs,'PMI_MIP'=>$_PMI_MIP,'Discount'=>$_Discount,'Subordinate_Financing'=>$_Subordinate_Financing,'Closing_Costs_Seller'=>$_Closing_Costs_Seller,'Loan_Amount'=>$_Loan_Amount,'PMI_MIP_Financed'=>$_PMI_MIP_Financed,'Other_Credits'=>$_Other_Credits));
	}
	/**
	 * Set Purchase_Price
	 * @param Purchase_Price Purchase_Price
	 * @return Purchase_Price
	 */
	public function setPurchase_Price($_Purchase_Price)
	{
		return ($this->Purchase_Price = $_Purchase_Price);
	}
	/**
	 * Get Purchase_Price
	 * @return Purchase_Price
	 */
	public function getPurchase_Price()
	{
		return $this->Purchase_Price;
	}
	/**
	 * Set Alterations_Improvements
	 * @param Alterations_Improvements Alterations_Improvements
	 * @return Alterations_Improvements
	 */
	public function setAlterations_Improvements($_Alterations_Improvements)
	{
		return ($this->Alterations_Improvements = $_Alterations_Improvements);
	}
	/**
	 * Get Alterations_Improvements
	 * @return Alterations_Improvements
	 */
	public function getAlterations_Improvements()
	{
		return $this->Alterations_Improvements;
	}
	/**
	 * Set Land
	 * @param Land Land
	 * @return Land
	 */
	public function setLand($_Land)
	{
		return ($this->Land = $_Land);
	}
	/**
	 * Get Land
	 * @return Land
	 */
	public function getLand()
	{
		return $this->Land;
	}
	/**
	 * Set Refinance
	 * @param Refinance Refinance
	 * @return Refinance
	 */
	public function setRefinance($_Refinance)
	{
		return ($this->Refinance = $_Refinance);
	}
	/**
	 * Get Refinance
	 * @return Refinance
	 */
	public function getRefinance()
	{
		return $this->Refinance;
	}
	/**
	 * Set Prepaid_Items
	 * @param Prepaid_Items Prepaid_Items
	 * @return Prepaid_Items
	 */
	public function setPrepaid_Items($_Prepaid_Items)
	{
		return ($this->Prepaid_Items = $_Prepaid_Items);
	}
	/**
	 * Get Prepaid_Items
	 * @return Prepaid_Items
	 */
	public function getPrepaid_Items()
	{
		return $this->Prepaid_Items;
	}
	/**
	 * Set Closing_Costs
	 * @param Closing_Costs Closing_Costs
	 * @return Closing_Costs
	 */
	public function setClosing_Costs($_Closing_Costs)
	{
		return ($this->Closing_Costs = $_Closing_Costs);
	}
	/**
	 * Get Closing_Costs
	 * @return Closing_Costs
	 */
	public function getClosing_Costs()
	{
		return $this->Closing_Costs;
	}
	/**
	 * Set PMI_MIP
	 * @param PMI_MIP PMI_MIP
	 * @return PMI_MIP
	 */
	public function setPMI_MIP($_PMI_MIP)
	{
		return ($this->PMI_MIP = $_PMI_MIP);
	}
	/**
	 * Get PMI_MIP
	 * @return PMI_MIP
	 */
	public function getPMI_MIP()
	{
		return $this->PMI_MIP;
	}
	/**
	 * Set Discount
	 * @param Discount Discount
	 * @return Discount
	 */
	public function setDiscount($_Discount)
	{
		return ($this->Discount = $_Discount);
	}
	/**
	 * Get Discount
	 * @return Discount
	 */
	public function getDiscount()
	{
		return $this->Discount;
	}
	/**
	 * Set Subordinate_Financing
	 * @param Subordinate_Financing Subordinate_Financing
	 * @return Subordinate_Financing
	 */
	public function setSubordinate_Financing($_Subordinate_Financing)
	{
		return ($this->Subordinate_Financing = $_Subordinate_Financing);
	}
	/**
	 * Get Subordinate_Financing
	 * @return Subordinate_Financing
	 */
	public function getSubordinate_Financing()
	{
		return $this->Subordinate_Financing;
	}
	/**
	 * Set Closing_Costs_Seller
	 * @param Closing_Costs_Seller Closing_Costs_Seller
	 * @return Closing_Costs_Seller
	 */
	public function setClosing_Costs_Seller($_Closing_Costs_Seller)
	{
		return ($this->Closing_Costs_Seller = $_Closing_Costs_Seller);
	}
	/**
	 * Get Closing_Costs_Seller
	 * @return Closing_Costs_Seller
	 */
	public function getClosing_Costs_Seller()
	{
		return $this->Closing_Costs_Seller;
	}
	/**
	 * Set Loan_Amount
	 * @param Loan_Amount Loan_Amount
	 * @return Loan_Amount
	 */
	public function setLoan_Amount($_Loan_Amount)
	{
		return ($this->Loan_Amount = $_Loan_Amount);
	}
	/**
	 * Get Loan_Amount
	 * @return Loan_Amount
	 */
	public function getLoan_Amount()
	{
		return $this->Loan_Amount;
	}
	/**
	 * Set PMI_MIP_Financed
	 * @param PMI_MIP_Financed PMI_MIP_Financed
	 * @return PMI_MIP_Financed
	 */
	public function setPMI_MIP_Financed($_PMI_MIP_Financed)
	{
		return ($this->PMI_MIP_Financed = $_PMI_MIP_Financed);
	}
	/**
	 * Get PMI_MIP_Financed
	 * @return PMI_MIP_Financed
	 */
	public function getPMI_MIP_Financed()
	{
		return $this->PMI_MIP_Financed;
	}
	/**
	 * Set Other_Credits
	 * @param Other_Credits Other_Credits
	 * @return Other_Credits
	 */
	public function setOther_Credits($_Other_Credits)
	{
		return ($this->Other_Credits = $_Other_Credits);
	}
	/**
	 * Get Other_Credits
	 * @return XWeb1003TypeOther_Credits
	 */
	public function getOther_Credits()
	{
		return $this->Other_Credits;
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