<?php
/**
 * Class file for YMailTypeSetPopPref
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSetPopPref
 * @date 02/07/2012
 */
class YMailTypeSetPopPref extends YMailWsdlClass
{
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
	 * Constructor
	 * @param boolean popNoBulk
	 * @param boolean popBulkSubjectPrefix
	 * @return YMailTypeSetPopPref
	 */
	public function __construct($_popNoBulk = null,$_popBulkSubjectPrefix = null)
	{
		parent::__construct(array('popNoBulk'=>$_popNoBulk,'popBulkSubjectPrefix'=>$_popBulkSubjectPrefix));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>