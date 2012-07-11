<?php
/**
 * Class file for SOEmailValidationTypeEmailCorrectInfo
 * @date 08/07/2012
 */
/**
 * Class SOEmailValidationTypeEmailCorrectInfo
 * @date 08/07/2012
 */
class SOEmailValidationTypeEmailCorrectInfo extends SOEmailValidationWsdlClass
{
	/**
	 * The EmailAddressIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmailAddressIn;
	/**
	 * The EmailAddressOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmailAddressOut;
	/**
	 * Constructor
	 * @param string EmailAddressIn
	 * @param string EmailAddressOut
	 * @return SOEmailValidationTypeEmailCorrectInfo
	 */
	public function __construct($_EmailAddressIn = null,$_EmailAddressOut = null)
	{
		parent::__construct(array('EmailAddressIn'=>$_EmailAddressIn,'EmailAddressOut'=>$_EmailAddressOut));
	}
	/**
	 * Set EmailAddressIn
	 * @param string EmailAddressIn
	 * @return string
	 */
	public function setEmailAddressIn($_EmailAddressIn)
	{
		return ($this->EmailAddressIn = $_EmailAddressIn);
	}
	/**
	 * Get EmailAddressIn
	 * @return string
	 */
	public function getEmailAddressIn()
	{
		return $this->EmailAddressIn;
	}
	/**
	 * Set EmailAddressOut
	 * @param string EmailAddressOut
	 * @return string
	 */
	public function setEmailAddressOut($_EmailAddressOut)
	{
		return ($this->EmailAddressOut = $_EmailAddressOut);
	}
	/**
	 * Get EmailAddressOut
	 * @return string
	 */
	public function getEmailAddressOut()
	{
		return $this->EmailAddressOut;
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