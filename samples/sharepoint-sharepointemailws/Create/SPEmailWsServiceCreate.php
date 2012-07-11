<?php
/**
 * Class file for SPEmailWsServiceCreate
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsServiceCreate
 * @date 06/07/2012
 */
class SPEmailWsServiceCreate extends SPEmailWsWsdlClass
{
	/**
	 * Method to call CreateContact
	 * @uses SPEmailWsWsdlClass::getSoapClient()
	 * @uses SPEmailWsWsdlClass::setResult()
	 * @uses SPEmailWsWsdlClass::getResult()
	 * @uses SPEmailWsWsdlClass::saveLastError()
	 * @uses SPEmailWsTypeCreateContact::getAlias()
	 * @uses SPEmailWsTypeCreateContact::getFirstName()
	 * @uses SPEmailWsTypeCreateContact::getLastName()
	 * @uses SPEmailWsTypeCreateContact::getForwardingEmail()
	 * @uses SPEmailWsTypeCreateContact::getFlags()
	 * @param SPEmailWsTypeCreateContact CreateContact
	 * @return SPEmailWsTypeCreateContactResponse
	 */
	public function CreateContact(SPEmailWsTypeCreateContact $_SPEmailWsTypeCreateContact)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateContact(array('Alias'=>$_SPEmailWsTypeCreateContact->getAlias(),'FirstName'=>$_SPEmailWsTypeCreateContact->getFirstName(),'LastName'=>$_SPEmailWsTypeCreateContact->getLastName(),'ForwardingEmail'=>$_SPEmailWsTypeCreateContact->getForwardingEmail(),'Flags'=>$_SPEmailWsTypeCreateContact->getFlags())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateDistributionGroup
	 * @uses SPEmailWsWsdlClass::getSoapClient()
	 * @uses SPEmailWsWsdlClass::setResult()
	 * @uses SPEmailWsWsdlClass::getResult()
	 * @uses SPEmailWsWsdlClass::saveLastError()
	 * @uses SPEmailWsTypeCreateDistributionGroup::getAlias()
	 * @uses SPEmailWsTypeCreateDistributionGroup::getName()
	 * @uses SPEmailWsTypeCreateDistributionGroup::getDescription()
	 * @uses SPEmailWsTypeCreateDistributionGroup::getContactCN()
	 * @uses SPEmailWsTypeCreateDistributionGroup::getInfo()
	 * @uses SPEmailWsTypeCreateDistributionGroup::getFlags()
	 * @param SPEmailWsTypeCreateDistributionGroup CreateDistributionGroup
	 * @return SPEmailWsTypeCreateDistributionGroupResponse
	 */
	public function CreateDistributionGroup(SPEmailWsTypeCreateDistributionGroup $_SPEmailWsTypeCreateDistributionGroup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateDistributionGroup(array('Alias'=>$_SPEmailWsTypeCreateDistributionGroup->getAlias(),'Name'=>$_SPEmailWsTypeCreateDistributionGroup->getName(),'Description'=>$_SPEmailWsTypeCreateDistributionGroup->getDescription(),'ContactCN'=>$_SPEmailWsTypeCreateDistributionGroup->getContactCN(),'Info'=>$_SPEmailWsTypeCreateDistributionGroup->getInfo(),'Flags'=>$_SPEmailWsTypeCreateDistributionGroup->getFlags())));
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
	 * @return SPEmailWsTypeCreateDistributionGroupResponse
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