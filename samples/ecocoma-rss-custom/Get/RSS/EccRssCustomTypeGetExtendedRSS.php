<?php
/**
 * Class file for EccRssCustomTypeGetExtendedRSS
 * @date 03/07/2012
 */
/**
 * Class EccRssCustomTypeGetExtendedRSS
 * @date 03/07/2012
 */
class EccRssCustomTypeGetExtendedRSS extends EccRssCustomWsdlClass
{
	/**
	 * The KeyID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $KeyID;
	/**
	 * The DomainID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DomainID;
	/**
	 * The Encoding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Encoding;
	/**
	 * The RssUrl1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RssUrl1;
	/**
	 * The RssUrl2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RssUrl2;
	/**
	 * The RssUrl3
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RssUrl3;
	/**
	 * The RssUrl4
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RssUrl4;
	/**
	 * The RssUrl5
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RssUrl5;
	/**
	 * The Include
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Include;
	/**
	 * The Exclude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Exclude;
	/**
	 * Constructor
	 * @param string KeyID
	 * @param string DomainID
	 * @param string Encoding
	 * @param string RssUrl1
	 * @param string RssUrl2
	 * @param string RssUrl3
	 * @param string RssUrl4
	 * @param string RssUrl5
	 * @param string Include
	 * @param string Exclude
	 * @return EccRssCustomTypeGetExtendedRSS
	 */
	public function __construct($_KeyID = null,$_DomainID = null,$_Encoding = null,$_RssUrl1 = null,$_RssUrl2 = null,$_RssUrl3 = null,$_RssUrl4 = null,$_RssUrl5 = null,$_Include = null,$_Exclude = null)
	{
		parent::__construct(array('KeyID'=>$_KeyID,'DomainID'=>$_DomainID,'Encoding'=>$_Encoding,'RssUrl1'=>$_RssUrl1,'RssUrl2'=>$_RssUrl2,'RssUrl3'=>$_RssUrl3,'RssUrl4'=>$_RssUrl4,'RssUrl5'=>$_RssUrl5,'Include'=>$_Include,'Exclude'=>$_Exclude));
	}
	/**
	 * Set KeyID
	 * @param string KeyID
	 * @return string
	 */
	public function setKeyID($_KeyID)
	{
		return ($this->KeyID = $_KeyID);
	}
	/**
	 * Get KeyID
	 * @return string
	 */
	public function getKeyID()
	{
		return $this->KeyID;
	}
	/**
	 * Set DomainID
	 * @param string DomainID
	 * @return string
	 */
	public function setDomainID($_DomainID)
	{
		return ($this->DomainID = $_DomainID);
	}
	/**
	 * Get DomainID
	 * @return string
	 */
	public function getDomainID()
	{
		return $this->DomainID;
	}
	/**
	 * Set Encoding
	 * @param string Encoding
	 * @return string
	 */
	public function setEncoding($_Encoding)
	{
		return ($this->Encoding = $_Encoding);
	}
	/**
	 * Get Encoding
	 * @return string
	 */
	public function getEncoding()
	{
		return $this->Encoding;
	}
	/**
	 * Set RssUrl1
	 * @param string RssUrl1
	 * @return string
	 */
	public function setRssUrl1($_RssUrl1)
	{
		return ($this->RssUrl1 = $_RssUrl1);
	}
	/**
	 * Get RssUrl1
	 * @return string
	 */
	public function getRssUrl1()
	{
		return $this->RssUrl1;
	}
	/**
	 * Set RssUrl2
	 * @param string RssUrl2
	 * @return string
	 */
	public function setRssUrl2($_RssUrl2)
	{
		return ($this->RssUrl2 = $_RssUrl2);
	}
	/**
	 * Get RssUrl2
	 * @return string
	 */
	public function getRssUrl2()
	{
		return $this->RssUrl2;
	}
	/**
	 * Set RssUrl3
	 * @param string RssUrl3
	 * @return string
	 */
	public function setRssUrl3($_RssUrl3)
	{
		return ($this->RssUrl3 = $_RssUrl3);
	}
	/**
	 * Get RssUrl3
	 * @return string
	 */
	public function getRssUrl3()
	{
		return $this->RssUrl3;
	}
	/**
	 * Set RssUrl4
	 * @param string RssUrl4
	 * @return string
	 */
	public function setRssUrl4($_RssUrl4)
	{
		return ($this->RssUrl4 = $_RssUrl4);
	}
	/**
	 * Get RssUrl4
	 * @return string
	 */
	public function getRssUrl4()
	{
		return $this->RssUrl4;
	}
	/**
	 * Set RssUrl5
	 * @param string RssUrl5
	 * @return string
	 */
	public function setRssUrl5($_RssUrl5)
	{
		return ($this->RssUrl5 = $_RssUrl5);
	}
	/**
	 * Get RssUrl5
	 * @return string
	 */
	public function getRssUrl5()
	{
		return $this->RssUrl5;
	}
	/**
	 * Set Include
	 * @param string Include
	 * @return string
	 */
	public function setInclude($_Include)
	{
		return ($this->Include = $_Include);
	}
	/**
	 * Get Include
	 * @return string
	 */
	public function getInclude()
	{
		return $this->Include;
	}
	/**
	 * Set Exclude
	 * @param string Exclude
	 * @return string
	 */
	public function setExclude($_Exclude)
	{
		return ($this->Exclude = $_Exclude);
	}
	/**
	 * Get Exclude
	 * @return string
	 */
	public function getExclude()
	{
		return $this->Exclude;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>