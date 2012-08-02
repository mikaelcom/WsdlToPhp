<?php
/**
 * Class file for LifePicsServiceCreate
 * @date 02/08/2012
 */
/**
 * Class LifePicsServiceCreate
 * @date 02/08/2012
 */
class LifePicsServiceCreate extends LifePicsWsdlClass
{
	/**
	 * Method to call CreateAccount
	 * Meta informations :
	 * 	- documentation : Used to create a new user account
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeCreateAccountSendEmailEmailPromo::getSessionID()
	 * @uses LifePicsTypeCreateAccountSendEmailEmailPromo::getPartnerSourceID()
	 * @uses LifePicsTypeCreateAccountSendEmailEmailPromo::getMerchantID()
	 * @uses LifePicsTypeCreateAccountSendEmailEmailPromo::getEmailAddress()
	 * @uses LifePicsTypeCreateAccountSendEmailEmailPromo::getPassword()
	 * @uses LifePicsTypeCreateAccountSendEmailEmailPromo::getFirstName()
	 * @uses LifePicsTypeCreateAccountSendEmailEmailPromo::getSendEmail()
	 * @uses LifePicsTypeCreateAccountSendEmailEmailPromo::getAllowEmailPromos()
	 * @param LifePicsTypeCreateAccountSendEmailEmailPromo CreateAccountSendEmailEmailPromo
	 * @return LifePicsTypeCreateAccountSendEmailEmailPromoResponse
	 */
	public function CreateAccount(LifePicsTypeCreateAccountSendEmailEmailPromo $_LifePicsTypeCreateAccountSendEmailEmailPromo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateAccount(array('SessionID'=>$_LifePicsTypeCreateAccountSendEmailEmailPromo->getSessionID(),'PartnerSourceID'=>$_LifePicsTypeCreateAccountSendEmailEmailPromo->getPartnerSourceID(),'MerchantID'=>$_LifePicsTypeCreateAccountSendEmailEmailPromo->getMerchantID(),'EmailAddress'=>$_LifePicsTypeCreateAccountSendEmailEmailPromo->getEmailAddress(),'Password'=>$_LifePicsTypeCreateAccountSendEmailEmailPromo->getPassword(),'FirstName'=>$_LifePicsTypeCreateAccountSendEmailEmailPromo->getFirstName(),'SendEmail'=>$_LifePicsTypeCreateAccountSendEmailEmailPromo->getSendEmail(),'AllowEmailPromos'=>$_LifePicsTypeCreateAccountSendEmailEmailPromo->getAllowEmailPromos())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateAlbum
	 * Meta informations :
	 * 	- documentation : Used to create a new album for a user
	 * @uses LifePicsWsdlClass::getSoapClient()
	 * @uses LifePicsWsdlClass::setResult()
	 * @uses LifePicsWsdlClass::getResult()
	 * @uses LifePicsWsdlClass::saveLastError()
	 * @uses LifePicsTypeCreateAlbum::getSessionID()
	 * @uses LifePicsTypeCreateAlbum::getUserID()
	 * @uses LifePicsTypeCreateAlbum::getAlbumName()
	 * @param LifePicsTypeCreateAlbum CreateAlbum
	 * @return LifePicsTypeCreateAlbumResponse
	 */
	public function CreateAlbum(LifePicsTypeCreateAlbum $_LifePicsTypeCreateAlbum)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateAlbum(array('SessionID'=>$_LifePicsTypeCreateAlbum->getSessionID(),'UserID'=>$_LifePicsTypeCreateAlbum->getUserID(),'AlbumName'=>$_LifePicsTypeCreateAlbum->getAlbumName())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return LifePicsTypeCreateAccountSendEmailEmailPromoResponse|LifePicsTypeCreateAlbumResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>