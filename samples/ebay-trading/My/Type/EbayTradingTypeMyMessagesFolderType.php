<?php
/**
 * Class file for EbayTradingTypeMyMessagesFolderType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyMessagesFolderType
 * Documentation : Details relating to a My Messages folder.
 * @date 04/07/2012
 */
class EbayTradingTypeMyMessagesFolderType extends EbayTradingWsdlClass
{
	/**
	 * The FolderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An ID that uniquely identifies a My Messages folder.
	 * @var long
	 */
	public $FolderID;
	/**
	 * The FolderName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of a specified My Messages folder.
	 * @var string
	 */
	public $FolderName;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param long FolderID
	 * @param string FolderName
	 * @param DOMDocument any
	 * @return EbayTradingTypeMyMessagesFolderType
	 */
	public function __construct($_FolderID = null,$_FolderName = null,$_any = null)
	{
		parent::__construct(array('FolderID'=>$_FolderID,'FolderName'=>$_FolderName,'any'=>$_any));
	}
	/**
	 * Set FolderID
	 * @param long FolderID
	 * @return long
	 */
	public function setFolderID($_FolderID)
	{
		return ($this->FolderID = $_FolderID);
	}
	/**
	 * Get FolderID
	 * @return long
	 */
	public function getFolderID()
	{
		return $this->FolderID;
	}
	/**
	 * Set FolderName
	 * @param string FolderName
	 * @return string
	 */
	public function setFolderName($_FolderName)
	{
		return ($this->FolderName = $_FolderName);
	}
	/**
	 * Get FolderName
	 * @return string
	 */
	public function getFolderName()
	{
		return $this->FolderName;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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