<?php
/**
 * Class file for EbayTradingTypeGetSellerDashboardResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellerDashboardResponseType
 * Documentation : Returns a brief summary of the requester's status as an eBay seller. The status information can help an eBay seller monitor their selling performance and keep their account in good standing.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellerDashboardResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The SearchStanding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Provides information about the visibility level you have earned for your listings. The higher your search standing rating, the higher your items will be placed in search results sorted by Best Match. Because your search standing rating is directly tied to your customer service record, this rating is an important way that eBay rewards you as a good seller--it encourages you to give buyers the best possible shopping experience. <br><br> This element is not returned for all sites. Beginning at the end of 2009, eBay stopped returning it for sellers registered on several large sites, including the US, German, and UK sites.
	 * @var EbayTradingTypeSearchStandingDashboardType
	 */
	public $SearchStanding;
	/**
	 * The SellerFeeDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Provides information about the PowerSeller discount level you have earned, if any. As a PowerSeller, you can earn discounts on your monthly invoice Final Value Fees based on how well you're rated as a seller. Only returned for members of the eBay US or Canada PowerSeller program.
	 * @var EbayTradingTypeSellerFeeDiscountDashboardType
	 */
	public $SellerFeeDiscount;
	/**
	 * The PowerSellerStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Provides information about your PowerSeller status, such as whether or not you meet the PowerSeller requirements. Your PowerSeller status directly affects your discount (SellerFeeDiscount). <br><br> For eBay Germany and France, you must be a registered business seller to see your PowerSeller status.
	 * @var EbayTradingTypePowerSellerDashboardType
	 */
	public $PowerSellerStatus;
	/**
	 * The PolicyCompliance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Rating on how well you are following eBay rules and policies in your selling practices, and alerts you if your account or listings have any policy violations. <br><br> eBay's policies and rules are guidelines that help to create a safe, fair, and enjoyable trading environment for all eBay members. If you violate certain policies, your account can be restricted without notice. This is true even if your status shows a good level of policy compliance. Because of this, understanding and following eBay's policies can help you to avoid restrictions on your account. Policy compliance directly affects your PowerSeller status.
	 * @var EbayTradingTypePolicyComplianceDashboardType
	 */
	public $PolicyCompliance;
	/**
	 * The BuyerSatisfaction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Rates your level of customer service. This information helps you to keep track of how well you are providing members with positive buying experiences. <br><br> This element is not returned for all sites. Beginning at the end of 2009, eBay stopped returning it for sellers registered on several large sites, including the US, German, and UK sites.
	 * @var EbayTradingTypeBuyerSatisfactionDashboardType
	 */
	public $BuyerSatisfaction;
	/**
	 * The SellerAccount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The status of your latest eBay invoice. Includes any alerts issued to your account to help you identify possible problems.
	 * @var EbayTradingTypeSellerAccountDashboardType
	 */
	public $SellerAccount;
	/**
	 * The Performance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Provides information about the seller's performance within different eBay regions. A seller's performance rating can be Top-Rated, Above Standard, Standard, and Below Standard.
	 * @var EbayTradingTypePerformanceDashboardType
	 */
	public $Performance;
	/**
	 * Constructor
	 * @param EbayTradingTypeSearchStandingDashboardType SearchStanding
	 * @param EbayTradingTypeSellerFeeDiscountDashboardType SellerFeeDiscount
	 * @param EbayTradingTypePowerSellerDashboardType PowerSellerStatus
	 * @param EbayTradingTypePolicyComplianceDashboardType PolicyCompliance
	 * @param EbayTradingTypeBuyerSatisfactionDashboardType BuyerSatisfaction
	 * @param EbayTradingTypeSellerAccountDashboardType SellerAccount
	 * @param EbayTradingTypePerformanceDashboardType Performance
	 * @return EbayTradingTypeGetSellerDashboardResponseType
	 */
	public function __construct($_SearchStanding = null,$_SellerFeeDiscount = null,$_PowerSellerStatus = null,$_PolicyCompliance = null,$_BuyerSatisfaction = null,$_SellerAccount = null,$_Performance = null)
	{
		EbayTradingWsdlClass::__construct(array('SearchStanding'=>$_SearchStanding,'SellerFeeDiscount'=>$_SellerFeeDiscount,'PowerSellerStatus'=>$_PowerSellerStatus,'PolicyCompliance'=>$_PolicyCompliance,'BuyerSatisfaction'=>$_BuyerSatisfaction,'SellerAccount'=>$_SellerAccount,'Performance'=>$_Performance));
	}
	/**
	 * Set SearchStanding
	 * @param SearchStandingDashboardType SearchStanding
	 * @return SearchStandingDashboardType
	 */
	public function setSearchStanding($_SearchStanding)
	{
		return ($this->SearchStanding = $_SearchStanding);
	}
	/**
	 * Get SearchStanding
	 * @return EbayTradingTypeSearchStandingDashboardType
	 */
	public function getSearchStanding()
	{
		return $this->SearchStanding;
	}
	/**
	 * Set SellerFeeDiscount
	 * @param SellerFeeDiscountDashboardType SellerFeeDiscount
	 * @return SellerFeeDiscountDashboardType
	 */
	public function setSellerFeeDiscount($_SellerFeeDiscount)
	{
		return ($this->SellerFeeDiscount = $_SellerFeeDiscount);
	}
	/**
	 * Get SellerFeeDiscount
	 * @return EbayTradingTypeSellerFeeDiscountDashboardType
	 */
	public function getSellerFeeDiscount()
	{
		return $this->SellerFeeDiscount;
	}
	/**
	 * Set PowerSellerStatus
	 * @param PowerSellerDashboardType PowerSellerStatus
	 * @return PowerSellerDashboardType
	 */
	public function setPowerSellerStatus($_PowerSellerStatus)
	{
		return ($this->PowerSellerStatus = $_PowerSellerStatus);
	}
	/**
	 * Get PowerSellerStatus
	 * @return EbayTradingTypePowerSellerDashboardType
	 */
	public function getPowerSellerStatus()
	{
		return $this->PowerSellerStatus;
	}
	/**
	 * Set PolicyCompliance
	 * @param PolicyComplianceDashboardType PolicyCompliance
	 * @return PolicyComplianceDashboardType
	 */
	public function setPolicyCompliance($_PolicyCompliance)
	{
		return ($this->PolicyCompliance = $_PolicyCompliance);
	}
	/**
	 * Get PolicyCompliance
	 * @return EbayTradingTypePolicyComplianceDashboardType
	 */
	public function getPolicyCompliance()
	{
		return $this->PolicyCompliance;
	}
	/**
	 * Set BuyerSatisfaction
	 * @param BuyerSatisfactionDashboardType BuyerSatisfaction
	 * @return BuyerSatisfactionDashboardType
	 */
	public function setBuyerSatisfaction($_BuyerSatisfaction)
	{
		return ($this->BuyerSatisfaction = $_BuyerSatisfaction);
	}
	/**
	 * Get BuyerSatisfaction
	 * @return EbayTradingTypeBuyerSatisfactionDashboardType
	 */
	public function getBuyerSatisfaction()
	{
		return $this->BuyerSatisfaction;
	}
	/**
	 * Set SellerAccount
	 * @param SellerAccountDashboardType SellerAccount
	 * @return SellerAccountDashboardType
	 */
	public function setSellerAccount($_SellerAccount)
	{
		return ($this->SellerAccount = $_SellerAccount);
	}
	/**
	 * Get SellerAccount
	 * @return EbayTradingTypeSellerAccountDashboardType
	 */
	public function getSellerAccount()
	{
		return $this->SellerAccount;
	}
	/**
	 * Set Performance
	 * @param PerformanceDashboardType Performance
	 * @return PerformanceDashboardType
	 */
	public function setPerformance($_Performance)
	{
		return ($this->Performance = $_Performance);
	}
	/**
	 * Get Performance
	 * @return EbayTradingTypePerformanceDashboardType
	 */
	public function getPerformance()
	{
		return $this->Performance;
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