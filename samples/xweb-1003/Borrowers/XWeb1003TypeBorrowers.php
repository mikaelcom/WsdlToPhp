<?php
/**
 * Class file for XWeb1003TypeBorrowers
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeBorrowers
 * @date 09/07/2012
 */
class XWeb1003TypeBorrowers extends XWeb1003WsdlClass
{
	/**
	 * The Borrower
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 2
	 * @var XWeb1003TypeBorrowerType
	 */
	public $Borrower;
	/**
	 * The Housing_Expense
	 * @var XWeb1003TypeHousing_Expense
	 */
	public $Housing_Expense;
	/**
	 * The Assets_Liabilities
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWeb1003TypeAssetsLiabilitiesType
	 */
	public $Assets_Liabilities;
	/**
	 * Constructor
	 * @param XWeb1003TypeBorrowerType Borrower
	 * @param XWeb1003TypeHousing_Expense Housing_Expense
	 * @param XWeb1003TypeAssetsLiabilitiesType Assets_Liabilities
	 * @return XWeb1003TypeBorrowers
	 */
	public function __construct($_Borrower = null,$_Housing_Expense = null,$_Assets_Liabilities = null)
	{
		parent::__construct(array('Borrower'=>$_Borrower,'Housing_Expense'=>$_Housing_Expense,'Assets_Liabilities'=>$_Assets_Liabilities));
	}
	/**
	 * Set Borrower
	 * @param BorrowerType Borrower
	 * @return BorrowerType
	 */
	public function setBorrower($_Borrower)
	{
		return ($this->Borrower = $_Borrower);
	}
	/**
	 * Get Borrower
	 * @return XWeb1003TypeBorrowerType
	 */
	public function getBorrower()
	{
		return $this->Borrower;
	}
	/**
	 * Set Housing_Expense
	 * @param Housing_Expense Housing_Expense
	 * @return Housing_Expense
	 */
	public function setHousing_Expense($_Housing_Expense)
	{
		return ($this->Housing_Expense = $_Housing_Expense);
	}
	/**
	 * Get Housing_Expense
	 * @return XWeb1003TypeHousing_Expense
	 */
	public function getHousing_Expense()
	{
		return $this->Housing_Expense;
	}
	/**
	 * Set Assets_Liabilities
	 * @param AssetsLiabilitiesType Assets_Liabilities
	 * @return AssetsLiabilitiesType
	 */
	public function setAssets_Liabilities($_Assets_Liabilities)
	{
		return ($this->Assets_Liabilities = $_Assets_Liabilities);
	}
	/**
	 * Get Assets_Liabilities
	 * @return XWeb1003TypeAssetsLiabilitiesType
	 */
	public function getAssets_Liabilities()
	{
		return $this->Assets_Liabilities;
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