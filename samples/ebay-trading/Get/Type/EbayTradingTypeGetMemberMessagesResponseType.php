<?php
/**
 * Class file for EbayTradingTypeGetMemberMessagesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetMemberMessagesResponseType
 * @date 04/07/2012
 */
class EbayTradingTypeGetMemberMessagesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The MemberMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The returned member messages. Returned if messages that meet the request criteria exist. Note that GetMemberMessages does not return messages when, in the request, the MailMessageType is AskSellerQuestion.
	 * @var EbayTradingTypeMemberMessageExchangeArrayType
	 */
	public $MemberMessage;
	/**
	 * The PaginationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Shows the pagination of data returned by requests.
	 * @var EbayTradingTypePaginationResultType
	 */
	public $PaginationResult;
	/**
	 * The HasMoreItems
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether the response has more items.
	 * @var boolean
	 */
	public $HasMoreItems;
	/**
	 * Constructor
	 * @param EbayTradingTypeMemberMessageExchangeArrayType MemberMessage
	 * @param EbayTradingTypePaginationResultType PaginationResult
	 * @param boolean HasMoreItems
	 * @return EbayTradingTypeGetMemberMessagesResponseType
	 */
	public function __construct($_MemberMessage = null,$_PaginationResult = null,$_HasMoreItems = null)
	{
		EbayTradingWsdlClass::__construct(array('MemberMessage'=>$_MemberMessage,'PaginationResult'=>$_PaginationResult,'HasMoreItems'=>$_HasMoreItems));
	}
	/**
	 * Set MemberMessage
	 * @param MemberMessageExchangeArrayType MemberMessage
	 * @return MemberMessageExchangeArrayType
	 */
	public function setMemberMessage($_MemberMessage)
	{
		return ($this->MemberMessage = $_MemberMessage);
	}
	/**
	 * Get MemberMessage
	 * @return EbayTradingTypeMemberMessageExchangeArrayType
	 */
	public function getMemberMessage()
	{
		return $this->MemberMessage;
	}
	/**
	 * Set PaginationResult
	 * @param PaginationResultType PaginationResult
	 * @return PaginationResultType
	 */
	public function setPaginationResult($_PaginationResult)
	{
		return ($this->PaginationResult = $_PaginationResult);
	}
	/**
	 * Get PaginationResult
	 * @return EbayTradingTypePaginationResultType
	 */
	public function getPaginationResult()
	{
		return $this->PaginationResult;
	}
	/**
	 * Set HasMoreItems
	 * @param boolean HasMoreItems
	 * @return boolean
	 */
	public function setHasMoreItems($_HasMoreItems)
	{
		return ($this->HasMoreItems = $_HasMoreItems);
	}
	/**
	 * Get HasMoreItems
	 * @return boolean
	 */
	public function getHasMoreItems()
	{
		return $this->HasMoreItems;
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