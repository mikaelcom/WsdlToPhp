<?php
/**
 * Class file for YMailTypeSetFeaturePref
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSetFeaturePref
 * @date 02/07/2012
 */
class YMailTypeSetFeaturePref extends YMailWsdlClass
{
	/**
	 * The soundNewMail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $soundNewMail;
	/**
	 * The mailCheckInterval
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $mailCheckInterval;
	/**
	 * The optInState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $optInState;
	/**
	 * Constructor
	 * @param string soundNewMail
	 * @param int mailCheckInterval
	 * @param string optInState
	 * @return YMailTypeSetFeaturePref
	 */
	public function __construct($_soundNewMail = null,$_mailCheckInterval = null,$_optInState = null)
	{
		parent::__construct(array('soundNewMail'=>$_soundNewMail,'mailCheckInterval'=>$_mailCheckInterval,'optInState'=>$_optInState));
	}
	/**
	 * Set soundNewMail
	 * @param string soundNewMail
	 * @return string
	 */
	public function setSoundNewMail($_soundNewMail)
	{
		return ($this->soundNewMail = $_soundNewMail);
	}
	/**
	 * Get soundNewMail
	 * @return string
	 */
	public function getSoundNewMail()
	{
		return $this->soundNewMail;
	}
	/**
	 * Set mailCheckInterval
	 * @param int mailCheckInterval
	 * @return int
	 */
	public function setMailCheckInterval($_mailCheckInterval)
	{
		return ($this->mailCheckInterval = $_mailCheckInterval);
	}
	/**
	 * Get mailCheckInterval
	 * @return int
	 */
	public function getMailCheckInterval()
	{
		return $this->mailCheckInterval;
	}
	/**
	 * Set optInState
	 * @param string optInState
	 * @return string
	 */
	public function setOptInState($_optInState)
	{
		return ($this->optInState = $_optInState);
	}
	/**
	 * Get optInState
	 * @return string
	 */
	public function getOptInState()
	{
		return $this->optInState;
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