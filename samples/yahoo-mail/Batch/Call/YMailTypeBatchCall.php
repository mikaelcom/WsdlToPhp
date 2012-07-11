<?php
/**
 * Class file for YMailTypeBatchCall
 * @date 02/07/2012
 */
/**
 * Class YMailTypeBatchCall
 * @date 02/07/2012
 */
class YMailTypeBatchCall extends YMailWsdlClass
{
	/**
	 * The parameter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeBatchParameter
	 */
	public $parameter;
	/**
	 * The dependency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $dependency;
	/**
	 * The GetUserData
	 * @var YMailTypeGetUserData
	 */
	public $GetUserData;
	/**
	 * The SetUserData
	 * @var YMailTypeSetUserData
	 */
	public $SetUserData;
	/**
	 * The ListFolders
	 * @var YMailTypeListFolders
	 */
	public $ListFolders;
	/**
	 * The CreateFolder
	 * @var YMailTypeCreateFolder
	 */
	public $CreateFolder;
	/**
	 * The RenameFolder
	 * @var YMailTypeRenameFolder
	 */
	public $RenameFolder;
	/**
	 * The EmptyFolder
	 * @var YMailTypeEmptyFolder
	 */
	public $EmptyFolder;
	/**
	 * The RemoveFolder
	 * @var YMailTypeRemoveFolder
	 */
	public $RemoveFolder;
	/**
	 * The GetMessage
	 * @var YMailTypeGetMessage
	 */
	public $GetMessage;
	/**
	 * The SaveRawMessage
	 * @var YMailTypeSaveRawMessage
	 */
	public $SaveRawMessage;
	/**
	 * The SaveMessage
	 * @var YMailTypeSaveMessage
	 */
	public $SaveMessage;
	/**
	 * The MoveMessages
	 * @var YMailTypeMoveMessages
	 */
	public $MoveMessages;
	/**
	 * The DeleteMessages
	 * @var YMailTypeDeleteMessages
	 */
	public $DeleteMessages;
	/**
	 * The ListMessages
	 * @var YMailTypeListMessages
	 */
	public $ListMessages;
	/**
	 * The ListMessagesFromIds
	 * @var YMailTypeListMessagesFromIds
	 */
	public $ListMessagesFromIds;
	/**
	 * The SearchMessages
	 * @var YMailTypeSearchMessages
	 */
	public $SearchMessages;
	/**
	 * The GetMessageRawHeader
	 * @var YMailTypeGetMessageRawHeader
	 */
	public $GetMessageRawHeader;
	/**
	 * The FetchExternalMail
	 * @var YMailTypeFetchExternalMail
	 */
	public $FetchExternalMail;
	/**
	 * The FlagMessages
	 * @var YMailTypeFlagMessages
	 */
	public $FlagMessages;
	/**
	 * The ResetSpamFilter
	 * @var YMailTypeResetSpamFilter
	 */
	public $ResetSpamFilter;
	/**
	 * The SendMessage
	 * @var YMailTypeSendMessage
	 */
	public $SendMessage;
	/**
	 * The id
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $id;
	/**
	 * Constructor
	 * @param YMailTypeBatchParameter parameter
	 * @param string dependency
	 * @param YMailTypeGetUserData GetUserData
	 * @param YMailTypeSetUserData SetUserData
	 * @param YMailTypeListFolders ListFolders
	 * @param YMailTypeCreateFolder CreateFolder
	 * @param YMailTypeRenameFolder RenameFolder
	 * @param YMailTypeEmptyFolder EmptyFolder
	 * @param YMailTypeRemoveFolder RemoveFolder
	 * @param YMailTypeGetMessage GetMessage
	 * @param YMailTypeSaveRawMessage SaveRawMessage
	 * @param YMailTypeSaveMessage SaveMessage
	 * @param YMailTypeMoveMessages MoveMessages
	 * @param YMailTypeDeleteMessages DeleteMessages
	 * @param YMailTypeListMessages ListMessages
	 * @param YMailTypeListMessagesFromIds ListMessagesFromIds
	 * @param YMailTypeSearchMessages SearchMessages
	 * @param YMailTypeGetMessageRawHeader GetMessageRawHeader
	 * @param YMailTypeFetchExternalMail FetchExternalMail
	 * @param YMailTypeFlagMessages FlagMessages
	 * @param YMailTypeResetSpamFilter ResetSpamFilter
	 * @param YMailTypeSendMessage SendMessage
	 * @param string id
	 * @return YMailTypeBatchCall
	 */
	public function __construct($_parameter = null,$_dependency = null,$_GetUserData = null,$_SetUserData = null,$_ListFolders = null,$_CreateFolder = null,$_RenameFolder = null,$_EmptyFolder = null,$_RemoveFolder = null,$_GetMessage = null,$_SaveRawMessage = null,$_SaveMessage = null,$_MoveMessages = null,$_DeleteMessages = null,$_ListMessages = null,$_ListMessagesFromIds = null,$_SearchMessages = null,$_GetMessageRawHeader = null,$_FetchExternalMail = null,$_FlagMessages = null,$_ResetSpamFilter = null,$_SendMessage = null,$_id = null)
	{
		parent::__construct(array('parameter'=>$_parameter,'dependency'=>$_dependency,'GetUserData'=>$_GetUserData,'SetUserData'=>$_SetUserData,'ListFolders'=>$_ListFolders,'CreateFolder'=>$_CreateFolder,'RenameFolder'=>$_RenameFolder,'EmptyFolder'=>$_EmptyFolder,'RemoveFolder'=>$_RemoveFolder,'GetMessage'=>$_GetMessage,'SaveRawMessage'=>$_SaveRawMessage,'SaveMessage'=>$_SaveMessage,'MoveMessages'=>$_MoveMessages,'DeleteMessages'=>$_DeleteMessages,'ListMessages'=>$_ListMessages,'ListMessagesFromIds'=>$_ListMessagesFromIds,'SearchMessages'=>$_SearchMessages,'GetMessageRawHeader'=>$_GetMessageRawHeader,'FetchExternalMail'=>$_FetchExternalMail,'FlagMessages'=>$_FlagMessages,'ResetSpamFilter'=>$_ResetSpamFilter,'SendMessage'=>$_SendMessage,'id'=>$_id));
	}
	/**
	 * Set parameter
	 * @param BatchParameter parameter
	 * @return BatchParameter
	 */
	public function setParameter($_parameter)
	{
		return ($this->parameter = $_parameter);
	}
	/**
	 * Get parameter
	 * @return YMailTypeBatchParameter
	 */
	public function getParameter()
	{
		return $this->parameter;
	}
	/**
	 * Set dependency
	 * @param string dependency
	 * @return string
	 */
	public function setDependency($_dependency)
	{
		return ($this->dependency = $_dependency);
	}
	/**
	 * Get dependency
	 * @return string
	 */
	public function getDependency()
	{
		return $this->dependency;
	}
	/**
	 * Set GetUserData
	 * @param GetUserData GetUserData
	 * @return GetUserData
	 */
	public function setGetUserData($_GetUserData)
	{
		return ($this->GetUserData = $_GetUserData);
	}
	/**
	 * Get GetUserData
	 * @return YMailTypeGetUserData
	 */
	public function getGetUserData()
	{
		return $this->GetUserData;
	}
	/**
	 * Set SetUserData
	 * @param SetUserData SetUserData
	 * @return SetUserData
	 */
	public function setSetUserData($_SetUserData)
	{
		return ($this->SetUserData = $_SetUserData);
	}
	/**
	 * Get SetUserData
	 * @return YMailTypeSetUserData
	 */
	public function getSetUserData()
	{
		return $this->SetUserData;
	}
	/**
	 * Set ListFolders
	 * @param ListFolders ListFolders
	 * @return ListFolders
	 */
	public function setListFolders($_ListFolders)
	{
		return ($this->ListFolders = $_ListFolders);
	}
	/**
	 * Get ListFolders
	 * @return YMailTypeListFolders
	 */
	public function getListFolders()
	{
		return $this->ListFolders;
	}
	/**
	 * Set CreateFolder
	 * @param CreateFolder CreateFolder
	 * @return CreateFolder
	 */
	public function setCreateFolder($_CreateFolder)
	{
		return ($this->CreateFolder = $_CreateFolder);
	}
	/**
	 * Get CreateFolder
	 * @return YMailTypeCreateFolder
	 */
	public function getCreateFolder()
	{
		return $this->CreateFolder;
	}
	/**
	 * Set RenameFolder
	 * @param RenameFolder RenameFolder
	 * @return RenameFolder
	 */
	public function setRenameFolder($_RenameFolder)
	{
		return ($this->RenameFolder = $_RenameFolder);
	}
	/**
	 * Get RenameFolder
	 * @return YMailTypeRenameFolder
	 */
	public function getRenameFolder()
	{
		return $this->RenameFolder;
	}
	/**
	 * Set EmptyFolder
	 * @param EmptyFolder EmptyFolder
	 * @return EmptyFolder
	 */
	public function setEmptyFolder($_EmptyFolder)
	{
		return ($this->EmptyFolder = $_EmptyFolder);
	}
	/**
	 * Get EmptyFolder
	 * @return YMailTypeEmptyFolder
	 */
	public function getEmptyFolder()
	{
		return $this->EmptyFolder;
	}
	/**
	 * Set RemoveFolder
	 * @param RemoveFolder RemoveFolder
	 * @return RemoveFolder
	 */
	public function setRemoveFolder($_RemoveFolder)
	{
		return ($this->RemoveFolder = $_RemoveFolder);
	}
	/**
	 * Get RemoveFolder
	 * @return YMailTypeRemoveFolder
	 */
	public function getRemoveFolder()
	{
		return $this->RemoveFolder;
	}
	/**
	 * Set GetMessage
	 * @param GetMessage GetMessage
	 * @return GetMessage
	 */
	public function setGetMessage($_GetMessage)
	{
		return ($this->GetMessage = $_GetMessage);
	}
	/**
	 * Get GetMessage
	 * @return YMailTypeGetMessage
	 */
	public function getGetMessage()
	{
		return $this->GetMessage;
	}
	/**
	 * Set SaveRawMessage
	 * @param SaveRawMessage SaveRawMessage
	 * @return SaveRawMessage
	 */
	public function setSaveRawMessage($_SaveRawMessage)
	{
		return ($this->SaveRawMessage = $_SaveRawMessage);
	}
	/**
	 * Get SaveRawMessage
	 * @return YMailTypeSaveRawMessage
	 */
	public function getSaveRawMessage()
	{
		return $this->SaveRawMessage;
	}
	/**
	 * Set SaveMessage
	 * @param SaveMessage SaveMessage
	 * @return SaveMessage
	 */
	public function setSaveMessage($_SaveMessage)
	{
		return ($this->SaveMessage = $_SaveMessage);
	}
	/**
	 * Get SaveMessage
	 * @return YMailTypeSaveMessage
	 */
	public function getSaveMessage()
	{
		return $this->SaveMessage;
	}
	/**
	 * Set MoveMessages
	 * @param MoveMessages MoveMessages
	 * @return MoveMessages
	 */
	public function setMoveMessages($_MoveMessages)
	{
		return ($this->MoveMessages = $_MoveMessages);
	}
	/**
	 * Get MoveMessages
	 * @return YMailTypeMoveMessages
	 */
	public function getMoveMessages()
	{
		return $this->MoveMessages;
	}
	/**
	 * Set DeleteMessages
	 * @param DeleteMessages DeleteMessages
	 * @return DeleteMessages
	 */
	public function setDeleteMessages($_DeleteMessages)
	{
		return ($this->DeleteMessages = $_DeleteMessages);
	}
	/**
	 * Get DeleteMessages
	 * @return YMailTypeDeleteMessages
	 */
	public function getDeleteMessages()
	{
		return $this->DeleteMessages;
	}
	/**
	 * Set ListMessages
	 * @param ListMessages ListMessages
	 * @return ListMessages
	 */
	public function setListMessages($_ListMessages)
	{
		return ($this->ListMessages = $_ListMessages);
	}
	/**
	 * Get ListMessages
	 * @return YMailTypeListMessages
	 */
	public function getListMessages()
	{
		return $this->ListMessages;
	}
	/**
	 * Set ListMessagesFromIds
	 * @param ListMessagesFromIds ListMessagesFromIds
	 * @return ListMessagesFromIds
	 */
	public function setListMessagesFromIds($_ListMessagesFromIds)
	{
		return ($this->ListMessagesFromIds = $_ListMessagesFromIds);
	}
	/**
	 * Get ListMessagesFromIds
	 * @return YMailTypeListMessagesFromIds
	 */
	public function getListMessagesFromIds()
	{
		return $this->ListMessagesFromIds;
	}
	/**
	 * Set SearchMessages
	 * @param SearchMessages SearchMessages
	 * @return SearchMessages
	 */
	public function setSearchMessages($_SearchMessages)
	{
		return ($this->SearchMessages = $_SearchMessages);
	}
	/**
	 * Get SearchMessages
	 * @return YMailTypeSearchMessages
	 */
	public function getSearchMessages()
	{
		return $this->SearchMessages;
	}
	/**
	 * Set GetMessageRawHeader
	 * @param GetMessageRawHeader GetMessageRawHeader
	 * @return GetMessageRawHeader
	 */
	public function setGetMessageRawHeader($_GetMessageRawHeader)
	{
		return ($this->GetMessageRawHeader = $_GetMessageRawHeader);
	}
	/**
	 * Get GetMessageRawHeader
	 * @return YMailTypeGetMessageRawHeader
	 */
	public function getGetMessageRawHeader()
	{
		return $this->GetMessageRawHeader;
	}
	/**
	 * Set FetchExternalMail
	 * @param FetchExternalMail FetchExternalMail
	 * @return FetchExternalMail
	 */
	public function setFetchExternalMail($_FetchExternalMail)
	{
		return ($this->FetchExternalMail = $_FetchExternalMail);
	}
	/**
	 * Get FetchExternalMail
	 * @return YMailTypeFetchExternalMail
	 */
	public function getFetchExternalMail()
	{
		return $this->FetchExternalMail;
	}
	/**
	 * Set FlagMessages
	 * @param FlagMessages FlagMessages
	 * @return FlagMessages
	 */
	public function setFlagMessages($_FlagMessages)
	{
		return ($this->FlagMessages = $_FlagMessages);
	}
	/**
	 * Get FlagMessages
	 * @return YMailTypeFlagMessages
	 */
	public function getFlagMessages()
	{
		return $this->FlagMessages;
	}
	/**
	 * Set ResetSpamFilter
	 * @param ResetSpamFilter ResetSpamFilter
	 * @return ResetSpamFilter
	 */
	public function setResetSpamFilter($_ResetSpamFilter)
	{
		return ($this->ResetSpamFilter = $_ResetSpamFilter);
	}
	/**
	 * Get ResetSpamFilter
	 * @return YMailTypeResetSpamFilter
	 */
	public function getResetSpamFilter()
	{
		return $this->ResetSpamFilter;
	}
	/**
	 * Set SendMessage
	 * @param SendMessage SendMessage
	 * @return SendMessage
	 */
	public function setSendMessage($_SendMessage)
	{
		return ($this->SendMessage = $_SendMessage);
	}
	/**
	 * Get SendMessage
	 * @return YMailTypeSendMessage
	 */
	public function getSendMessage()
	{
		return $this->SendMessage;
	}
	/**
	 * Set id
	 * @param string id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
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