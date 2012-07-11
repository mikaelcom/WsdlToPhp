<?php
/**
 * Class file for XWebACHDirectoryTypeDirectory
 * @date 09/07/2012
 */
/**
 * Class XWebACHDirectoryTypeDirectory
 * @date 09/07/2012
 */
class XWebACHDirectoryTypeDirectory extends XWebACHDirectoryWsdlClass
{
	/**
	 * The Participant
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebACHDirectoryTypeParticipant
	 */
	public $Participant;
	/**
	 * Constructor
	 * @param XWebACHDirectoryTypeParticipant Participant
	 * @return XWebACHDirectoryTypeDirectory
	 */
	public function __construct($_Participant = null)
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