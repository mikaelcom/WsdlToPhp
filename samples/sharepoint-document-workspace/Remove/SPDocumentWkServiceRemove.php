<?php
/**
 * Class file for SPDocumentWkServiceRemove
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkServiceRemove
 * @date 06/07/2012
 */
class SPDocumentWkServiceRemove extends SPDocumentWkWsdlClass
{
	/**
	 * Method to call RemoveDwsUser
	 * @uses SPDocumentWkWsdlClass::getSoapClient()
	 * @uses SPDocumentWkWsdlClass::setResult()
	 * @uses SPDocumentWkWsdlClass::getResult()
	 * @uses SPDocumentWkWsdlClass::saveLastError()
	 * @uses SPDocumentWkTypeRemoveDwsUser::getId()
	 * @param SPDocumentWkTypeRemoveDwsUser RemoveDwsUser
	 * @return SPDocumentWkTypeRemoveDwsUserResponse
	 */
	public function RemoveDwsUser(SPDocumentWkTypeRemoveDwsUser $_SPDocumentWkTypeRemoveDwsUser)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveDwsUser(array('id'=>$_SPDocumentWkTypeRemoveDwsUser->getId())));
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
	 * @return SPDocumentWkTypeRemoveDwsUserResponse
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