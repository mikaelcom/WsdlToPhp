<?php
/**
 * Class file for CdyneEmailServiceReturn
 * @date 02/07/2012
 */
/**
 * Class CdyneEmailServiceReturn
 * @date 02/07/2012
 */
class CdyneEmailServiceReturn extends CdyneEmailWsdlClass
{
	/**
	 * Method to call ReturnCodes
	 * Meta informations :
	 * 	- documentation : This function will give you all the possible code returns
	 * @uses CdyneEmailWsdlClass::getSoapClient()
	 * @uses CdyneEmailWsdlClass::setResult()
	 * @uses CdyneEmailWsdlClass::getResult()
	 * @uses CdyneEmailWsdlClass::saveLastError()
	 * @param CdyneEmailTypeReturnCodes ReturnCodes
	 * @return CdyneEmailTypeReturnCodesResponse
	 */
	public function ReturnCodes(CdyneEmailTypeReturnCodes $_CdyneEmailTypeReturnCodes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ReturnCodes(array()));
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
	 * @return CdyneEmailTypeReturnCodesResponse
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