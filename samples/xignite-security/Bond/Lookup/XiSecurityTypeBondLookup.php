<?php
/**
 * Class file for XiSecurityTypeBondLookup
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeBondLookup
 * @date 08/07/2012
 */
class XiSecurityTypeBondLookup extends XiSecurityTypeCommon
{
	/**
	 * The CUSIP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CUSIP;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeBondTypes
	 */
	public $Type;
	/**
	 * The PaymentFrequency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypePaymentFrequencyTypes
	 */
	public $PaymentFrequency;
	/**
	 * The Coupon
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Coupon;
	/**
	 * The MaturityDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MaturityDate;
	/**
	 * The AuctionCloseDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AuctionCloseDate;
	/**
	 * The SettlementDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SettlementDate;
	/**
	 * The IssueDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssueDate;
	/**
	 * The DatedDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DatedDate;
	/**
	 * The MoodysRating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MoodysRating;
	/**
	 * The SPRating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SPRating;
	/**
	 * Constructor
	 * @param string CUSIP
	 * @param string Name
	 * @param XiSecurityTypeBondTypes Type
	 * @param XiSecurityTypePaymentFrequencyTypes PaymentFrequency
	 * @param double Coupon
	 * @param string MaturityDate
	 * @param string AuctionCloseDate
	 * @param string SettlementDate
	 * @param string IssueDate
	 * @param string DatedDate
	 * @param string MoodysRating
	 * @param string SPRating
	 * @return XiSecurityTypeBondLookup
	 */
	public function __construct($_CUSIP = null,$_Name = null,$_Type,$_PaymentFrequency,$_Coupon,$_MaturityDate = null,$_AuctionCloseDate = null,$_SettlementDate = null,$_IssueDate = null,$_DatedDate = null,$_MoodysRating = null,$_SPRating = null)
	{
		XiSecurityWsdlClass::__construct(array('CUSIP'=>$_CUSIP,'Name'=>$_Name,'Type'=>$_Type,'PaymentFrequency'=>$_PaymentFrequency,'Coupon'=>$_Coupon,'MaturityDate'=>$_MaturityDate,'AuctionCloseDate'=>$_AuctionCloseDate,'SettlementDate'=>$_SettlementDate,'IssueDate'=>$_IssueDate,'DatedDate'=>$_DatedDate,'MoodysRating'=>$_MoodysRating,'SPRating'=>$_SPRating));
	}
	/**
	 * Set CUSIP
	 * @param string CUSIP
	 * @return string
	 */
	public function setCUSIP($_CUSIP)
	{
		return ($this->CUSIP = $_CUSIP);
	}
	/**
	 * Get CUSIP
	 * @return string
	 */
	public function getCUSIP()
	{
		return $this->CUSIP;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Type
	 * @param BondTypes Type
	 * @return BondTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiSecurityTypeBondTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiSecurityTypeBondTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set PaymentFrequency
	 * @param PaymentFrequencyTypes PaymentFrequency
	 * @return PaymentFrequencyTypes
	 */
	public function setPaymentFrequency($_PaymentFrequency)
	{
		return ($this->PaymentFrequency = XiSecurityTypePaymentFrequencyTypes::valueIsValid($_PaymentFrequency)?$_PaymentFrequency:null);
	}
	/**
	 * Get PaymentFrequency
	 * @return XiSecurityTypePaymentFrequencyTypes
	 */
	public function getPaymentFrequency()
	{
		return $this->PaymentFrequency;
	}
	/**
	 * Set Coupon
	 * @param double Coupon
	 * @return double
	 */
	public function setCoupon($_Coupon)
	{
		return ($this->Coupon = $_Coupon);
	}
	/**
	 * Get Coupon
	 * @return double
	 */
	public function getCoupon()
	{
		return $this->Coupon;
	}
	/**
	 * Set MaturityDate
	 * @param string MaturityDate
	 * @return string
	 */
	public function setMaturityDate($_MaturityDate)
	{
		return ($this->MaturityDate = $_MaturityDate);
	}
	/**
	 * Get MaturityDate
	 * @return string
	 */
	public function getMaturityDate()
	{
		return $this->MaturityDate;
	}
	/**
	 * Set AuctionCloseDate
	 * @param string AuctionCloseDate
	 * @return string
	 */
	public function setAuctionCloseDate($_AuctionCloseDate)
	{
		return ($this->AuctionCloseDate = $_AuctionCloseDate);
	}
	/**
	 * Get AuctionCloseDate
	 * @return string
	 */
	public function getAuctionCloseDate()
	{
		return $this->AuctionCloseDate;
	}
	/**
	 * Set SettlementDate
	 * @param string SettlementDate
	 * @return string
	 */
	public function setSettlementDate($_SettlementDate)
	{
		return ($this->SettlementDate = $_SettlementDate);
	}
	/**
	 * Get SettlementDate
	 * @return string
	 */
	public function getSettlementDate()
	{
		return $this->SettlementDate;
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
	 * Set MoodysRating
	 * @param string MoodysRating
	 * @return string
	 */
	public function setMoodysRating($_MoodysRating)
	{
		return ($this->MoodysRating = $_MoodysRating);
	}
	/**
	 * Get MoodysRating
	 * @return string
	 */
	public function getMoodysRating()
	{
		return $this->MoodysRating;
	}
	/**
	 * Set SPRating
	 * @param string SPRating
	 * @return string
	 */
	public function setSPRating($_SPRating)
	{
		return ($this->SPRating = $_SPRating);
	}
	/**
	 * Get SPRating
	 * @return string
	 */
	public function getSPRating()
	{
		return $this->SPRating;
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