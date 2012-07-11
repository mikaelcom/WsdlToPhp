<?php
/**
 * Class file for EccVideoMsnTypeGetExtendedVideo
 * @date 03/07/2012
 */
/**
 * Class EccVideoMsnTypeGetExtendedVideo
 * @date 03/07/2012
 */
class EccVideoMsnTypeGetExtendedVideo extends EccVideoMsnWsdlClass
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
	 * The Keyword
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Keyword;
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
	 * @param string Keyword
	 * @param string Include
	 * @param string Exclude
	 * @return EccVideoMsnTypeGetExtendedVideo
	 */
	public function __construct($_KeyID = null,$_DomainID = null,$_Keyword = null,$_Include = null,$_Exclude = null)
	{
		parent::__construct(array('KeyID'=>$_KeyID,'DomainID'=>$_DomainID,'Keyword'=>$_Keyword,'Include'=>$_Include,'Exclude'=>$_Exclude));
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