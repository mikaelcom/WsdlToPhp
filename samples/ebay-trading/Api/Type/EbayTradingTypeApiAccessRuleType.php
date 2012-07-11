<?php
/**
 * Class file for EbayTradingTypeApiAccessRuleType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeApiAccessRuleType
 * Documentation : Contains the definition of a rule that governs the number of times your application can access the eBay API (invoke a call) on an hourly, daily, or periodic basis.
 * @date 04/07/2012
 */
class EbayTradingTypeApiAccessRuleType extends EbayTradingWsdlClass
{
	/**
	 * The CallName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the call that has an access rule. Can be a call name (e.g., AddItem), ApplicationAggregate (returns totals for all calls), PasswordAuthenticationLimiter (dummy call), or NonUTF8UsageLimiter.
	 * @var string
	 */
	public $CallName;
	/**
	 * The CountsTowardAggregate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether use of this call counts toward the application's aggregate limit for all calls.
	 * @var boolean
	 */
	public $CountsTowardAggregate;
	/**
	 * The DailyHardLimit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of calls per day that your application can make to this call before being refused. The day starts at midnight, 00:00:00 PST (not GMT).
	 * @var long
	 */
	public $DailyHardLimit;
	/**
	 * The DailySoftLimit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of calls per day that your application can make to this call before you receive a warning. The day starts at midnight, 00:00:00 PST.
	 * @var long
	 */
	public $DailySoftLimit;
	/**
	 * The DailyUsage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of times your application has used this call today.
	 * @var long
	 */
	public $DailyUsage;
	/**
	 * The HourlyHardLimit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of calls that your application can make per hour to this call before being refused. Each count begins on the hour (e.g. 1:00:00).
	 * @var long
	 */
	public $HourlyHardLimit;
	/**
	 * The HourlySoftLimit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of calls that your application can make to this call per hour before you receive a warning. Each count begins on the hour (e.g. 1:00:00).
	 * @var long
	 */
	public $HourlySoftLimit;
	/**
	 * The HourlyUsage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of times your application has executed this call during this hour.
	 * @var long
	 */
	public $HourlyUsage;
	/**
	 * The Period
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The length of time before your application's perodic usage counter restarts for this call. If the number of calls you make exceeds the periodic hard limit before the current period ends, further calls will be refused until the next period starts. Possible values: -1 (Periodic limit not enforced, could be any negative integer), 0 (Calendar month), 30 (Number of days, could be any positive integer). If the period is based on the calendar month, the usage counters restart on the same day of every month, regardless of the number of days in the month.
	 * @var int
	 */
	public $Period;
	/**
	 * The PeriodicHardLimit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of calls per period that your application may make before a call is refused, if the periodic limit is enforced. The length of the period is specified in Period.
	 * @var long
	 */
	public $PeriodicHardLimit;
	/**
	 * The PeriodicSoftLimit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of calls per period that your application may make before you receive a warning, if the periodic limit is enforced. The length of the period is specified in Period.
	 * @var long
	 */
	public $PeriodicSoftLimit;
	/**
	 * The PeriodicUsage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of calls that your application has already made this period. Returns 0 if the periodic access rule has not been configured for the application. The length of the period is specified in Period. The start date of the period is specified in PeriodicStartDate.
	 * @var long
	 */
	public $PeriodicUsage;
	/**
	 * The PeriodicStartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The time (in GMT) when this access rule's period started. The period starts at midnight Pacific time. For example, if the period begins on June 29 in 2005 when California is on Pacific Daylight Time, the GMT value returned would be 2005-06-29T07:00:00.000Z If the period begins on December 29 in 2005 when California is on Pacific Standard Time, the GMT value returned would be 2005-12-29T08:00:00.000Z. Only returned when the eBay Developers Program has configured the start date for the access rule. The start date can vary per application and per call name (i.e., per access rule).
	 * @var dateTime
	 */
	public $PeriodicStartDate;
	/**
	 * The ModTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time this access rule was last modified by eBay.
	 * @var dateTime
	 */
	public $ModTime;
	/**
	 * The RuleCurrentStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Your application's current status for this rule, including whether the rule is set for your application and whether the application has exceeded its daily or hourly limit.
	 * @var EbayTradingTypeAccessRuleCurrentStatusCodeType
	 */
	public $RuleCurrentStatus;
	/**
	 * The RuleStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The status of the access rule, including whether the rule is turned on or off and whether the application is currently blocked from using this call. No effect if RuleCurrentStatus is set to NotSet.
	 * @var EbayTradingTypeAccessRuleStatusCodeType
	 */
	public $RuleStatus;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string CallName
	 * @param boolean CountsTowardAggregate
	 * @param long DailyHardLimit
	 * @param long DailySoftLimit
	 * @param long DailyUsage
	 * @param long HourlyHardLimit
	 * @param long HourlySoftLimit
	 * @param long HourlyUsage
	 * @param int Period
	 * @param long PeriodicHardLimit
	 * @param long PeriodicSoftLimit
	 * @param long PeriodicUsage
	 * @param dateTime PeriodicStartDate
	 * @param dateTime ModTime
	 * @param EbayTradingTypeAccessRuleCurrentStatusCodeType RuleCurrentStatus
	 * @param EbayTradingTypeAccessRuleStatusCodeType RuleStatus
	 * @param DOMDocument any
	 * @return EbayTradingTypeApiAccessRuleType
	 */
	public function __construct($_CallName = null,$_CountsTowardAggregate = null,$_DailyHardLimit = null,$_DailySoftLimit = null,$_DailyUsage = null,$_HourlyHardLimit = null,$_HourlySoftLimit = null,$_HourlyUsage = null,$_Period = null,$_PeriodicHardLimit = null,$_PeriodicSoftLimit = null,$_PeriodicUsage = null,$_PeriodicStartDate = null,$_ModTime = null,$_RuleCurrentStatus = null,$_RuleStatus = null,$_any = null)
	{
		parent::__construct(array('CallName'=>$_CallName,'CountsTowardAggregate'=>$_CountsTowardAggregate,'DailyHardLimit'=>$_DailyHardLimit,'DailySoftLimit'=>$_DailySoftLimit,'DailyUsage'=>$_DailyUsage,'HourlyHardLimit'=>$_HourlyHardLimit,'HourlySoftLimit'=>$_HourlySoftLimit,'HourlyUsage'=>$_HourlyUsage,'Period'=>$_Period,'PeriodicHardLimit'=>$_PeriodicHardLimit,'PeriodicSoftLimit'=>$_PeriodicSoftLimit,'PeriodicUsage'=>$_PeriodicUsage,'PeriodicStartDate'=>$_PeriodicStartDate,'ModTime'=>$_ModTime,'RuleCurrentStatus'=>$_RuleCurrentStatus,'RuleStatus'=>$_RuleStatus,'any'=>$_any));
	}
	/**
	 * Set CallName
	 * @param string CallName
	 * @return string
	 */
	public function setCallName($_CallName)
	{
		return ($this->CallName = $_CallName);
	}
	/**
	 * Get CallName
	 * @return string
	 */
	public function getCallName()
	{
		return $this->CallName;
	}
	/**
	 * Set CountsTowardAggregate
	 * @param boolean CountsTowardAggregate
	 * @return boolean
	 */
	public function setCountsTowardAggregate($_CountsTowardAggregate)
	{
		return ($this->CountsTowardAggregate = $_CountsTowardAggregate);
	}
	/**
	 * Get CountsTowardAggregate
	 * @return boolean
	 */
	public function getCountsTowardAggregate()
	{
		return $this->CountsTowardAggregate;
	}
	/**
	 * Set DailyHardLimit
	 * @param long DailyHardLimit
	 * @return long
	 */
	public function setDailyHardLimit($_DailyHardLimit)
	{
		return ($this->DailyHardLimit = $_DailyHardLimit);
	}
	/**
	 * Get DailyHardLimit
	 * @return long
	 */
	public function getDailyHardLimit()
	{
		return $this->DailyHardLimit;
	}
	/**
	 * Set DailySoftLimit
	 * @param long DailySoftLimit
	 * @return long
	 */
	public function setDailySoftLimit($_DailySoftLimit)
	{
		return ($this->DailySoftLimit = $_DailySoftLimit);
	}
	/**
	 * Get DailySoftLimit
	 * @return long
	 */
	public function getDailySoftLimit()
	{
		return $this->DailySoftLimit;
	}
	/**
	 * Set DailyUsage
	 * @param long DailyUsage
	 * @return long
	 */
	public function setDailyUsage($_DailyUsage)
	{
		return ($this->DailyUsage = $_DailyUsage);
	}
	/**
	 * Get DailyUsage
	 * @return long
	 */
	public function getDailyUsage()
	{
		return $this->DailyUsage;
	}
	/**
	 * Set HourlyHardLimit
	 * @param long HourlyHardLimit
	 * @return long
	 */
	public function setHourlyHardLimit($_HourlyHardLimit)
	{
		return ($this->HourlyHardLimit = $_HourlyHardLimit);
	}
	/**
	 * Get HourlyHardLimit
	 * @return long
	 */
	public function getHourlyHardLimit()
	{
		return $this->HourlyHardLimit;
	}
	/**
	 * Set HourlySoftLimit
	 * @param long HourlySoftLimit
	 * @return long
	 */
	public function setHourlySoftLimit($_HourlySoftLimit)
	{
		return ($this->HourlySoftLimit = $_HourlySoftLimit);
	}
	/**
	 * Get HourlySoftLimit
	 * @return long
	 */
	public function getHourlySoftLimit()
	{
		return $this->HourlySoftLimit;
	}
	/**
	 * Set HourlyUsage
	 * @param long HourlyUsage
	 * @return long
	 */
	public function setHourlyUsage($_HourlyUsage)
	{
		return ($this->HourlyUsage = $_HourlyUsage);
	}
	/**
	 * Get HourlyUsage
	 * @return long
	 */
	public function getHourlyUsage()
	{
		return $this->HourlyUsage;
	}
	/**
	 * Set Period
	 * @param int Period
	 * @return int
	 */
	public function setPeriod($_Period)
	{
		return ($this->Period = $_Period);
	}
	/**
	 * Get Period
	 * @return int
	 */
	public function getPeriod()
	{
		return $this->Period;
	}
	/**
	 * Set PeriodicHardLimit
	 * @param long PeriodicHardLimit
	 * @return long
	 */
	public function setPeriodicHardLimit($_PeriodicHardLimit)
	{
		return ($this->PeriodicHardLimit = $_PeriodicHardLimit);
	}
	/**
	 * Get PeriodicHardLimit
	 * @return long
	 */
	public function getPeriodicHardLimit()
	{
		return $this->PeriodicHardLimit;
	}
	/**
	 * Set PeriodicSoftLimit
	 * @param long PeriodicSoftLimit
	 * @return long
	 */
	public function setPeriodicSoftLimit($_PeriodicSoftLimit)
	{
		return ($this->PeriodicSoftLimit = $_PeriodicSoftLimit);
	}
	/**
	 * Get PeriodicSoftLimit
	 * @return long
	 */
	public function getPeriodicSoftLimit()
	{
		return $this->PeriodicSoftLimit;
	}
	/**
	 * Set PeriodicUsage
	 * @param long PeriodicUsage
	 * @return long
	 */
	public function setPeriodicUsage($_PeriodicUsage)
	{
		return ($this->PeriodicUsage = $_PeriodicUsage);
	}
	/**
	 * Get PeriodicUsage
	 * @return long
	 */
	public function getPeriodicUsage()
	{
		return $this->PeriodicUsage;
	}
	/**
	 * Set PeriodicStartDate
	 * @param dateTime PeriodicStartDate
	 * @return dateTime
	 */
	public function setPeriodicStartDate($_PeriodicStartDate)
	{
		return ($this->PeriodicStartDate = $_PeriodicStartDate);
	}
	/**
	 * Get PeriodicStartDate
	 * @return dateTime
	 */
	public function getPeriodicStartDate()
	{
		return $this->PeriodicStartDate;
	}
	/**
	 * Set ModTime
	 * @param dateTime ModTime
	 * @return dateTime
	 */
	public function setModTime($_ModTime)
	{
		return ($this->ModTime = $_ModTime);
	}
	/**
	 * Get ModTime
	 * @return dateTime
	 */
	public function getModTime()
	{
		return $this->ModTime;
	}
	/**
	 * Set RuleCurrentStatus
	 * @param AccessRuleCurrentStatusCodeType RuleCurrentStatus
	 * @return AccessRuleCurrentStatusCodeType
	 */
	public function setRuleCurrentStatus($_RuleCurrentStatus)
	{
		return ($this->RuleCurrentStatus = EbayTradingTypeAccessRuleCurrentStatusCodeType::valueIsValid($_RuleCurrentStatus)?$_RuleCurrentStatus:null);
	}
	/**
	 * Get RuleCurrentStatus
	 * @return EbayTradingTypeAccessRuleCurrentStatusCodeType
	 */
	public function getRuleCurrentStatus()
	{
		return $this->RuleCurrentStatus;
	}
	/**
	 * Set RuleStatus
	 * @param AccessRuleStatusCodeType RuleStatus
	 * @return AccessRuleStatusCodeType
	 */
	public function setRuleStatus($_RuleStatus)
	{
		return ($this->RuleStatus = EbayTradingTypeAccessRuleStatusCodeType::valueIsValid($_RuleStatus)?$_RuleStatus:null);
	}
	/**
	 * Get RuleStatus
	 * @return EbayTradingTypeAccessRuleStatusCodeType
	 */
	public function getRuleStatus()
	{
		return $this->RuleStatus;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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