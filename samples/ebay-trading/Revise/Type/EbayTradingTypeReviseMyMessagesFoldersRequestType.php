<?php
/**
 * Class file for EbayTradingTypeReviseMyMessagesFoldersRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReviseMyMessagesFoldersRequestType
 * Documentation : Renames, removes, or restores the specified My Messages folders for a given user.
 * @date 04/07/2012
 */
class EbayTradingTypeReviseMyMessagesFoldersRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Operation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the type of operation to perform on a specified My Messages folder. Operations include creating, renaming, removing, and restoring folders. Operations cannot be performed on the Inbox and Sent folders.
	 * @var EbayTradingTypeMyMessagesFolderOperationCodeType
	 */
	public $Operation;
	/**
	 * The FolderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : An ID that uniquely identifies the My Messages folder to perform the operation on. This value is set by eBay and cannot be changed. Retrieve FolderIDs by calling GetMyMessages with a DetailLevel of ReturnSummary. Inbox is FolderID = 0, and Sent is FolderID = 1.
	 * @var long
	 */
	public $FolderID;
	/**
	 * The FolderName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The name of a specified My Messages folder. Depending on the specified Operation, the value is an existing folder name or a new folder name. Retrieve existing FolderNames by calling GetMyMessages with a DetailLevel of ReturnSummary. Inbox is FolderID = 0, and Sent is FolderID = 1.
	 * @var string
	 */
	public $FolderName;
	/**
	 * Constructor
	 * @param EbayTradingTypeMyMessagesFolderOperationCodeType Operation
	 * @param long FolderID
	 * @param string FolderName
	 * @return EbayTradingTypeReviseMyMessagesFoldersRequestType
	 */
	public function __construct($_Operation = null,$_FolderID = null,$_FolderName = null)
	{
		EbayTradingWsdlClass::__construct(array('Operation'=>$_Operation,'FolderID'=>$_FolderID,'FolderName'=>$_FolderName));
	}
	/**
	 * Set Operation
	 * @param MyMessagesFolderOperationCodeType Operation
	 * @return MyMessagesFolderOperationCodeType
	 */
	public function setOperation($_Operation)
	{
		return ($this->Operation = EbayTradingTypeMyMessagesFolderOperationCodeType::valueIsValid($_Operation)?$_Operation:null);
	}
	/**
	 * Get Operation
	 * @return EbayTradingTypeMyMessagesFolderOperationCodeType
	 */
	public function getOperation()
	{
		return $this->Operation;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>