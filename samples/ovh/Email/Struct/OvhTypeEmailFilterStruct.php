<?php
/**
 * Class file for OvhTypeEmailFilterStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeEmailFilterStruct
 * @date 02/07/2012
 */
class OvhTypeEmailFilterStruct extends OvhWsdlClass
{
	/**
	 * The filter
	 * @var string
	 */
	public $filter;
	/**
	 * The action
	 * @var string
	 */
	public $action;
	/**
	 * The action_param
	 * @var string
	 */
	public $action_param;
	/**
	 * The active
	 * @var boolean
	 */
	public $active;
	/**
	 * The priority
	 * @var string
	 */
	public $priority;
	/**
	 * The nbRules
	 * @var int
	 */
	public $nbRules;
	/**
	 * The rules
	 * @var OvhTypeMyArrayOfEmailFilterRuleStructType
	 */
	public $rules;
	/**
	 * Constructor
	 * @param string filter
	 * @param string action
	 * @param string action_param
	 * @param boolean active
	 * @param string priority
	 * @param int nbRules
	 * @param OvhTypeMyArrayOfEmailFilterRuleStructType rules
	 * @return OvhTypeEmailFilterStruct
	 */
	public function __construct($_filter = null,$_action = null,$_action_param = null,$_active = null,$_priority = null,$_nbRules = null,$_rules = null)
	{
		parent::__construct(array('filter'=>$_filter,'action'=>$_action,'action_param'=>$_action_param,'active'=>$_active,'priority'=>$_priority,'nbRules'=>$_nbRules,'rules'=>new OvhTypeMyArrayOfEmailFilterRuleStructType($_rules)));
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
	 * Set action
	 * @param string action
	 * @return string
	 */
	public function setAction($_action)
	{
		return ($this->action = $_action);
	}
	/**
	 * Get action
	 * @return string
	 */
	public function getAction()
	{
		return $this->action;
	}
	/**
	 * Set action_param
	 * @param string action_param
	 * @return string
	 */
	public function setAction_param($_action_param)
	{
		return ($this->action_param = $_action_param);
	}
	/**
	 * Get action_param
	 * @return string
	 */
	public function getAction_param()
	{
		return $this->action_param;
	}
	/**
	 * Set active
	 * @param boolean active
	 * @return boolean
	 */
	public function setActive($_active)
	{
		return ($this->active = $_active);
	}
	/**
	 * Get active
	 * @return boolean
	 */
	public function getActive()
	{
		return $this->active;
	}
	/**
	 * Set priority
	 * @param string priority
	 * @return string
	 */
	public function setPriority($_priority)
	{
		return ($this->priority = $_priority);
	}
	/**
	 * Get priority
	 * @return string
	 */
	public function getPriority()
	{
		return $this->priority;
	}
	/**
	 * Set nbRules
	 * @param int nbRules
	 * @return int
	 */
	public function setNbRules($_nbRules)
	{
		return ($this->nbRules = $_nbRules);
	}
	/**
	 * Get nbRules
	 * @return int
	 */
	public function getNbRules()
	{
		return $this->nbRules;
	}
	/**
	 * Set rules
	 * @param MyArrayOfEmailFilterRuleStructType rules
	 * @return MyArrayOfEmailFilterRuleStructType
	 */
	public function setRules($_rules)
	{
		return ($this->rules = $_rules);
	}
	/**
	 * Get rules
	 * @return OvhTypeMyArrayOfEmailFilterRuleStructType
	 */
	public function getRules()
	{
		return $this->rules;
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