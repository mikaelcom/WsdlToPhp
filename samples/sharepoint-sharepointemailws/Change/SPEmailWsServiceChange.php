<?php
/**
 * Class file for SPEmailWsServiceChange
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsServiceChange
 * @date 06/07/2012
 */
class SPEmailWsServiceChange extends SPEmailWsWsdlClass
{
	/**
	 * Method to call ChangeUsersMembershipInDistributionGroup
	 * @uses SPEmailWsWsdlClass::getSoapClient()
	 * @uses SPEmailWsWsdlClass::setResult()
	 * @uses SPEmailWsWsdlClass::getResult()
	 * @uses SPEmailWsWsdlClass::saveLastError()
	 * @uses SPEmailWsTypeChangeUsersMembershipInDistributionGroup::getAlias()
	 * @uses SPEmailWsTypeChangeUsersMembershipInDistributionGroup::getAddNt4NameList()
	 * @uses SPEmailWsTypeChangeUsersMembershipInDistributionGroup::getDeleteNt4NameList()
	 * @uses SPEmailWsTypeChangeUsersMembershipInDistributionGroup::getDeleteAllCurrentMembers()
	 * @param SPEmailWsTypeChangeUsersMembershipInDistributionGroup ChangeUsersMembershipInDistributionGroup
	 * @return SPEmailWsTypeChangeUsersMembershipInDistributionGroupResponse
	 */
	public function ChangeUsersMembershipInDistributionGroup(SPEmailWsTypeChangeUsersMembershipInDistributionGroup $_SPEmailWsTypeChangeUsersMembershipInDistributionGroup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ChangeUsersMembershipInDistributionGroup(array('Alias'=>$_SPEmailWsTypeChangeUsersMembershipInDistributionGroup->getAlias(),'AddNt4NameList'=>$_SPEmailWsTypeChangeUsersMembershipInDistributionGroup->getAddNt4NameList(),'DeleteNt4NameList'=>$_SPEmailWsTypeChangeUsersMembershipInDistributionGroup->getDeleteNt4NameList(),'DeleteAllCurrentMembers'=>$_SPEmailWsTypeChangeUsersMembershipInDistributionGroup->getDeleteAllCurrentMembers())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ChangeContactsMembershipInDistributionGroup
	 * @uses SPEmailWsWsdlClass::getSoapClient()
	 * @uses SPEmailWsWsdlClass::setResult()
	 * @uses SPEmailWsWsdlClass::getResult()
	 * @uses SPEmailWsWsdlClass::saveLastError()
	 * @uses SPEmailWsTypeChangeContactsMembershipInDistributionGroup::getAlias()
	 * @uses SPEmailWsTypeChangeContactsMembershipInDistributionGroup::getAddListForContacts()
	 * @uses SPEmailWsTypeChangeContactsMembershipInDistributionGroup::getDeleteListForContacts()
	 * @uses SPEmailWsTypeChangeContactsMembershipInDistributionGroup::getDeleteAllCurrentMembers()
	 * @param SPEmailWsTypeChangeContactsMembershipInDistributionGroup ChangeContactsMembershipInDistributionGroup
	 * @return SPEmailWsTypeChangeContactsMembershipInDistributionGroupResponse
	 */
	public function ChangeContactsMembershipInDistributionGroup(SPEmailWsTypeChangeContactsMembershipInDistributionGroup $_SPEmailWsTypeChangeContactsMembershipInDistributionGroup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ChangeContactsMembershipInDistributionGroup(array('Alias'=>$_SPEmailWsTypeChangeContactsMembershipInDistributionGroup->getAlias(),'AddListForContacts'=>$_SPEmailWsTypeChangeContactsMembershipInDistributionGroup->getAddListForContacts(),'DeleteListForContacts'=>$_SPEmailWsTypeChangeContactsMembershipInDistributionGroup->getDeleteListForContacts(),'DeleteAllCurrentMembers'=>$_SPEmailWsTypeChangeContactsMembershipInDistributionGroup->getDeleteAllCurrentMembers())));
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
	 * @return SPEmailWsTypeChangeContactsMembershipInDistributionGroupResponse
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