<?php
/**
 * Class file for OvhTypeTelephonyHuntingGenericScreenSet
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyHuntingGenericScreenSet
 * @date 02/07/2012
 */
class OvhTypeTelephonyHuntingGenericScreenSet extends OvhWsdlClass
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
	 * The timesStart
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $timesStart;
	/**
	 * The timesEnd
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $timesEnd;
	/**
	 * The daysType
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $daysType;
	/**
	 * The forwardPolicyIndex
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $forwardPolicyIndex;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param OvhTypeMyArrayOfStringType timesStart
	 * @param OvhTypeMyArrayOfStringType timesEnd
	 * @param OvhTypeMyArrayOfStringType daysType
	 * @param OvhTypeMyArrayOfStringType forwardPolicyIndex
	 * @return OvhTypeTelephonyHuntingGenericScreenSet
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_timesStart = null,$_timesEnd = null,$_daysType = null,$_forwardPolicyIndex = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'timesStart'=>new OvhTypeMyArrayOfStringType($_timesStart),'timesEnd'=>new OvhTypeMyArrayOfStringType($_timesEnd),'daysType'=>new OvhTypeMyArrayOfStringType($_daysType),'forwardPolicyIndex'=>new OvhTypeMyArrayOfStringType($_forwardPolicyIndex)));
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
	 * Set timesStart
	 * @param MyArrayOfStringType timesStart
	 * @return MyArrayOfStringType
	 */
	public function setTimesStart($_timesStart)
	{
		return ($this->timesStart = $_timesStart);
	}
	/**
	 * Get timesStart
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getTimesStart()
	{
		return $this->timesStart;
	}
	/**
	 * Set timesEnd
	 * @param MyArrayOfStringType timesEnd
	 * @return MyArrayOfStringType
	 */
	public function setTimesEnd($_timesEnd)
	{
		return ($this->timesEnd = $_timesEnd);
	}
	/**
	 * Get timesEnd
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getTimesEnd()
	{
		return $this->timesEnd;
	}
	/**
	 * Set daysType
	 * @param MyArrayOfStringType daysType
	 * @return MyArrayOfStringType
	 */
	public function setDaysType($_daysType)
	{
		return ($this->daysType = $_daysType);
	}
	/**
	 * Get daysType
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getDaysType()
	{
		return $this->daysType;
	}
	/**
	 * Set forwardPolicyIndex
	 * @param MyArrayOfStringType forwardPolicyIndex
	 * @return MyArrayOfStringType
	 */
	public function setForwardPolicyIndex($_forwardPolicyIndex)
	{
		return ($this->forwardPolicyIndex = $_forwardPolicyIndex);
	}
	/**
	 * Get forwardPolicyIndex
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getForwardPolicyIndex()
	{
		return $this->forwardPolicyIndex;
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