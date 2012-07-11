<?php
/**
 * Class file for SPEmailWsServiceRename
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsServiceRename
 * @date 06/07/2012
 */
class SPEmailWsServiceRename extends SPEmailWsWsdlClass
{
	/**
	 * Method to call RenameDistributionGroup
	 * @uses SPEmailWsWsdlClass::getSoapClient()
	 * @uses SPEmailWsWsdlClass::setResult()
	 * @uses SPEmailWsWsdlClass::getResult()
	 * @uses SPEmailWsWsdlClass::saveLastError()
	 * @uses SPEmailWsTypeRenameDistributionGroup::getOldAlias()
	 * @uses SPEmailWsTypeRenameDistributionGroup::getNewAlias()
	 * @uses SPEmailWsTypeRenameDistributionGroup::getInfo()
	 * @param SPEmailWsTypeRenameDistributionGroup RenameDistributionGroup
	 * @return SPEmailWsTypeRenameDistributionGroupResponse
	 */
	public function RenameDistributionGroup(SPEmailWsTypeRenameDistributionGroup $_SPEmailWsTypeRenameDistributionGroup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RenameDistributionGroup(array('OldAlias'=>$_SPEmailWsTypeRenameDistributionGroup->getOldAlias(),'NewAlias'=>$_SPEmailWsTypeRenameDistributionGroup->getNewAlias(),'Info'=>$_SPEmailWsTypeRenameDistributionGroup->getInfo())));
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
	 * @return SPEmailWsTypeRenameDistributionGroupResponse
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