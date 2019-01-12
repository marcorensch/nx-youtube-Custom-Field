# nx-YouTube Custom Field
##### Joomla! Custom Field to display a youtube Video

The free Joomla! Plugin nx-YouTube Custom Field is a new Custom Form Field which allows you to effortlessly embed a YouTube Video before or after any of your Joomla! Articles (like every other Custom Field). And yes, as it should be in the Year 2017 I’m glad to tell you: its fully responsive. Compared to the most other YouTube Embed Plugin, nx-YouTube Custom Field offers you an additional set of options which can be quick configured for every Frontend Instance of the Plugin.

## Live Demo
More Informations &amp; Live Demo can be found on this Page: http://ytcf.nx-designs.ch

## Requirements
1. Website running Joomla! Version 3.7.x
2. Link to your YouTube Video in one of the following Formats:<br>
  a. Full Link ("https://www.youtube.com/watch?v=OBkty9qjVsw")<br>
  b. Short Link ("https://youtu.be/OBkty9qjVsw")<br>
  c. Video ID ("OBkty9qjVsw")<br>
3. Last but not least, a cup of coffee, because coffee is never wrong...<br>

## Setup
1. Download the nx-YouTube Custom Field Plugin
2. Install it via Joomla! Backend --> Extensions --> Install
3. Activate the nx-YouTube Custom Field Plugin via Extensions --> Plugins
4. Add a new Custom Field and choose nx-YouTube Field as type

Read here How to use Custom Fields in joomla! 3.7 and above: https://docs.joomla.org/J3.x:Adding_custom_fields

## Adding a YouTube Video
After you have done the steps above you should be able to see your new nx-YouTube Field in the Fields Tab in the Editor View of your Article in the joomla! Backend. Here you have just to enter the Video ID or (Short-)URL of the desired YouTube Video you would like to display.


### Settings
<img src="https://github.com/marcorensch/nx-youtube-Custom-Field/blob/guide/img/Settings_1_EN.jpg" width="100%" />

#### Version 1.4 Additional Fields for Setup
<img src="https://github.com/marcorensch/nx-youtube-Custom-Field/blob/guide/img/v1.4updates.PNG" width="50%" />

__Please Note:__ Apple's Safari Browser on MacOS 10.13+ blocks video Autoplay with sound. There is actually no workaround for that behaviour. The User has to start the video playback manually.

### Enter Video ID or URL
<img src="https://github.com/marcorensch/nx-youtube-Custom-Field/blob/guide/img/Article_Settings_1_EN.jpg" width="100%" />

### Preview

<img src="https://github.com/marcorensch/nx-youtube-Custom-Field/blob/guide/img/nxyoutubecustomfield_JED_Views.jpg" width="100%" />

## Changelog

#### Version 1.3  

* Changed Service URL to YouTube NoCookie Domain (GDPR / DSGVO)

##### Version 1.3.1 

* The Plugin now loads jQuery from Joomla! if needed.  
(https://github.com/marcorensch/nx-youtube-Custom-Field/issues/5)

#### Version 1.4  

* Added Options to set Youtube Player Options
  * Autoplay  
  * Loop  
  * Subtitle
  * Keyboard Controls  
  * Controlbar  
  * Fullscreenbutton  
  * Modestbranding (YT Logo in Player Controlbar)  
  * iOS Inline Playback
* Code Optimizations
