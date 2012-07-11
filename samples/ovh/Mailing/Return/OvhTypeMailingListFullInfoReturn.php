<?php
/**
 * Class file for OvhTypeMailingListFullInfoReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMailingListFullInfoReturn
 * @date 02/07/2012
 */
class OvhTypeMailingListFullInfoReturn extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The ml
	 * @var string
	 */
	public $ml;
	/**
	 * The owner
	 * @var string
	 */
	public $owner;
	/**
	 * The nbSubscribers
	 * @var int
	 */
	public $nbSubscribers;
	/**
	 * The message_moderation
	 * @var boolean
	 */
	public $message_moderation;
	/**
	 * The users_post_only
	 * @var boolean
	 */
	public $users_post_only;
	/**
	 * The subscription_moderation
	 * @var boolean
	 */
	public $subscription_moderation;
	/**
	 * The replyto
	 * @var string
	 */
	public $replyto;
	/**
	 * The lang
	 * @var string
	 */
	public $lang;
	/**
	 * The moderators
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $moderators;
	/**
	 * The subscribers
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $subscribers;
	/**
	 * Constructor
	 * @param string domain
	 * @param string ml
	 * @param string owner
	 * @param int nbSubscribers
	 * @param boolean message_moderation
	 * @param boolean users_post_only
	 * @param boolean subscription_moderation
	 * @param string replyto
	 * @param string lang
	 * @param OvhTypeMyArrayOfStringType moderators
	 * @param OvhTypeMyArrayOfStringType subscribers
	 * @return OvhTypeMailingListFullInfoReturn
	 */
	public function __construct($_domain = null,$_ml = null,$_owner = null,$_nbSubscribers = null,$_message_moderation = null,$_users_post_only = null,$_subscription_moderation = null,$_replyto = null,$_lang = null,$_moderators = null,$_subscribers = null)
	{
		parent::__construct(array('domain'=>$_domain,'ml'=>$_ml,'owner'=>$_owner,'nbSubscribers'=>$_nbSubscribers,'message_moderation'=>$_message_moderation,'users_post_only'=>$_users_post_only,'subscription_moderation'=>$_subscription_moderation,'replyto'=>$_replyto,'lang'=>$_lang,'moderators'=>new OvhTypeMyArrayOfStringType($_moderators),'subscribers'=>new OvhTypeMyArrayOfStringType($_subscribers)));
	}
	/**
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set ml
	 * @param string ml
	 * @return string
	 */
	public function setMl($_ml)
	{
		return ($this->ml = $_ml);
	}
	/**
	 * Get ml
	 * @return string
	 */
	public function getMl()
	{
		return $this->ml;
	}
	/**
	 * Set owner
	 * @param string owner
	 * @return string
	 */
	public function setOwner($_owner)
	{
		return ($this->owner = $_owner);
	}
	/**
	 * Get owner
	 * @return string
	 */
	public function getOwner()
	{
		return $this->owner;
	}
	/**
	 * Set nbSubscribers
	 * @param int nbSubscribers
	 * @return int
	 */
	public function setNbSubscribers($_nbSubscribers)
	{
		return ($this->nbSubscribers = $_nbSubscribers);
	}
	/**
	 * Get nbSubscribers
	 * @return int
	 */
	public function getNbSubscribers()
	{
		return $this->nbSubscribers;
	}
	/**
	 * Set message_moderation
	 * @param boolean message_moderation
	 * @return boolean
	 */
	public function setMessage_moderation($_message_moderation)
	{
		return ($this->message_moderation = $_message_moderation);
	}
	/**
	 * Get message_moderation
	 * @return boolean
	 */
	public function getMessage_moderation()
	{
		return $this->message_moderation;
	}
	/**
	 * Set users_post_only
	 * @param boolean users_post_only
	 * @return boolean
	 */
	public function setUsers_post_only($_users_post_only)
	{
		return ($this->users_post_only = $_users_post_only);
	}
	/**
	 * Get users_post_only
	 * @return boolean
	 */
	public function getUsers_post_only()
	{
		return $this->users_post_only;
	}
	/**
	 * Set subscription_moderation
	 * @param boolean subscription_moderation
	 * @return boolean
	 */
	public function setSubscription_moderation($_subscription_moderation)
	{
		return ($this->subscription_moderation = $_subscription_moderation);
	}
	/**
	 * Get subscription_moderation
	 * @return boolean
	 */
	public function getSubscription_moderation()
	{
		return $this->subscription_moderation;
	}
	/**
	 * Set replyto
	 * @param string replyto
	 * @return string
	 */
	public function setReplyto($_replyto)
	{
		return ($this->replyto = $_replyto);
	}
	/**
	 * Get replyto
	 * @return string
	 */
	public function getReplyto()
	{
		return $this->replyto;
	}
	/**
	 * Set lang
	 * @param string lang
	 * @return string
	 */
	public function setLang($_lang)
	{
		return ($this->lang = $_lang);
	}
	/**
	 * Get lang
	 * @return string
	 */
	public function getLang()
	{
		return $this->lang;
	}
	/**
	 * Set moderators
	 * @param MyArrayOfStringType moderators
	 * @return MyArrayOfStringType
	 */
	public function setModerators($_moderators)
	{
		return ($this->moderators = $_moderators);
	}
	/**
	 * Get moderators
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getModerators()
	{
		return $this->moderators;
	}
	/**
	 * Set subscribers
	 * @param MyArrayOfStringType subscribers
	 * @return MyArrayOfStringType
	 */
	public function setSubscribers($_subscribers)
	{
		return ($this->subscribers = $_subscribers);
	}
	/**
	 * Get subscribers
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getSubscribers()
	{
		return $this->subscribers;
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