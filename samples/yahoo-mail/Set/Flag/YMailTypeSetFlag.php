<?php
/**
 * Class file for YMailTypeSetFlag
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSetFlag
 * @date 02/07/2012
 */
class YMailTypeSetFlag extends YMailWsdlClass
{
	/**
	 * The replied
	 * Meta informations :
	 * 	- default : -1
	 * @var int
	 */
	public $replied;
	/**
	 * The flagged
	 * Meta informations :
	 * 	- default : -1
	 * @var int
	 */
	public $flagged;
	/**
	 * The read
	 * Meta informations :
	 * 	- default : -1
	 * @var int
	 */
	public $read;
	/**
	 * The draft
	 * Meta informations :
	 * 	- default : -1
	 * @var int
	 */
	public $draft;
	/**
	 * The forwarded
	 * Meta informations :
	 * 	- default : -1
	 * @var int
	 */
	public $forwarded;
	/**
	 * The ham
	 * Meta informations :
	 * 	- default : -1
	 * @var int
	 */
	public $ham;
	/**
	 * The spam
	 * Meta informations :
	 * 	- default : -1
	 * @var int
	 */
	public $spam;
	/**
	 * Constructor
	 * @param int replied
	 * @param int flagged
	 * @param int read
	 * @param int draft
	 * @param int forwarded
	 * @param int ham
	 * @param int spam
	 * @return YMailTypeSetFlag
	 */
	public function __construct($_replied = -1,$_flagged = -1,$_read = -1,$_draft = -1,$_forwarded = -1,$_ham = -1,$_spam = -1)
	{
		parent::__construct(array('replied'=>$_replied,'flagged'=>$_flagged,'read'=>$_read,'draft'=>$_draft,'forwarded'=>$_forwarded,'ham'=>$_ham,'spam'=>$_spam));
	}
	/**
	 * Set replied
	 * @param int replied
	 * @return int
	 */
	public function setReplied($_replied)
	{
		return ($this->replied = $_replied);
	}
	/**
	 * Get replied
	 * @return int
	 */
	public function getReplied()
	{
		return $this->replied;
	}
	/**
	 * Set flagged
	 * @param int flagged
	 * @return int
	 */
	public function setFlagged($_flagged)
	{
		return ($this->flagged = $_flagged);
	}
	/**
	 * Get flagged
	 * @return int
	 */
	public function getFlagged()
	{
		return $this->flagged;
	}
	/**
	 * Set read
	 * @param int read
	 * @return int
	 */
	public function setRead($_read)
	{
		return ($this->read = $_read);
	}
	/**
	 * Get read
	 * @return int
	 */
	public function getRead()
	{
		return $this->read;
	}
	/**
	 * Set draft
	 * @param int draft
	 * @return int
	 */
	public function setDraft($_draft)
	{
		return ($this->draft = $_draft);
	}
	/**
	 * Get draft
	 * @return int
	 */
	public function getDraft()
	{
		return $this->draft;
	}
	/**
	 * Set forwarded
	 * @param int forwarded
	 * @return int
	 */
	public function setForwarded($_forwarded)
	{
		return ($this->forwarded = $_forwarded);
	}
	/**
	 * Get forwarded
	 * @return int
	 */
	public function getForwarded()
	{
		return $this->forwarded;
	}
	/**
	 * Set ham
	 * @param int ham
	 * @return int
	 */
	public function setHam($_ham)
	{
		return ($this->ham = $_ham);
	}
	/**
	 * Get ham
	 * @return int
	 */
	public function getHam()
	{
		return $this->ham;
	}
	/**
	 * Set spam
	 * @param int spam
	 * @return int
	 */
	public function setSpam($_spam)
	{
		return ($this->spam = $_spam);
	}
	/**
	 * Get spam
	 * @return int
	 */
	public function getSpam()
	{
		return $this->spam;
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