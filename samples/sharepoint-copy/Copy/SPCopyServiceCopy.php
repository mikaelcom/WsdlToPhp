<?php
/**
 * Class file for SPCopyServiceCopy
 * @date 07/07/2012
 */
/**
 * Class SPCopyServiceCopy
 * @date 07/07/2012
 */
class SPCopyServiceCopy extends SPCopyWsdlClass
{
	/**
	 * Method to call CopyIntoItemsLocal
	 * @uses SPCopyWsdlClass::getSoapClient()
	 * @uses SPCopyWsdlClass::setResult()
	 * @uses SPCopyWsdlClass::getResult()
	 * @uses SPCopyWsdlClass::saveLastError()
	 * @uses SPCopyTypeCopyIntoItemsLocal::getSourceUrl()
	 * @uses SPCopyTypeCopyIntoItemsLocal::getDestinationUrls()
	 * @param SPCopyTypeCopyIntoItemsLocal CopyIntoItemsLocal
	 * @return SPCopyTypeCopyIntoItemsLocalResponse
	 */
	public function CopyIntoItemsLocal(SPCopyTypeCopyIntoItemsLocal $_SPCopyTypeCopyIntoItemsLocal)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CopyIntoItemsLocal(array('SourceUrl'=>$_SPCopyTypeCopyIntoItemsLocal->getSourceUrl(),'DestinationUrls'=>$_SPCopyTypeCopyIntoItemsLocal->getDestinationUrls())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CopyIntoItems
	 * @uses SPCopyWsdlClass::getSoapClient()
	 * @uses SPCopyWsdlClass::setResult()
	 * @uses SPCopyWsdlClass::getResult()
	 * @uses SPCopyWsdlClass::saveLastError()
	 * @uses SPCopyTypeCopyIntoItems::getSourceUrl()
	 * @uses SPCopyTypeCopyIntoItems::getDestinationUrls()
	 * @uses SPCopyTypeCopyIntoItems::getFields()
	 * @uses SPCopyTypeCopyIntoItems::getStream()
	 * @param SPCopyTypeCopyIntoItems CopyIntoItems
	 * @return SPCopyTypeCopyIntoItemsResponse
	 */
	public function CopyIntoItems(SPCopyTypeCopyIntoItems $_SPCopyTypeCopyIntoItems)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CopyIntoItems(array('SourceUrl'=>$_SPCopyTypeCopyIntoItems->getSourceUrl(),'DestinationUrls'=>$_SPCopyTypeCopyIntoItems->getDestinationUrls(),'Fields'=>$_SPCopyTypeCopyIntoItems->getFields(),'Stream'=>$_SPCopyTypeCopyIntoItems->getStream())));
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
	 * @return SPCopyTypeCopyIntoItemsResponse
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