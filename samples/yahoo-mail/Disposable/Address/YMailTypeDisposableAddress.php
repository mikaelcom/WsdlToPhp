<?php
/**
 * Class file for YMailTypeDisposableAddress
 * @date 02/07/2012
 */
/**
 * Class YMailTypeDisposableAddress
 * @date 02/07/2012
 */
class YMailTypeDisposableAddress extends YMailWsdlClass
{
	/**
	 * The address
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $address;
	/**
	 * The replyTo
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $replyTo;
	/**
	 * The notes
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $notes;
	/**
	 * The colorIndicator
	 * Meta informations :
	 * 	- use : optional
	 * @var int
	 */
	public $colorIndicator;
	/**
	 * The deliverTo
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $deliverTo;
	/**
	 * The fromName
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $fromName;
	/**
	 * The activeComposition
	 * Meta informations :
	 * 	- use : optional
	 * @var boolean
	 */
	public $activeComposition;
	/**
	 * Constructor
	 * @param string address
	 * @param string replyTo
	 * @param string notes
	 * @param int colorIndicator
	 * @param string deliverTo
	 * @param string fromName
	 * @param boolean activeComposition
	 * @return YMailTypeDisposableAddress
	 */
	public function __construct($_address = null,$_replyTo = null,$_notes = null,$_colorIndicator = null,$_deliverTo = null,$_fromName = null,$_activeComposition = null)
	{
		parent::__construct(array('address'=>$_address,'replyTo'=>$_replyTo,'notes'=>$_notes,'colorIndicator'=>$_colorIndicator,'deliverTo'=>$_deliverTo,'fromName'=>$_fromName,'activeComposition'=>$_activeComposition));
	}
	/**
	 * Set address
	 * @param string address
	 * @return string
	 */
	public function setAddress($_address)
	{
		return ($this->address = $_address);
	}
	/**
	 * Get address
	 * @return string
	 */
	public function getAddress()
	{
		return $this->address;
	}
	/**
	 * Set replyTo
	 * @param string replyTo
	 * @return string
	 */
	public function setReplyTo($_replyTo)
	{
		return ($this->replyTo = $_replyTo);
	}
	/**
	 * Get replyTo
	 * @return string
	 */
	public function getReplyTo()
	{
		return $this->replyTo;
	}
	/**
	 * Set notes
	 * @param string notes
	 * @return string
	 */
	public function setNotes($_notes)
	{
		return ($this->notes = $_notes);
	}
	/**
	 * Get notes
	 * @return string
	 */
	public function getNotes()
	{
		return $this->notes;
	}
	/**
	 * Set colorIndicator
	 * @param int colorIndicator
	 * @return int
	 */
	public function setColorIndicator($_colorIndicator)
	{
		return ($this->colorIndicator = $_colorIndicator);
	}
	/**
	 * Get colorIndicator
	 * @return int
	 */
	public function getColorIndicator()
	{
		return $this->colorIndicator;
	}
	/**
	 * Set deliverTo
	 * @param string deliverTo
	 * @return string
	 */
	public function setDeliverTo($_deliverTo)
	{
		return ($this->deliverTo = $_deliverTo);
	}
	/**
	 * Get deliverTo
	 * @return string
	 */
	public function getDeliverTo()
	{
		return $this->deliverTo;
	}
	/**
	 * Set fromName
	 * @param string fromName
	 * @return string
	 */
	public function setFromName($_fromName)
	{
		return ($this->fromName = $_fromName);
	}
	/**
	 * Get fromName
	 * @return string
	 */
	public function getFromName()
	{
		return $this->fromName;
	}
	/**
	 * Set activeComposition
	 * @param boolean activeComposition
	 * @return boolean
	 */
	public function setActiveComposition($_activeComposition)
	{
		return ($this->activeComposition = $_activeComposition);
	}
	/**
	 * Get activeComposition
	 * @return boolean
	 */
	public function getActiveComposition()
	{
		return $this->activeComposition;
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