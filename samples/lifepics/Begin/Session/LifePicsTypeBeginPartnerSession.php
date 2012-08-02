<?php
/**
 * Class file for LifePicsTypeBeginPartnerSession
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeBeginPartnerSession
 * @date 02/08/2012
 */
class LifePicsTypeBeginPartnerSession extends LifePicsWsdlClass
{
	/**
	 * The PartnerID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PartnerID;
	/**
	 * The Password
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Password;
	/**
	 * Constructor
	 * @param string PartnerID
	 * @param string Password
	 * @return LifePicsTypeBeginPartnerSession
	 */
	public function __construct($_PartnerID = null,$_Password = null)
	{
		parent::__construct(array('PartnerID'=>$_PartnerID,'Password'=>$_Password));
	}
	/**
	 * Set PartnerID
	 * @param string PartnerID
	 * @return string
	 */
	public function setPartnerID($_PartnerID)
	{
		return ($this->PartnerID = $_PartnerID);
	}
	/**
	 * Get PartnerID
	 * @return string
	 */
	public function getPartnerID()
	{
		return $this->PartnerID;
	}
	/**
	 * Set Password
	 * @param string Password
	 * @return string
	 */
	public function setPassword($_Password)
	{
		return ($this->Password = $_Password);
	}
	/**
	 * Get Password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->Password;
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