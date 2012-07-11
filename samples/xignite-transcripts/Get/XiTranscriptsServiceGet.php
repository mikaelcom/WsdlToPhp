<?php
/**
 * Class file for XiTranscriptsServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiTranscriptsServiceGet
 * @date 08/07/2012
 */
class XiTranscriptsServiceGet extends XiTranscriptsWsdlClass
{
	/**
	 * Method to call GetAllTranscripts
	 * Meta informations :
	 * 	- documentation : Get all Seeking Alpha transcripts for a company.
	 * @uses XiTranscriptsWsdlClass::getSoapClient()
	 * @uses XiTranscriptsWsdlClass::setResult()
	 * @uses XiTranscriptsWsdlClass::getResult()
	 * @uses XiTranscriptsWsdlClass::saveLastError()
	 * @uses XiTranscriptsTypeGetAllTranscripts::getIdentifier()
	 * @uses XiTranscriptsTypeGetAllTranscripts::getIdentifierType()
	 * @param XiTranscriptsTypeGetAllTranscripts GetAllTranscripts
	 * @return XiTranscriptsTypeGetAllTranscriptsResponse
	 */
	public function GetAllTranscripts(XiTranscriptsTypeGetAllTranscripts $_XiTranscriptsTypeGetAllTranscripts)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAllTranscripts(array('Identifier'=>$_XiTranscriptsTypeGetAllTranscripts->getIdentifier(),'IdentifierType'=>$_XiTranscriptsTypeGetAllTranscripts->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestTranscript
	 * Meta informations :
	 * 	- documentation : Get the latest Seeking Alpha transcripts for a company.
	 * @uses XiTranscriptsWsdlClass::getSoapClient()
	 * @uses XiTranscriptsWsdlClass::setResult()
	 * @uses XiTranscriptsWsdlClass::getResult()
	 * @uses XiTranscriptsWsdlClass::saveLastError()
	 * @uses XiTranscriptsTypeGetLatestTranscript::getIdentifier()
	 * @uses XiTranscriptsTypeGetLatestTranscript::getIdentifierType()
	 * @param XiTranscriptsTypeGetLatestTranscript GetLatestTranscript
	 * @return XiTranscriptsTypeGetLatestTranscriptResponse
	 */
	public function GetLatestTranscript(XiTranscriptsTypeGetLatestTranscript $_XiTranscriptsTypeGetLatestTranscript)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestTranscript(array('Identifier'=>$_XiTranscriptsTypeGetLatestTranscript->getIdentifier(),'IdentifierType'=>$_XiTranscriptsTypeGetLatestTranscript->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPermittedContent
	 * Meta informations :
	 * 	- documentation : Get the content of a Seeking Alpha transcript for a company.
	 * @uses XiTranscriptsWsdlClass::getSoapClient()
	 * @uses XiTranscriptsWsdlClass::setResult()
	 * @uses XiTranscriptsWsdlClass::getResult()
	 * @uses XiTranscriptsWsdlClass::saveLastError()
	 * @uses XiTranscriptsTypeGetPermittedContent::getTranscriptURL()
	 * @param XiTranscriptsTypeGetPermittedContent GetPermittedContent
	 * @return XiTranscriptsTypeGetPermittedContentResponse
	 */
	public function GetPermittedContent(XiTranscriptsTypeGetPermittedContent $_XiTranscriptsTypeGetPermittedContent)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPermittedContent(array('TranscriptURL'=>$_XiTranscriptsTypeGetPermittedContent->getTranscriptURL())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestTranscripts
	 * Meta informations :
	 * 	- documentation : Get the most recently published transcripts.
	 * @uses XiTranscriptsWsdlClass::getSoapClient()
	 * @uses XiTranscriptsWsdlClass::setResult()
	 * @uses XiTranscriptsWsdlClass::getResult()
	 * @uses XiTranscriptsWsdlClass::saveLastError()
	 * @uses XiTranscriptsTypeGetLatestTranscripts::getCount()
	 * @param XiTranscriptsTypeGetLatestTranscripts GetLatestTranscripts
	 * @return XiTranscriptsTypeGetLatestTranscriptsResponse
	 */
	public function GetLatestTranscripts(XiTranscriptsTypeGetLatestTranscripts $_XiTranscriptsTypeGetLatestTranscripts)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestTranscripts(array('Count'=>$_XiTranscriptsTypeGetLatestTranscripts->getCount())));
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
	 * @return XiTranscriptsTypeGetLatestTranscriptsResponse
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