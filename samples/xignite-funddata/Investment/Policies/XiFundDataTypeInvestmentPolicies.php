<?php
/**
 * Class file for XiFundDataTypeInvestmentPolicies
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeInvestmentPolicies
 * @date 08/07/2012
 */
class XiFundDataTypeInvestmentPolicies extends XiFundDataWsdlClass
{
	/**
	 * The RepurchaseAgreements
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $RepurchaseAgreements;
	/**
	 * The OptionsOnEquities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $OptionsOnEquities;
	/**
	 * The OptionsOnDebt
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $OptionsOnDebt;
	/**
	 * The OptionsOnIndices
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $OptionsOnIndices;
	/**
	 * The InterestRateFutures
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $InterestRateFutures;
	/**
	 * The StockIndexFutures
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $StockIndexFutures;
	/**
	 * The OptionsOnFutures
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $OptionsOnFutures;
	/**
	 * The OptionsOnIndexFutures
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $OptionsOnIndexFutures;
	/**
	 * The CommodityFutures
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $CommodityFutures;
	/**
	 * The RestrictedSecurities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $RestrictedSecurities;
	/**
	 * The SharesOfInvestmentCompanies
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $SharesOfInvestmentCompanies;
	/**
	 * The ForeignIssuers
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ForeignIssuers;
	/**
	 * The CurrencyExchangeTransactions
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $CurrencyExchangeTransactions;
	/**
	 * The SecuritiesLending
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $SecuritiesLending;
	/**
	 * The Borrowing
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Borrowing;
	/**
	 * The PurchasesAndSalesByExemptAffiliated
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $PurchasesAndSalesByExemptAffiliated;
	/**
	 * The MarginPurchases
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $MarginPurchases;
	/**
	 * The ShortSelling
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ShortSelling;
	/**
	 * Constructor
	 * @param boolean RepurchaseAgreements
	 * @param boolean OptionsOnEquities
	 * @param boolean OptionsOnDebt
	 * @param boolean OptionsOnIndices
	 * @param boolean InterestRateFutures
	 * @param boolean StockIndexFutures
	 * @param boolean OptionsOnFutures
	 * @param boolean OptionsOnIndexFutures
	 * @param boolean CommodityFutures
	 * @param boolean RestrictedSecurities
	 * @param boolean SharesOfInvestmentCompanies
	 * @param boolean ForeignIssuers
	 * @param boolean CurrencyExchangeTransactions
	 * @param boolean SecuritiesLending
	 * @param boolean Borrowing
	 * @param boolean PurchasesAndSalesByExemptAffiliated
	 * @param boolean MarginPurchases
	 * @param boolean ShortSelling
	 * @return XiFundDataTypeInvestmentPolicies
	 */
	public function __construct($_RepurchaseAgreements,$_OptionsOnEquities,$_OptionsOnDebt,$_OptionsOnIndices,$_InterestRateFutures,$_StockIndexFutures,$_OptionsOnFutures,$_OptionsOnIndexFutures,$_CommodityFutures,$_RestrictedSecurities,$_SharesOfInvestmentCompanies,$_ForeignIssuers,$_CurrencyExchangeTransactions,$_SecuritiesLending,$_Borrowing,$_PurchasesAndSalesByExemptAffiliated,$_MarginPurchases,$_ShortSelling)
	{
		parent::__construct(array('RepurchaseAgreements'=>$_RepurchaseAgreements,'OptionsOnEquities'=>$_OptionsOnEquities,'OptionsOnDebt'=>$_OptionsOnDebt,'OptionsOnIndices'=>$_OptionsOnIndices,'InterestRateFutures'=>$_InterestRateFutures,'StockIndexFutures'=>$_StockIndexFutures,'OptionsOnFutures'=>$_OptionsOnFutures,'OptionsOnIndexFutures'=>$_OptionsOnIndexFutures,'CommodityFutures'=>$_CommodityFutures,'RestrictedSecurities'=>$_RestrictedSecurities,'SharesOfInvestmentCompanies'=>$_SharesOfInvestmentCompanies,'ForeignIssuers'=>$_ForeignIssuers,'CurrencyExchangeTransactions'=>$_CurrencyExchangeTransactions,'SecuritiesLending'=>$_SecuritiesLending,'Borrowing'=>$_Borrowing,'PurchasesAndSalesByExemptAffiliated'=>$_PurchasesAndSalesByExemptAffiliated,'MarginPurchases'=>$_MarginPurchases,'ShortSelling'=>$_ShortSelling));
	}
	/**
	 * Set RepurchaseAgreements
	 * @param boolean RepurchaseAgreements
	 * @return boolean
	 */
	public function setRepurchaseAgreements($_RepurchaseAgreements)
	{
		return ($this->RepurchaseAgreements = $_RepurchaseAgreements);
	}
	/**
	 * Get RepurchaseAgreements
	 * @return boolean
	 */
	public function getRepurchaseAgreements()
	{
		return $this->RepurchaseAgreements;
	}
	/**
	 * Set OptionsOnEquities
	 * @param boolean OptionsOnEquities
	 * @return boolean
	 */
	public function setOptionsOnEquities($_OptionsOnEquities)
	{
		return ($this->OptionsOnEquities = $_OptionsOnEquities);
	}
	/**
	 * Get OptionsOnEquities
	 * @return boolean
	 */
	public function getOptionsOnEquities()
	{
		return $this->OptionsOnEquities;
	}
	/**
	 * Set OptionsOnDebt
	 * @param boolean OptionsOnDebt
	 * @return boolean
	 */
	public function setOptionsOnDebt($_OptionsOnDebt)
	{
		return ($this->OptionsOnDebt = $_OptionsOnDebt);
	}
	/**
	 * Get OptionsOnDebt
	 * @return boolean
	 */
	public function getOptionsOnDebt()
	{
		return $this->OptionsOnDebt;
	}
	/**
	 * Set OptionsOnIndices
	 * @param boolean OptionsOnIndices
	 * @return boolean
	 */
	public function setOptionsOnIndices($_OptionsOnIndices)
	{
		return ($this->OptionsOnIndices = $_OptionsOnIndices);
	}
	/**
	 * Get OptionsOnIndices
	 * @return boolean
	 */
	public function getOptionsOnIndices()
	{
		return $this->OptionsOnIndices;
	}
	/**
	 * Set InterestRateFutures
	 * @param boolean InterestRateFutures
	 * @return boolean
	 */
	public function setInterestRateFutures($_InterestRateFutures)
	{
		return ($this->InterestRateFutures = $_InterestRateFutures);
	}
	/**
	 * Get InterestRateFutures
	 * @return boolean
	 */
	public function getInterestRateFutures()
	{
		return $this->InterestRateFutures;
	}
	/**
	 * Set StockIndexFutures
	 * @param boolean StockIndexFutures
	 * @return boolean
	 */
	public function setStockIndexFutures($_StockIndexFutures)
	{
		return ($this->StockIndexFutures = $_StockIndexFutures);
	}
	/**
	 * Get StockIndexFutures
	 * @return boolean
	 */
	public function getStockIndexFutures()
	{
		return $this->StockIndexFutures;
	}
	/**
	 * Set OptionsOnFutures
	 * @param boolean OptionsOnFutures
	 * @return boolean
	 */
	public function setOptionsOnFutures($_OptionsOnFutures)
	{
		return ($this->OptionsOnFutures = $_OptionsOnFutures);
	}
	/**
	 * Get OptionsOnFutures
	 * @return boolean
	 */
	public function getOptionsOnFutures()
	{
		return $this->OptionsOnFutures;
	}
	/**
	 * Set OptionsOnIndexFutures
	 * @param boolean OptionsOnIndexFutures
	 * @return boolean
	 */
	public function setOptionsOnIndexFutures($_OptionsOnIndexFutures)
	{
		return ($this->OptionsOnIndexFutures = $_OptionsOnIndexFutures);
	}
	/**
	 * Get OptionsOnIndexFutures
	 * @return boolean
	 */
	public function getOptionsOnIndexFutures()
	{
		return $this->OptionsOnIndexFutures;
	}
	/**
	 * Set CommodityFutures
	 * @param boolean CommodityFutures
	 * @return boolean
	 */
	public function setCommodityFutures($_CommodityFutures)
	{
		return ($this->CommodityFutures = $_CommodityFutures);
	}
	/**
	 * Get CommodityFutures
	 * @return boolean
	 */
	public function getCommodityFutures()
	{
		return $this->CommodityFutures;
	}
	/**
	 * Set RestrictedSecurities
	 * @param boolean RestrictedSecurities
	 * @return boolean
	 */
	public function setRestrictedSecurities($_RestrictedSecurities)
	{
		return ($this->RestrictedSecurities = $_RestrictedSecurities);
	}
	/**
	 * Get RestrictedSecurities
	 * @return boolean
	 */
	public function getRestrictedSecurities()
	{
		return $this->RestrictedSecurities;
	}
	/**
	 * Set SharesOfInvestmentCompanies
	 * @param boolean SharesOfInvestmentCompanies
	 * @return boolean
	 */
	public function setSharesOfInvestmentCompanies($_SharesOfInvestmentCompanies)
	{
		return ($this->SharesOfInvestmentCompanies = $_SharesOfInvestmentCompanies);
	}
	/**
	 * Get SharesOfInvestmentCompanies
	 * @return boolean
	 */
	public function getSharesOfInvestmentCompanies()
	{
		return $this->SharesOfInvestmentCompanies;
	}
	/**
	 * Set ForeignIssuers
	 * @param boolean ForeignIssuers
	 * @return boolean
	 */
	public function setForeignIssuers($_ForeignIssuers)
	{
		return ($this->ForeignIssuers = $_ForeignIssuers);
	}
	/**
	 * Get ForeignIssuers
	 * @return boolean
	 */
	public function getForeignIssuers()
	{
		return $this->ForeignIssuers;
	}
	/**
	 * Set CurrencyExchangeTransactions
	 * @param boolean CurrencyExchangeTransactions
	 * @return boolean
	 */
	public function setCurrencyExchangeTransactions($_CurrencyExchangeTransactions)
	{
		return ($this->CurrencyExchangeTransactions = $_CurrencyExchangeTransactions);
	}
	/**
	 * Get CurrencyExchangeTransactions
	 * @return boolean
	 */
	public function getCurrencyExchangeTransactions()
	{
		return $this->CurrencyExchangeTransactions;
	}
	/**
	 * Set SecuritiesLending
	 * @param boolean SecuritiesLending
	 * @return boolean
	 */
	public function setSecuritiesLending($_SecuritiesLending)
	{
		return ($this->SecuritiesLending = $_SecuritiesLending);
	}
	/**
	 * Get SecuritiesLending
	 * @return boolean
	 */
	public function getSecuritiesLending()
	{
		return $this->SecuritiesLending;
	}
	/**
	 * Set Borrowing
	 * @param boolean Borrowing
	 * @return boolean
	 */
	public function setBorrowing($_Borrowing)
	{
		return ($this->Borrowing = $_Borrowing);
	}
	/**
	 * Get Borrowing
	 * @return boolean
	 */
	public function getBorrowing()
	{
		return $this->Borrowing;
	}
	/**
	 * Set PurchasesAndSalesByExemptAffiliated
	 * @param boolean PurchasesAndSalesByExemptAffiliated
	 * @return boolean
	 */
	public function setPurchasesAndSalesByExemptAffiliated($_PurchasesAndSalesByExemptAffiliated)
	{
		return ($this->PurchasesAndSalesByExemptAffiliated = $_PurchasesAndSalesByExemptAffiliated);
	}
	/**
	 * Get PurchasesAndSalesByExemptAffiliated
	 * @return boolean
	 */
	public function getPurchasesAndSalesByExemptAffiliated()
	{
		return $this->PurchasesAndSalesByExemptAffiliated;
	}
	/**
	 * Set MarginPurchases
	 * @param boolean MarginPurchases
	 * @return boolean
	 */
	public function setMarginPurchases($_MarginPurchases)
	{
		return ($this->MarginPurchases = $_MarginPurchases);
	}
	/**
	 * Get MarginPurchases
	 * @return boolean
	 */
	public function getMarginPurchases()
	{
		return $this->MarginPurchases;
	}
	/**
	 * Set ShortSelling
	 * @param boolean ShortSelling
	 * @return boolean
	 */
	public function setShortSelling($_ShortSelling)
	{
		return ($this->ShortSelling = $_ShortSelling);
	}
	/**
	 * Get ShortSelling
	 * @return boolean
	 */
	public function getShortSelling()
	{
		return $this->ShortSelling;
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