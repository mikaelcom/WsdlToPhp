<?php
/**
 * Class file for MicrosoftSmDhServiceSanity
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhServiceSanity
 * @date 05/07/2012
 */
class MicrosoftSmDhServiceSanity extends MicrosoftSmDhWsdlClass
{
	/**
	 * Method to call Sanity
	 * Meta informations :
	 * 	- documentation : Sanity check
	 * @uses MicrosoftSmDhWsdlClass::getSoapClient()
	 * @uses MicrosoftSmDhWsdlClass::setResult()
	 * @uses MicrosoftSmDhWsdlClass::getResult()
	 * @uses MicrosoftSmDhWsdlClass::saveLastError()
	 * @param MicrosoftSmDhTypeSanity Sanity
	 * @return MicrosoftSmDhTypeSanityResponse
	 */
	public function Sanity(MicrosoftSmDhTypeSanity $_MicrosoftSmDhTypeSanity)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Sanity(array()));
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
	 * @return MicrosoftSmDhTypeSanityResponse
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