<?php
/**
 * Class file for DirectSmileServiceDelete
 * @date 02/08/2012
 */
/**
 * Class DirectSmileServiceDelete
 * @date 02/08/2012
 */
class DirectSmileServiceDelete extends DirectSmileWsdlClass
{
	/**
	 * Method to call DeleteJobByOrderID
	 * Meta informations :
	 * 	- documentation : Cancels an image order, requires a valid session.
	 * @uses DirectSmileWsdlClass::getSoapClient()
	 * @uses DirectSmileWsdlClass::setResult()
	 * @uses DirectSmileWsdlClass::getResult()
	 * @uses DirectSmileWsdlClass::saveLastError()
	 * @uses DirectSmileTypeDeleteJobByOrderID::getSessionID()
	 * @uses DirectSmileTypeDeleteJobByOrderID::getJobID()
	 * @param DirectSmileTypeDeleteJobByOrderID DeleteJobByOrderID
	 * @return DirectSmileTypeDeleteJobByOrderIDResponse
	 */
	public function DeleteJobByOrderID(DirectSmileTypeDeleteJobByOrderID $_DirectSmileTypeDeleteJobByOrderID)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteJobByOrderID(array('SessionID'=>$_DirectSmileTypeDeleteJobByOrderID->getSessionID(),'JobID'=>$_DirectSmileTypeDeleteJobByOrderID->getJobID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteAllByAcccountID
	 * Meta informations :
	 * 	- documentation : Cancels all running jobs for the requesting account, requires a valid session.
	 * @uses DirectSmileWsdlClass::getSoapClient()
	 * @uses DirectSmileWsdlClass::setResult()
	 * @uses DirectSmileWsdlClass::getResult()
	 * @uses DirectSmileWsdlClass::saveLastError()
	 * @uses DirectSmileTypeDeleteAllByAcccountID::getSessionID()
	 * @param DirectSmileTypeDeleteAllByAcccountID DeleteAllByAcccountID
	 * @return DirectSmileTypeDeleteAllByAcccountIDResponse
	 */
	public function DeleteAllByAcccountID(DirectSmileTypeDeleteAllByAcccountID $_DirectSmileTypeDeleteAllByAcccountID)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteAllByAcccountID(array('SessionID'=>$_DirectSmileTypeDeleteAllByAcccountID->getSessionID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteJobByOrderIDDSM
	 * Meta informations :
	 * 	- documentation : DirectSmile internal method, simular to the CancelOrder method.
	 * @uses DirectSmileWsdlClass::getSoapClient()
	 * @uses DirectSmileWsdlClass::setResult()
	 * @uses DirectSmileWsdlClass::getResult()
	 * @uses DirectSmileWsdlClass::saveLastError()
	 * @uses DirectSmileTypeCancelJobOrderDSM::getAuthenticationCode()
	 * @uses DirectSmileTypeCancelJobOrderDSM::getJobID()
	 * @param DirectSmileTypeCancelJobOrderDSM CancelJobOrderDSM
	 * @return DirectSmileTypeCancelJobOrderDSMResponse
	 */
	public function DeleteJobByOrderIDDSM(DirectSmileTypeCancelJobOrderDSM $_DirectSmileTypeCancelJobOrderDSM)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteJobByOrderIDDSM(array('AuthenticationCode'=>$_DirectSmileTypeCancelJobOrderDSM->getAuthenticationCode(),'JobID'=>$_DirectSmileTypeCancelJobOrderDSM->getJobID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteDocOrderByDocID
	 * Meta informations :
	 * 	- documentation : Sends a cancel request to the backend, to cancel the processing of a specified document. Requires a valid session.
	 * @uses DirectSmileWsdlClass::getSoapClient()
	 * @uses DirectSmileWsdlClass::setResult()
	 * @uses DirectSmileWsdlClass::getResult()
	 * @uses DirectSmileWsdlClass::saveLastError()
	 * @uses DirectSmileTypeDeleteDocOrderByDocID::getSessionID()
	 * @uses DirectSmileTypeDeleteDocOrderByDocID::getKey()
	 * @param DirectSmileTypeDeleteDocOrderByDocID DeleteDocOrderByDocID
	 * @return DirectSmileTypeDeleteDocOrderByDocIDResponse
	 */
	public function DeleteDocOrderByDocID(DirectSmileTypeDeleteDocOrderByDocID $_DirectSmileTypeDeleteDocOrderByDocID)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteDocOrderByDocID(array('SessionID'=>$_DirectSmileTypeDeleteDocOrderByDocID->getSessionID(),'Key'=>$_DirectSmileTypeDeleteDocOrderByDocID->getKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteDocOrderByDocIDDSM
	 * Meta informations :
	 * 	- documentation : DirectSmile internal method, simular to the CancelDoc.
	 * @uses DirectSmileWsdlClass::getSoapClient()
	 * @uses DirectSmileWsdlClass::setResult()
	 * @uses DirectSmileWsdlClass::getResult()
	 * @uses DirectSmileWsdlClass::saveLastError()
	 * @uses DirectSmileTypeDeleteDocOrderByDocIDDSM::getAuthenticationCode()
	 * @uses DirectSmileTypeDeleteDocOrderByDocIDDSM::getKey()
	 * @param DirectSmileTypeDeleteDocOrderByDocIDDSM DeleteDocOrderByDocIDDSM
	 * @return DirectSmileTypeDeleteDocOrderByDocIDDSMResponse
	 */
	public function DeleteDocOrderByDocIDDSM(DirectSmileTypeDeleteDocOrderByDocIDDSM $_DirectSmileTypeDeleteDocOrderByDocIDDSM)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteDocOrderByDocIDDSM(array('AuthenticationCode'=>$_DirectSmileTypeDeleteDocOrderByDocIDDSM->getAuthenticationCode(),'Key'=>$_DirectSmileTypeDeleteDocOrderByDocIDDSM->getKey())));
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
	 * @return DirectSmileTypeDeleteJobByOrderIDResponse|DirectSmileTypeDeleteAllByAcccountIDResponse|DirectSmileTypeCancelJobOrderDSMResponse|DirectSmileTypeDeleteDocOrderByDocIDResponse|DirectSmileTypeDeleteDocOrderByDocIDDSMResponse
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