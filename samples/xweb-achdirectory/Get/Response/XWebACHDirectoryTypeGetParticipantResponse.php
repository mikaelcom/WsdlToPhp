<?php
/**
 * Class file for XWebACHDirectoryTypeGetParticipantResponse
 * @date 09/07/2012
 */
/**
 * Class XWebACHDirectoryTypeGetParticipantResponse
 * @date 09/07/2012
 */
class XWebACHDirectoryTypeGetParticipantResponse extends XWebACHDirectoryWsdlClass
{
	/**
	 * The Participant
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebACHDirectoryTypeParticipant
	 */
	public $Participant;
	/**
	 * Constructor
	 * @param XWebACHDirectoryTypeParticipant Participant
	 * @return XWebACHDirectoryTypeGetParticipantResponse
	 */
	public function __construct($_Participant)
	{
		parent::__construct(array('Participant'=>$_Participant));
	}
	/**
	 * Set Participant
	 * @param Participant Participant
	 * @return Participant
	 */
	public function setParticipant($_Participant)
	{
		return ($this->Participant = $_Participant);
	}
	/**
	 * Get Participant
	 * @return XWebACHDirectoryTypeParticipant
	 */
	public function getParticipant()
	{
		return $this->Participant;
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