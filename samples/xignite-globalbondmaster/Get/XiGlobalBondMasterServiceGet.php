<?php
/**
 * Class file for XiGlobalBondMasterServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterServiceGet
 * @date 08/07/2012
 */
class XiGlobalBondMasterServiceGet extends XiGlobalBondMasterWsdlClass
{
	/**
	 * Method to call GetBondDescription
	 * Meta informations :
	 * 	- documentation : This web method provides basic details of a particular Bond matched by the identifier provided in the input. Supported identifiers include CUSIP, ISIN and Valoren number.
	 * @uses XiGlobalBondMasterWsdlClass::getSoapClient()
	 * @uses XiGlobalBondMasterWsdlClass::setResult()
	 * @uses XiGlobalBondMasterWsdlClass::getResult()
	 * @uses XiGlobalBondMasterWsdlClass::saveLastError()
	 * @uses XiGlobalBondMasterTypeGetBondDescription::getIdentifier()
	 * @uses XiGlobalBondMasterTypeGetBondDescription::getIdentifierType()
	 * @param XiGlobalBondMasterTypeGetBondDescription GetBondDescription
	 * @return XiGlobalBondMasterTypeGetBondDescriptionResponse
	 */
	public function GetBondDescription(XiGlobalBondMasterTypeGetBondDescription $_XiGlobalBondMasterTypeGetBondDescription)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBondDescription(array('Identifier'=>$_XiGlobalBondMasterTypeGetBondDescription->getIdentifier(),'IdentifierType'=>$_XiGlobalBondMasterTypeGetBondDescription->getIdentifierType())));
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
	 * @return XiGlobalBondMasterTypeGetBondDescriptionResponse
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