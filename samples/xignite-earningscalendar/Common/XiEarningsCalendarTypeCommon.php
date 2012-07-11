<?php
/**
 * Class file for XiEarningsCalendarTypeCommon
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeCommon
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeCommon extends XiEarningsCalendarWsdlClass
{
	/**
	 * The Outcome
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeOutcomeTypes
	 */
	public $Outcome;
	/**
	 * The Message
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Message;
	/**
	 * The Identity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identity;
	/**
	 * The Delay
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Delay;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeOutcomeTypes Outcome
	 * @param string Message
	 * @param string Identity
	 * @param double Delay
	 * @return XiEarningsCalendarTypeCommon
	 */
	public function __construct($_Outcome,$_Message = null,$_Identity = null,$_Delay)
	{
		parent::__construct(array('Outcome'=>$_Outcome,'Message'=>$_Message,'Identity'=>$_Identity,'Delay'=>$_Delay));
	}
	/**
	 * Set Outcome
	 * @param OutcomeTypes Outcome
	 * @return OutcomeTypes
	 */
	public function setOutcome($_Outcome)
	{
		return ($this->Outcome = XiEarningsCalendarTypeOutcomeTypes::valueIsValid($_Outcome)?$_Outcome:null);
	}
	/**
	 * Get Outcome
	 * @return XiEarningsCalendarTypeOutcomeTypes
	 */
	public function getOutcome()
	{
		return $this->Outcome;
	}
	/**
	 * Set Message
	 * @param string Message
	 * @return string
	 */
	public function setMessage($_Message)
	{
		return ($this->Message = $_Message);
	}
	/**
	 * Get Message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->Message;
	}
	/**
	 * Set Identity
	 * @param string Identity
	 * @return string
	 */
	public function setIdentity($_Identity)
	{
		return ($this->Identity = $_Identity);
	}
	/**
	 * Get Identity
	 * @return string
	 */
	public function getIdentity()
	{
		return $this->Identity;
	}
	/**
	 * Set Delay
	 * @param double Delay
	 * @return double
	 */
	public function setDelay($_Delay)
	{
		return ($this->Delay = $_Delay);
	}
	/**
	 * Get Delay
	 * @return double
	 */
	public function getDelay()
	{
		return $this->Delay;
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