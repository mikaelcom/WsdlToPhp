<?php
/**
 * Class file for EccRssNewsTypeGetRSS
 * @date 03/07/2012
 */
/**
 * Class EccRssNewsTypeGetRSS
 * @date 03/07/2012
 */
class EccRssNewsTypeGetRSS extends EccRssNewsWsdlClass
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
	 * The Keyword
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Keyword;
	/**
	 * Constructor
	 * @param string KeyID
	 * @param string DomainID
	 * @param string Encoding
	 * @param string Keyword
	 * @return EccRssNewsTypeGetRSS
	 */
	public function __construct($_KeyID = null,$_DomainID = null,$_Encoding = null,$_Keyword = null)
	{
		parent::__construct(array('KeyID'=>$_KeyID,'DomainID'=>$_DomainID,'Encoding'=>$_Encoding,'Keyword'=>$_Keyword));
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
	 * Set Keyword
	 * @param string Keyword
	 * @return string
	 */
	public function setKeyword($_Keyword)
	{
		return ($this->Keyword = $_Keyword);
	}
	/**
	 * Get Keyword
	 * @return string
	 */
	public function getKeyword()
	{
		return $this->Keyword;
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