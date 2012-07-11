<?php
/**
 * Class file for OvhTypeEmailFilterRuleAdd
 * @date 02/07/2012
 */
/**
 * Class OvhTypeEmailFilterRuleAdd
 * @date 02/07/2012
 */
class OvhTypeEmailFilterRuleAdd extends OvhWsdlClass
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
	 * The pop
	 * @var string
	 */
	public $pop;
	/**
	 * The filter
	 * @var string
	 */
	public $filter;
	/**
	 * The header
	 * @var string
	 */
	public $header;
	/**
	 * The rule
	 * @var string
	 */
	public $rule;
	/**
	 * The rule_param
	 * @var string
	 */
	public $rule_param;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string pop
	 * @param string filter
	 * @param string header
	 * @param string rule
	 * @param string rule_param
	 * @return OvhTypeEmailFilterRuleAdd
	 */
	public function __construct($_session = null,$_domain = null,$_pop = null,$_filter = null,$_header = null,$_rule = null,$_rule_param = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'pop'=>$_pop,'filter'=>$_filter,'header'=>$_header,'rule'=>$_rule,'rule_param'=>$_rule_param));
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
	 * Set pop
	 * @param string pop
	 * @return string
	 */
	public function setPop($_pop)
	{
		return ($this->pop = $_pop);
	}
	/**
	 * Get pop
	 * @return string
	 */
	public function getPop()
	{
		return $this->pop;
	}
	/**
	 * Set filter
	 * @param string filter
	 * @return string
	 */
	public function setFilter($_filter)
	{
		return ($this->filter = $_filter);
	}
	/**
	 * Get filter
	 * @return string
	 */
	public function getFilter()
	{
		return $this->filter;
	}
	/**
	 * Set header
	 * @param string header
	 * @return string
	 */
	public function setHeader($_header)
	{
		return ($this->header = $_header);
	}
	/**
	 * Get header
	 * @return string
	 */
	public function getHeader()
	{
		return $this->header;
	}
	/**
	 * Set rule
	 * @param string rule
	 * @return string
	 */
	public function setRule($_rule)
	{
		return ($this->rule = $_rule);
	}
	/**
	 * Get rule
	 * @return string
	 */
	public function getRule()
	{
		return $this->rule;
	}
	/**
	 * Set rule_param
	 * @param string rule_param
	 * @return string
	 */
	public function setRule_param($_rule_param)
	{
		return ($this->rule_param = $_rule_param);
	}
	/**
	 * Get rule_param
	 * @return string
	 */
	public function getRule_param()
	{
		return $this->rule_param;
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