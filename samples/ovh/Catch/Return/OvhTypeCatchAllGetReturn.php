<?php
/**
 * Class file for OvhTypeCatchAllGetReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeCatchAllGetReturn
 * @date 02/07/2012
 */
class OvhTypeCatchAllGetReturn extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The destination
	 * @var string
	 */
	public $destination;
	/**
	 * Constructor
	 * @param string domain
	 * @param string type
	 * @param string destination
	 * @return OvhTypeCatchAllGetReturn
	 */
	public function __construct($_domain = null,$_type = null,$_destination = null)
	{
		parent::__construct(array('domain'=>$_domain,'type'=>$_type,'destination'=>$_destination));
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
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set destination
	 * @param string destination
	 * @return string
	 */
	public function setDestination($_destination)
	{
		return ($this->destination = $_destination);
	}
	/**
	 * Get destination
	 * @return string
	 */
	public function getDestination()
	{
		return $this->destination;
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