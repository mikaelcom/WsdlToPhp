<?php
/**
 * Class file for XiFundDataTypeSalesLoad
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeSalesLoad
 * @date 08/07/2012
 */
class XiFundDataTypeSalesLoad extends XiFundDataWsdlClass
{
	/**
	 * The SalesAndPurchasesNAVs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeArrayOfSalesAndPurchasesNAV
	 */
	public $SalesAndPurchasesNAVs;
	/**
	 * The TotalNAVOfSaleSubjectToLoad
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalNAVOfSaleSubjectToLoad;
	/**
	 * The FrontEndLoadDeducted
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $FrontEndLoadDeducted;
	/**
	 * The TotalFrontEndLoad
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalFrontEndLoad;
	/**
	 * The MaximumSalesLoad
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MaximumSalesLoad;
	/**
	 * The MinimumSalesLoad
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MinimumSalesLoad;
	/**
	 * The NetAmountRetained
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetAmountRetained;
	/**
	 * The AmounRetainedInExcessofLoad
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AmounRetainedInExcessofLoad;
	/**
	 * The NonAffiliatedLoadedSales
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NonAffiliatedLoadedSales;
	/**
	 * The AffiliatedLoadedSales
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AffiliatedLoadedSales;
	/**
	 * The DeferredOrContingentLoad
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $DeferredOrContingentLoad;
	/**
	 * The TotalDeferredOrContingentLoads
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalDeferredOrContingentLoads;
	/**
	 * The RetainedDeferredOrContingentLoad
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $RetainedDeferredOrContingentLoad;
	/**
	 * The TotalRetainedDeferredOrContingentLoad
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalRetainedDeferredOrContingentLoad;
	/**
	 * The RedemptionFee
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $RedemptionFee;
	/**
	 * The TotalRedemptionFees
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalRedemptionFees;
	/**
	 * The MaintenanceorAdministrativeFees
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $MaintenanceorAdministrativeFees;
	/**
	 * The DistributionPlan
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $DistributionPlan;
	/**
	 * The UsedAssetsForDistributionPlan
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $UsedAssetsForDistributionPlan;
	/**
	 * The Distributions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeDistribution
	 */
	public $Distributions;
	/**
	 * The TotalPayments
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalPayments;
	/**
	 * The TotalReimbursements
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalReimbursements;
	/**
	 * Constructor
	 * @param XiFundDataTypeArrayOfSalesAndPurchasesNAV SalesAndPurchasesNAVs
	 * @param double TotalNAVOfSaleSubjectToLoad
	 * @param boolean FrontEndLoadDeducted
	 * @param double TotalFrontEndLoad
	 * @param double MaximumSalesLoad
	 * @param double MinimumSalesLoad
	 * @param double NetAmountRetained
	 * @param double AmounRetainedInExcessofLoad
	 * @param double NonAffiliatedLoadedSales
	 * @param double AffiliatedLoadedSales
	 * @param boolean DeferredOrContingentLoad
	 * @param double TotalDeferredOrContingentLoads
	 * @param boolean RetainedDeferredOrContingentLoad
	 * @param double TotalRetainedDeferredOrContingentLoad
	 * @param boolean RedemptionFee
	 * @param double TotalRedemptionFees
	 * @param boolean MaintenanceorAdministrativeFees
	 * @param boolean DistributionPlan
	 * @param boolean UsedAssetsForDistributionPlan
	 * @param XiFundDataTypeDistribution Distributions
	 * @param double TotalPayments
	 * @param double TotalReimbursements
	 * @return XiFundDataTypeSalesLoad
	 */
	public function __construct($_SalesAndPurchasesNAVs = null,$_TotalNAVOfSaleSubjectToLoad,$_FrontEndLoadDeducted,$_TotalFrontEndLoad,$_MaximumSalesLoad,$_MinimumSalesLoad,$_NetAmountRetained,$_AmounRetainedInExcessofLoad,$_NonAffiliatedLoadedSales,$_AffiliatedLoadedSales,$_DeferredOrContingentLoad,$_TotalDeferredOrContingentLoads,$_RetainedDeferredOrContingentLoad,$_TotalRetainedDeferredOrContingentLoad,$_RedemptionFee,$_TotalRedemptionFees,$_MaintenanceorAdministrativeFees,$_DistributionPlan,$_UsedAssetsForDistributionPlan,$_Distributions = null,$_TotalPayments,$_TotalReimbursements)
	{
		parent::__construct(array('SalesAndPurchasesNAVs'=>new XiFundDataTypeArrayOfSalesAndPurchasesNAV($_SalesAndPurchasesNAVs),'TotalNAVOfSaleSubjectToLoad'=>$_TotalNAVOfSaleSubjectToLoad,'FrontEndLoadDeducted'=>$_FrontEndLoadDeducted,'TotalFrontEndLoad'=>$_TotalFrontEndLoad,'MaximumSalesLoad'=>$_MaximumSalesLoad,'MinimumSalesLoad'=>$_MinimumSalesLoad,'NetAmountRetained'=>$_NetAmountRetained,'AmounRetainedInExcessofLoad'=>$_AmounRetainedInExcessofLoad,'NonAffiliatedLoadedSales'=>$_NonAffiliatedLoadedSales,'AffiliatedLoadedSales'=>$_AffiliatedLoadedSales,'DeferredOrContingentLoad'=>$_DeferredOrContingentLoad,'TotalDeferredOrContingentLoads'=>$_TotalDeferredOrContingentLoads,'RetainedDeferredOrContingentLoad'=>$_RetainedDeferredOrContingentLoad,'TotalRetainedDeferredOrContingentLoad'=>$_TotalRetainedDeferredOrContingentLoad,'RedemptionFee'=>$_RedemptionFee,'TotalRedemptionFees'=>$_TotalRedemptionFees,'MaintenanceorAdministrativeFees'=>$_MaintenanceorAdministrativeFees,'DistributionPlan'=>$_DistributionPlan,'UsedAssetsForDistributionPlan'=>$_UsedAssetsForDistributionPlan,'Distributions'=>$_Distributions,'TotalPayments'=>$_TotalPayments,'TotalReimbursements'=>$_TotalReimbursements));
	}
	/**
	 * Set SalesAndPurchasesNAVs
	 * @param ArrayOfSalesAndPurchasesNAV SalesAndPurchasesNAVs
	 * @return ArrayOfSalesAndPurchasesNAV
	 */
	public function setSalesAndPurchasesNAVs($_SalesAndPurchasesNAVs)
	{
		return ($this->SalesAndPurchasesNAVs = $_SalesAndPurchasesNAVs);
	}
	/**
	 * Get SalesAndPurchasesNAVs
	 * @return XiFundDataTypeArrayOfSalesAndPurchasesNAV
	 */
	public function getSalesAndPurchasesNAVs()
	{
		return $this->SalesAndPurchasesNAVs;
	}
	/**
	 * Set TotalNAVOfSaleSubjectToLoad
	 * @param double TotalNAVOfSaleSubjectToLoad
	 * @return double
	 */
	public function setTotalNAVOfSaleSubjectToLoad($_TotalNAVOfSaleSubjectToLoad)
	{
		return ($this->TotalNAVOfSaleSubjectToLoad = $_TotalNAVOfSaleSubjectToLoad);
	}
	/**
	 * Get TotalNAVOfSaleSubjectToLoad
	 * @return double
	 */
	public function getTotalNAVOfSaleSubjectToLoad()
	{
		return $this->TotalNAVOfSaleSubjectToLoad;
	}
	/**
	 * Set FrontEndLoadDeducted
	 * @param boolean FrontEndLoadDeducted
	 * @return boolean
	 */
	public function setFrontEndLoadDeducted($_FrontEndLoadDeducted)
	{
		return ($this->FrontEndLoadDeducted = $_FrontEndLoadDeducted);
	}
	/**
	 * Get FrontEndLoadDeducted
	 * @return boolean
	 */
	public function getFrontEndLoadDeducted()
	{
		return $this->FrontEndLoadDeducted;
	}
	/**
	 * Set TotalFrontEndLoad
	 * @param double TotalFrontEndLoad
	 * @return double
	 */
	public function setTotalFrontEndLoad($_TotalFrontEndLoad)
	{
		return ($this->TotalFrontEndLoad = $_TotalFrontEndLoad);
	}
	/**
	 * Get TotalFrontEndLoad
	 * @return double
	 */
	public function getTotalFrontEndLoad()
	{
		return $this->TotalFrontEndLoad;
	}
	/**
	 * Set MaximumSalesLoad
	 * @param double MaximumSalesLoad
	 * @return double
	 */
	public function setMaximumSalesLoad($_MaximumSalesLoad)
	{
		return ($this->MaximumSalesLoad = $_MaximumSalesLoad);
	}
	/**
	 * Get MaximumSalesLoad
	 * @return double
	 */
	public function getMaximumSalesLoad()
	{
		return $this->MaximumSalesLoad;
	}
	/**
	 * Set MinimumSalesLoad
	 * @param double MinimumSalesLoad
	 * @return double
	 */
	public function setMinimumSalesLoad($_MinimumSalesLoad)
	{
		return ($this->MinimumSalesLoad = $_MinimumSalesLoad);
	}
	/**
	 * Get MinimumSalesLoad
	 * @return double
	 */
	public function getMinimumSalesLoad()
	{
		return $this->MinimumSalesLoad;
	}
	/**
	 * Set NetAmountRetained
	 * @param double NetAmountRetained
	 * @return double
	 */
	public function setNetAmountRetained($_NetAmountRetained)
	{
		return ($this->NetAmountRetained = $_NetAmountRetained);
	}
	/**
	 * Get NetAmountRetained
	 * @return double
	 */
	public function getNetAmountRetained()
	{
		return $this->NetAmountRetained;
	}
	/**
	 * Set AmounRetainedInExcessofLoad
	 * @param double AmounRetainedInExcessofLoad
	 * @return double
	 */
	public function setAmounRetainedInExcessofLoad($_AmounRetainedInExcessofLoad)
	{
		return ($this->AmounRetainedInExcessofLoad = $_AmounRetainedInExcessofLoad);
	}
	/**
	 * Get AmounRetainedInExcessofLoad
	 * @return double
	 */
	public function getAmounRetainedInExcessofLoad()
	{
		return $this->AmounRetainedInExcessofLoad;
	}
	/**
	 * Set NonAffiliatedLoadedSales
	 * @param double NonAffiliatedLoadedSales
	 * @return double
	 */
	public function setNonAffiliatedLoadedSales($_NonAffiliatedLoadedSales)
	{
		return ($this->NonAffiliatedLoadedSales = $_NonAffiliatedLoadedSales);
	}
	/**
	 * Get NonAffiliatedLoadedSales
	 * @return double
	 */
	public function getNonAffiliatedLoadedSales()
	{
		return $this->NonAffiliatedLoadedSales;
	}
	/**
	 * Set AffiliatedLoadedSales
	 * @param double AffiliatedLoadedSales
	 * @return double
	 */
	public function setAffiliatedLoadedSales($_AffiliatedLoadedSales)
	{
		return ($this->AffiliatedLoadedSales = $_AffiliatedLoadedSales);
	}
	/**
	 * Get AffiliatedLoadedSales
	 * @return double
	 */
	public function getAffiliatedLoadedSales()
	{
		return $this->AffiliatedLoadedSales;
	}
	/**
	 * Set DeferredOrContingentLoad
	 * @param boolean DeferredOrContingentLoad
	 * @return boolean
	 */
	public function setDeferredOrContingentLoad($_DeferredOrContingentLoad)
	{
		return ($this->DeferredOrContingentLoad = $_DeferredOrContingentLoad);
	}
	/**
	 * Get DeferredOrContingentLoad
	 * @return boolean
	 */
	public function getDeferredOrContingentLoad()
	{
		return $this->DeferredOrContingentLoad;
	}
	/**
	 * Set TotalDeferredOrContingentLoads
	 * @param double TotalDeferredOrContingentLoads
	 * @return double
	 */
	public function setTotalDeferredOrContingentLoads($_TotalDeferredOrContingentLoads)
	{
		return ($this->TotalDeferredOrContingentLoads = $_TotalDeferredOrContingentLoads);
	}
	/**
	 * Get TotalDeferredOrContingentLoads
	 * @return double
	 */
	public function getTotalDeferredOrContingentLoads()
	{
		return $this->TotalDeferredOrContingentLoads;
	}
	/**
	 * Set RetainedDeferredOrContingentLoad
	 * @param boolean RetainedDeferredOrContingentLoad
	 * @return boolean
	 */
	public function setRetainedDeferredOrContingentLoad($_RetainedDeferredOrContingentLoad)
	{
		return ($this->RetainedDeferredOrContingentLoad = $_RetainedDeferredOrContingentLoad);
	}
	/**
	 * Get RetainedDeferredOrContingentLoad
	 * @return boolean
	 */
	public function getRetainedDeferredOrContingentLoad()
	{
		return $this->RetainedDeferredOrContingentLoad;
	}
	/**
	 * Set TotalRetainedDeferredOrContingentLoad
	 * @param double TotalRetainedDeferredOrContingentLoad
	 * @return double
	 */
	public function setTotalRetainedDeferredOrContingentLoad($_TotalRetainedDeferredOrContingentLoad)
	{
		return ($this->TotalRetainedDeferredOrContingentLoad = $_TotalRetainedDeferredOrContingentLoad);
	}
	/**
	 * Get TotalRetainedDeferredOrContingentLoad
	 * @return double
	 */
	public function getTotalRetainedDeferredOrContingentLoad()
	{
		return $this->TotalRetainedDeferredOrContingentLoad;
	}
	/**
	 * Set RedemptionFee
	 * @param boolean RedemptionFee
	 * @return boolean
	 */
	public function setRedemptionFee($_RedemptionFee)
	{
		return ($this->RedemptionFee = $_RedemptionFee);
	}
	/**
	 * Get RedemptionFee
	 * @return boolean
	 */
	public function getRedemptionFee()
	{
		return $this->RedemptionFee;
	}
	/**
	 * Set TotalRedemptionFees
	 * @param double TotalRedemptionFees
	 * @return double
	 */
	public function setTotalRedemptionFees($_TotalRedemptionFees)
	{
		return ($this->TotalRedemptionFees = $_TotalRedemptionFees);
	}
	/**
	 * Get TotalRedemptionFees
	 * @return double
	 */
	public function getTotalRedemptionFees()
	{
		return $this->TotalRedemptionFees;
	}
	/**
	 * Set MaintenanceorAdministrativeFees
	 * @param boolean MaintenanceorAdministrativeFees
	 * @return boolean
	 */
	public function setMaintenanceorAdministrativeFees($_MaintenanceorAdministrativeFees)
	{
		return ($this->MaintenanceorAdministrativeFees = $_MaintenanceorAdministrativeFees);
	}
	/**
	 * Get MaintenanceorAdministrativeFees
	 * @return boolean
	 */
	public function getMaintenanceorAdministrativeFees()
	{
		return $this->MaintenanceorAdministrativeFees;
	}
	/**
	 * Set DistributionPlan
	 * @param boolean DistributionPlan
	 * @return boolean
	 */
	public function setDistributionPlan($_DistributionPlan)
	{
		return ($this->DistributionPlan = $_DistributionPlan);
	}
	/**
	 * Get DistributionPlan
	 * @return boolean
	 */
	public function getDistributionPlan()
	{
		return $this->DistributionPlan;
	}
	/**
	 * Set UsedAssetsForDistributionPlan
	 * @param boolean UsedAssetsForDistributionPlan
	 * @return boolean
	 */
	public function setUsedAssetsForDistributionPlan($_UsedAssetsForDistributionPlan)
	{
		return ($this->UsedAssetsForDistributionPlan = $_UsedAssetsForDistributionPlan);
	}
	/**
	 * Get UsedAssetsForDistributionPlan
	 * @return boolean
	 */
	public function getUsedAssetsForDistributionPlan()
	{
		return $this->UsedAssetsForDistributionPlan;
	}
	/**
	 * Set Distributions
	 * @param Distribution Distributions
	 * @return Distribution
	 */
	public function setDistributions($_Distributions)
	{
		return ($this->Distributions = $_Distributions);
	}
	/**
	 * Get Distributions
	 * @return XiFundDataTypeDistribution
	 */
	public function getDistributions()
	{
		return $this->Distributions;
	}
	/**
	 * Set TotalPayments
	 * @param double TotalPayments
	 * @return double
	 */
	public function setTotalPayments($_TotalPayments)
	{
		return ($this->TotalPayments = $_TotalPayments);
	}
	/**
	 * Get TotalPayments
	 * @return double
	 */
	public function getTotalPayments()
	{
		return $this->TotalPayments;
	}
	/**
	 * Set TotalReimbursements
	 * @param double TotalReimbursements
	 * @return double
	 */
	public function setTotalReimbursements($_TotalReimbursements)
	{
		return ($this->TotalReimbursements = $_TotalReimbursements);
	}
	/**
	 * Get TotalReimbursements
	 * @return double
	 */
	public function getTotalReimbursements()
	{
		return $this->TotalReimbursements;
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