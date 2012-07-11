<?php
/**
 * Class file for UsgsDownloadServiceInitiate
 * @date 08/07/2012
 */
/**
 * Class UsgsDownloadServiceInitiate
 * @date 08/07/2012
 */
class UsgsDownloadServiceInitiate extends UsgsDownloadWsdlClass
{
	/**
	 * Method to call initiateDownload
	 * @uses UsgsDownloadWsdlClass::getSoapClient()
	 * @uses UsgsDownloadWsdlClass::setResult()
	 * @uses UsgsDownloadWsdlClass::getResult()
	 * @uses UsgsDownloadWsdlClass::saveLastError()
	 * @uses UsgsDownloadTypeInitiateDownload::getSiz()
	 * @uses UsgsDownloadTypeInitiateDownload::getKey()
	 * @uses UsgsDownloadTypeInitiateDownload::getRas()
	 * @uses UsgsDownloadTypeInitiateDownload::getPfm()
	 * @uses UsgsDownloadTypeInitiateDownload::getImsurl()
	 * @uses UsgsDownloadTypeInitiateDownload::getMs()
	 * @uses UsgsDownloadTypeInitiateDownload::getAtt()
	 * @uses UsgsDownloadTypeInitiateDownload::getLay()
	 * @uses UsgsDownloadTypeInitiateDownload::getFid()
	 * @uses UsgsDownloadTypeInitiateDownload::getDlpre()
	 * @uses UsgsDownloadTypeInitiateDownload::getLft()
	 * @uses UsgsDownloadTypeInitiateDownload::getRgt()
	 * @uses UsgsDownloadTypeInitiateDownload::getTop()
	 * @uses UsgsDownloadTypeInitiateDownload::getBot()
	 * @uses UsgsDownloadTypeInitiateDownload::getWmd()
	 * @uses UsgsDownloadTypeInitiateDownload::getMur()
	 * @uses UsgsDownloadTypeInitiateDownload::getMcd()
	 * @uses UsgsDownloadTypeInitiateDownload::getMdf()
	 * @uses UsgsDownloadTypeInitiateDownload::getArc()
	 * @uses UsgsDownloadTypeInitiateDownload::getSde()
	 * @uses UsgsDownloadTypeInitiateDownload::getMsd()
	 * @uses UsgsDownloadTypeInitiateDownload::getZun()
	 * @uses UsgsDownloadTypeInitiateDownload::getPrj()
	 * @uses UsgsDownloadTypeInitiateDownload::getRsp()
	 * @uses UsgsDownloadTypeInitiateDownload::getBnd()
	 * @uses UsgsDownloadTypeInitiateDownload::getBndnm()
	 * @uses UsgsDownloadTypeInitiateDownload::getCsx()
	 * @uses UsgsDownloadTypeInitiateDownload::getCsy()
	 * @uses UsgsDownloadTypeInitiateDownload::getIcs()
	 * @uses UsgsDownloadTypeInitiateDownload::getPL()
	 * @uses UsgsDownloadTypeInitiateDownload::getMSU()
	 * @uses UsgsDownloadTypeInitiateDownload::getMSS()
	 * @uses UsgsDownloadTypeInitiateDownload::getMSL()
	 * @uses UsgsDownloadTypeInitiateDownload::getMSEA()
	 * @uses UsgsDownloadTypeInitiateDownload::getDLS()
	 * @uses UsgsDownloadTypeInitiateDownload::getFID()
	 * @uses UsgsDownloadTypeInitiateDownload::getARC()
	 * @uses UsgsDownloadTypeInitiateDownload::getDLA()
	 * @uses UsgsDownloadTypeInitiateDownload::getEIDL()
	 * @uses UsgsDownloadTypeInitiateDownload::getDB()
	 * @uses UsgsDownloadTypeInitiateDownload::getORIG()
	 * @uses UsgsDownloadTypeInitiateDownload::getBulkID()
	 * @param UsgsDownloadTypeInitiateDownload InitiateDownload
	 * @return UsgsDownloadTypeInitiateDownloadResponse
	 */
	public function initiateDownload(UsgsDownloadTypeInitiateDownload $_UsgsDownloadTypeInitiateDownload)
	{
		try
		{
			$this->setResult(self::getSoapClient()->initiateDownload(array('siz'=>$_UsgsDownloadTypeInitiateDownload->getSiz(),'key'=>$_UsgsDownloadTypeInitiateDownload->getKey(),'ras'=>$_UsgsDownloadTypeInitiateDownload->getRas(),'pfm'=>$_UsgsDownloadTypeInitiateDownload->getPfm(),'imsurl'=>$_UsgsDownloadTypeInitiateDownload->getImsurl(),'ms'=>$_UsgsDownloadTypeInitiateDownload->getMs(),'att'=>$_UsgsDownloadTypeInitiateDownload->getAtt(),'lay'=>$_UsgsDownloadTypeInitiateDownload->getLay(),'fid'=>$_UsgsDownloadTypeInitiateDownload->getFid(),'dlpre'=>$_UsgsDownloadTypeInitiateDownload->getDlpre(),'lft'=>$_UsgsDownloadTypeInitiateDownload->getLft(),'rgt'=>$_UsgsDownloadTypeInitiateDownload->getRgt(),'top'=>$_UsgsDownloadTypeInitiateDownload->getTop(),'bot'=>$_UsgsDownloadTypeInitiateDownload->getBot(),'wmd'=>$_UsgsDownloadTypeInitiateDownload->getWmd(),'mur'=>$_UsgsDownloadTypeInitiateDownload->getMur(),'mcd'=>$_UsgsDownloadTypeInitiateDownload->getMcd(),'mdf'=>$_UsgsDownloadTypeInitiateDownload->getMdf(),'arc'=>$_UsgsDownloadTypeInitiateDownload->getArc(),'sde'=>$_UsgsDownloadTypeInitiateDownload->getSde(),'msd'=>$_UsgsDownloadTypeInitiateDownload->getMsd(),'zun'=>$_UsgsDownloadTypeInitiateDownload->getZun(),'prj'=>$_UsgsDownloadTypeInitiateDownload->getPrj(),'rsp'=>$_UsgsDownloadTypeInitiateDownload->getRsp(),'bnd'=>$_UsgsDownloadTypeInitiateDownload->getBnd(),'bndnm'=>$_UsgsDownloadTypeInitiateDownload->getBndnm(),'csx'=>$_UsgsDownloadTypeInitiateDownload->getCsx(),'csy'=>$_UsgsDownloadTypeInitiateDownload->getCsy(),'ics'=>$_UsgsDownloadTypeInitiateDownload->getIcs(),'PL'=>$_UsgsDownloadTypeInitiateDownload->getPL(),'MSU'=>$_UsgsDownloadTypeInitiateDownload->getMSU(),'MSS'=>$_UsgsDownloadTypeInitiateDownload->getMSS(),'MSL'=>$_UsgsDownloadTypeInitiateDownload->getMSL(),'MSEA'=>$_UsgsDownloadTypeInitiateDownload->getMSEA(),'DLS'=>$_UsgsDownloadTypeInitiateDownload->getDLS(),'FID'=>$_UsgsDownloadTypeInitiateDownload->getFID(),'ARC'=>$_UsgsDownloadTypeInitiateDownload->getARC(),'DLA'=>$_UsgsDownloadTypeInitiateDownload->getDLA(),'EIDL'=>$_UsgsDownloadTypeInitiateDownload->getEIDL(),'DB'=>$_UsgsDownloadTypeInitiateDownload->getDB(),'ORIG'=>$_UsgsDownloadTypeInitiateDownload->getORIG(),'bulkID'=>$_UsgsDownloadTypeInitiateDownload->getBulkID())));
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
	 * @return UsgsDownloadTypeInitiateDownloadResponse
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