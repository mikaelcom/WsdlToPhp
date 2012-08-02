<?php
/**
 * Class file for LifePicsTypeGetUserIDPartnerSourceResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetUserIDPartnerSourceResponse
 * @date 02/08/2012
 */
class LifePicsTypeGetUserIDPartnerSourceResponse extends LifePicsWsdlClass
{
	/**
	 * The GetUserIDPartnerSourceResult
	 * @var LifePicsTypeGetUserIDPartnerSourceResult
	 */
	public $GetUserIDPartnerSourceResult;
	/**
	 * Constructor
	 * @param LifePicsTypeGetUserIDPartnerSourceResult GetUserIDPartnerSourceResult
	 * @return LifePicsTypeGetUserIDPartnerSourceResponse
	 */
	public function __construct($_GetUserIDPartnerSourceResult = null)
	{
		parent::__construct(array('GetUserIDPartnerSourceResult'=>$_GetUserIDPartnerSourceResult));
	}
	/**
	 * Set GetUserIDPartnerSourceResult
	 * @param GetUserIDPartnerSourceResult GetUserIDPartnerSourceResult
	 * @return GetUserIDPartnerSourceResult
	 */
	public function setGetUserIDPartnerSourceResult($_GetUserIDPartnerSourceResult)
	{
		return ($this->GetUserIDPartnerSourceResult = $_GetUserIDPartnerSourceResult);
	}
	/**
	 * Get GetUserIDPartnerSourceResult
	 * @return LifePicsTypeGetUserIDPartnerSourceResult
	 */
	public function getGetUserIDPartnerSourceResult()
	{
		return $this->GetUserIDPartnerSourceResult;
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