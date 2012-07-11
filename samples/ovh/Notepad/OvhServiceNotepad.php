<?php
/**
 * Class file for OvhServiceNotepad
 * @date 02/07/2012
 */
/**
 * Class OvhServiceNotepad
 * @date 02/07/2012
 */
class OvhServiceNotepad extends OvhWsdlClass
{
	/**
	 * Method to call notepadSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeNotepadSet::getSession()
	 * @uses OvhTypeNotepadSet::getContent()
	 * @param OvhTypeNotepadSet NotepadSet
	 * @return OvhTypeNotepadSetResponse
	 */
	public function notepadSet(OvhTypeNotepadSet $_ovhTypeNotepadSet)
	{
		try
		{
			$this->setResult(new OvhTypeNotepadSetResponse(self::getSoapClient()->notepadSet($_ovhTypeNotepadSet->getSession(),$_ovhTypeNotepadSet->getContent())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call notepadGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeNotepadGet::getSession()
	 * @param OvhTypeNotepadGet NotepadGet
	 * @return OvhTypeNotepadGetResponse
	 */
	public function notepadGet(OvhTypeNotepadGet $_ovhTypeNotepadGet)
	{
		try
		{
			$this->setResult(new OvhTypeNotepadGetResponse(self::getSoapClient()->notepadGet($_ovhTypeNotepadGet->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call notepadAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeNotepadAdd::getSession()
	 * @uses OvhTypeNotepadAdd::getContent()
	 * @uses OvhTypeNotepadAdd::getOffset()
	 * @param OvhTypeNotepadAdd NotepadAdd
	 * @return OvhTypeNotepadAddResponse
	 */
	public function notepadAdd(OvhTypeNotepadAdd $_ovhTypeNotepadAdd)
	{
		try
		{
			$this->setResult(new OvhTypeNotepadAddResponse(self::getSoapClient()->notepadAdd($_ovhTypeNotepadAdd->getSession(),$_ovhTypeNotepadAdd->getContent(),$_ovhTypeNotepadAdd->getOffset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call notepadFlush
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeNotepadFlush::getSession()
	 * @param OvhTypeNotepadFlush NotepadFlush
	 * @return OvhTypeNotepadFlushResponse
	 */
	public function notepadFlush(OvhTypeNotepadFlush $_ovhTypeNotepadFlush)
	{
		try
		{
			$this->setResult(new OvhTypeNotepadFlushResponse(self::getSoapClient()->notepadFlush($_ovhTypeNotepadFlush->getSession())));
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
	 * @return OvhTypeNotepadFlushResponse
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