<?php
/**
 * Class file for OvhTypeAccountSummaryReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeAccountSummaryReturn
 * @date 02/07/2012
 */
class OvhTypeAccountSummaryReturn extends OvhWsdlClass
{
	/**
	 * The nic
	 * @var string
	 */
	public $nic;
	/**
	 * The account
	 * @var string
	 */
	public $account;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The balance
	 * @var int
	 */
	public $balance;
	/**
	 * The alertThreshold
	 * @var int
	 */
	public $alertThreshold;
	/**
	 * The limitThreshold
	 * @var int
	 */
	public $limitThreshold;
	/**
	 * The openDate
	 * @var string
	 */
	public $openDate;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The closeDate
	 * @var string
	 */
	public $closeDate;
	/**
	 * Constructor
	 * @param string nic
	 * @param string account
	 * @param string country
	 * @param string description
	 * @param int balance
	 * @param int alertThreshold
	 * @param int limitThreshold
	 * @param string openDate
	 * @param string date
	 * @param string closeDate
	 * @return OvhTypeAccountSummaryReturn
	 */
	public function __construct($_nic = null,$_account = null,$_country = null,$_description = null,$_balance = null,$_alertThreshold = null,$_limitThreshold = null,$_openDate = null,$_date = null,$_closeDate = null)
	{
		parent::__construct(array('nic'=>$_nic,'account'=>$_account,'country'=>$_country,'description'=>$_description,'balance'=>$_balance,'alertThreshold'=>$_alertThreshold,'limitThreshold'=>$_limitThreshold,'openDate'=>$_openDate,'date'=>$_date,'closeDate'=>$_closeDate));
	}
	/**
	 * Set nic
	 * @param string nic
	 * @return string
	 */
	public function setNic($_nic)
	{
		return ($this->nic = $_nic);
	}
	/**
	 * Get nic
	 * @return string
	 */
	public function getNic()
	{
		return $this->nic;
	}
	/**
	 * Set account
	 * @param string account
	 * @return string
	 */
	public function setAccount($_account)
	{
		return ($this->account = $_account);
	}
	/**
	 * Get account
	 * @return string
	 */
	public function getAccount()
	{
		return $this->account;
	}
	/**
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set balance
	 * @param int balance
	 * @return int
	 */
	public function setBalance($_balance)
	{
		return ($this->balance = $_balance);
	}
	/**
	 * Get balance
	 * @return int
	 */
	public function getBalance()
	{
		return $this->balance;
	}
	/**
	 * Set alertThreshold
	 * @param int alertThreshold
	 * @return int
	 */
	public function setAlertThreshold($_alertThreshold)
	{
		return ($this->alertThreshold = $_alertThreshold);
	}
	/**
	 * Get alertThreshold
	 * @return int
	 */
	public function getAlertThreshold()
	{
		return $this->alertThreshold;
	}
	/**
	 * Set limitThreshold
	 * @param int limitThreshold
	 * @return int
	 */
	public function setLimitThreshold($_limitThreshold)
	{
		return ($this->limitThreshold = $_limitThreshold);
	}
	/**
	 * Get limitThreshold
	 * @return int
	 */
	public function getLimitThreshold()
	{
		return $this->limitThreshold;
	}
	/**
	 * Set openDate
	 * @param string openDate
	 * @return string
	 */
	public function setOpenDate($_openDate)
	{
		return ($this->openDate = $_openDate);
	}
	/**
	 * Get openDate
	 * @return string
	 */
	public function getOpenDate()
	{
		return $this->openDate;
	}
	/**
	 * Set date
	 * @param string date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get date
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set closeDate
	 * @param string closeDate
	 * @return string
	 */
	public function setCloseDate($_closeDate)
	{
		return ($this->closeDate = $_closeDate);
	}
	/**
	 * Get closeDate
	 * @return string
	 */
	public function getCloseDate()
	{
		return $this->closeDate;
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