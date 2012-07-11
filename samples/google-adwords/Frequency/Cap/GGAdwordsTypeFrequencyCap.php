<?php
/**
 * Class file for GGAdwordsTypeFrequencyCap
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeFrequencyCap
 * Documentation : A frequency cap is the maximum number of times an ad (or some set of ads) can be shown to a user over a particular time period.
 * @date 03/07/2012
 */
class GGAdwordsTypeFrequencyCap extends GGAdwordsWsdlClass
{
	/**
	 * The impressions
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Maximum number of impressions allowed during the time range by this cap. <span class="constraint Selectable">This field can be selected using the value "FrequencyCapMaxImpressions".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var long
	 */
	public $impressions;
	/**
	 * The timeUnit
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Unit of time the cap is defined at. Only the Day, Week and Month time units are supported. <span class="constraint Selectable">This field can be selected using the value "TimeUnit".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var GGAdwordsTypeTimeUnit
	 */
	public $timeUnit;
	/**
	 * The level
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The level on which the cap is to be applied (creative/adgroup). Cap is applied to all the entities of this level in the campaign. <span class="constraint Selectable">This field can be selected using the value "Level".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var GGAdwordsTypeLevel
	 */
	public $level;
	/**
	 * Constructor
	 * @param long impressions
	 * @param GGAdwordsTypeTimeUnit timeUnit
	 * @param GGAdwordsTypeLevel level
	 * @return GGAdwordsTypeFrequencyCap
	 */
	public function __construct($_impressions = null,$_timeUnit = null,$_level = null)
	{
		parent::__construct(array('impressions'=>$_impressions,'timeUnit'=>$_timeUnit,'level'=>$_level));
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
	 * Set timeUnit
	 * @param TimeUnit timeUnit
	 * @return TimeUnit
	 */
	public function setTimeUnit($_timeUnit)
	{
		return ($this->timeUnit = GGAdwordsTypeTimeUnit::valueIsValid($_timeUnit)?$_timeUnit:null);
	}
	/**
	 * Get timeUnit
	 * @return GGAdwordsTypeTimeUnit
	 */
	public function getTimeUnit()
	{
		return $this->timeUnit;
	}
	/**
	 * Set level
	 * @param Level level
	 * @return Level
	 */
	public function setLevel($_level)
	{
		return ($this->level = GGAdwordsTypeLevel::valueIsValid($_level)?$_level:null);
	}
	/**
	 * Get level
	 * @return GGAdwordsTypeLevel
	 */
	public function getLevel()
	{
		return $this->level;
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