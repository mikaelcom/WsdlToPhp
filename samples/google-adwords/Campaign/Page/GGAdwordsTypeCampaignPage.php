<?php
/**
 * Class file for GGAdwordsTypeCampaignPage
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeCampaignPage
 * Documentation : Contains a subset of campaign resulting from the filtering and paging of the {@link com.google.ads.api.services.campaignmgmt.campaign.CampaignService#get} call.
 * @date 03/07/2012
 */
class GGAdwordsTypeCampaignPage extends GGAdwordsTypePage
{
	/**
	 * The totalBudget
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The total budget.
	 * @var GGAdwordsTypeBudget
	 */
	public $totalBudget;
	/**
	 * The entries
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : The result entries in this page.
	 * @var GGAdwordsTypeCampaign
	 */
	public $entries;
	/**
	 * Constructor
	 * @param GGAdwordsTypeBudget totalBudget
	 * @param GGAdwordsTypeCampaign entries
	 * @return GGAdwordsTypeCampaignPage
	 */
	public function __construct($_totalBudget = null,$_entries = null)
	{
		GGAdwordsWsdlClass::__construct(array('totalBudget'=>$_totalBudget,'entries'=>$_entries));
	}
	/**
	 * Set totalBudget
	 * @param Budget totalBudget
	 * @return Budget
	 */
	public function setTotalBudget($_totalBudget)
	{
		return ($this->totalBudget = $_totalBudget);
	}
	/**
	 * Get totalBudget
	 * @return GGAdwordsTypeBudget
	 */
	public function getTotalBudget()
	{
		return $this->totalBudget;
	}
	/**
	 * Set entries
	 * @param Campaign entries
	 * @return Campaign
	 */
	public function setEntries($_entries)
	{
		return ($this->entries = $_entries);
	}
	/**
	 * Get entries
	 * @return GGAdwordsTypeCampaign
	 */
	public function getEntries()
	{
		return $this->entries;
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