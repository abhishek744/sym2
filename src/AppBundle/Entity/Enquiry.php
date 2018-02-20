<?php

namespace AppBundle\Entity;

class Enquiry{

	protected $destination;
	protected $checkIn;
	protected $checkOut;
	protected $adult;
	protected $children;
	protected $room;

	public function getDestination()
	{
		return $this->destination;
	}

	public function setDestination($destination)
	{
		$this->enquiry = $destination;
	}

	public function getCheckIn()
	{
		return $this->checkIn;
	}

	public function setCheckIn($checkIn)
	{
		$this->enquiry = $checkIn;
	}

	public function getCheckOut()
	{
		return $this->checkOut;
	}

	public function setCheckOut($checkOut)
	{
		$this->enquiry = $checkOut;
	}

	public function getAdult()
	{
		return $this->adult;
	}

	public function setAdult($adult)
	{
		$this->enquiry = $adult;
	}


	public function getChildren()
	{
		return $this->children;
	}

	public function setChildren($children)
	{
		$this->enquiry = $children;
	}

	public function getRoom()
	{
		return $this->room;
	}

	public function serRoom($room)
	{
		$this->enquiry = $room;
	}

}