<?php
/**
 * Class file for XiFundDataTypeLiabilities
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeLiabilities
 * @date 08/07/2012
 */
class XiFundDataTypeLiabilities extends XiFundDataWsdlClass
{
	/**
	 * The PayablesOnPortfolioInstrumentsPurchased
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PayablesOnPortfolioInstrumentsPurchased;
	/**
	 * The AmountsOwedToAffiliatedPerson
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AmountsOwedToAffiliatedPerson;
	/**
	 * The SeniorLongTermDebt
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SeniorLongTermDebt;
	/**
	 * The OtherLiabilities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherLiabilities;
	/**
	 * The ReverseRepurchaseAgreements
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ReverseRepurchaseAgreements;
	/**
	 * The ShortSales
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ShortSales;
	/**
	 * The WrittenOptions
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $WrittenOptions;
	/**
	 * The AllOtherLiabilities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AllOtherLiabilities;
	/**
	 * The SeniorEquity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SeniorEquity;
	/**
	 * The NetAssetsOfCommonShareholders
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetAssetsOfCommonShareholders;
	/**
	 * The SharesOutstanding
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SharesOutstanding;
	/**
	 * The SecondClassOpenEndCompanySharesOutstanding
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SecondClassOpenEndCompanySharesOutstanding;
	/**
	 * The NAV
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NAV;
	/**
	 * The SecondClassOpenEndCompanySharesNAV
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SecondClassOpenEndCompanySharesNAV;
	/**
	 * The MarkToMarketNAV
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MarkToMarketNAV;
	/**
	 * The TotalNumberOfShareHolderAccounts
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $TotalNumberOfShareHolderAccounts;
	/**
	 * The TotalValueOfAssetsInSegregatedAccount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalValueOfAssetsInSegregatedAccount;
	/**
	 * Constructor
	 * @param double PayablesOnPortfolioInstrumentsPurchased
	 * @param double AmountsOwedToAffiliatedPerson
	 * @param double SeniorLongTermDebt
	 * @param double OtherLiabilities
	 * @param double ReverseRepurchaseAgreements
	 * @param double ShortSales
	 * @param double WrittenOptions
	 * @param double AllOtherLiabilities
	 * @param double SeniorEquity
	 * @param double NetAssetsOfCommonShareholders
	 * @param double SharesOutstanding
	 * @param double SecondClassOpenEndCompanySharesOutstanding
	 * @param double NAV
	 * @param double SecondClassOpenEndCompanySharesNAV
	 * @param double MarkToMarketNAV
	 * @param int TotalNumberOfShareHolderAccounts
	 * @param double TotalValueOfAssetsInSegregatedAccount
	 * @return XiFundDataTypeLiabilities
	 */
	public function __construct($_PayablesOnPortfolioInstrumentsPurchased,$_AmountsOwedToAffiliatedPerson,$_SeniorLongTermDebt,$_OtherLiabilities,$_ReverseRepurchaseAgreements,$_ShortSales,$_WrittenOptions,$_AllOtherLiabilities,$_SeniorEquity,$_NetAssetsOfCommonShareholders,$_SharesOutstanding,$_SecondClassOpenEndCompanySharesOutstanding,$_NAV,$_SecondClassOpenEndCompanySharesNAV,$_MarkToMarketNAV,$_TotalNumberOfShareHolderAccounts,$_TotalValueOfAssetsInSegregatedAccount)
	{
		parent::__construct(array('PayablesOnPortfolioInstrumentsPurchased'=>$_PayablesOnPortfolioInstrumentsPurchased,'AmountsOwedToAffiliatedPerson'=>$_AmountsOwedToAffiliatedPerson,'SeniorLongTermDebt'=>$_SeniorLongTermDebt,'OtherLiabilities'=>$_OtherLiabilities,'ReverseRepurchaseAgreements'=>$_ReverseRepurchaseAgreements,'ShortSales'=>$_ShortSales,'WrittenOptions'=>$_WrittenOptions,'AllOtherLiabilities'=>$_AllOtherLiabilities,'SeniorEquity'=>$_SeniorEquity,'NetAssetsOfCommonShareholders'=>$_NetAssetsOfCommonShareholders,'SharesOutstanding'=>$_SharesOutstanding,'SecondClassOpenEndCompanySharesOutstanding'=>$_SecondClassOpenEndCompanySharesOutstanding,'NAV'=>$_NAV,'SecondClassOpenEndCompanySharesNAV'=>$_SecondClassOpenEndCompanySharesNAV,'MarkToMarketNAV'=>$_MarkToMarketNAV,'TotalNumberOfShareHolderAccounts'=>$_TotalNumberOfShareHolderAccounts,'TotalValueOfAssetsInSegregatedAccount'=>$_TotalValueOfAssetsInSegregatedAccount));
	}
	/**
	 * Set PayablesOnPortfolioInstrumentsPurchased
	 * @param double PayablesOnPortfolioInstrumentsPurchased
	 * @return double
	 */
	public function setPayablesOnPortfolioInstrumentsPurchased($_PayablesOnPortfolioInstrumentsPurchased)
	{
		return ($this->PayablesOnPortfolioInstrumentsPurchased = $_PayablesOnPortfolioInstrumentsPurchased);
	}
	/**
	 * Get PayablesOnPortfolioInstrumentsPurchased
	 * @return double
	 */
	public function getPayablesOnPortfolioInstrumentsPurchased()
	{
		return $this->PayablesOnPortfolioInstrumentsPurchased;
	}
	/**
	 * Set AmountsOwedToAffiliatedPerson
	 * @param double AmountsOwedToAffiliatedPerson
	 * @return double
	 */
	public function setAmountsOwedToAffiliatedPerson($_AmountsOwedToAffiliatedPerson)
	{
		return ($this->AmountsOwedToAffiliatedPerson = $_AmountsOwedToAffiliatedPerson);
	}
	/**
	 * Get AmountsOwedToAffiliatedPerson
	 * @return double
	 */
	public function getAmountsOwedToAffiliatedPerson()
	{
		return $this->AmountsOwedToAffiliatedPerson;
	}
	/**
	 * Set SeniorLongTermDebt
	 * @param double SeniorLongTermDebt
	 * @return double
	 */
	public function setSeniorLongTermDebt($_SeniorLongTermDebt)
	{
		return ($this->SeniorLongTermDebt = $_SeniorLongTermDebt);
	}
	/**
	 * Get SeniorLongTermDebt
	 * @return double
	 */
	public function getSeniorLongTermDebt()
	{
		return $this->SeniorLongTermDebt;
	}
	/**
	 * Set OtherLiabilities
	 * @param double OtherLiabilities
	 * @return double
	 */
	public function setOtherLiabilities($_OtherLiabilities)
	{
		return ($this->OtherLiabilities = $_OtherLiabilities);
	}
	/**
	 * Get OtherLiabilities
	 * @return double
	 */
	public function getOtherLiabilities()
	{
		return $this->OtherLiabilities;
	}
	/**
	 * Set ReverseRepurchaseAgreements
	 * @param double ReverseRepurchaseAgreements
	 * @return double
	 */
	public function setReverseRepurchaseAgreements($_ReverseRepurchaseAgreements)
	{
		return ($this->ReverseRepurchaseAgreements = $_ReverseRepurchaseAgreements);
	}
	/**
	 * Get ReverseRepurchaseAgreements
	 * @return double
	 */
	public function getReverseRepurchaseAgreements()
	{
		return $this->ReverseRepurchaseAgreements;
	}
	/**
	 * Set ShortSales
	 * @param double ShortSales
	 * @return double
	 */
	public function setShortSales($_ShortSales)
	{
		return ($this->ShortSales = $_ShortSales);
	}
	/**
	 * Get ShortSales
	 * @return double
	 */
	public function getShortSales()
	{
		return $this->ShortSales;
	}
	/**
	 * Set WrittenOptions
	 * @param double WrittenOptions
	 * @return double
	 */
	public function setWrittenOptions($_WrittenOptions)
	{
		return ($this->WrittenOptions = $_WrittenOptions);
	}
	/**
	 * Get WrittenOptions
	 * @return double
	 */
	public function getWrittenOptions()
	{
		return $this->WrittenOptions;
	}
	/**
	 * Set AllOtherLiabilities
	 * @param double AllOtherLiabilities
	 * @return double
	 */
	public function setAllOtherLiabilities($_AllOtherLiabilities)
	{
		return ($this->AllOtherLiabilities = $_AllOtherLiabilities);
	}
	/**
	 * Get AllOtherLiabilities
	 * @return double
	 */
	public function getAllOtherLiabilities()
	{
		return $this->AllOtherLiabilities;
	}
	/**
	 * Set SeniorEquity
	 * @param double SeniorEquity
	 * @return double
	 */
	public function setSeniorEquity($_SeniorEquity)
	{
		return ($this->SeniorEquity = $_SeniorEquity);
	}
	/**
	 * Get SeniorEquity
	 * @return double
	 */
	public function getSeniorEquity()
	{
		return $this->SeniorEquity;
	}
	/**
	 * Set NetAssetsOfCommonShareholders
	 * @param double NetAssetsOfCommonShareholders
	 * @return double
	 */
	public function setNetAssetsOfCommonShareholders($_NetAssetsOfCommonShareholders)
	{
		return ($this->NetAssetsOfCommonShareholders = $_NetAssetsOfCommonShareholders);
	}
	/**
	 * Get NetAssetsOfCommonShareholders
	 * @return double
	 */
	public function getNetAssetsOfCommonShareholders()
	{
		return $this->NetAssetsOfCommonShareholders;
	}
	/**
	 * Set SharesOutstanding
	 * @param double SharesOutstanding
	 * @return double
	 */
	public function setSharesOutstanding($_SharesOutstanding)
	{
		return ($this->SharesOutstanding = $_SharesOutstanding);
	}
	/**
	 * Get SharesOutstanding
	 * @return double
	 */
	public function getSharesOutstanding()
	{
		return $this->SharesOutstanding;
	}
	/**
	 * Set SecondClassOpenEndCompanySharesOutstanding
	 * @param double SecondClassOpenEndCompanySharesOutstanding
	 * @return double
	 */
	public function setSecondClassOpenEndCompanySharesOutstanding($_SecondClassOpenEndCompanySharesOutstanding)
	{
		return ($this->SecondClassOpenEndCompanySharesOutstanding = $_SecondClassOpenEndCompanySharesOutstanding);
	}
	/**
	 * Get SecondClassOpenEndCompanySharesOutstanding
	 * @return double
	 */
	public function getSecondClassOpenEndCompanySharesOutstanding()
	{
		return $this->SecondClassOpenEndCompanySharesOutstanding;
	}
	/**
	 * Set NAV
	 * @param double NAV
	 * @return double
	 */
	public function setNAV($_NAV)
	{
		return ($this->NAV = $_NAV);
	}
	/**
	 * Get NAV
	 * @return double
	 */
	public function getNAV()
	{
		return $this->NAV;
	}
	/**
	 * Set SecondClassOpenEndCompanySharesNAV
	 * @param double SecondClassOpenEndCompanySharesNAV
	 * @return double
	 */
	public function setSecondClassOpenEndCompanySharesNAV($_SecondClassOpenEndCompanySharesNAV)
	{
		return ($this->SecondClassOpenEndCompanySharesNAV = $_SecondClassOpenEndCompanySharesNAV);
	}
	/**
	 * Get SecondClassOpenEndCompanySharesNAV
	 * @return double
	 */
	public function getSecondClassOpenEndCompanySharesNAV()
	{
		return $this->SecondClassOpenEndCompanySharesNAV;
	}
	/**
	 * Set MarkToMarketNAV
	 * @param double MarkToMarketNAV
	 * @return double
	 */
	public function setMarkToMarketNAV($_MarkToMarketNAV)
	{
		return ($this->MarkToMarketNAV = $_MarkToMarketNAV);
	}
	/**
	 * Get MarkToMarketNAV
	 * @return double
	 */
	public function getMarkToMarketNAV()
	{
		return $this->MarkToMarketNAV;
	}
	/**
	 * Set TotalNumberOfShareHolderAccounts
	 * @param int TotalNumberOfShareHolderAccounts
	 * @return int
	 */
	public function setTotalNumberOfShareHolderAccounts($_TotalNumberOfShareHolderAccounts)
	{
		return ($this->TotalNumberOfShareHolderAccounts = $_TotalNumberOfShareHolderAccounts);
	}
	/**
	 * Get TotalNumberOfShareHolderAccounts
	 * @return int
	 */
	public function getTotalNumberOfShareHolderAccounts()
	{
		return $this->TotalNumberOfShareHolderAccounts;
	}
	/**
	 * Set TotalValueOfAssetsInSegregatedAccount
	 * @param double TotalValueOfAssetsInSegregatedAccount
	 * @return double
	 */
	public function setTotalValueOfAssetsInSegregatedAccount($_TotalValueOfAssetsInSegregatedAccount)
	{
		return ($this->TotalValueOfAssetsInSegregatedAccount = $_TotalValueOfAssetsInSegregatedAccount);
	}
	/**
	 * Get TotalValueOfAssetsInSegregatedAccount
	 * @return double
	 */
	public function getTotalValueOfAssetsInSegregatedAccount()
	{
		return $this->TotalValueOfAssetsInSegregatedAccount;
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