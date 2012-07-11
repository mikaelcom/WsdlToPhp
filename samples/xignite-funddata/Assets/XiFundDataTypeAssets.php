<?php
/**
 * Class file for XiFundDataTypeAssets
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeAssets
 * @date 08/07/2012
 */
class XiFundDataTypeAssets extends XiFundDataWsdlClass
{
	/**
	 * The Cash
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Cash;
	/**
	 * The RepurchaseAgreements
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RepurchaseAgreements;
	/**
	 * The OtherShortTermSecurities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherShortTermSecurities;
	/**
	 * The LongTermSecurities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LongTermSecurities;
	/**
	 * The PreferredConvertiableAndAdjustableStock
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PreferredConvertiableAndAdjustableStock;
	/**
	 * The CommonStock
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CommonStock;
	/**
	 * The EquityOptions
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $EquityOptions;
	/**
	 * The FutureOptions
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $FutureOptions;
	/**
	 * The OtherInvestments
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherInvestments;
	/**
	 * The ReceivablesFromPortfolioInstrumentsSold
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ReceivablesFromPortfolioInstrumentsSold;
	/**
	 * The ReceivablesFromAffiliatedPersons
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ReceivablesFromAffiliatedPersons;
	/**
	 * The OtherReceivables
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherReceivables;
	/**
	 * The AllOtherAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AllOtherAssets;
	/**
	 * The TotalAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalAssets;
	/**
	 * Constructor
	 * @param double Cash
	 * @param double RepurchaseAgreements
	 * @param double OtherShortTermSecurities
	 * @param double LongTermSecurities
	 * @param double PreferredConvertiableAndAdjustableStock
	 * @param double CommonStock
	 * @param double EquityOptions
	 * @param double FutureOptions
	 * @param double OtherInvestments
	 * @param double ReceivablesFromPortfolioInstrumentsSold
	 * @param double ReceivablesFromAffiliatedPersons
	 * @param double OtherReceivables
	 * @param double AllOtherAssets
	 * @param double TotalAssets
	 * @return XiFundDataTypeAssets
	 */
	public function __construct($_Cash,$_RepurchaseAgreements,$_OtherShortTermSecurities,$_LongTermSecurities,$_PreferredConvertiableAndAdjustableStock,$_CommonStock,$_EquityOptions,$_FutureOptions,$_OtherInvestments,$_ReceivablesFromPortfolioInstrumentsSold,$_ReceivablesFromAffiliatedPersons,$_OtherReceivables,$_AllOtherAssets,$_TotalAssets)
	{
		parent::__construct(array('Cash'=>$_Cash,'RepurchaseAgreements'=>$_RepurchaseAgreements,'OtherShortTermSecurities'=>$_OtherShortTermSecurities,'LongTermSecurities'=>$_LongTermSecurities,'PreferredConvertiableAndAdjustableStock'=>$_PreferredConvertiableAndAdjustableStock,'CommonStock'=>$_CommonStock,'EquityOptions'=>$_EquityOptions,'FutureOptions'=>$_FutureOptions,'OtherInvestments'=>$_OtherInvestments,'ReceivablesFromPortfolioInstrumentsSold'=>$_ReceivablesFromPortfolioInstrumentsSold,'ReceivablesFromAffiliatedPersons'=>$_ReceivablesFromAffiliatedPersons,'OtherReceivables'=>$_OtherReceivables,'AllOtherAssets'=>$_AllOtherAssets,'TotalAssets'=>$_TotalAssets));
	}
	/**
	 * Set Cash
	 * @param double Cash
	 * @return double
	 */
	public function setCash($_Cash)
	{
		return ($this->Cash = $_Cash);
	}
	/**
	 * Get Cash
	 * @return double
	 */
	public function getCash()
	{
		return $this->Cash;
	}
	/**
	 * Set RepurchaseAgreements
	 * @param double RepurchaseAgreements
	 * @return double
	 */
	public function setRepurchaseAgreements($_RepurchaseAgreements)
	{
		return ($this->RepurchaseAgreements = $_RepurchaseAgreements);
	}
	/**
	 * Get RepurchaseAgreements
	 * @return double
	 */
	public function getRepurchaseAgreements()
	{
		return $this->RepurchaseAgreements;
	}
	/**
	 * Set OtherShortTermSecurities
	 * @param double OtherShortTermSecurities
	 * @return double
	 */
	public function setOtherShortTermSecurities($_OtherShortTermSecurities)
	{
		return ($this->OtherShortTermSecurities = $_OtherShortTermSecurities);
	}
	/**
	 * Get OtherShortTermSecurities
	 * @return double
	 */
	public function getOtherShortTermSecurities()
	{
		return $this->OtherShortTermSecurities;
	}
	/**
	 * Set LongTermSecurities
	 * @param double LongTermSecurities
	 * @return double
	 */
	public function setLongTermSecurities($_LongTermSecurities)
	{
		return ($this->LongTermSecurities = $_LongTermSecurities);
	}
	/**
	 * Get LongTermSecurities
	 * @return double
	 */
	public function getLongTermSecurities()
	{
		return $this->LongTermSecurities;
	}
	/**
	 * Set PreferredConvertiableAndAdjustableStock
	 * @param double PreferredConvertiableAndAdjustableStock
	 * @return double
	 */
	public function setPreferredConvertiableAndAdjustableStock($_PreferredConvertiableAndAdjustableStock)
	{
		return ($this->PreferredConvertiableAndAdjustableStock = $_PreferredConvertiableAndAdjustableStock);
	}
	/**
	 * Get PreferredConvertiableAndAdjustableStock
	 * @return double
	 */
	public function getPreferredConvertiableAndAdjustableStock()
	{
		return $this->PreferredConvertiableAndAdjustableStock;
	}
	/**
	 * Set CommonStock
	 * @param double CommonStock
	 * @return double
	 */
	public function setCommonStock($_CommonStock)
	{
		return ($this->CommonStock = $_CommonStock);
	}
	/**
	 * Get CommonStock
	 * @return double
	 */
	public function getCommonStock()
	{
		return $this->CommonStock;
	}
	/**
	 * Set EquityOptions
	 * @param double EquityOptions
	 * @return double
	 */
	public function setEquityOptions($_EquityOptions)
	{
		return ($this->EquityOptions = $_EquityOptions);
	}
	/**
	 * Get EquityOptions
	 * @return double
	 */
	public function getEquityOptions()
	{
		return $this->EquityOptions;
	}
	/**
	 * Set FutureOptions
	 * @param double FutureOptions
	 * @return double
	 */
	public function setFutureOptions($_FutureOptions)
	{
		return ($this->FutureOptions = $_FutureOptions);
	}
	/**
	 * Get FutureOptions
	 * @return double
	 */
	public function getFutureOptions()
	{
		return $this->FutureOptions;
	}
	/**
	 * Set OtherInvestments
	 * @param double OtherInvestments
	 * @return double
	 */
	public function setOtherInvestments($_OtherInvestments)
	{
		return ($this->OtherInvestments = $_OtherInvestments);
	}
	/**
	 * Get OtherInvestments
	 * @return double
	 */
	public function getOtherInvestments()
	{
		return $this->OtherInvestments;
	}
	/**
	 * Set ReceivablesFromPortfolioInstrumentsSold
	 * @param double ReceivablesFromPortfolioInstrumentsSold
	 * @return double
	 */
	public function setReceivablesFromPortfolioInstrumentsSold($_ReceivablesFromPortfolioInstrumentsSold)
	{
		return ($this->ReceivablesFromPortfolioInstrumentsSold = $_ReceivablesFromPortfolioInstrumentsSold);
	}
	/**
	 * Get ReceivablesFromPortfolioInstrumentsSold
	 * @return double
	 */
	public function getReceivablesFromPortfolioInstrumentsSold()
	{
		return $this->ReceivablesFromPortfolioInstrumentsSold;
	}
	/**
	 * Set ReceivablesFromAffiliatedPersons
	 * @param double ReceivablesFromAffiliatedPersons
	 * @return double
	 */
	public function setReceivablesFromAffiliatedPersons($_ReceivablesFromAffiliatedPersons)
	{
		return ($this->ReceivablesFromAffiliatedPersons = $_ReceivablesFromAffiliatedPersons);
	}
	/**
	 * Get ReceivablesFromAffiliatedPersons
	 * @return double
	 */
	public function getReceivablesFromAffiliatedPersons()
	{
		return $this->ReceivablesFromAffiliatedPersons;
	}
	/**
	 * Set OtherReceivables
	 * @param double OtherReceivables
	 * @return double
	 */
	public function setOtherReceivables($_OtherReceivables)
	{
		return ($this->OtherReceivables = $_OtherReceivables);
	}
	/**
	 * Get OtherReceivables
	 * @return double
	 */
	public function getOtherReceivables()
	{
		return $this->OtherReceivables;
	}
	/**
	 * Set AllOtherAssets
	 * @param double AllOtherAssets
	 * @return double
	 */
	public function setAllOtherAssets($_AllOtherAssets)
	{
		return ($this->AllOtherAssets = $_AllOtherAssets);
	}
	/**
	 * Get AllOtherAssets
	 * @return double
	 */
	public function getAllOtherAssets()
	{
		return $this->AllOtherAssets;
	}
	/**
	 * Set TotalAssets
	 * @param double TotalAssets
	 * @return double
	 */
	public function setTotalAssets($_TotalAssets)
	{
		return ($this->TotalAssets = $_TotalAssets);
	}
	/**
	 * Get TotalAssets
	 * @return double
	 */
	public function getTotalAssets()
	{
		return $this->TotalAssets;
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