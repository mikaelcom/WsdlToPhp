<?php
/**
 * Class file for XiLogosServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiLogosServiceGet
 * @date 08/07/2012
 */
class XiLogosServiceGet extends XiLogosWsdlClass
{
	/**
	 * Method to call GetLogo
	 * Meta informations :
	 * 	- documentation : Save an archive.
	 * @uses XiLogosWsdlClass::getSoapClient()
	 * @uses XiLogosWsdlClass::setResult()
	 * @uses XiLogosWsdlClass::getResult()
	 * @uses XiLogosWsdlClass::saveLastError()
	 * @uses XiLogosTypeGetLogo::getIdentifier()
	 * @uses XiLogosTypeGetLogo::getIdentifierType()
	 * @param XiLogosTypeGetLogo GetLogo
	 * @return XiLogosTypeGetLogoResponse
	 */
	public function GetLogo(XiLogosTypeGetLogo $_XiLogosTypeGetLogo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLogo(array('Identifier'=>$_XiLogosTypeGetLogo->getIdentifier(),'IdentifierType'=>$_XiLogosTypeGetLogo->getIdentifierType())));
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
	 * @return XiLogosTypeGetLogoResponse
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