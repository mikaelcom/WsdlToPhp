<?php
/**
 * Class file for OvhTypeTelephonyCallList
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyCallList
 * @date 02/07/2012
 */
class OvhTypeTelephonyCallList extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The listBegin
	 * @var int
	 */
	public $listBegin;
	/**
	 * The listLimit
	 * @var int
	 */
	public $listLimit;
	/**
	 * The listType
	 * @var string
	 */
	public $listType;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The callReceived
	 * @var boolean
	 */
	public $callReceived;
	/**
	 * The filterSearch
	 * @var string
	 */
	public $filterSearch;
	/**
	 * The filterValue
	 * @var string
	 */
	public $filterValue;
	/**
	 * The planType
	 * @var string
	 */
	public $planType;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param int listBegin
	 * @param int listLimit
	 * @param string listType
	 * @param string date
	 * @param boolean callReceived
	 * @param string filterSearch
	 * @param string filterValue
	 * @param string planType
	 * @return OvhTypeTelephonyCallList
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_listBegin = null,$_listLimit = null,$_listType = null,$_date = null,$_callReceived = null,$_filterSearch = null,$_filterValue = null,$_planType = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'listBegin'=>$_listBegin,'listLimit'=>$_listLimit,'listType'=>$_listType,'date'=>$_date,'callReceived'=>$_callReceived,'filterSearch'=>$_filterSearch,'filterValue'=>$_filterValue,'planType'=>$_planType));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
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
	 * Set listBegin
	 * @param int listBegin
	 * @return int
	 */
	public function setListBegin($_listBegin)
	{
		return ($this->listBegin = $_listBegin);
	}
	/**
	 * Get listBegin
	 * @return int
	 */
	public function getListBegin()
	{
		return $this->listBegin;
	}
	/**
	 * Set listLimit
	 * @param int listLimit
	 * @return int
	 */
	public function setListLimit($_listLimit)
	{
		return ($this->listLimit = $_listLimit);
	}
	/**
	 * Get listLimit
	 * @return int
	 */
	public function getListLimit()
	{
		return $this->listLimit;
	}
	/**
	 * Set listType
	 * @param string listType
	 * @return string
	 */
	public function setListType($_listType)
	{
		return ($this->listType = $_listType);
	}
	/**
	 * Get listType
	 * @return string
	 */
	public function getListType()
	{
		return $this->listType;
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
	 * Set callReceived
	 * @param boolean callReceived
	 * @return boolean
	 */
	public function setCallReceived($_callReceived)
	{
		return ($this->callReceived = $_callReceived);
	}
	/**
	 * Get callReceived
	 * @return boolean
	 */
	public function getCallReceived()
	{
		return $this->callReceived;
	}
	/**
	 * Set filterSearch
	 * @param string filterSearch
	 * @return string
	 */
	public function setFilterSearch($_filterSearch)
	{
		return ($this->filterSearch = $_filterSearch);
	}
	/**
	 * Get filterSearch
	 * @return string
	 */
	public function getFilterSearch()
	{
		return $this->filterSearch;
	}
	/**
	 * Set filterValue
	 * @param string filterValue
	 * @return string
	 */
	public function setFilterValue($_filterValue)
	{
		return ($this->filterValue = $_filterValue);
	}
	/**
	 * Get filterValue
	 * @return string
	 */
	public function getFilterValue()
	{
		return $this->filterValue;
	}
	/**
	 * Set planType
	 * @param string planType
	 * @return string
	 */
	public function setPlanType($_planType)
	{
		return ($this->planType = $_planType);
	}
	/**
	 * Get planType
	 * @return string
	 */
	public function getPlanType()
	{
		return $this->planType;
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