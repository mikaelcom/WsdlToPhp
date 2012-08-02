<?php
/**
 * Class file for DirectSmileServiceStart
 * @date 02/08/2012
 */
/**
 * Class DirectSmileServiceStart
 * @date 02/08/2012
 */
class DirectSmileServiceStart extends DirectSmileWsdlClass
{
	/**
	 * Method to call StartDoc
	 * Meta informations :
	 * 	- documentation : Sends a document rendering request to the Backend. This a an asynchronous call. The method returns a serialized DocumentStatusReport object.
	 * @uses DirectSmileWsdlClass::getSoapClient()
	 * @uses DirectSmileWsdlClass::setResult()
	 * @uses DirectSmileWsdlClass::getResult()
	 * @uses DirectSmileWsdlClass::saveLastError()
	 * @uses DirectSmileTypeStartDoc::getSid()
	 * @uses DirectSmileTypeStartDoc::getDocumentAlias()
	 * @uses DirectSmileTypeStartDoc::getMsgComXML()
	 * @param DirectSmileTypeStartDoc StartDoc
	 * @return DirectSmileTypeStartDocResponse
	 */
	public function StartDoc(DirectSmileTypeStartDoc $_DirectSmileTypeStartDoc)
	{
		try
		{
			$this->setResult(self::getSoapClient()->StartDoc(array('Sid'=>$_DirectSmileTypeStartDoc->getSid(),'DocumentAlias'=>$_DirectSmileTypeStartDoc->getDocumentAlias(),'MsgComXML'=>$_DirectSmileTypeStartDoc->getMsgComXML())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call StartDocPrio
	 * Meta informations :
	 * 	- documentation : Sends a document rendering request to the Backend. This a an asynchronous call. The method returns a serialized DocumentStatusReport object.
	 * @uses DirectSmileWsdlClass::getSoapClient()
	 * @uses DirectSmileWsdlClass::setResult()
	 * @uses DirectSmileWsdlClass::getResult()
	 * @uses DirectSmileWsdlClass::saveLastError()
	 * @uses DirectSmileTypeStartDocPrio::getSid()
	 * @uses DirectSmileTypeStartDocPrio::getDocumentAlias()
	 * @uses DirectSmileTypeStartDocPrio::getMsgComXML()
	 * @param DirectSmileTypeStartDocPrio StartDocPrio
	 * @return DirectSmileTypeStartDocPrioResponse
	 */
	public function StartDocPrio(DirectSmileTypeStartDocPrio $_DirectSmileTypeStartDocPrio)
	{
		try
		{
			$this->setResult(self::getSoapClient()->StartDocPrio(array('Sid'=>$_DirectSmileTypeStartDocPrio->getSid(),'DocumentAlias'=>$_DirectSmileTypeStartDocPrio->getDocumentAlias(),'MsgComXML'=>$_DirectSmileTypeStartDocPrio->getMsgComXML())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call StartDocDSM
	 * Meta informations :
	 * 	- documentation : DirectSmile internal method, simular to StartDoc.
	 * @uses DirectSmileWsdlClass::getSoapClient()
	 * @uses DirectSmileWsdlClass::setResult()
	 * @uses DirectSmileWsdlClass::getResult()
	 * @uses DirectSmileWsdlClass::saveLastError()
	 * @uses DirectSmileTypeStartDocDSM::getAuthenticationCode()
	 * @uses DirectSmileTypeStartDocDSM::getDocumentAlias()
	 * @uses DirectSmileTypeStartDocDSM::getMsgComXML()
	 * @param DirectSmileTypeStartDocDSM StartDocDSM
	 * @return DirectSmileTypeStartDocDSMResponse
	 */
	public function StartDocDSM(DirectSmileTypeStartDocDSM $_DirectSmileTypeStartDocDSM)
	{
		try
		{
			$this->setResult(self::getSoapClient()->StartDocDSM(array('AuthenticationCode'=>$_DirectSmileTypeStartDocDSM->getAuthenticationCode(),'DocumentAlias'=>$_DirectSmileTypeStartDocDSM->getDocumentAlias(),'MsgComXML'=>$_DirectSmileTypeStartDocDSM->getMsgComXML())));
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
	 * @return DirectSmileTypeStartDocResponse|DirectSmileTypeStartDocPrioResponse|DirectSmileTypeStartDocDSMResponse
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