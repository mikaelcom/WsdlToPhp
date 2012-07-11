<?php
/**
 * Class file for OvhTypeEmailFilterRuleStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeEmailFilterRuleStruct
 * @date 02/07/2012
 */
class OvhTypeEmailFilterRuleStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
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
	 * @param int id
	 * @param string header
	 * @param string rule
	 * @param string rule_param
	 * @return OvhTypeEmailFilterRuleStruct
	 */
	public function __construct($_id = null,$_header = null,$_rule = null,$_rule_param = null)
	{
		parent::__construct(array('id'=>$_id,'header'=>$_header,'rule'=>$_rule,'rule_param'=>$_rule_param));
	}
	/**
	 * Set id
	 * @param int id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
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