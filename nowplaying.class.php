<?php

/**
* Class that returns the track a user is currently playing via Last.fm
*
* @author       Erik Jansson <hello@erikjansson.com>
* @copyright    2011 Erik Jansson
*
*/

class NowPlaying{

    private $url;
    private $noTrackPlayingMessage;

    function __construct($user, $api_key){

        // construct URL
        $this->url  = 'http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&limit=1';
        $this->url .= '&user=' . $user . '&api_key=' . $api_key;

        // default message
        $this->noTrackPlayingMessage = 'Nothing is playing right now!';
    }
    
    // return the artist and track currently playing
    public function getNowPlaying(){

        // create an XML object
        $xml = simplexml_load_file($this->url);

        // get the latest track
        $track = $xml->recenttracks->track;

        // check if the track is actually playing 
        $nowplaying = $track->attributes()->nowplaying;
        
        // return the track and artist if music is playing, otherwise show message
        if($nowplaying){
            $artist = $track->artist;
            $songname = $track->name;
            return $artist . ' - ' . $songname;
        }
        else{
            return $this->noTrackPlayingMessage;
        }
    }
    
    // set the message to be shown when no music is playing
    public function setNoTrackPlayingMessage($messageIn){
        $this->noTrackPlayingMessage = $messageIn;
    }

} // end class
