<?php
/**
 * Class file for XiFundDataTypeDocumentURL
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeDocumentURL
 * @date 08/07/2012
 */
class XiFundDataTypeDocumentURL extends XiFundDataWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Type;
	/**
	 * The URL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $URL;
	/**
	 * Constructor
	 * @param string Type
	 * @param string URL
	 * @return XiFundDataTypeDocumentURL
	 */
	public function __construct($_Type = null,$_URL = null)
	{
		parent::__construct(array('Type'=>$_Type,'URL'=>$_URL));
	}
	/**
	 * Set Type
	 * @param string Type
	 * @return string
	 */
	public function setType($_Type)
	{
		return ($this->Type = $_Type);
	}
	/**
	 * Get Type
	 * @return string
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set URL
	 * @param string URL
	 * @return string
	 */
	public function setURL($_URL)
	{
		return ($this->URL = $_URL);
	}
	/**
	 * Get URL
	 * @return string
	 */
	public function getURL()
	{
		return $this->URL;
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