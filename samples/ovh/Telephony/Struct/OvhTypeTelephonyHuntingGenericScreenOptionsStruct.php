<?php
/**
 * Class file for OvhTypeTelephonyHuntingGenericScreenOptionsStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyHuntingGenericScreenOptionsStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyHuntingGenericScreenOptionsStruct extends OvhWsdlClass
{
	/**
	 * The callForward
	 * @var string
	 */
	public $callForward;
	/**
	 * The voicemail
	 * @var string
	 */
	public $voicemail;
	/**
	 * The index
	 * @var string
	 */
	public $index;
	/**
	 * The timeout
	 * @var string
	 */
	public $timeout;
	/**
	 * Constructor
	 * @param string callForward
	 * @param string voicemail
	 * @param string index
	 * @param string timeout
	 * @return OvhTypeTelephonyHuntingGenericScreenOptionsStruct
	 */
	public function __construct($_callForward = null,$_voicemail = null,$_index = null,$_timeout = null)
	{
		parent::__construct(array('callForward'=>$_callForward,'voicemail'=>$_voicemail,'index'=>$_index,'timeout'=>$_timeout));
	}
	/**
	 * Set callForward
	 * @param string callForward
	 * @return string
	 */
	public function setCallForward($_callForward)
	{
		return ($this->callForward = $_callForward);
	}
	/**
	 * Get callForward
	 * @return string
	 */
	public function getCallForward()
	{
		return $this->callForward;
	}
	/**
	 * Set voicemail
	 * @param string voicemail
	 * @return string
	 */
	public function setVoicemail($_voicemail)
	{
		return ($this->voicemail = $_voicemail);
	}
	/**
	 * Get voicemail
	 * @return string
	 */
	public function getVoicemail()
	{
		return $this->voicemail;
	}
	/**
	 * Set index
	 * @param string index
	 * @return string
	 */
	public function setIndex($_index)
	{
		return ($this->index = $_index);
	}
	/**
	 * Get index
	 * @return string
	 */
	public function getIndex()
	{
		return $this->index;
	}
	/**
	 * Set timeout
	 * @param string timeout
	 * @return string
	 */
	public function setTimeout($_timeout)
	{
		return ($this->timeout = $_timeout);
	}
	/**
	 * Get timeout
	 * @return string
	 */
	public function getTimeout()
	{
		return $this->timeout;
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