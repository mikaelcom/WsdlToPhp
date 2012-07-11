<?php
/**
 * Class file for XiInsiderTypeRelationship
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeRelationship
 * @date 08/07/2012
 */
class XiInsiderTypeRelationship extends XiInsiderTypeCommon
{
	/**
	 * The IsDirector
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsDirector;
	/**
	 * The IsOfficer
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsOfficer;
	/**
	 * The OfficerTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OfficerTitle;
	/**
	 * The IsTenPercentOwner
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsTenPercentOwner;
	/**
	 * The IsOther
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsOther;
	/**
	 * Constructor
	 * @param boolean IsDirector
	 * @param boolean IsOfficer
	 * @param string OfficerTitle
	 * @param boolean IsTenPercentOwner
	 * @param boolean IsOther
	 * @return XiInsiderTypeRelationship
	 */
	public function __construct($_IsDirector,$_IsOfficer,$_OfficerTitle = null,$_IsTenPercentOwner,$_IsOther)
	{
		XiInsiderWsdlClass::__construct(array('IsDirector'=>$_IsDirector,'IsOfficer'=>$_IsOfficer,'OfficerTitle'=>$_OfficerTitle,'IsTenPercentOwner'=>$_IsTenPercentOwner,'IsOther'=>$_IsOther));
	}
	/**
	 * Set IsDirector
	 * @param boolean IsDirector
	 * @return boolean
	 */
	public function setIsDirector($_IsDirector)
	{
		return ($this->IsDirector = $_IsDirector);
	}
	/**
	 * Get IsDirector
	 * @return boolean
	 */
	public function getIsDirector()
	{
		return $this->IsDirector;
	}
	/**
	 * Set IsOfficer
	 * @param boolean IsOfficer
	 * @return boolean
	 */
	public function setIsOfficer($_IsOfficer)
	{
		return ($this->IsOfficer = $_IsOfficer);
	}
	/**
	 * Get IsOfficer
	 * @return boolean
	 */
	public function getIsOfficer()
	{
		return $this->IsOfficer;
	}
	/**
	 * Set OfficerTitle
	 * @param string OfficerTitle
	 * @return string
	 */
	public function setOfficerTitle($_OfficerTitle)
	{
		return ($this->OfficerTitle = $_OfficerTitle);
	}
	/**
	 * Get OfficerTitle
	 * @return string
	 */
	public function getOfficerTitle()
	{
		return $this->OfficerTitle;
	}
	/**
	 * Set IsTenPercentOwner
	 * @param boolean IsTenPercentOwner
	 * @return boolean
	 */
	public function setIsTenPercentOwner($_IsTenPercentOwner)
	{
		return ($this->IsTenPercentOwner = $_IsTenPercentOwner);
	}
	/**
	 * Get IsTenPercentOwner
	 * @return boolean
	 */
	public function getIsTenPercentOwner()
	{
		return $this->IsTenPercentOwner;
	}
	/**
	 * Set IsOther
	 * @param boolean IsOther
	 * @return boolean
	 */
	public function setIsOther($_IsOther)
	{
		return ($this->IsOther = $_IsOther);
	}
	/**
	 * Get IsOther
	 * @return boolean
	 */
	public function getIsOther()
	{
		return $this->IsOther;
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