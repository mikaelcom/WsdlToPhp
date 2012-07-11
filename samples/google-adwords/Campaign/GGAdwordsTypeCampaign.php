<?php
/**
 * Class file for GGAdwordsTypeCampaign
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeCampaign
 * Documentation : Data representing an AdWords campaign.
 * @date 03/07/2012
 */
class GGAdwordsTypeCampaign extends GGAdwordsWsdlClass
{
	/**
	 * The id
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : ID of this campaign. <span class="constraint Selectable">This field can be selected using the value "Id".</span><span class="constraint Filterable">This field can be filtered on.</span> <span class="constraint ReadOnly">This field is read only and should not be set for following {@link Operator}s : ADD. If this field is sent to the API, it will be ignored.</span> <span class="constraint Required">This field is required and should not be {@code null} when it is contained within {@link Operator}s : SET.</span>
	 * @var long
	 */
	public $id;
	/**
	 * The name
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Name of this campaign. On add, defaults to <code>Campaign #<var>N</var></code>. <span class="constraint Selectable">This field can be selected using the value "Name".</span><span class="constraint Filterable">This field can be filtered on.</span> <span class="constraint StringLength">This string must not be empty.</span>
	 * @var string
	 */
	public $name;
	/**
	 * The status
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Status of this campaign. On add, defaults to <code>ACTIVE</code>. <span class="constraint Selectable">This field can be selected using the value "Status".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var GGAdwordsTypeCampaignStatus
	 */
	public $status;
	/**
	 * The servingStatus
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Serving status. <span class="constraint Selectable">This field can be selected using the value "ServingStatus".</span><span class="constraint Filterable">This field can be filtered on.</span> <span class="constraint ReadOnly">This field is read only and should not be set. If this field is sent to the API, it will be ignored.</span>
	 * @var GGAdwordsTypeServingStatus
	 */
	public $servingStatus;
	/**
	 * The startDate
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Date the campaign begins. On add, defaults to the current day in the parent account's local timezone. The date's format should be YYYYMMDD. <span class="constraint Selectable">This field can be selected using the value "StartDate".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var string
	 */
	public $startDate;
	/**
	 * The endDate
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Date the campaign ends. On add, defaults to <code>20371231</code>, which means the campaign will run indefinitely. To set an existing campaign to run indefinitely, set this field to <code>203712<b>30</b></code>. The date's format should be YYYYMMDD. <span class="constraint Selectable">This field can be selected using the value "EndDate".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var string
	 */
	public $endDate;
	/**
	 * The budget
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Current base budget of campaign; default if no custom budgets are active.
	 * @var GGAdwordsTypeBudget
	 */
	public $budget;
	/**
	 * The biddingStrategy
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Bidding strategy for this campaign. This field is required when adding a new campaign. To modify an existing campaign's bidding strategy, use {@link CampaignOperation#biddingTransition}. Note that campaigns must meet <a href="http://adwords.google.com/support/aw/bin/answer.py?answer=71063">specific eligibility requirements</a> before they can use the <code>ConversionOptimizier</code> bidding strategy. <span class="constraint Required">This field is required and should not be {@code null} when it is contained within {@link Operator}s : ADD.</span>
	 * @var GGAdwordsTypeBiddingStrategy
	 */
	public $biddingStrategy;
	/**
	 * The conversionOptimizerEligibility
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : <span class="constraint ReadOnly">This field is read only and should not be set. If this field is sent to the API, it will be ignored.</span>
	 * @var GGAdwordsTypeConversionOptimizerEligibility
	 */
	public $conversionOptimizerEligibility;
	/**
	 * The campaignStats
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Statistics for this campaign, returned by {@link CampaignService#get get()} only if requested in the selector. <span class="constraint ReadOnly">This field is read only and should not be set. If this field is sent to the API, it will be ignored.</span>
	 * @var GGAdwordsTypeCampaignStats
	 */
	public $campaignStats;
	/**
	 * The adServingOptimizationStatus
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Ad serving optimization status. <span class="constraint Selectable">This field can be selected using the value "AdServingOptimizationStatus".</span>
	 * @var GGAdwordsTypeAdServingOptimizationStatus
	 */
	public $adServingOptimizationStatus;
	/**
	 * The frequencyCap
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Frequency cap for this campaign.
	 * @var GGAdwordsTypeFrequencyCap
	 */
	public $frequencyCap;
	/**
	 * The settings
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : List of settings for the Campaign. <span class="constraint Selectable">This field can be selected using the value "Settings".</span>
	 * @var GGAdwordsTypeSetting
	 */
	public $settings;
	/**
	 * The networkSetting
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The network settings for the campaign, to indicate where the campaign will serve.
	 * @var GGAdwordsTypeNetworkSetting
	 */
	public $networkSetting;
	/**
	 * The forwardCompatibilityMap
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : This Map provides a place to put new features and settings in older versions of the AdWords API in the rare instance we need to introduce a new feature in an older version. It is presently unused. Do not set a value.
	 * @var GGAdwordsTypeString_StringMapEntry
	 */
	public $forwardCompatibilityMap;
	/**
	 * Constructor
	 * @param long id
	 * @param string name
	 * @param GGAdwordsTypeCampaignStatus status
	 * @param GGAdwordsTypeServingStatus servingStatus
	 * @param string startDate
	 * @param string endDate
	 * @param GGAdwordsTypeBudget budget
	 * @param GGAdwordsTypeBiddingStrategy biddingStrategy
	 * @param GGAdwordsTypeConversionOptimizerEligibility conversionOptimizerEligibility
	 * @param GGAdwordsTypeCampaignStats campaignStats
	 * @param GGAdwordsTypeAdServingOptimizationStatus adServingOptimizationStatus
	 * @param GGAdwordsTypeFrequencyCap frequencyCap
	 * @param GGAdwordsTypeSetting settings
	 * @param GGAdwordsTypeNetworkSetting networkSetting
	 * @param GGAdwordsTypeString_StringMapEntry forwardCompatibilityMap
	 * @return GGAdwordsTypeCampaign
	 */
	public function __construct($_id = null,$_name = null,$_status = null,$_servingStatus = null,$_startDate = null,$_endDate = null,$_budget = null,$_biddingStrategy = null,$_conversionOptimizerEligibility = null,$_campaignStats = null,$_adServingOptimizationStatus = null,$_frequencyCap = null,$_settings = null,$_networkSetting = null,$_forwardCompatibilityMap = null)
	{
		parent::__construct(array('id'=>$_id,'name'=>$_name,'status'=>$_status,'servingStatus'=>$_servingStatus,'startDate'=>$_startDate,'endDate'=>$_endDate,'budget'=>$_budget,'biddingStrategy'=>$_biddingStrategy,'conversionOptimizerEligibility'=>$_conversionOptimizerEligibility,'campaignStats'=>$_campaignStats,'adServingOptimizationStatus'=>$_adServingOptimizationStatus,'frequencyCap'=>$_frequencyCap,'settings'=>$_settings,'networkSetting'=>$_networkSetting,'forwardCompatibilityMap'=>$_forwardCompatibilityMap));
	}
	/**
	 * Set id
	 * @param long id
	 * @return long
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return long
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set status
	 * @param CampaignStatus status
	 * @return CampaignStatus
	 */
	public function setStatus($_status)
	{
		return ($this->status = GGAdwordsTypeCampaignStatus::valueIsValid($_status)?$_status:null);
	}
	/**
	 * Get status
	 * @return GGAdwordsTypeCampaignStatus
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set servingStatus
	 * @param ServingStatus servingStatus
	 * @return ServingStatus
	 */
	public function setServingStatus($_servingStatus)
	{
		return ($this->servingStatus = GGAdwordsTypeServingStatus::valueIsValid($_servingStatus)?$_servingStatus:null);
	}
	/**
	 * Get servingStatus
	 * @return GGAdwordsTypeServingStatus
	 */
	public function getServingStatus()
	{
		return $this->servingStatus;
	}
	/**
	 * Set startDate
	 * @param string startDate
	 * @return string
	 */
	public function setStartDate($_startDate)
	{
		return ($this->startDate = $_startDate);
	}
	/**
	 * Get startDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->startDate;
	}
	/**
	 * Set endDate
	 * @param string endDate
	 * @return string
	 */
	public function setEndDate($_endDate)
	{
		return ($this->endDate = $_endDate);
	}
	/**
	 * Get endDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->endDate;
	}
	/**
	 * Set budget
	 * @param Budget budget
	 * @return Budget
	 */
	public function setBudget($_budget)
	{
		return ($this->budget = $_budget);
	}
	/**
	 * Get budget
	 * @return GGAdwordsTypeBudget
	 */
	public function getBudget()
	{
		return $this->budget;
	}
	/**
	 * Set biddingStrategy
	 * @param BiddingStrategy biddingStrategy
	 * @return BiddingStrategy
	 */
	public function setBiddingStrategy($_biddingStrategy)
	{
		return ($this->biddingStrategy = $_biddingStrategy);
	}
	/**
	 * Get biddingStrategy
	 * @return GGAdwordsTypeBiddingStrategy
	 */
	public function getBiddingStrategy()
	{
		return $this->biddingStrategy;
	}
	/**
	 * Set conversionOptimizerEligibility
	 * @param ConversionOptimizerEligibility conversionOptimizerEligibility
	 * @return ConversionOptimizerEligibility
	 */
	public function setConversionOptimizerEligibility($_conversionOptimizerEligibility)
	{
		return ($this->conversionOptimizerEligibility = $_conversionOptimizerEligibility);
	}
	/**
	 * Get conversionOptimizerEligibility
	 * @return GGAdwordsTypeConversionOptimizerEligibility
	 */
	public function getConversionOptimizerEligibility()
	{
		return $this->conversionOptimizerEligibility;
	}
	/**
	 * Set campaignStats
	 * @param CampaignStats campaignStats
	 * @return CampaignStats
	 */
	public function setCampaignStats($_campaignStats)
	{
		return ($this->campaignStats = $_campaignStats);
	}
	/**
	 * Get campaignStats
	 * @return GGAdwordsTypeCampaignStats
	 */
	public function getCampaignStats()
	{
		return $this->campaignStats;
	}
	/**
	 * Set adServingOptimizationStatus
	 * @param AdServingOptimizationStatus adServingOptimizationStatus
	 * @return AdServingOptimizationStatus
	 */
	public function setAdServingOptimizationStatus($_adServingOptimizationStatus)
	{
		return ($this->adServingOptimizationStatus = GGAdwordsTypeAdServingOptimizationStatus::valueIsValid($_adServingOptimizationStatus)?$_adServingOptimizationStatus:null);
	}
	/**
	 * Get adServingOptimizationStatus
	 * @return GGAdwordsTypeAdServingOptimizationStatus
	 */
	public function getAdServingOptimizationStatus()
	{
		return $this->adServingOptimizationStatus;
	}
	/**
	 * Set frequencyCap
	 * @param FrequencyCap frequencyCap
	 * @return FrequencyCap
	 */
	public function setFrequencyCap($_frequencyCap)
	{
		return ($this->frequencyCap = $_frequencyCap);
	}
	/**
	 * Get frequencyCap
	 * @return GGAdwordsTypeFrequencyCap
	 */
	public function getFrequencyCap()
	{
		return $this->frequencyCap;
	}
	/**
	 * Set settings
	 * @param Setting settings
	 * @return Setting
	 */
	public function setSettings($_settings)
	{
		return ($this->settings = $_settings);
	}
	/**
	 * Get settings
	 * @return GGAdwordsTypeSetting
	 */
	public function getSettings()
	{
		return $this->settings;
	}
	/**
	 * Set networkSetting
	 * @param NetworkSetting networkSetting
	 * @return NetworkSetting
	 */
	public function setNetworkSetting($_networkSetting)
	{
		return ($this->networkSetting = $_networkSetting);
	}
	/**
	 * Get networkSetting
	 * @return GGAdwordsTypeNetworkSetting
	 */
	public function getNetworkSetting()
	{
		return $this->networkSetting;
	}
	/**
	 * Set forwardCompatibilityMap
	 * @param String_StringMapEntry forwardCompatibilityMap
	 * @return String_StringMapEntry
	 */
	public function setForwardCompatibilityMap($_forwardCompatibilityMap)
	{
		return ($this->forwardCompatibilityMap = $_forwardCompatibilityMap);
	}
	/**
	 * Get forwardCompatibilityMap
	 * @return GGAdwordsTypeString_StringMapEntry
	 */
	public function getForwardCompatibilityMap()
	{
		return $this->forwardCompatibilityMap;
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