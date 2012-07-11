<?php
/**
 * Class file for YMailTypeUserPopPref
 * @date 02/07/2012
 */
/**
 * Class YMailTypeUserPopPref
 * @date 02/07/2012
 */
class YMailTypeUserPopPref extends YMailWsdlClass
{
	/**
	 * The hasPOP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $hasPOP;
	/**
	 * The popNoBulk
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $popNoBulk;
	/**
	 * The popBulkSubjectPrefix
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $popBulkSubjectPrefix;
	/**
	 * The popSetupEligible
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $popSetupEligible;
	/**
	 * Constructor
	 * @param boolean hasPOP
	 * @param boolean popNoBulk
	 * @param boolean popBulkSubjectPrefix
	 * @param boolean popSetupEligible
	 * @return YMailTypeUserPopPref
	 */
	public function __construct($_hasPOP = null,$_popNoBulk = null,$_popBulkSubjectPrefix = null,$_popSetupEligible = null)
	{
		parent::__construct(array('hasPOP'=>$_hasPOP,'popNoBulk'=>$_popNoBulk,'popBulkSubjectPrefix'=>$_popBulkSubjectPrefix,'popSetupEligible'=>$_popSetupEligible));
	}
	/**
	 * Set hasPOP
	 * @param boolean hasPOP
	 * @return boolean
	 */
	public function setHasPOP($_hasPOP)
	{
		return ($this->hasPOP = $_hasPOP);
	}
	/**
	 * Get hasPOP
	 * @return boolean
	 */
	public function getHasPOP()
	{
		return $this->hasPOP;
	}
	/**
	 * Set popNoBulk
	 * @param boolean popNoBulk
	 * @return boolean
	 */
	public function setPopNoBulk($_popNoBulk)
	{
		return ($this->popNoBulk = $_popNoBulk);
	}
	/**
	 * Get popNoBulk
	 * @return boolean
	 */
	public function getPopNoBulk()
	{
		return $this->popNoBulk;
	}
	/**
	 * Set popBulkSubjectPrefix
	 * @param boolean popBulkSubjectPrefix
	 * @return boolean
	 */
	public function setPopBulkSubjectPrefix($_popBulkSubjectPrefix)
	{
		return ($this->popBulkSubjectPrefix = $_popBulkSubjectPrefix);
	}
	/**
	 * Get popBulkSubjectPrefix
	 * @return boolean
	 */
	public function getPopBulkSubjectPrefix()
	{
		return $this->popBulkSubjectPrefix;
	}
	/**
	 * Set popSetupEligible
	 * @param boolean popSetupEligible
	 * @return boolean
	 */
	public function setPopSetupEligible($_popSetupEligible)
	{
		return ($this->popSetupEligible = $_popSetupEligible);
	}
	/**
	 * Get popSetupEligible
	 * @return boolean
	 */
	public function getPopSetupEligible()
	{
		return $this->popSetupEligible;
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