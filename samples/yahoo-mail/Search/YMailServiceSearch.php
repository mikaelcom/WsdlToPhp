<?php
/**
 * Class file for YMailServiceSearch
 * @date 02/07/2012
 */
/**
 * Class YMailServiceSearch
 * @date 02/07/2012
 */
class YMailServiceSearch extends YMailWsdlClass
{
	/**
	 * Method to call SearchMessages
	 * @uses YMailWsdlClass::getSoapClient()
	 * @uses YMailWsdlClass::setResult()
	 * @uses YMailWsdlClass::getResult()
	 * @uses YMailWsdlClass::saveLastError()
	 * @uses YMailTypeSearchMessages::getSortKey()
	 * @uses YMailTypeSearchMessages::getSortOrder()
	 * @uses YMailTypeSearchMessages::getSearch()
	 * @uses YMailTypeSearchMessages::getGroupBy()
	 * @uses YMailTypeSearchMessages::getStartMid()
	 * @uses YMailTypeSearchMessages::getStartInfo()
	 * @uses YMailTypeSearchMessages::getNumMid()
	 * @uses YMailTypeSearchMessages::getNumInfo()
	 * @param YMailTypeSearchMessages SearchMessages
	 * @return YMailTypeListMessagesResponse
	 */
	public function SearchMessages(YMailTypeSearchMessages $_YMailTypeSearchMessages)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchMessages(array('sortKey'=>$_YMailTypeSearchMessages->getSortKey(),'sortOrder'=>$_YMailTypeSearchMessages->getSortOrder(),'search'=>$_YMailTypeSearchMessages->getSearch(),'groupBy'=>$_YMailTypeSearchMessages->getGroupBy(),'startMid'=>$_YMailTypeSearchMessages->getStartMid(),'startInfo'=>$_YMailTypeSearchMessages->getStartInfo(),'numMid'=>$_YMailTypeSearchMessages->getNumMid(),'numInfo'=>$_YMailTypeSearchMessages->getNumInfo())));
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
	 * @return YMailTypeListMessagesResponse
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