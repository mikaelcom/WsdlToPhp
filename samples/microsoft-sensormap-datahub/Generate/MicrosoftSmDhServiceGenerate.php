<?php
/**
 * Class file for MicrosoftSmDhServiceGenerate
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhServiceGenerate
 * @date 05/07/2012
 */
class MicrosoftSmDhServiceGenerate extends MicrosoftSmDhWsdlClass
{
	/**
	 * Method to call GenerateLogMessage
	 * Meta informations :
	 * 	- documentation : Event Log
	 * @uses MicrosoftSmDhWsdlClass::getSoapClient()
	 * @uses MicrosoftSmDhWsdlClass::setResult()
	 * @uses MicrosoftSmDhWsdlClass::getResult()
	 * @uses MicrosoftSmDhWsdlClass::saveLastError()
	 * @param MicrosoftSmDhTypeGenerateLogMessage GenerateLogMessage
	 * @return MicrosoftSmDhTypeGenerateLogMessageResponse
	 */
	public function GenerateLogMessage(MicrosoftSmDhTypeGenerateLogMessage $_MicrosoftSmDhTypeGenerateLogMessage)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GenerateLogMessage(array()));
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
	 * @return MicrosoftSmDhTypeGenerateLogMessageResponse
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