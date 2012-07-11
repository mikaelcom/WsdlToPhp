<?php
/**
 * Class file for SPEmailWsServiceDelete
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsServiceDelete
 * @date 06/07/2012
 */
class SPEmailWsServiceDelete extends SPEmailWsWsdlClass
{
	/**
	 * Method to call DeleteContact
	 * @uses SPEmailWsWsdlClass::getSoapClient()
	 * @uses SPEmailWsWsdlClass::setResult()
	 * @uses SPEmailWsWsdlClass::getResult()
	 * @uses SPEmailWsWsdlClass::saveLastError()
	 * @uses SPEmailWsTypeDeleteContact::getAlias()
	 * @param SPEmailWsTypeDeleteContact DeleteContact
	 * @return SPEmailWsTypeDeleteContactResponse
	 */
	public function DeleteContact(SPEmailWsTypeDeleteContact $_SPEmailWsTypeDeleteContact)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteContact(array('Alias'=>$_SPEmailWsTypeDeleteContact->getAlias())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DeleteDistributionGroup
	 * @uses SPEmailWsWsdlClass::getSoapClient()
	 * @uses SPEmailWsWsdlClass::setResult()
	 * @uses SPEmailWsWsdlClass::getResult()
	 * @uses SPEmailWsWsdlClass::saveLastError()
	 * @uses SPEmailWsTypeDeleteDistributionGroup::getAlias()
	 * @uses SPEmailWsTypeDeleteDistributionGroup::getInfo()
	 * @param SPEmailWsTypeDeleteDistributionGroup DeleteDistributionGroup
	 * @return SPEmailWsTypeDeleteDistributionGroupResponse
	 */
	public function DeleteDistributionGroup(SPEmailWsTypeDeleteDistributionGroup $_SPEmailWsTypeDeleteDistributionGroup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteDistributionGroup(array('Alias'=>$_SPEmailWsTypeDeleteDistributionGroup->getAlias(),'Info'=>$_SPEmailWsTypeDeleteDistributionGroup->getInfo())));
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
	 * @return SPEmailWsTypeDeleteDistributionGroupResponse
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