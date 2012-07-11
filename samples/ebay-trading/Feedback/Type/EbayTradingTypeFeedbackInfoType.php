<?php
/**
 * Class file for EbayTradingTypeFeedbackInfoType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFeedbackInfoType
 * Documentation : Information used to add a feedback note for a user.
 * @date 04/07/2012
 */
class EbayTradingTypeFeedbackInfoType extends EbayTradingWsdlClass
{
	/**
	 * The CommentText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Textual comment that explains, clarifies, or justifies the feedback rating specified in CommentType. Still displayed if feedback is withdrawn. Required input if any other children of FeedbackInfo are provided.
	 * @var string
	 */
	public $CommentText;
	/**
	 * The CommentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Rating of the feedback being left (e.g., Positive). Sellers cannot leave neutral or negative feedback for buyers. Required input if any other children of FeedbackInfo are provided.
	 * @var EbayTradingTypeCommentTypeCodeType
	 */
	public $CommentType;
	/**
	 * The TargetUser
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Recipient user for whom the feedback is being left.
	 * @var EbayTradingTypeUserIDType
	 */
	public $TargetUser;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string CommentText
	 * @param EbayTradingTypeCommentTypeCodeType CommentType
	 * @param EbayTradingTypeUserIDType TargetUser
	 * @param DOMDocument any
	 * @return EbayTradingTypeFeedbackInfoType
	 */
	public function __construct($_CommentText = null,$_CommentType = null,$_TargetUser = null,$_any = null)
	{
		parent::__construct(array('CommentText'=>$_CommentText,'CommentType'=>$_CommentType,'TargetUser'=>$_TargetUser,'any'=>$_any));
	}
	/**
	 * Set CommentText
	 * @param string CommentText
	 * @return string
	 */
	public function setCommentText($_CommentText)
	{
		return ($this->CommentText = $_CommentText);
	}
	/**
	 * Get CommentText
	 * @return string
	 */
	public function getCommentText()
	{
		return $this->CommentText;
	}
	/**
	 * Set CommentType
	 * @param CommentTypeCodeType CommentType
	 * @return CommentTypeCodeType
	 */
	public function setCommentType($_CommentType)
	{
		return ($this->CommentType = EbayTradingTypeCommentTypeCodeType::valueIsValid($_CommentType)?$_CommentType:null);
	}
	/**
	 * Get CommentType
	 * @return EbayTradingTypeCommentTypeCodeType
	 */
	public function getCommentType()
	{
		return $this->CommentType;
	}
	/**
	 * Set TargetUser
	 * @param UserIDType TargetUser
	 * @return UserIDType
	 */
	public function setTargetUser($_TargetUser)
	{
		return ($this->TargetUser = EbayTradingTypeUserIDType::valueIsValid($_TargetUser)?$_TargetUser:null);
	}
	/**
	 * Get TargetUser
	 * @return EbayTradingTypeUserIDType
	 */
	public function getTargetUser()
	{
		return $this->TargetUser;
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