<html>
<head>
<title>result
</title>
<link rel="stylesheet" type="text/css" href="css/style21.css"/>
</head>
<body>
      <div id="container">


           <div id="header">
               <h1>RESULT For SEARCHED TEXT</h1>
           </div>    



            <div id="body1">
			    <div id="left-nav">
			    <div class="nav">
					    <a href="#">Home</a>
				
					    <a href="#">Release</a>
				
					    <a href="#">Upcomming</a>
				
					    <a href="#">Watch later</a>
				
					    <a href="#">Most popular</a>
				
					    <a href="#">About us</a>
				
					    <a href="#">FAQ</a>
				
					    <a href="#">Feedback</a>
			    </div>
			    </div>



			    <div id="right">
			    <div class="nav">
					    <a href="#">History</a>
				
					    <a href="#">Download list</a>
				
					    <a href="#">How to use</a>
				
					
			    </div>

                </div>
                


                <div id="right-nav">
			
			         <div id="right-top">
                     <?php

/**
 * Library Requirements
 *
 * 1. Install composer (https://getcomposer.org)
 * 2. On the command line, change to the project directory
 * 3. Require the google/apiclient library
 *    $ composer require google/apiclient:~2.0
 */
if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
  throw new \Exception('please run "composer require google/apiclient:~2.0" in "' . __DIR__ .'"');
}

require_once __DIR__ . '/vendor/autoload.php';


// This code will execute if the user entered a search query in the form
// and submitted the form. Otherwise, the page displays the form above.
if (isset($_GET['q']) && isset($_GET['maxResults'])) {
  /*
   * Set $DEVELOPER_KEY to the "API key" value from the "Access" tab of the
   * {{ Google Cloud Console }} <{{ https://cloud.google.com/console }}>
   * Please ensure that you have enabled the YouTube Data API for your project.
   */
  $DEVELOPER_KEY = 'AIzaSyCCwFZpfhRD3DD-7TioHcbOZTAeOHbB2r8';

  $client = new Google_Client();
  $client->setDeveloperKey($DEVELOPER_KEY);

  // Define an object that will be used to make all API requests.
  $youtube = new Google_Service_YouTube($client);

  $htmlBody = '';
  try {

    // Call the search.list method to retrieve results matching the specified
    // query term.
    $searchResponse = $youtube->search->listSearch('id,snippet', array(
        'type' => 'video',
        'q' => $_GET['q'],
        'order'=> $_GET['order'],
      'maxResults' => $_GET['maxResults'],
    ));


   // $videos = '';
    

    // Add each result to the appropriate list, and then display the lists of
    // matching videos.
    foreach ($searchResponse['items'] as $searchResult) {
      
          $videos .= sprintf('<li>%s %s <br><br> <li>%s</li><br>',
          $searchResult['snippet']['title'],
          '<a href="http://localhost/examp2/downloadvideo.php"><button>Download Here!!!</button></a>',
           '<iframe width="300" height="200" src="https://www.youtube.com/embed/' . $searchResult['id']['videoId'] . '" frameborder="0" allowfullscreen></iframe>');
            
    }

    $htmlBody .= <<<END
    <h3>Videos</h3>
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
?>


    <?=$htmlBody?>


</div>
</div>


    
</div>
</body>
</html>
