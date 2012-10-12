<?php
/**
 * Class file for ConeSearchTypeLINK
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeLINK
 * @date 13/10/2012
 */
class ConeSearchTypeLINK extends ConeSearchWsdlClass
{
	/**
	 * The ID
	 * @var ID
	 */
	public $ID;
	/**
	 * The content-role
	 * @var ConeSearchTypeLINKContentrole
	 */
	public $content_role;
	/**
	 * The content-type
	 * @var token
	 */
	public $content_type;
	/**
	 * The title
	 * @var string
	 */
	public $title;
	/**
	 * The value
	 * @var string
	 */
	public $value;
	/**
	 * The href
	 * @var anyURI
	 */
	public $href;
	/**
	 * The gref
	 * @var token
	 */
	public $gref;
	/**
	 * The action
	 * @var anyURI
	 */
	public $action;
	/**
	 * Constructor
	 * @param ID ID
	 * @param ConeSearchTypeLINKContentrole content-role
	 * @param token content-type
	 * @param string title
	 * @param string value
	 * @param anyURI href
	 * @param token gref
	 * @param anyURI action
	 * @return ConeSearchTypeLINK
	 */
	public function __construct($_ID = null,$_content_role = null,$_content_type = null,$_title = null,$_value = null,$_href = null,$_gref = null,$_action = null)
	{
		parent::__construct(array('ID'=>$_ID,'content_role'=>$_content_role,'content_type'=>$_content_type,'title'=>$_title,'value'=>$_value,'href'=>$_href,'gref'=>$_gref,'action'=>$_action));
	}
	/**
	 * Set ID
	 * @param ID ID
	 * @return ID
	 */
	public function setID($_ID)
	{
		return ($this->ID = $_ID);
	}
	/**
	 * Get ID
	 * @return ID
	 */
	public function getID()
	{
		return $this->ID;
	}
	/**
	 * Set content_role
	 * @param LINKContentrole content_role
	 * @return LINKContentrole
	 */
	public function setContent_role($_content_role)
	{
		return ($this->content_role = ConeSearchTypeLINKContentrole::valueIsValid($_content_role)?$_content_role:null);
	}
	/**
	 * Get content_role
	 * @return ConeSearchTypeLINKContentrole
	 */
	public function getContent_role()
	{
		return $this->content_role;
	}
	/**
	 * Set content_type
	 * @param token content_type
	 * @return token
	 */
	public function setContent_type($_content_type)
	{
		return ($this->content_type = $_content_type);
	}
	/**
	 * Get content_type
	 * @return token
	 */
	public function getContent_type()
	{
		return $this->content_type;
	}
	/**
	 * Set title
	 * @param string title
	 * @return string
	 */
	public function setTitle($_title)
	{
		return ($this->title = $_title);
	}
	/**
	 * Get title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}
	/**
	 * Set value
	 * @param string value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get value
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
	}
	/**
	 * Set href
	 * @param anyURI href
	 * @return anyURI
	 */
	public function setHref($_href)
	{
		return ($this->href = $_href);
	}
	/**
	 * Get href
	 * @return anyURI
	 */
	public function getHref()
	{
		return $this->href;
	}
	/**
	 * Set gref
	 * @param token gref
	 * @return token
	 */
	public function setGref($_gref)
	{
		return ($this->gref = $_gref);
	}
	/**
	 * Get gref
	 * @return token
	 */
	public function getGref()
	{
		return $this->gref;
	}
	/**
	 * Set action
	 * @param anyURI action
	 * @return anyURI
	 */
	public function setAction($_action)
	{
		return ($this->action = $_action);
	}
	/**
	 * Get action
	 * @return anyURI
	 */
	public function getAction()
	{
		return $this->action;
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