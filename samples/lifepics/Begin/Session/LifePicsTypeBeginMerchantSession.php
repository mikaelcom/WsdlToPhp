<?php
/**
 * Class file for LifePicsTypeBeginMerchantSession
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeBeginMerchantSession
 * @date 02/08/2012
 */
class LifePicsTypeBeginMerchantSession extends LifePicsWsdlClass
{
	/**
	 * The LocationID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LocationID;
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
	 * @param string LocationID
	 * @param string Password
	 * @return LifePicsTypeBeginMerchantSession
	 */
	public function __construct($_LocationID = null,$_Password = null)
	{
		parent::__construct(array('LocationID'=>$_LocationID,'Password'=>$_Password));
	}
	/**
	 * Set LocationID
	 * @param string LocationID
	 * @return string
	 */
	public function setLocationID($_LocationID)
	{
		return ($this->LocationID = $_LocationID);
	}
	/**
	 * Get LocationID
	 * @return string
	 */
	public function getLocationID()
	{
		return $this->LocationID;
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