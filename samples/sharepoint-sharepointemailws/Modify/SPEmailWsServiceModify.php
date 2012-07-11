<?php
/**
 * Class file for SPEmailWsServiceModify
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsServiceModify
 * @date 06/07/2012
 */
class SPEmailWsServiceModify extends SPEmailWsWsdlClass
{
	/**
	 * Method to call ModifyContact
	 * @uses SPEmailWsWsdlClass::getSoapClient()
	 * @uses SPEmailWsWsdlClass::setResult()
	 * @uses SPEmailWsWsdlClass::getResult()
	 * @uses SPEmailWsWsdlClass::saveLastError()
	 * @uses SPEmailWsTypeModifyContact::getOldAlias()
	 * @uses SPEmailWsTypeModifyContact::getNewAlias()
	 * @uses SPEmailWsTypeModifyContact::getFirstName()
	 * @uses SPEmailWsTypeModifyContact::getLastName()
	 * @uses SPEmailWsTypeModifyContact::getForwardingEmail()
	 * @uses SPEmailWsTypeModifyContact::getFlags()
	 * @param SPEmailWsTypeModifyContact ModifyContact
	 * @return SPEmailWsTypeModifyContactResponse
	 */
	public function ModifyContact(SPEmailWsTypeModifyContact $_SPEmailWsTypeModifyContact)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ModifyContact(array('OldAlias'=>$_SPEmailWsTypeModifyContact->getOldAlias(),'NewAlias'=>$_SPEmailWsTypeModifyContact->getNewAlias(),'FirstName'=>$_SPEmailWsTypeModifyContact->getFirstName(),'LastName'=>$_SPEmailWsTypeModifyContact->getLastName(),'ForwardingEmail'=>$_SPEmailWsTypeModifyContact->getForwardingEmail(),'Flags'=>$_SPEmailWsTypeModifyContact->getFlags())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ModifyDistributionGroup
	 * @uses SPEmailWsWsdlClass::getSoapClient()
	 * @uses SPEmailWsWsdlClass::setResult()
	 * @uses SPEmailWsWsdlClass::getResult()
	 * @uses SPEmailWsWsdlClass::saveLastError()
	 * @uses SPEmailWsTypeModifyDistributionGroup::getAlias()
	 * @uses SPEmailWsTypeModifyDistributionGroup::getName()
	 * @uses SPEmailWsTypeModifyDistributionGroup::getDescription()
	 * @uses SPEmailWsTypeModifyDistributionGroup::getContactCN()
	 * @uses SPEmailWsTypeModifyDistributionGroup::getInfo()
	 * @uses SPEmailWsTypeModifyDistributionGroup::getFlags()
	 * @param SPEmailWsTypeModifyDistributionGroup ModifyDistributionGroup
	 * @return SPEmailWsTypeModifyDistributionGroupResponse
	 */
	public function ModifyDistributionGroup(SPEmailWsTypeModifyDistributionGroup $_SPEmailWsTypeModifyDistributionGroup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ModifyDistributionGroup(array('Alias'=>$_SPEmailWsTypeModifyDistributionGroup->getAlias(),'Name'=>$_SPEmailWsTypeModifyDistributionGroup->getName(),'Description'=>$_SPEmailWsTypeModifyDistributionGroup->getDescription(),'ContactCN'=>$_SPEmailWsTypeModifyDistributionGroup->getContactCN(),'Info'=>$_SPEmailWsTypeModifyDistributionGroup->getInfo(),'Flags'=>$_SPEmailWsTypeModifyDistributionGroup->getFlags())));
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
	 * @return SPEmailWsTypeModifyDistributionGroupResponse
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