<?php
/**
 * Class file for YMailTypeBatchResponse
 * @date 02/07/2012
 */
/**
 * Class YMailTypeBatchResponse
 * @date 02/07/2012
 */
class YMailTypeBatchResponse extends YMailWsdlClass
{
	/**
	 * The GetUserDataResponse
	 * @var YMailTypeGetUserDataResponse
	 */
	public $GetUserDataResponse;
	/**
	 * The SetUserDataResponse
	 * @var YMailTypeSetUserDataResponse
	 */
	public $SetUserDataResponse;
	/**
	 * The ListFoldersResponse
	 * @var YMailTypeListFoldersResponse
	 */
	public $ListFoldersResponse;
	/**
	 * The CreateFolderResponse
	 * @var YMailTypeCreateFolderResponse
	 */
	public $CreateFolderResponse;
	/**
	 * The RenameFolderResponse
	 * @var YMailTypeRenameFolderResponse
	 */
	public $RenameFolderResponse;
	/**
	 * The EmptyFolderResponse
	 * @var YMailTypeEmptyFolderResponse
	 */
	public $EmptyFolderResponse;
	/**
	 * The RemoveFolderResponse
	 * @var YMailTypeRemoveFolderResponse
	 */
	public $RemoveFolderResponse;
	/**
	 * The GetMessageResponse
	 * @var YMailTypeGetMessageResponse
	 */
	public $GetMessageResponse;
	/**
	 * The SaveRawMessageResponse
	 * @var YMailTypeSaveRawMessageResponse
	 */
	public $SaveRawMessageResponse;
	/**
	 * The SaveMessageResponse
	 * @var YMailTypeSaveMessageResponse
	 */
	public $SaveMessageResponse;
	/**
	 * The MoveMessagesResponse
	 * @var YMailTypeMoveMessagesResponse
	 */
	public $MoveMessagesResponse;
	/**
	 * The DeleteMessagesResponse
	 * @var YMailTypeDeleteMessagesResponse
	 */
	public $DeleteMessagesResponse;
	/**
	 * The ListMessagesResponse
	 * @var YMailTypeListMessagesResponse
	 */
	public $ListMessagesResponse;
	/**
	 * The ListMessagesFromIdsResponse
	 * @var YMailTypeListMessagesFromIdsResponse
	 */
	public $ListMessagesFromIdsResponse;
	/**
	 * The SearchMessagesResponse
	 * @var YMailTypeListMessagesResponse
	 */
	public $SearchMessagesResponse;
	/**
	 * The GetMessageRawHeaderResponse
	 * @var YMailTypeGetMessageRawHeaderResponse
	 */
	public $GetMessageRawHeaderResponse;
	/**
	 * The FetchExternalMailResponse
	 * @var YMailTypeFetchExternalMailResponse
	 */
	public $FetchExternalMailResponse;
	/**
	 * The FlagMessagesResponse
	 * @var YMailTypeFlagMessagesResponse
	 */
	public $FlagMessagesResponse;
	/**
	 * The ResetSpamFilterResponse
	 * @var YMailTypeResetSpamFilterResponse
	 */
	public $ResetSpamFilterResponse;
	/**
	 * The SendMessageResponse
	 * @var YMailTypeSendMessageResponse
	 */
	public $SendMessageResponse;
	/**
	 * The ErrorResponse
	 * @var YMailTypeErrorResponse
	 */
	public $ErrorResponse;
	/**
	 * The success
	 * @var boolean
	 */
	public $success;
	/**
	 * Constructor
	 * @param YMailTypeGetUserDataResponse GetUserDataResponse
	 * @param YMailTypeSetUserDataResponse SetUserDataResponse
	 * @param YMailTypeListFoldersResponse ListFoldersResponse
	 * @param YMailTypeCreateFolderResponse CreateFolderResponse
	 * @param YMailTypeRenameFolderResponse RenameFolderResponse
	 * @param YMailTypeEmptyFolderResponse EmptyFolderResponse
	 * @param YMailTypeRemoveFolderResponse RemoveFolderResponse
	 * @param YMailTypeGetMessageResponse GetMessageResponse
	 * @param YMailTypeSaveRawMessageResponse SaveRawMessageResponse
	 * @param YMailTypeSaveMessageResponse SaveMessageResponse
	 * @param YMailTypeMoveMessagesResponse MoveMessagesResponse
	 * @param YMailTypeDeleteMessagesResponse DeleteMessagesResponse
	 * @param YMailTypeListMessagesResponse ListMessagesResponse
	 * @param YMailTypeListMessagesFromIdsResponse ListMessagesFromIdsResponse
	 * @param YMailTypeListMessagesResponse SearchMessagesResponse
	 * @param YMailTypeGetMessageRawHeaderResponse GetMessageRawHeaderResponse
	 * @param YMailTypeFetchExternalMailResponse FetchExternalMailResponse
	 * @param YMailTypeFlagMessagesResponse FlagMessagesResponse
	 * @param YMailTypeResetSpamFilterResponse ResetSpamFilterResponse
	 * @param YMailTypeSendMessageResponse SendMessageResponse
	 * @param YMailTypeErrorResponse ErrorResponse
	 * @param boolean success
	 * @return YMailTypeBatchResponse
	 */
	public function __construct($_GetUserDataResponse = null,$_SetUserDataResponse = null,$_ListFoldersResponse = null,$_CreateFolderResponse = null,$_RenameFolderResponse = null,$_EmptyFolderResponse = null,$_RemoveFolderResponse = null,$_GetMessageResponse = null,$_SaveRawMessageResponse = null,$_SaveMessageResponse = null,$_MoveMessagesResponse = null,$_DeleteMessagesResponse = null,$_ListMessagesResponse = null,$_ListMessagesFromIdsResponse = null,$_SearchMessagesResponse = null,$_GetMessageRawHeaderResponse = null,$_FetchExternalMailResponse = null,$_FlagMessagesResponse = null,$_ResetSpamFilterResponse = null,$_SendMessageResponse = null,$_ErrorResponse = null,$_success = null)
	{
		parent::__construct(array('GetUserDataResponse'=>$_GetUserDataResponse,'SetUserDataResponse'=>$_SetUserDataResponse,'ListFoldersResponse'=>$_ListFoldersResponse,'CreateFolderResponse'=>$_CreateFolderResponse,'RenameFolderResponse'=>$_RenameFolderResponse,'EmptyFolderResponse'=>$_EmptyFolderResponse,'RemoveFolderResponse'=>$_RemoveFolderResponse,'GetMessageResponse'=>$_GetMessageResponse,'SaveRawMessageResponse'=>$_SaveRawMessageResponse,'SaveMessageResponse'=>$_SaveMessageResponse,'MoveMessagesResponse'=>$_MoveMessagesResponse,'DeleteMessagesResponse'=>$_DeleteMessagesResponse,'ListMessagesResponse'=>$_ListMessagesResponse,'ListMessagesFromIdsResponse'=>$_ListMessagesFromIdsResponse,'SearchMessagesResponse'=>$_SearchMessagesResponse,'GetMessageRawHeaderResponse'=>$_GetMessageRawHeaderResponse,'FetchExternalMailResponse'=>$_FetchExternalMailResponse,'FlagMessagesResponse'=>$_FlagMessagesResponse,'ResetSpamFilterResponse'=>$_ResetSpamFilterResponse,'SendMessageResponse'=>$_SendMessageResponse,'ErrorResponse'=>$_ErrorResponse,'success'=>$_success));
	}
	/**
	 * Set GetUserDataResponse
	 * @param GetUserDataResponse GetUserDataResponse
	 * @return GetUserDataResponse
	 */
	public function setGetUserDataResponse($_GetUserDataResponse)
	{
		return ($this->GetUserDataResponse = $_GetUserDataResponse);
	}
	/**
	 * Get GetUserDataResponse
	 * @return YMailTypeGetUserDataResponse
	 */
	public function getGetUserDataResponse()
	{
		return $this->GetUserDataResponse;
	}
	/**
	 * Set SetUserDataResponse
	 * @param SetUserDataResponse SetUserDataResponse
	 * @return SetUserDataResponse
	 */
	public function setSetUserDataResponse($_SetUserDataResponse)
	{
		return ($this->SetUserDataResponse = $_SetUserDataResponse);
	}
	/**
	 * Get SetUserDataResponse
	 * @return YMailTypeSetUserDataResponse
	 */
	public function getSetUserDataResponse()
	{
		return $this->SetUserDataResponse;
	}
	/**
	 * Set ListFoldersResponse
	 * @param ListFoldersResponse ListFoldersResponse
	 * @return ListFoldersResponse
	 */
	public function setListFoldersResponse($_ListFoldersResponse)
	{
		return ($this->ListFoldersResponse = $_ListFoldersResponse);
	}
	/**
	 * Get ListFoldersResponse
	 * @return YMailTypeListFoldersResponse
	 */
	public function getListFoldersResponse()
	{
		return $this->ListFoldersResponse;
	}
	/**
	 * Set CreateFolderResponse
	 * @param CreateFolderResponse CreateFolderResponse
	 * @return CreateFolderResponse
	 */
	public function setCreateFolderResponse($_CreateFolderResponse)
	{
		return ($this->CreateFolderResponse = $_CreateFolderResponse);
	}
	/**
	 * Get CreateFolderResponse
	 * @return YMailTypeCreateFolderResponse
	 */
	public function getCreateFolderResponse()
	{
		return $this->CreateFolderResponse;
	}
	/**
	 * Set RenameFolderResponse
	 * @param RenameFolderResponse RenameFolderResponse
	 * @return RenameFolderResponse
	 */
	public function setRenameFolderResponse($_RenameFolderResponse)
	{
		return ($this->RenameFolderResponse = $_RenameFolderResponse);
	}
	/**
	 * Get RenameFolderResponse
	 * @return YMailTypeRenameFolderResponse
	 */
	public function getRenameFolderResponse()
	{
		return $this->RenameFolderResponse;
	}
	/**
	 * Set EmptyFolderResponse
	 * @param EmptyFolderResponse EmptyFolderResponse
	 * @return EmptyFolderResponse
	 */
	public function setEmptyFolderResponse($_EmptyFolderResponse)
	{
		return ($this->EmptyFolderResponse = $_EmptyFolderResponse);
	}
	/**
	 * Get EmptyFolderResponse
	 * @return YMailTypeEmptyFolderResponse
	 */
	public function getEmptyFolderResponse()
	{
		return $this->EmptyFolderResponse;
	}
	/**
	 * Set RemoveFolderResponse
	 * @param RemoveFolderResponse RemoveFolderResponse
	 * @return RemoveFolderResponse
	 */
	public function setRemoveFolderResponse($_RemoveFolderResponse)
	{
		return ($this->RemoveFolderResponse = $_RemoveFolderResponse);
	}
	/**
	 * Get RemoveFolderResponse
	 * @return YMailTypeRemoveFolderResponse
	 */
	public function getRemoveFolderResponse()
	{
		return $this->RemoveFolderResponse;
	}
	/**
	 * Set GetMessageResponse
	 * @param GetMessageResponse GetMessageResponse
	 * @return GetMessageResponse
	 */
	public function setGetMessageResponse($_GetMessageResponse)
	{
		return ($this->GetMessageResponse = $_GetMessageResponse);
	}
	/**
	 * Get GetMessageResponse
	 * @return YMailTypeGetMessageResponse
	 */
	public function getGetMessageResponse()
	{
		return $this->GetMessageResponse;
	}
	/**
	 * Set SaveRawMessageResponse
	 * @param SaveRawMessageResponse SaveRawMessageResponse
	 * @return SaveRawMessageResponse
	 */
	public function setSaveRawMessageResponse($_SaveRawMessageResponse)
	{
		return ($this->SaveRawMessageResponse = $_SaveRawMessageResponse);
	}
	/**
	 * Get SaveRawMessageResponse
	 * @return YMailTypeSaveRawMessageResponse
	 */
	public function getSaveRawMessageResponse()
	{
		return $this->SaveRawMessageResponse;
	}
	/**
	 * Set SaveMessageResponse
	 * @param SaveMessageResponse SaveMessageResponse
	 * @return SaveMessageResponse
	 */
	public function setSaveMessageResponse($_SaveMessageResponse)
	{
		return ($this->SaveMessageResponse = $_SaveMessageResponse);
	}
	/**
	 * Get SaveMessageResponse
	 * @return YMailTypeSaveMessageResponse
	 */
	public function getSaveMessageResponse()
	{
		return $this->SaveMessageResponse;
	}
	/**
	 * Set MoveMessagesResponse
	 * @param MoveMessagesResponse MoveMessagesResponse
	 * @return MoveMessagesResponse
	 */
	public function setMoveMessagesResponse($_MoveMessagesResponse)
	{
		return ($this->MoveMessagesResponse = $_MoveMessagesResponse);
	}
	/**
	 * Get MoveMessagesResponse
	 * @return YMailTypeMoveMessagesResponse
	 */
	public function getMoveMessagesResponse()
	{
		return $this->MoveMessagesResponse;
	}
	/**
	 * Set DeleteMessagesResponse
	 * @param DeleteMessagesResponse DeleteMessagesResponse
	 * @return DeleteMessagesResponse
	 */
	public function setDeleteMessagesResponse($_DeleteMessagesResponse)
	{
		return ($this->DeleteMessagesResponse = $_DeleteMessagesResponse);
	}
	/**
	 * Get DeleteMessagesResponse
	 * @return YMailTypeDeleteMessagesResponse
	 */
	public function getDeleteMessagesResponse()
	{
		return $this->DeleteMessagesResponse;
	}
	/**
	 * Set ListMessagesResponse
	 * @param ListMessagesResponse ListMessagesResponse
	 * @return ListMessagesResponse
	 */
	public function setListMessagesResponse($_ListMessagesResponse)
	{
		return ($this->ListMessagesResponse = $_ListMessagesResponse);
	}
	/**
	 * Get ListMessagesResponse
	 * @return YMailTypeListMessagesResponse
	 */
	public function getListMessagesResponse()
	{
		return $this->ListMessagesResponse;
	}
	/**
	 * Set ListMessagesFromIdsResponse
	 * @param ListMessagesFromIdsResponse ListMessagesFromIdsResponse
	 * @return ListMessagesFromIdsResponse
	 */
	public function setListMessagesFromIdsResponse($_ListMessagesFromIdsResponse)
	{
		return ($this->ListMessagesFromIdsResponse = $_ListMessagesFromIdsResponse);
	}
	/**
	 * Get ListMessagesFromIdsResponse
	 * @return YMailTypeListMessagesFromIdsResponse
	 */
	public function getListMessagesFromIdsResponse()
	{
		return $this->ListMessagesFromIdsResponse;
	}
	/**
	 * Set SearchMessagesResponse
	 * @param ListMessagesResponse SearchMessagesResponse
	 * @return ListMessagesResponse
	 */
	public function setSearchMessagesResponse($_SearchMessagesResponse)
	{
		return ($this->SearchMessagesResponse = $_SearchMessagesResponse);
	}
	/**
	 * Get SearchMessagesResponse
	 * @return YMailTypeListMessagesResponse
	 */
	public function getSearchMessagesResponse()
	{
		return $this->SearchMessagesResponse;
	}
	/**
	 * Set GetMessageRawHeaderResponse
	 * @param GetMessageRawHeaderResponse GetMessageRawHeaderResponse
	 * @return GetMessageRawHeaderResponse
	 */
	public function setGetMessageRawHeaderResponse($_GetMessageRawHeaderResponse)
	{
		return ($this->GetMessageRawHeaderResponse = $_GetMessageRawHeaderResponse);
	}
	/**
	 * Get GetMessageRawHeaderResponse
	 * @return YMailTypeGetMessageRawHeaderResponse
	 */
	public function getGetMessageRawHeaderResponse()
	{
		return $this->GetMessageRawHeaderResponse;
	}
	/**
	 * Set FetchExternalMailResponse
	 * @param FetchExternalMailResponse FetchExternalMailResponse
	 * @return FetchExternalMailResponse
	 */
	public function setFetchExternalMailResponse($_FetchExternalMailResponse)
	{
		return ($this->FetchExternalMailResponse = $_FetchExternalMailResponse);
	}
	/**
	 * Get FetchExternalMailResponse
	 * @return YMailTypeFetchExternalMailResponse
	 */
	public function getFetchExternalMailResponse()
	{
		return $this->FetchExternalMailResponse;
	}
	/**
	 * Set FlagMessagesResponse
	 * @param FlagMessagesResponse FlagMessagesResponse
	 * @return FlagMessagesResponse
	 */
	public function setFlagMessagesResponse($_FlagMessagesResponse)
	{
		return ($this->FlagMessagesResponse = $_FlagMessagesResponse);
	}
	/**
	 * Get FlagMessagesResponse
	 * @return YMailTypeFlagMessagesResponse
	 */
	public function getFlagMessagesResponse()
	{
		return $this->FlagMessagesResponse;
	}
	/**
	 * Set ResetSpamFilterResponse
	 * @param ResetSpamFilterResponse ResetSpamFilterResponse
	 * @return ResetSpamFilterResponse
	 */
	public function setResetSpamFilterResponse($_ResetSpamFilterResponse)
	{
		return ($this->ResetSpamFilterResponse = $_ResetSpamFilterResponse);
	}
	/**
	 * Get ResetSpamFilterResponse
	 * @return YMailTypeResetSpamFilterResponse
	 */
	public function getResetSpamFilterResponse()
	{
		return $this->ResetSpamFilterResponse;
	}
	/**
	 * Set SendMessageResponse
	 * @param SendMessageResponse SendMessageResponse
	 * @return SendMessageResponse
	 */
	public function setSendMessageResponse($_SendMessageResponse)
	{
		return ($this->SendMessageResponse = $_SendMessageResponse);
	}
	/**
	 * Get SendMessageResponse
	 * @return YMailTypeSendMessageResponse
	 */
	public function getSendMessageResponse()
	{
		return $this->SendMessageResponse;
	}
	/**
	 * Set ErrorResponse
	 * @param ErrorResponse ErrorResponse
	 * @return ErrorResponse
	 */
	public function setErrorResponse($_ErrorResponse)
	{
		return ($this->ErrorResponse = $_ErrorResponse);
	}
	/**
	 * Get ErrorResponse
	 * @return YMailTypeErrorResponse
	 */
	public function getErrorResponse()
	{
		return $this->ErrorResponse;
	}
	/**
	 * Set success
	 * @param boolean success
	 * @return boolean
	 */
	public function setSuccess($_success)
	{
		return ($this->success = $_success);
	}
	/**
	 * Get success
	 * @return boolean
	 */
	public function getSuccess()
	{
		return $this->success;
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