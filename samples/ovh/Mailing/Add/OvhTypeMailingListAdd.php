<?php
/**
 * Class file for OvhTypeMailingListAdd
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMailingListAdd
 * @date 02/07/2012
 */
class OvhTypeMailingListAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
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
	 * The lang
	 * @var string
	 */
	public $lang;
	/**
	 * The replyto
	 * @var string
	 */
	public $replyto;
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
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string ml
	 * @param string owner
	 * @param string lang
	 * @param string replyto
	 * @param boolean message_moderation
	 * @param boolean users_post_only
	 * @param boolean subscription_moderation
	 * @return OvhTypeMailingListAdd
	 */
	public function __construct($_session = null,$_domain = null,$_ml = null,$_owner = null,$_lang = null,$_replyto = null,$_message_moderation = null,$_users_post_only = null,$_subscription_moderation = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'ml'=>$_ml,'owner'=>$_owner,'lang'=>$_lang,'replyto'=>$_replyto,'message_moderation'=>$_message_moderation,'users_post_only'=>$_users_post_only,'subscription_moderation'=>$_subscription_moderation));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>