<?php
/**
 * Class file for XiFinancialsTypeCurrentAssets
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeCurrentAssets
 * @date 08/07/2012
 */
class XiFinancialsTypeCurrentAssets extends XiFinancialsWsdlClass
{
	/**
	 * The CashAndEquivalents
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CashAndEquivalents;
	/**
	 * The RestrictedCash
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RestrictedCash;
	/**
	 * The MarketableSecurities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MarketableSecurities;
	/**
	 * The AccountsReceivable
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AccountsReceivable;
	/**
	 * The LoansReceivable
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LoansReceivable;
	/**
	 * The OtherReceivable
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherReceivable;
	/**
	 * The Receivables
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Receivables;
	/**
	 * The RawMaterials
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RawMaterials;
	/**
	 * The WorkInProgress
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $WorkInProgress;
	/**
	 * The PurchasedComponents
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PurchasedComponents;
	/**
	 * The FinishedGoods
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $FinishedGoods;
	/**
	 * The OtherInventories
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherInventories;
	/**
	 * The InventoriesAdjustmentsAndAllowances
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $InventoriesAdjustmentsAndAllowances;
	/**
	 * The Inventories
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Inventories;
	/**
	 * The PrepaidExpenses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PrepaidExpenses;
	/**
	 * The CurrentDeferredIncomeTaxes
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CurrentDeferredIncomeTaxes;
	/**
	 * The OtherCurrentAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherCurrentAssets;
	/**
	 * The TotalCurrentAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalCurrentAssets;
	/**
	 * Constructor
	 * @param double CashAndEquivalents
	 * @param double RestrictedCash
	 * @param double MarketableSecurities
	 * @param double AccountsReceivable
	 * @param double LoansReceivable
	 * @param double OtherReceivable
	 * @param double Receivables
	 * @param double RawMaterials
	 * @param double WorkInProgress
	 * @param double PurchasedComponents
	 * @param double FinishedGoods
	 * @param double OtherInventories
	 * @param double InventoriesAdjustmentsAndAllowances
	 * @param double Inventories
	 * @param double PrepaidExpenses
	 * @param double CurrentDeferredIncomeTaxes
	 * @param double OtherCurrentAssets
	 * @param double TotalCurrentAssets
	 * @return XiFinancialsTypeCurrentAssets
	 */
	public function __construct($_CashAndEquivalents,$_RestrictedCash,$_MarketableSecurities,$_AccountsReceivable,$_LoansReceivable,$_OtherReceivable,$_Receivables,$_RawMaterials,$_WorkInProgress,$_PurchasedComponents,$_FinishedGoods,$_OtherInventories,$_InventoriesAdjustmentsAndAllowances,$_Inventories,$_PrepaidExpenses,$_CurrentDeferredIncomeTaxes,$_OtherCurrentAssets,$_TotalCurrentAssets)
	{
		parent::__construct(array('CashAndEquivalents'=>$_CashAndEquivalents,'RestrictedCash'=>$_RestrictedCash,'MarketableSecurities'=>$_MarketableSecurities,'AccountsReceivable'=>$_AccountsReceivable,'LoansReceivable'=>$_LoansReceivable,'OtherReceivable'=>$_OtherReceivable,'Receivables'=>$_Receivables,'RawMaterials'=>$_RawMaterials,'WorkInProgress'=>$_WorkInProgress,'PurchasedComponents'=>$_PurchasedComponents,'FinishedGoods'=>$_FinishedGoods,'OtherInventories'=>$_OtherInventories,'InventoriesAdjustmentsAndAllowances'=>$_InventoriesAdjustmentsAndAllowances,'Inventories'=>$_Inventories,'PrepaidExpenses'=>$_PrepaidExpenses,'CurrentDeferredIncomeTaxes'=>$_CurrentDeferredIncomeTaxes,'OtherCurrentAssets'=>$_OtherCurrentAssets,'TotalCurrentAssets'=>$_TotalCurrentAssets));
	}
	/**
	 * Set CashAndEquivalents
	 * @param double CashAndEquivalents
	 * @return double
	 */
	public function setCashAndEquivalents($_CashAndEquivalents)
	{
		return ($this->CashAndEquivalents = $_CashAndEquivalents);
	}
	/**
	 * Get CashAndEquivalents
	 * @return double
	 */
	public function getCashAndEquivalents()
	{
		return $this->CashAndEquivalents;
	}
	/**
	 * Set RestrictedCash
	 * @param double RestrictedCash
	 * @return double
	 */
	public function setRestrictedCash($_RestrictedCash)
	{
		return ($this->RestrictedCash = $_RestrictedCash);
	}
	/**
	 * Get RestrictedCash
	 * @return double
	 */
	public function getRestrictedCash()
	{
		return $this->RestrictedCash;
	}
	/**
	 * Set MarketableSecurities
	 * @param double MarketableSecurities
	 * @return double
	 */
	public function setMarketableSecurities($_MarketableSecurities)
	{
		return ($this->MarketableSecurities = $_MarketableSecurities);
	}
	/**
	 * Get MarketableSecurities
	 * @return double
	 */
	public function getMarketableSecurities()
	{
		return $this->MarketableSecurities;
	}
	/**
	 * Set AccountsReceivable
	 * @param double AccountsReceivable
	 * @return double
	 */
	public function setAccountsReceivable($_AccountsReceivable)
	{
		return ($this->AccountsReceivable = $_AccountsReceivable);
	}
	/**
	 * Get AccountsReceivable
	 * @return double
	 */
	public function getAccountsReceivable()
	{
		return $this->AccountsReceivable;
	}
	/**
	 * Set LoansReceivable
	 * @param double LoansReceivable
	 * @return double
	 */
	public function setLoansReceivable($_LoansReceivable)
	{
		return ($this->LoansReceivable = $_LoansReceivable);
	}
	/**
	 * Get LoansReceivable
	 * @return double
	 */
	public function getLoansReceivable()
	{
		return $this->LoansReceivable;
	}
	/**
	 * Set OtherReceivable
	 * @param double OtherReceivable
	 * @return double
	 */
	public function setOtherReceivable($_OtherReceivable)
	{
		return ($this->OtherReceivable = $_OtherReceivable);
	}
	/**
	 * Get OtherReceivable
	 * @return double
	 */
	public function getOtherReceivable()
	{
		return $this->OtherReceivable;
	}
	/**
	 * Set Receivables
	 * @param double Receivables
	 * @return double
	 */
	public function setReceivables($_Receivables)
	{
		return ($this->Receivables = $_Receivables);
	}
	/**
	 * Get Receivables
	 * @return double
	 */
	public function getReceivables()
	{
		return $this->Receivables;
	}
	/**
	 * Set RawMaterials
	 * @param double RawMaterials
	 * @return double
	 */
	public function setRawMaterials($_RawMaterials)
	{
		return ($this->RawMaterials = $_RawMaterials);
	}
	/**
	 * Get RawMaterials
	 * @return double
	 */
	public function getRawMaterials()
	{
		return $this->RawMaterials;
	}
	/**
	 * Set WorkInProgress
	 * @param double WorkInProgress
	 * @return double
	 */
	public function setWorkInProgress($_WorkInProgress)
	{
		return ($this->WorkInProgress = $_WorkInProgress);
	}
	/**
	 * Get WorkInProgress
	 * @return double
	 */
	public function getWorkInProgress()
	{
		return $this->WorkInProgress;
	}
	/**
	 * Set PurchasedComponents
	 * @param double PurchasedComponents
	 * @return double
	 */
	public function setPurchasedComponents($_PurchasedComponents)
	{
		return ($this->PurchasedComponents = $_PurchasedComponents);
	}
	/**
	 * Get PurchasedComponents
	 * @return double
	 */
	public function getPurchasedComponents()
	{
		return $this->PurchasedComponents;
	}
	/**
	 * Set FinishedGoods
	 * @param double FinishedGoods
	 * @return double
	 */
	public function setFinishedGoods($_FinishedGoods)
	{
		return ($this->FinishedGoods = $_FinishedGoods);
	}
	/**
	 * Get FinishedGoods
	 * @return double
	 */
	public function getFinishedGoods()
	{
		return $this->FinishedGoods;
	}
	/**
	 * Set OtherInventories
	 * @param double OtherInventories
	 * @return double
	 */
	public function setOtherInventories($_OtherInventories)
	{
		return ($this->OtherInventories = $_OtherInventories);
	}
	/**
	 * Get OtherInventories
	 * @return double
	 */
	public function getOtherInventories()
	{
		return $this->OtherInventories;
	}
	/**
	 * Set InventoriesAdjustmentsAndAllowances
	 * @param double InventoriesAdjustmentsAndAllowances
	 * @return double
	 */
	public function setInventoriesAdjustmentsAndAllowances($_InventoriesAdjustmentsAndAllowances)
	{
		return ($this->InventoriesAdjustmentsAndAllowances = $_InventoriesAdjustmentsAndAllowances);
	}
	/**
	 * Get InventoriesAdjustmentsAndAllowances
	 * @return double
	 */
	public function getInventoriesAdjustmentsAndAllowances()
	{
		return $this->InventoriesAdjustmentsAndAllowances;
	}
	/**
	 * Set Inventories
	 * @param double Inventories
	 * @return double
	 */
	public function setInventories($_Inventories)
	{
		return ($this->Inventories = $_Inventories);
	}
	/**
	 * Get Inventories
	 * @return double
	 */
	public function getInventories()
	{
		return $this->Inventories;
	}
	/**
	 * Set PrepaidExpenses
	 * @param double PrepaidExpenses
	 * @return double
	 */
	public function setPrepaidExpenses($_PrepaidExpenses)
	{
		return ($this->PrepaidExpenses = $_PrepaidExpenses);
	}
	/**
	 * Get PrepaidExpenses
	 * @return double
	 */
	public function getPrepaidExpenses()
	{
		return $this->PrepaidExpenses;
	}
	/**
	 * Set CurrentDeferredIncomeTaxes
	 * @param double CurrentDeferredIncomeTaxes
	 * @return double
	 */
	public function setCurrentDeferredIncomeTaxes($_CurrentDeferredIncomeTaxes)
	{
		return ($this->CurrentDeferredIncomeTaxes = $_CurrentDeferredIncomeTaxes);
	}
	/**
	 * Get CurrentDeferredIncomeTaxes
	 * @return double
	 */
	public function getCurrentDeferredIncomeTaxes()
	{
		return $this->CurrentDeferredIncomeTaxes;
	}
	/**
	 * Set OtherCurrentAssets
	 * @param double OtherCurrentAssets
	 * @return double
	 */
	public function setOtherCurrentAssets($_OtherCurrentAssets)
	{
		return ($this->OtherCurrentAssets = $_OtherCurrentAssets);
	}
	/**
	 * Get OtherCurrentAssets
	 * @return double
	 */
	public function getOtherCurrentAssets()
	{
		return $this->OtherCurrentAssets;
	}
	/**
	 * Set TotalCurrentAssets
	 * @param double TotalCurrentAssets
	 * @return double
	 */
	public function setTotalCurrentAssets($_TotalCurrentAssets)
	{
		return ($this->TotalCurrentAssets = $_TotalCurrentAssets);
	}
	/**
	 * Get TotalCurrentAssets
	 * @return double
	 */
	public function getTotalCurrentAssets()
	{
		return $this->TotalCurrentAssets;
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