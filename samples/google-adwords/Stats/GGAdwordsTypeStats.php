<?php
/**
 * Class file for GGAdwordsTypeStats
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeStats
 * Documentation : Statistics about an ad or criterion within an ad group or campaign.
 * @date 03/07/2012
 */
class GGAdwordsTypeStats extends GGAdwordsWsdlClass
{
	/**
	 * The startDate
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Starting date (inclusive) of the statistics. Format is YYYYMMDD.
	 * @var string
	 */
	public $startDate;
	/**
	 * The endDate
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Ending date (inclusive) of the statistics. Format is YYYYMMDD.
	 * @var string
	 */
	public $endDate;
	/**
	 * The network
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The ad network which the stats are for.
	 * @var GGAdwordsTypeStatsNetwork
	 */
	public $network;
	/**
	 * The clicks
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Number of clicks. <span class="constraint Selectable">This field can be selected using the value "Clicks".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var long
	 */
	public $clicks;
	/**
	 * The impressions
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Number of impressions. <span class="constraint Selectable">This field can be selected using the value "Impressions".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var long
	 */
	public $impressions;
	/**
	 * The cost
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Cost. <span class="constraint Selectable">This field can be selected using the value "Cost".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var GGAdwordsTypeMoney
	 */
	public $cost;
	/**
	 * The averagePosition
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Average position of ads. <span class="constraint Selectable">This field can be selected using the value "AveragePosition".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var double
	 */
	public $averagePosition;
	/**
	 * The averageCpc
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Average cost per click. <span class="constraint Selectable">This field can be selected using the value "AverageCpc".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var GGAdwordsTypeMoney
	 */
	public $averageCpc;
	/**
	 * The averageCpm
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Average Cost Per Impression. <span class="constraint Selectable">This field can be selected using the value "AverageCpm".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var GGAdwordsTypeMoney
	 */
	public $averageCpm;
	/**
	 * The ctr
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Click Through Rate. <span class="constraint Selectable">This field can be selected using the value "Ctr".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var double
	 */
	public $ctr;
	/**
	 * The conversions
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Number of conversions. <span class="constraint Selectable">This field can be selected using the value "Conversions".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var long
	 */
	public $conversions;
	/**
	 * The viewThroughConversions
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Number of conversions (view-through). <span class="constraint Selectable">This field can be selected using the value "ViewThroughConversions".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var long
	 */
	public $viewThroughConversions;
	/**
	 * The StatsType
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that this instance is a subtype of Stats. Although this field is returned in the response, it is ignored on input and cannot be selected. Specify xsi:type instead.
	 * @var string
	 */
	public $StatsType;
	/**
	 * Constructor
	 * @param string startDate
	 * @param string endDate
	 * @param GGAdwordsTypeStatsNetwork network
	 * @param long clicks
	 * @param long impressions
	 * @param GGAdwordsTypeMoney cost
	 * @param double averagePosition
	 * @param GGAdwordsTypeMoney averageCpc
	 * @param GGAdwordsTypeMoney averageCpm
	 * @param double ctr
	 * @param long conversions
	 * @param long viewThroughConversions
	 * @param string StatsType
	 * @return GGAdwordsTypeStats
	 */
	public function __construct($_startDate = null,$_endDate = null,$_network = null,$_clicks = null,$_impressions = null,$_cost = null,$_averagePosition = null,$_averageCpc = null,$_averageCpm = null,$_ctr = null,$_conversions = null,$_viewThroughConversions = null,$_StatsType = null)
	{
		parent::__construct(array('startDate'=>$_startDate,'endDate'=>$_endDate,'network'=>$_network,'clicks'=>$_clicks,'impressions'=>$_impressions,'cost'=>$_cost,'averagePosition'=>$_averagePosition,'averageCpc'=>$_averageCpc,'averageCpm'=>$_averageCpm,'ctr'=>$_ctr,'conversions'=>$_conversions,'viewThroughConversions'=>$_viewThroughConversions,'StatsType'=>$_StatsType));
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
	 * Set network
	 * @param StatsNetwork network
	 * @return StatsNetwork
	 */
	public function setNetwork($_network)
	{
		return ($this->network = GGAdwordsTypeStatsNetwork::valueIsValid($_network)?$_network:null);
	}
	/**
	 * Get network
	 * @return GGAdwordsTypeStatsNetwork
	 */
	public function getNetwork()
	{
		return $this->network;
	}
	/**
	 * Set clicks
	 * @param long clicks
	 * @return long
	 */
	public function setClicks($_clicks)
	{
		return ($this->clicks = $_clicks);
	}
	/**
	 * Get clicks
	 * @return long
	 */
	public function getClicks()
	{
		return $this->clicks;
	}
	/**
	 * Set impressions
	 * @param long impressions
	 * @return long
	 */
	public function setImpressions($_impressions)
	{
		return ($this->impressions = $_impressions);
	}
	/**
	 * Get impressions
	 * @return long
	 */
	public function getImpressions()
	{
		return $this->impressions;
	}
	/**
	 * Set cost
	 * @param Money cost
	 * @return Money
	 */
	public function setCost($_cost)
	{
		return ($this->cost = $_cost);
	}
	/**
	 * Get cost
	 * @return GGAdwordsTypeMoney
	 */
	public function getCost()
	{
		return $this->cost;
	}
	/**
	 * Set averagePosition
	 * @param double averagePosition
	 * @return double
	 */
	public function setAveragePosition($_averagePosition)
	{
		return ($this->averagePosition = $_averagePosition);
	}
	/**
	 * Get averagePosition
	 * @return double
	 */
	public function getAveragePosition()
	{
		return $this->averagePosition;
	}
	/**
	 * Set averageCpc
	 * @param Money averageCpc
	 * @return Money
	 */
	public function setAverageCpc($_averageCpc)
	{
		return ($this->averageCpc = $_averageCpc);
	}
	/**
	 * Get averageCpc
	 * @return GGAdwordsTypeMoney
	 */
	public function getAverageCpc()
	{
		return $this->averageCpc;
	}
	/**
	 * Set averageCpm
	 * @param Money averageCpm
	 * @return Money
	 */
	public function setAverageCpm($_averageCpm)
	{
		return ($this->averageCpm = $_averageCpm);
	}
	/**
	 * Get averageCpm
	 * @return GGAdwordsTypeMoney
	 */
	public function getAverageCpm()
	{
		return $this->averageCpm;
	}
	/**
	 * Set ctr
	 * @param double ctr
	 * @return double
	 */
	public function setCtr($_ctr)
	{
		return ($this->ctr = $_ctr);
	}
	/**
	 * Get ctr
	 * @return double
	 */
	public function getCtr()
	{
		return $this->ctr;
	}
	/**
	 * Set conversions
	 * @param long conversions
	 * @return long
	 */
	public function setConversions($_conversions)
	{
		return ($this->conversions = $_conversions);
	}
	/**
	 * Get conversions
	 * @return long
	 */
	public function getConversions()
	{
		return $this->conversions;
	}
	/**
	 * Set viewThroughConversions
	 * @param long viewThroughConversions
	 * @return long
	 */
	public function setViewThroughConversions($_viewThroughConversions)
	{
		return ($this->viewThroughConversions = $_viewThroughConversions);
	}
	/**
	 * Get viewThroughConversions
	 * @return long
	 */
	public function getViewThroughConversions()
	{
		return $this->viewThroughConversions;
	}
	/**
	 * Set StatsType
	 * @param string StatsType
	 * @return string
	 */
	public function setStatsType($_StatsType)
	{
		return ($this->StatsType = $_StatsType);
	}
	/**
	 * Get StatsType
	 * @return string
	 */
	public function getStatsType()
	{
		return $this->StatsType;
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