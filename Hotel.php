<?php

/**
 * Description of Hotel
 *
 * @author Adrià Cidre <adria.cidre@gmail.com>
 */
class Hotel 
{
    protected $_rooms = array();
    protected $_day;
 
    
    /**
     * Now constructor accepts dependency injection
     * @param type $day 
     */
    public function __construct($day = null)
    {
        if ($day == null) {
            $this->setDay(new Day());
        } else {
            $this->setDay($day);
        }
    }
    
    /**
     * Set the 
     */
    public function setDay($day)
    {
        $this->_day = $day;
    }
    
    /**
     * Get all rooms associated to hotel
     * @return Room
     */
    public function getRooms()
    {
        return $this->_rooms;
    }
    
    /**
     * Add a room to current hotel
     * @param Room $room 
     */
    public function addRoom(Room $room)
    {
        $this->_rooms[] = $room;
    }
 
    /**
     * Get hotel 'topRooms' for today
     * @return array
     */
    public function getTopRoomsForToday()
    {
        $result = array();
        
        $todayTopRooms = $this->_day->getTopRooms();
        
        foreach ($todayTopRooms as $room) {
            foreach ($this->getRooms() as $myRoom) {
                if ($room == $myRoom->getName()) {
                    $result[] = $myRoom;
                }
            }
        }
         
        return $result;
    }
}
