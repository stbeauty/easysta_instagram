var instagram = { 
	listOfTags : {
		"main" : ["travel", "fashin", "food", "fitness", "photography", "art", "featured", "bodybuildning", "espn", "foodblog", "oneteaspoon", "homedesign", "menwithclass"],
		"girls" : ["swag", "sexy", "cool", "kik", "fashion", "igers", "instagramers", "style", "sweet", "eyes", "beauty", "girls", "love", "me", "cute", "picoftheday", "beautiful", "photooftheday", "photooftheday", "instagood", "fun", "smile", "pretty", "follow", "followme", "hair", "friends"],
		"travel" : ["countryside", "saarland", "kings_villages", "explorer", "chengdulife", "wanderfolk", "relax", "derbyshire", "earth", "countryside", "saarland", "kings_villages", "explorer"],
		"funny" : ["alifunny", "funbestvids", "halloween", "imgur", "vinevideo", "whatthefluff", "funny", "9gag", "alifunny", "funbestvids"],
		"inspirations" : ["fashionblog", "menwithstyle", "fitrotation", "modernoutdoors", "whatthefluff", "americanstyle", "igersone", "dynamicportraits", "ontheblog", "exploreeverything", "beach", "derbyshire", "menwithstyle", "fitrotation", "whatthefluff"]
	},
	useTemplait : "post.php",
	useLoop : false,
	useData : {},
	finishedLoading : false,
	loopCount : 0,
	name : "",
	templaits : {
		"" : "post",
		"inspirations" : "post" 
	}, 
	urls : {
		instagramUrl : "https://www.instagram.com/explore/tags/",
		templaitUrl : "",
		templaitLoader : "modules/ajax.php"
	},
	init : function () {
		if (this.templaits[this.getCPage()] == "post") {
			this.Post();
		} 
	},
	parseURLParams : function (url) {
    	var queryStart = url.indexOf("?") + 1,
        queryEnd   = url.indexOf("#") + 1 || url.length + 1,
        query = url.slice(queryStart, queryEnd - 1),
        pairs = query.replace(/\+/g, " ").split("&"),
        parms = {}, i, n, v, nv;

    	if (query === url || query === "") return;

    	for (i = 0; i < pairs.length; i++) {
        	nv = pairs[i].split("=", 2);
        	n = decodeURIComponent(nv[0]);
        	v = decodeURIComponent(nv[1]);

        	if (!parms.hasOwnProperty(n)) parms[n] = [];
   	    	parms[n].push(nv.length === 2 ? v : null);
    	}
    	return parms;
	},
	getUserInfo : function () {
		//https://i.instagram.com/api/v1/users/1527801058/info/
	},
	Post : function () {
		this.useTemplait = "post.php";
		this.useLoop = true;
		this.getInfoByTag();
	},
	getCPage : function () {
		let url = window.location.pathname;
		let page = url.slice(1, url.length-4);
		return page;
	},
	getInfoByTag : function () {
		//for (var i = 0; i < this.listOfTags.length; i++) {
			var loadData = this.listOfTags.main; 
			var parsData = this.parseURLParams(window.location.href); 
			
			if (parsData != undefined && parsData.lang == undefined && parsData.error == undefined) {
				var loadData = this.listOfTags[parsData.by[0]];
			}  

			instagram.finishedLoading = false;
			if (this.loopCount < loadData.length) { 
				this.getPost(this.urls.instagramUrl+loadData[this.loopCount]);
				this.loopCount = this.loopCount+1	
			}
		//}	  
	}, 
	setData: function (name, data) {
		return '<div class="container grid posts overhide auto-scroll">'+
      		'<h3 class="name"><span>'+ name +'</span></h3>'+
         	'<div class="row row-featured row-autoload">'+ 
            	data +
         	'</div>'+
        '</div>';
	},
	getTemplait : function (data) { 
		$.ajax({
  			type: "POST",
  			url: instagram.urls.templaitLoader,
  			data: {
  				"URL"  : this.templaitUrl + this.useTemplait,
  				"DATA" : data,
  				"Loop" : this.useLoop
  			},
  			success: function (data) { 
  				instagram.setTemplaits(instagram.setData(instagram.name, data)) 
  			}
		}); 
	}, 
	loginError : function () {
		var parsData = this.parseURLParams(window.location.href); 
		if (parsData.error != undefined){
			alert("Username OR Password Is Incorrect!");
			window.location.replace("http://easysta.com");
		}
	},
	getNextTagData : function () {
		if (this.getCPage() != "" && this.getCPage() != "inspirations") return null;
		setInterval(function(){  
			$(window).scroll(function() {
		    	if($(window).scrollTop() < $(document).height() - $(window).height()) {
		    		if (instagram.finishedLoading) { 
        		   		$('.posts-main').append('<img src="assets/img/loader.gif" id="loader-gif" class="loade-post" style="margin: auto auto;padding-top: 120px;display: block;"></div>');	
						instagram.Post();	
		    		} 
    			}
			}); 
		}, 500);
	},
	getPost : function (url) {
		$.get(url+"/?__a=1", function (data, status) { 
			this.name = data.graphql.hashtag.name;
			console.log(data);
			let dataInfo = {
				"ID"   	: data.graphql.hashtag.id,
				"Name" 	: data.graphql.hashtag.name,
				"Count"	: data.graphql.hashtag.edge_hashtag_to_media.count,
				"TemplaitName" : instagram.useTemplait
			}
			instagram.name = data.graphql.hashtag.name;
			if (instagram.useLoop) {
				data = data.graphql.hashtag.edge_hashtag_to_top_posts.edges;
			} else {
				data = data.graphql.hashtag.edge_hashtag_to_top_posts.edges[0].node;
			}

			console.log(data);

			data = {
				"Info" : dataInfo,
				"Data" : data,
				"CallBack" : "getTemplait"
			}
			
    		instagram.getTemplait(data);
		});
	}, 
	setTemplaits : function (Data) {
		$('.loade-post').css({'display' : 'none'});
		$('.posts-main').append(Data); 
		this.getNextTagData();
		instagram.finishedLoading = true;
	},
	pagination : function () {
	
		$( document ).ready(function() {
			$('.hashtag-data-container').infiniteScroll({ 
  				path: '.pagination__next',
  				append: '.post-hashtag-data',
  				tatus: '.scroller-status',
  				history: true,
  				loadOnScroll: true,
  				loading: {
				    img: "http://easysta.com/assets/img/loader.gif"
  				}
			}); 
		});
	}
}
instagram.pagination();
instagram.loginError();