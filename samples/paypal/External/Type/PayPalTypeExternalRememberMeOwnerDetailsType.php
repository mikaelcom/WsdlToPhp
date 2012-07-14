<?php
/**
 * Class file for PayPalTypeExternalRememberMeOwnerDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeExternalRememberMeOwnerDetailsType
 * Documentation : E-mail address or secure merchant account ID of merchant to associate with new external remember-me.
 * @date 14/07/2012
 */
class PayPalTypeExternalRememberMeOwnerDetailsType extends PayPalWsdlClass
{
	/**
	 * The ExternalRememberMeOwnerIDType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : A discriminant that tells SetEC what kind of data the ExternalRememberMeOwnerID parameter contains. Currently, the owner must be either the API actor or omitted/none. In the future, we may allow the owner to be a 3rd party merchant account. Possible values are: None, ignore the ExternalRememberMeOwnerID. An empty value for this field also signifies None. Email, the owner ID is an email address SecureMerchantAccountID, the owner id is a string representing the secure merchant account ID
	 * @var string
	 */
	public $ExternalRememberMeOwnerIDType;
	/**
	 * The ExternalRememberMeOwnerID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : When opting in to bypass login via remember me, this parameter specifies the merchant account associated with the remembered login. Currentl, the owner must be either the API actor or omitted/none. In the future, we may allow the owner to be a 3rd party merchant account. If the Owner ID Type field is not present or "None", this parameter is ignored.
	 * @var string
	 */
	public $ExternalRememberMeOwnerID;
	/**
	 * Constructor
	 * @param string ExternalRememberMeOwnerIDType
	 * @param string ExternalRememberMeOwnerID
	 * @return PayPalTypeExternalRememberMeOwnerDetailsType
	 */
	public function __construct($_ExternalRememberMeOwnerIDType = null,$_ExternalRememberMeOwnerID = null)
	{
		parent::__construct(array('ExternalRememberMeOwnerIDType'=>$_ExternalRememberMeOwnerIDType,'ExternalRememberMeOwnerID'=>$_ExternalRememberMeOwnerID));
	}
	/**
	 * Set ExternalRememberMeOwnerIDType
	 * @param string ExternalRememberMeOwnerIDType
	 * @return string
	 */
	public function setExternalRememberMeOwnerIDType($_ExternalRememberMeOwnerIDType)
	{
		return ($this->ExternalRememberMeOwnerIDType = $_ExternalRememberMeOwnerIDType);
	}
	/**
	 * Get ExternalRememberMeOwnerIDType
	 * @return string
	 */
	public function getExternalRememberMeOwnerIDType()
	{
		return $this->ExternalRememberMeOwnerIDType;
	}
	/**
	 * Set ExternalRememberMeOwnerID
	 * @param string ExternalRememberMeOwnerID
	 * @return string
	 */
	public function setExternalRememberMeOwnerID($_ExternalRememberMeOwnerID)
	{
		return ($this->ExternalRememberMeOwnerID = $_ExternalRememberMeOwnerID);
	}
	/**
	 * Get ExternalRememberMeOwnerID
	 * @return string
	 */
	public function getExternalRememberMeOwnerID()
	{
		return $this->ExternalRememberMeOwnerID;
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