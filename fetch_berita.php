<?php
function rip_tags($string) { 
								    
								    // ----- remove HTML TAGs ----- 
								    $string = preg_replace ('/<[^>]*>/', ' ', $string); 
								    
								    // ----- remove control characters ----- 
								    $string = str_replace("\r", '', $string);    // --- replace with empty space
								    $string = str_replace("\n", ' ', $string);   // --- replace with space
								    $string = str_replace("\t", ' ', $string);   // --- replace with space
								    
								    // ----- remove multiple spaces ----- 
								    $string = trim(preg_replace('/ {2,}/', ' ', $string));
								    
								    return $string; 

								}
								
								$opts = array(
    									'http' => array(
      									'user_agent' => 'PHP libxml agent',
    									)
								);

								$context = stream_context_create($opts);					
								libxml_set_streams_context($context);

								$rss = new DOMDocument();
								$rss->load('http://www.info.diklatprofesi.com/feed/');
						
								$feed = array();
								foreach ($rss->getElementsByTagName('item') as $node) {
									$htmlStr = $node->getElementsByTagName('description')->item(0)->nodeValue;
  									$html = new DOMDocument(); 
  									libxml_use_internal_errors(true);       
  									$html->loadHTML($htmlStr);
  									libxml_use_internal_errors(false);
									//get the first image tag from the description HTML
        							$imgTag = $html->getElementsByTagName('img');
        							$img = ($imgTag->length==0)?'noimg.png':$imgTag->item(0)->getAttribute('src');
									$item = array ( 
										'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
										'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
										'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
										'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
										'image' => $img,
									);
									array_push($feed, $item);
								}
                                    
                    ?>