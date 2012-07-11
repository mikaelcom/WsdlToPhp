<?php
/**
 * Class file for XiBondMasterTypeBondInstrument
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeBondInstrument
 * @date 08/07/2012
 */
class XiBondMasterTypeBondInstrument extends XiBondMasterTypeBondInstrumentBrief
{
	/**
	 * The ProductName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ProductName;
	/**
	 * The BondType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BondType;
	/**
	 * The Domicile
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Domicile;
	/**
	 * The DistributionFrequency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DistributionFrequency;
	/**
	 * The DistributionFrequencyUnit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DistributionFrequencyUnit;
	/**
	 * The DayCountConvention
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DayCountConvention;
	/**
	 * The PaysAtMonthEnd
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PaysAtMonthEnd;
	/**
	 * The WithoutPhysicalCoupon
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $WithoutPhysicalCoupon;
	/**
	 * The OriginalIssuePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OriginalIssuePrice;
	/**
	 * The IssueDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssueDate;
	/**
	 * The IssueTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssueTime;
	/**
	 * The InstrumentForm
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InstrumentForm;
	/**
	 * The TradesWithAllIncluded
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TradesWithAllIncluded;
	/**
	 * The DatedDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DatedDate;
	/**
	 * The Senior
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Senior;
	/**
	 * The LiquidationRight
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LiquidationRight;
	/**
	 * The DistributionType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DistributionType;
	/**
	 * The IssueStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssueStatus;
	/**
	 * The Amortization
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Amortization;
	/**
	 * The Guarantor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Guarantor;
	/**
	 * The GuaranteeType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GuaranteeType;
	/**
	 * Constructor
	 * @param string ProductName
	 * @param string BondType
	 * @param string Domicile
	 * @param string DistributionFrequency
	 * @param string DistributionFrequencyUnit
	 * @param string DayCountConvention
	 * @param string PaysAtMonthEnd
	 * @param string WithoutPhysicalCoupon
	 * @param string OriginalIssuePrice
	 * @param string IssueDate
	 * @param string IssueTime
	 * @param string InstrumentForm
	 * @param string TradesWithAllIncluded
	 * @param string DatedDate
	 * @param string Senior
	 * @param string LiquidationRight
	 * @param string DistributionType
	 * @param string IssueStatus
	 * @param string Amortization
	 * @param string Guarantor
	 * @param string GuaranteeType
	 * @return XiBondMasterTypeBondInstrument
	 */
	public function __construct($_ProductName = null,$_BondType = null,$_Domicile = null,$_DistributionFrequency = null,$_DistributionFrequencyUnit = null,$_DayCountConvention = null,$_PaysAtMonthEnd = null,$_WithoutPhysicalCoupon = null,$_OriginalIssuePrice = null,$_IssueDate = null,$_IssueTime = null,$_InstrumentForm = null,$_TradesWithAllIncluded = null,$_DatedDate = null,$_Senior = null,$_LiquidationRight = null,$_DistributionType = null,$_IssueStatus = null,$_Amortization = null,$_Guarantor = null,$_GuaranteeType = null)
	{
		XiBondMasterWsdlClass::__construct(array('ProductName'=>$_ProductName,'BondType'=>$_BondType,'Domicile'=>$_Domicile,'DistributionFrequency'=>$_DistributionFrequency,'DistributionFrequencyUnit'=>$_DistributionFrequencyUnit,'DayCountConvention'=>$_DayCountConvention,'PaysAtMonthEnd'=>$_PaysAtMonthEnd,'WithoutPhysicalCoupon'=>$_WithoutPhysicalCoupon,'OriginalIssuePrice'=>$_OriginalIssuePrice,'IssueDate'=>$_IssueDate,'IssueTime'=>$_IssueTime,'InstrumentForm'=>$_InstrumentForm,'TradesWithAllIncluded'=>$_TradesWithAllIncluded,'DatedDate'=>$_DatedDate,'Senior'=>$_Senior,'LiquidationRight'=>$_LiquidationRight,'DistributionType'=>$_DistributionType,'IssueStatus'=>$_IssueStatus,'Amortization'=>$_Amortization,'Guarantor'=>$_Guarantor,'GuaranteeType'=>$_GuaranteeType));
	}
	/**
	 * Set ProductName
	 * @param string ProductName
	 * @return string
	 */
	public function setProductName($_ProductName)
	{
		return ($this->ProductName = $_ProductName);
	}
	/**
	 * Get ProductName
	 * @return string
	 */
	public function getProductName()
	{
		return $this->ProductName;
	}
	/**
	 * Set BondType
	 * @param string BondType
	 * @return string
	 */
	public function setBondType($_BondType)
	{
		return ($this->BondType = $_BondType);
	}
	/**
	 * Get BondType
	 * @return string
	 */
	public function getBondType()
	{
		return $this->BondType;
	}
	/**
	 * Set Domicile
	 * @param string Domicile
	 * @return string
	 */
	public function setDomicile($_Domicile)
	{
		return ($this->Domicile = $_Domicile);
	}
	/**
	 * Get Domicile
	 * @return string
	 */
	public function getDomicile()
	{
		return $this->Domicile;
	}
	/**
	 * Set DistributionFrequency
	 * @param string DistributionFrequency
	 * @return string
	 */
	public function setDistributionFrequency($_DistributionFrequency)
	{
		return ($this->DistributionFrequency = $_DistributionFrequency);
	}
	/**
	 * Get DistributionFrequency
	 * @return string
	 */
	public function getDistributionFrequency()
	{
		return $this->DistributionFrequency;
	}
	/**
	 * Set DistributionFrequencyUnit
	 * @param string DistributionFrequencyUnit
	 * @return string
	 */
	public function setDistributionFrequencyUnit($_DistributionFrequencyUnit)
	{
		return ($this->DistributionFrequencyUnit = $_DistributionFrequencyUnit);
	}
	/**
	 * Get DistributionFrequencyUnit
	 * @return string
	 */
	public function getDistributionFrequencyUnit()
	{
		return $this->DistributionFrequencyUnit;
	}
	/**
	 * Set DayCountConvention
	 * @param string DayCountConvention
	 * @return string
	 */
	public function setDayCountConvention($_DayCountConvention)
	{
		return ($this->DayCountConvention = $_DayCountConvention);
	}
	/**
	 * Get DayCountConvention
	 * @return string
	 */
	public function getDayCountConvention()
	{
		return $this->DayCountConvention;
	}
	/**
	 * Set PaysAtMonthEnd
	 * @param string PaysAtMonthEnd
	 * @return string
	 */
	public function setPaysAtMonthEnd($_PaysAtMonthEnd)
	{
		return ($this->PaysAtMonthEnd = $_PaysAtMonthEnd);
	}
	/**
	 * Get PaysAtMonthEnd
	 * @return string
	 */
	public function getPaysAtMonthEnd()
	{
		return $this->PaysAtMonthEnd;
	}
	/**
	 * Set WithoutPhysicalCoupon
	 * @param string WithoutPhysicalCoupon
	 * @return string
	 */
	public function setWithoutPhysicalCoupon($_WithoutPhysicalCoupon)
	{
		return ($this->WithoutPhysicalCoupon = $_WithoutPhysicalCoupon);
	}
	/**
	 * Get WithoutPhysicalCoupon
	 * @return string
	 */
	public function getWithoutPhysicalCoupon()
	{
		return $this->WithoutPhysicalCoupon;
	}
	/**
	 * Set OriginalIssuePrice
	 * @param string OriginalIssuePrice
	 * @return string
	 */
	public function setOriginalIssuePrice($_OriginalIssuePrice)
	{
		return ($this->OriginalIssuePrice = $_OriginalIssuePrice);
	}
	/**
	 * Get OriginalIssuePrice
	 * @return string
	 */
	public function getOriginalIssuePrice()
	{
		return $this->OriginalIssuePrice;
	}
	/**
	 * Set IssueDate
	 * @param string IssueDate
	 * @return string
	 */
	public function setIssueDate($_IssueDate)
	{
		return ($this->IssueDate = $_IssueDate);
	}
	/**
	 * Get IssueDate
	 * @return string
	 */
	public function getIssueDate()
	{
		return $this->IssueDate;
	}
	/**
	 * Set IssueTime
	 * @param string IssueTime
	 * @return string
	 */
	public function setIssueTime($_IssueTime)
	{
		return ($this->IssueTime = $_IssueTime);
	}
	/**
	 * Get IssueTime
	 * @return string
	 */
	public function getIssueTime()
	{
		return $this->IssueTime;
	}
	/**
	 * Set InstrumentForm
	 * @param string InstrumentForm
	 * @return string
	 */
	public function setInstrumentForm($_InstrumentForm)
	{
		return ($this->InstrumentForm = $_InstrumentForm);
	}
	/**
	 * Get InstrumentForm
	 * @return string
	 */
	public function getInstrumentForm()
	{
		return $this->InstrumentForm;
	}
	/**
	 * Set TradesWithAllIncluded
	 * @param string TradesWithAllIncluded
	 * @return string
	 */
	public function setTradesWithAllIncluded($_TradesWithAllIncluded)
	{
		return ($this->TradesWithAllIncluded = $_TradesWithAllIncluded);
	}
	/**
	 * Get TradesWithAllIncluded
	 * @return string
	 */
	public function getTradesWithAllIncluded()
	{
		return $this->TradesWithAllIncluded;
	}
	/**
	 * Set DatedDate
	 * @param string DatedDate
	 * @return string
	 */
	public function setDatedDate($_DatedDate)
	{
		return ($this->DatedDate = $_DatedDate);
	}
	/**
	 * Get DatedDate
	 * @return string
	 */
	public function getDatedDate()
	{
		return $this->DatedDate;
	}
	/**
	 * Set Senior
	 * @param string Senior
	 * @return string
	 */
	public function setSenior($_Senior)
	{
		return ($this->Senior = $_Senior);
	}
	/**
	 * Get Senior
	 * @return string
	 */
	public function getSenior()
	{
		return $this->Senior;
	}
	/**
	 * Set LiquidationRight
	 * @param string LiquidationRight
	 * @return string
	 */
	public function setLiquidationRight($_LiquidationRight)
	{
		return ($this->LiquidationRight = $_LiquidationRight);
	}
	/**
	 * Get LiquidationRight
	 * @return string
	 */
	public function getLiquidationRight()
	{
		return $this->LiquidationRight;
	}
	/**
	 * Set DistributionType
	 * @param string DistributionType
	 * @return string
	 */
	public function setDistributionType($_DistributionType)
	{
		return ($this->DistributionType = $_DistributionType);
	}
	/**
	 * Get DistributionType
	 * @return string
	 */
	public function getDistributionType()
	{
		return $this->DistributionType;
	}
	/**
	 * Set IssueStatus
	 * @param string IssueStatus
	 * @return string
	 */
	public function setIssueStatus($_IssueStatus)
	{
		return ($this->IssueStatus = $_IssueStatus);
	}
	/**
	 * Get IssueStatus
	 * @return string
	 */
	public function getIssueStatus()
	{
		return $this->IssueStatus;
	}
	/**
	 * Set Amortization
	 * @param string Amortization
	 * @return string
	 */
	public function setAmortization($_Amortization)
	{
		return ($this->Amortization = $_Amortization);
	}
	/**
	 * Get Amortization
	 * @return string
	 */
	public function getAmortization()
	{
		return $this->Amortization;
	}
	/**
	 * Set Guarantor
	 * @param string Guarantor
	 * @return string
	 */
	public function setGuarantor($_Guarantor)
	{
		return ($this->Guarantor = $_Guarantor);
	}
	/**
	 * Get Guarantor
	 * @return string
	 */
	public function getGuarantor()
	{
		return $this->Guarantor;
	}
	/**
	 * Set GuaranteeType
	 * @param string GuaranteeType
	 * @return string
	 */
	public function setGuaranteeType($_GuaranteeType)
	{
		return ($this->GuaranteeType = $_GuaranteeType);
	}
	/**
	 * Get GuaranteeType
	 * @return string
	 */
	public function getGuaranteeType()
	{
		return $this->GuaranteeType;
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