<?php
/**
 * Class file for PayPalTypeFMFDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeFMFDetailsType
 * Documentation : Thes are filters that could result in accept/deny/pending action.
 * @date 14/07/2012
 */
class PayPalTypeFMFDetailsType extends PayPalWsdlClass
{
	/**
	 * The AcceptFilters
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var PayPalTypeRiskFilterListType
	 */
	public $AcceptFilters;
	/**
	 * The PendingFilters
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var PayPalTypeRiskFilterListType
	 */
	public $PendingFilters;
	/**
	 * The DenyFilters
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var PayPalTypeRiskFilterListType
	 */
	public $DenyFilters;
	/**
	 * The ReportFilters
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var PayPalTypeRiskFilterListType
	 */
	public $ReportFilters;
	/**
	 * Constructor
	 * @param PayPalTypeRiskFilterListType AcceptFilters
	 * @param PayPalTypeRiskFilterListType PendingFilters
	 * @param PayPalTypeRiskFilterListType DenyFilters
	 * @param PayPalTypeRiskFilterListType ReportFilters
	 * @return PayPalTypeFMFDetailsType
	 */
	public function __construct($_AcceptFilters = null,$_PendingFilters = null,$_DenyFilters = null,$_ReportFilters = null)
	{
		parent::__construct(array('AcceptFilters'=>$_AcceptFilters,'PendingFilters'=>$_PendingFilters,'DenyFilters'=>$_DenyFilters,'ReportFilters'=>$_ReportFilters));
	}
	/**
	 * Set AcceptFilters
	 * @param RiskFilterListType AcceptFilters
	 * @return RiskFilterListType
	 */
	public function setAcceptFilters($_AcceptFilters)
	{
		return ($this->AcceptFilters = $_AcceptFilters);
	}
	/**
	 * Get AcceptFilters
	 * @return PayPalTypeRiskFilterListType
	 */
	public function getAcceptFilters()
	{
		return $this->AcceptFilters;
	}
	/**
	 * Set PendingFilters
	 * @param RiskFilterListType PendingFilters
	 * @return RiskFilterListType
	 */
	public function setPendingFilters($_PendingFilters)
	{
		return ($this->PendingFilters = $_PendingFilters);
	}
	/**
	 * Get PendingFilters
	 * @return PayPalTypeRiskFilterListType
	 */
	public function getPendingFilters()
	{
		return $this->PendingFilters;
	}
	/**
	 * Set DenyFilters
	 * @param RiskFilterListType DenyFilters
	 * @return RiskFilterListType
	 */
	public function setDenyFilters($_DenyFilters)
	{
		return ($this->DenyFilters = $_DenyFilters);
	}
	/**
	 * Get DenyFilters
	 * @return PayPalTypeRiskFilterListType
	 */
	public function getDenyFilters()
	{
		return $this->DenyFilters;
	}
	/**
	 * Set ReportFilters
	 * @param RiskFilterListType ReportFilters
	 * @return RiskFilterListType
	 */
	public function setReportFilters($_ReportFilters)
	{
		return ($this->ReportFilters = $_ReportFilters);
	}
	/**
	 * Get ReportFilters
	 * @return PayPalTypeRiskFilterListType
	 */
	public function getReportFilters()
	{
		return $this->ReportFilters;
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