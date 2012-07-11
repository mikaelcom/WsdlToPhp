<?php
/**
 * Class file for OvhTypeTelephonyScreenListBlackWhiteChoiceModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyScreenListBlackWhiteChoiceModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyScreenListBlackWhiteChoiceModify extends OvhWsdlClass
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
	 * The screenList
	 * @var string
	 */
	public $screenList;
	/**
	 * The outgoingCodeUnlock
	 * @var string
	 */
	public $outgoingCodeUnlock;
	/**
	 * The incomingOoutgoing
	 * @var string
	 */
	public $incomingOoutgoing;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string screenList
	 * @param string outgoingCodeUnlock
	 * @param string incomingOoutgoing
	 * @return OvhTypeTelephonyScreenListBlackWhiteChoiceModify
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_screenList = null,$_outgoingCodeUnlock = null,$_incomingOoutgoing = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'screenList'=>$_screenList,'outgoingCodeUnlock'=>$_outgoingCodeUnlock,'incomingOoutgoing'=>$_incomingOoutgoing));
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
	 * Set screenList
	 * @param string screenList
	 * @return string
	 */
	public function setScreenList($_screenList)
	{
		return ($this->screenList = $_screenList);
	}
	/**
	 * Get screenList
	 * @return string
	 */
	public function getScreenList()
	{
		return $this->screenList;
	}
	/**
	 * Set outgoingCodeUnlock
	 * @param string outgoingCodeUnlock
	 * @return string
	 */
	public function setOutgoingCodeUnlock($_outgoingCodeUnlock)
	{
		return ($this->outgoingCodeUnlock = $_outgoingCodeUnlock);
	}
	/**
	 * Get outgoingCodeUnlock
	 * @return string
	 */
	public function getOutgoingCodeUnlock()
	{
		return $this->outgoingCodeUnlock;
	}
	/**
	 * Set incomingOoutgoing
	 * @param string incomingOoutgoing
	 * @return string
	 */
	public function setIncomingOoutgoing($_incomingOoutgoing)
	{
		return ($this->incomingOoutgoing = $_incomingOoutgoing);
	}
	/**
	 * Get incomingOoutgoing
	 * @return string
	 */
	public function getIncomingOoutgoing()
	{
		return $this->incomingOoutgoing;
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