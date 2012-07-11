<?php
/**
 * Class file for EbayTradingTypeGetUserResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetUserResponseType
 * Documentation : Contains the data retrieved by the call. User data is returned in a User object.
 * @date 04/07/2012
 */
class EbayTradingTypeGetUserResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The User
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the returned user data for the specified eBay user.
	 * @var EbayTradingTypeUserType
	 */
	public $User;
	/**
	 * Constructor
	 * @param EbayTradingTypeUserType User
	 * @return EbayTradingTypeGetUserResponseType
	 */
	public function __construct($_User = null)
	{
		EbayTradingWsdlClass::__construct(array('User'=>$_User));
	}
	/**
	 * Set User
	 * @param UserType User
	 * @return UserType
	 */
	public function setUser($_User)
	{
		return ($this->User = $_User);
	}
	/**
	 * Get User
	 * @return EbayTradingTypeUserType
	 */
	public function getUser()
	{
		return $this->User;
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