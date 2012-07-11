<?php
/**
 * Class file for EccEmailPop3ServiceCheck
 * @date 03/07/2012
 */
/**
 * Class EccEmailPop3ServiceCheck
 * @date 03/07/2012
 */
class EccEmailPop3ServiceCheck extends EccEmailPop3WsdlClass
{
	/**
	 * Method to call CheckPOP3
	 * Meta informations :
	 * 	- documentation : Recieves e-mail from a POP3 server.
	 * @uses EccEmailPop3WsdlClass::getSoapClient()
	 * @uses EccEmailPop3WsdlClass::setResult()
	 * @uses EccEmailPop3WsdlClass::getResult()
	 * @uses EccEmailPop3WsdlClass::saveLastError()
	 * @uses EccEmailPop3TypeCheckPOP3::getKeyID()
	 * @uses EccEmailPop3TypeCheckPOP3::getDomainID()
	 * @uses EccEmailPop3TypeCheckPOP3::getServerName()
	 * @uses EccEmailPop3TypeCheckPOP3::getUserName()
	 * @uses EccEmailPop3TypeCheckPOP3::getPassword()
	 * @uses EccEmailPop3TypeCheckPOP3::getRetr()
	 * @param EccEmailPop3TypeCheckPOP3 CheckPOP3
	 * @return EccEmailPop3TypeCheckPOP3Response
	 */
	public function CheckPOP3(EccEmailPop3TypeCheckPOP3 $_EccEmailPop3TypeCheckPOP3)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CheckPOP3(array('KeyID'=>$_EccEmailPop3TypeCheckPOP3->getKeyID(),'DomainID'=>$_EccEmailPop3TypeCheckPOP3->getDomainID(),'ServerName'=>$_EccEmailPop3TypeCheckPOP3->getServerName(),'UserName'=>$_EccEmailPop3TypeCheckPOP3->getUserName(),'Password'=>$_EccEmailPop3TypeCheckPOP3->getPassword(),'Retr'=>$_EccEmailPop3TypeCheckPOP3->getRetr())));
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
	 * @return EccEmailPop3TypeCheckPOP3Response
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