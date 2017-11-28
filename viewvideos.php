<html>
<head>
<title>utube hub
</title>
<link rel="stylesheet" type="text/css" href="css/style1.css"/>
</head>
	<body bgcolor="#ffffff">

<div id="top">
<center>
</br>
Watch YOUTUBE HUB online:<br>
&emsp;YouTube HUB is just a fast & better place for watching online videos & download for free.
<hr color="#333366">
</center>
</div>
<hr color="red">
<div id="container1">
				<div id="downleft"></br></br></br></br>
					<a href="front.php">Home</a> </br>
				
					<a href="list.php">Download list</a> 
										</br>
					<a href="popular1.php">Most popular</a> 	</br>
				
					<a href="upcoming1.php"> Upcoming Movies </a> </br>

					<a href="contactus.php"> About us </a> </br>

					
				
				</div>


<div id="downmid"></br></br></br>
<?php
    //Load The Google Api Client
    //Added Google Api Support 01/21/2016
    if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
        throw new \Exception('please run "composer require google/apiclient:~2.0" in "' . __DIR__ .'"');
      }
    
      require_once __DIR__ . '/vendor/autoload.php';
      


    //=================================================================================
    //START GOOGLE API INTEGRATION
    //=================================================================================
   

    if (isset($_GET['q']) && isset($_GET['maxResults'])) {


    $DEVELOPER_KEY = 'Your key';

  $client = new Google_Client();
  $client->setDeveloperKey($DEVELOPER_KEY);

  // Define an object that will be used to make all API requests.
  $youtube = new Google_Service_YouTube($client);

  try {
    // Call the search.list method to retrieve results matching the specified
    // query term.
    $searchResponse = $youtube->search->listSearch('id,snippet', array(
        'type' => 'video',
        'q' => $_GET['q'],
        'order'=> $_GET['order'],
      'maxResults' => $_GET['maxResults'],
    ));

    
    $videos = '';
    // Add each result to the appropriate list, and then display the lists of
    // matching videos.
    $i = 1;
    foreach ($searchResponse['items'] as $searchResult) 
    {
      switch ($searchResult['id']['kind']) 
      {
        case 'youtube#video':
          $videotitle = $searchResult['snippet']['title'];  
          $videoid = $searchResult['id']['videoId'];
          $videoembed = '<iframe width="150" height="150" src="http://www.youtube.com/embed/'.$videoid.'?autoplay=0&hd=1&vq=hd720" frameborder="0" allowfullscreen></iframe>';  
          
          $htmloutput .= '
          <table width="60%" align="center">
          <tr>
            <th colspan="2" align="left">'.$i.'. '.$videotitle.'</th>
          </tr>
          <tr>
            <td width="40%" align="center">'.$videoembed.'</td>
            <td width="60%" align="left">
                <form action="download.php" method="post" id="DownloadForm">
                    <input type="hidden" name="youtubeURL" value="'.$videoid.'">    
                     
                   <br> <h3 align="left"><b>Quality:</b></h3><select name="quality">
                        <option value="bestvideo">best</option>
                        <option value="360">360p</option>
                        <option value="480">480p</option>
                        <option value="720">720p</option>
                    </select><br><br>

                    <input type="radio" name="format" value="audio"> Audio
                    <input type="radio" name="format" value="video"> Video<br>
                    
                
                    <input type="submit" name="submit" value="Download!!!">
                </form> 
            </td>
          </tr><br>
          </table>
          ';
                   
          break;
      }
      $i++;
    }
    $videos .= $htmloutput;

    $htmlBody .= <<<END
    <h3><center>RESULTS...</center></h3>
				
				
    <ul>$videos</ul>
END;
  } catch (Google_Service_Exception $e) {
    $htmlBody .= sprintf('<p>A service error occurred: <code>%s</code></p>',
      htmlspecialchars($e->getMessage()));
  } catch (Google_Exception $e) {
    $htmlBody .= sprintf('<p>An client error occurred: <code>%s</code></p>',
      htmlspecialchars($e->getMessage()));
  }
}

    //=================================================================================
    //END GOOGLE API INTEGRATION
    //=================================================================================

?>
<?=$htmlBody?>
</div>





		<div id="downright"></br></br></br></br>
		<marquee direction="right" width="100%" style="background:#FF9900"><font color="#000">Watch & Download Videos Here!!! </font></marquee>
<marquee direction="left" width="100%" style="background:#ffffff"><font color="#000">Watch & Download Videos Here!!!</font></marquee>
<marquee direction="right" width="100%" style="background:#33ff00"><font color="#000">Watch & Download Videos Here!!!</font></marquee>
		</div>



</div>

</body>
</html>
