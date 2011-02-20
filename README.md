# Now Playing

Class that returns information about the current track playing, using the Last.fm API. 

Requires PHP 5.

----

Erik Jansson - erik at eriknow dot com

----
 
For this script to work, you need to apply for a Last.fm API account: http://www.last.fm/api/account
 
----

## Bare bones usage:
 
    require_once 'nowplaying.class.php';
    $nowPlaying = new NowPlaying('Username', 'API key');
    $playing->setNoTrackPlayingMessage('My custom message!'); // optional
    echo $playing->getNowPlaying();
    
----
 
## Step-by-step usage:

1. Assuming the class file resides in the same directory as your
 script, include it as such: `require_once 'nowplaying.class.php';`

2. Then, instantiate the class: `$nowPlaying = new NowPlaying('Username', 'API key');`
    - The first parameter is the Last.fm username you want data from.
    - The second parameter is the API key which you will find in your API account after signing up: http://www.last.fm/api/account

3. To display the current track playing, call the getNowPlaying() method: `echo $playing->getNowPlaying();`

4. When no music is currently being played, a message will be shown 
   saying so. This message can be customized with `setNoTrackPlayingMessage()`: `$playing->setNoTrackPlayingMessage('My custom message!');
   
   Remember to call this method before `getNowPlaying()`, otherwise your custom
   message won't be used.
   
----

## License

Copyright (C) 2011 by Erik Jansson

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

----

If anything is unclear, shoot me an email: erik at eriknow dot com
 
Erik Jansson  
2011