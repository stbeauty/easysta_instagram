<?php 

class nodes { 

	public function setData ($Data=null) {
		if (is_null($Data)) {
			Errors::setError('{"Mess" : "Error: No Data To See.", "Code" : "1"}'); 
			return null;
		}
		$this->Count = $Data['Info']['Count'];
		$this->ID = $Data['Info']['ID'];
		$this->TagName = $Data['Info']['Name'];  
	} 

	public function setNode ($Data=null) {
		if (is_null($Data)) return null;

		$this->Desc = isset($Data['edge_media_to_caption']['edges'][0]["node"]['text']) ? $Data['edge_media_to_caption']['edges'][0]["node"]['text'] : "No description";
		$this->PhotoImg = $Data['display_url'];
		$this->Liked = $Data['edge_liked_by']['count'];
		$this->Comment = $Data['edge_media_to_comment']['count'];
		$this->PostID = $Data['id'];
		$this->IsVideo = $Data['is_video'];
		$this->UserID = $Data['owner']['id'];
		$this->TimeStamp = $Data['taken_at_timestamp'];
		$this->ShortCode = $Data['shortcode'];
	}

	public function scrape_insta_hash($tag, $Url=null ) {
  		$insta_source = @file_get_contents('https://www.instagram.com/explore/tags/'.$tag.'/'); // instagrame tag url
  		if (!$insta_source) return null;
  		$shards = explode('window._sharedData = ', $insta_source);
  		$insta_json = explode(';</script>', $shards[1]);
  		$insta_array = json_decode($insta_json[0], TRUE);
  		return $insta_array; // this return a lot things print it and see what else you need
	} 

	public static function getPostInfo ($code=null) {
		if (is_null($code)) return null;

		$insta_source = file_get_contents('https://www.instagram.com/p/'.$code.'/?__a=1'); // instagrame tag url
  	
  		$insta_array = json_decode($insta_source, TRUE);
  		return $insta_array; // this return a lot things print it and see what else you need  
	}

	public static function getSearchUserPosts ($name=null) {
		if (is_null($name)) return null;

		$insta_source = file_get_contents('https://www.instagram.com/'. $name.'/?__a=1'); // instagrame tag url
   
  		$insta_array = json_decode($insta_source, TRUE);
   
  		$listByTag = [];
  		$data = $insta_array['graphql']['user'];
 
  		$listByTag['UserID'] = $data['id'];
 
  		//$data = @$data['edges']['edge_owner_to_timeline_media'];

  		$data = $data['edge_owner_to_timeline_media']['edges']; 

  		for ($i=count($data)-1; $i >= 0; $i--) {
  			$results_array = $data[$i]['node'];
		/*	echo "<pre>";
				print_r($results_array);
			echo "</pre>";*/
      		$listByTag[] = [
      			"Count" => 1,
				"ID" => $results_array['id'],
				"TagName" => "love",
      			"PhotoImg" => $results_array['display_url'],
        		"PostID" => $results_array['id'],
        		"Comment" => $results_array['edge_media_to_comment']['count'],
        		"Desc" => isset($results_array['edge_media_to_caption']['edges'][0]["node"]['text']) ? $results_array['edge_media_to_caption']['edges'][0]["node"]['text'] : "No description",
        		"IsVideo" => $results_array['is_video'],
        		"Liked" => $results_array['edge_liked_by']['count'],
        		"UserID" => $results_array['owner']['id'],
        		"TimeStamp" => $results_array['taken_at_timestamp'],
        		"ShortCode" => $results_array['shortcode']
      		];  
        		//"thumbnail"=>$latest_array['thumbnail_src'];
  			}
  		return $listByTag; // this return a lot things print it and see what else you need 
	}

	public function getList ($tag=null, $in_data=null, $Url=null) {
		 
		if (is_null($in_data)){
			if (is_null($tag)) return null;
			$results_array = $this->scrape_insta_hash($tag, $Url);	
		} else {
			$results_array = $in_data;
		}

		if (!$results_array) return null;
		 
		$this->listByTag = [];
		for ($i=200; $i >= 0; $i--) {
  			if(array_key_exists($i,$results_array['entry_data']['TagPage'][0]["graphql"]["hashtag"]["edge_hashtag_to_media"]["edges"])){
    		$latest_array = $results_array['entry_data']['TagPage'][0]["graphql"]["hashtag"]["edge_hashtag_to_media"]["edges"][$i]["node"];
    		
      		$this->listByTag[] = [
      			"Count" => 1,
				"ID" => $results_array['entry_data']['TagPage'][0]["graphql"]["hashtag"]['id'],
				"TagName" => $results_array['entry_data']['TagPage'][0]["graphql"]["hashtag"]['name'],
      			"PhotoImg" => $latest_array['display_url'],
        		"PostID" => $latest_array['id'],
        		"Comment" => $latest_array['edge_media_to_comment']['count'],
        		"Desc" => isset($latest_array['edge_media_to_caption']['edges'][0]["node"]['text']) ? $latest_array['edge_media_to_caption']['edges'][0]["node"]['text'] : "No description",
        		"IsVideo" => $latest_array['is_video'],
        		"Liked" => $latest_array['edge_liked_by']['count'],
        		"UserID" => $latest_array['owner']['id'],
        		"TimeStamp" => $latest_array['taken_at_timestamp'],
        		"ShortCode" => $latest_array['shortcode']
      		];  
        		//"thumbnail"=>$latest_array['thumbnail_src'];
  			}

		}
		return $this->listByTag;
	}

}
//Cod 69338b3d53ae4db28b94a3d083a53d97
//Tok 5517722981.3321214.58e2b4e659a44d5cb2b3bbfb45d05d87

?>