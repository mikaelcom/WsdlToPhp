<?php
/**
 * Class file for YMailTypeFetchExternalMail
 * @date 02/07/2012
 */
/**
 * Class YMailTypeFetchExternalMail
 * @date 02/07/2012
 */
class YMailTypeFetchExternalMail extends YMailWsdlClass
{
	/**
	 * The externalAccounts
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeExternalAccount
	 */
	public $externalAccounts;
	/**
	 * Constructor
	 * @param YMailTypeExternalAccount externalAccounts
	 * @return YMailTypeFetchExternalMail
	 */
	public function __construct($_externalAccounts)
	{
		parent::__construct(array('externalAccounts'=>$_externalAccounts));
	}
	/**
	 * Set externalAccounts
	 * @param ExternalAccount externalAccounts
	 * @return ExternalAccount
	 */
	public function setExternalAccounts($_externalAccounts)
	{
		return ($this->externalAccounts = $_externalAccounts);
	}
	/**
	 * Get externalAccounts
	 * @return YMailTypeExternalAccount
	 */
	public function getExternalAccounts()
	{
		return $this->externalAccounts;
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