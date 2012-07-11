<?php
/**
 * Class file for XiInsiderTypeRptOwnerRelationship
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeRptOwnerRelationship
 * @date 08/07/2012
 */
class XiInsiderTypeRptOwnerRelationship extends XiInsiderWsdlClass
{
	/**
	 * The isDirector
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $isDirector;
	/**
	 * The isOfficer
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $isOfficer;
	/**
	 * The isTenPercentOwner
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $isTenPercentOwner;
	/**
	 * The isOther
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $isOther;
	/**
	 * The officerTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $officerTitle;
	/**
	 * The otherText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $otherText;
	/**
	 * Constructor
	 * @param int isDirector
	 * @param int isOfficer
	 * @param int isTenPercentOwner
	 * @param int isOther
	 * @param string officerTitle
	 * @param string otherText
	 * @return XiInsiderTypeRptOwnerRelationship
	 */
	public function __construct($_isDirector,$_isOfficer,$_isTenPercentOwner,$_isOther,$_officerTitle = null,$_otherText = null)
	{
		parent::__construct(array('isDirector'=>$_isDirector,'isOfficer'=>$_isOfficer,'isTenPercentOwner'=>$_isTenPercentOwner,'isOther'=>$_isOther,'officerTitle'=>$_officerTitle,'otherText'=>$_otherText));
	}
	/**
	 * Set isDirector
	 * @param int isDirector
	 * @return int
	 */
	public function setIsDirector($_isDirector)
	{
		return ($this->isDirector = $_isDirector);
	}
	/**
	 * Get isDirector
	 * @return int
	 */
	public function getIsDirector()
	{
		return $this->isDirector;
	}
	/**
	 * Set isOfficer
	 * @param int isOfficer
	 * @return int
	 */
	public function setIsOfficer($_isOfficer)
	{
		return ($this->isOfficer = $_isOfficer);
	}
	/**
	 * Get isOfficer
	 * @return int
	 */
	public function getIsOfficer()
	{
		return $this->isOfficer;
	}
	/**
	 * Set isTenPercentOwner
	 * @param int isTenPercentOwner
	 * @return int
	 */
	public function setIsTenPercentOwner($_isTenPercentOwner)
	{
		return ($this->isTenPercentOwner = $_isTenPercentOwner);
	}
	/**
	 * Get isTenPercentOwner
	 * @return int
	 */
	public function getIsTenPercentOwner()
	{
		return $this->isTenPercentOwner;
	}
	/**
	 * Set isOther
	 * @param int isOther
	 * @return int
	 */
	public function setIsOther($_isOther)
	{
		return ($this->isOther = $_isOther);
	}
	/**
	 * Get isOther
	 * @return int
	 */
	public function getIsOther()
	{
		return $this->isOther;
	}
	/**
	 * Set officerTitle
	 * @param string officerTitle
	 * @return string
	 */
	public function setOfficerTitle($_officerTitle)
	{
		return ($this->officerTitle = $_officerTitle);
	}
	/**
	 * Get officerTitle
	 * @return string
	 */
	public function getOfficerTitle()
	{
		return $this->officerTitle;
	}
	/**
	 * Set otherText
	 * @param string otherText
	 * @return string
	 */
	public function setOtherText($_otherText)
	{
		return ($this->otherText = $_otherText);
	}
	/**
	 * Get otherText
	 * @return string
	 */
	public function getOtherText()
	{
		return $this->otherText;
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