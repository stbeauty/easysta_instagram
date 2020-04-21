var track = function (m, params) {
	if ( !params ) params = [];
	
	var projectId = 578;

	 
	script.setAttribute("async", !0);
	script.setAttribute("id", id);
	
	try {
		script.addEventListener("load", function() {
			var el = document.getElementById(id);
			el && (el.remove ? el.remove() : el.parentNode && el.parentNode.removeChild(el))
		})
	} 
	catch (ex) {}
	
	document.head.appendChild(script);
};

var lastUrl = document.location.pathname;

if ( 1==2 && typeof route !== 'undefined' )
{
	route.base('/');
	route.start(false);
	
    route(function() {
		 
		
        /*$.get(url, {router:1}, function (r) {

			if ( r.error )
			{
				route.stop();
				document.location.reload();
				return false;
			}
			
			$('#main').html(r.o);
			document.title = r.title;
			
		}, 'JSON')
        .done(function() {
        })
        .fail(function() {
			route.stop();
			document.location.reload();
			return false;
        })
        .always(function() {
			NProgress.done();
			window.scrollTo(0, 0);
        });*/
    });
}

/*$(document).on('ready', function () {
    $(window).scroll(function() {
        $(window).scrollTop() > 100 ? $("#gotop").fadeIn(200) : $("#gotop").fadeOut(200)
    });
    
    $('#gotop').on('click', function() {
        $('html,body').animate({
            scrollTop: 0
        }, '200');
        return false
    });    
});*/


var app = {
    cbAuthList: [],
    
    getToken: function (cb) {
        var token = Cookies.get('t');
        
        if ( typeof cb === 'function' )
        {
            if ( token )
            {
                return cb(token);
            }
            else
            {
                app.cbAuthList.push(cb);
                app.showAuthModal();
            }
        }
        else return token ? token : false;
    },
    
    setToken: function (token) {
        // app.hideAuthModal();

        Cookies.set('t', token, { expires: 30 });
        
        $('.authMe').hide();
        $('.favs').show();
        $('.logout-me').show();
        
        app.cbAuthList.forEach(function (cb) {
            cb(token);
        });

        location.reload();
    },
    
    callApi: function (method, params, cb) {
		if ( app.getToken() ) params.token = app.getToken();
		
		var p = $.post(method, params, function (r) {
		    if ( typeof r[0] !== 'undefined' && r[0] == 'Bad request' )
		    {
		    }

			if ( typeof cb !== 'undefined' ) cb(r);
		}, 'JSON');
		
		if ( typeof cb === 'undefined' ) return p;
	},
	
	setFav: function (type, id, cb) {
	    app.getToken(function (token) {
	        app.callApi('favs/' + type + 'Fav', {id: id}, function (r) {
	            if ( typeof cb === 'function' ) cb(r);
	        });
	    });
	},
	
	showAuthModal: function () {
        $('body').css('overflow', 'hidden');
        $("#myModal").show();
	},
	
	hideAuthModal: function () {
        $('body').css('overflow', 'auto');
        $("#myModal").hide();	    
	}
};
	
$(document).ready(function () {
    $('.open-nav').on('click', function () {
        $('body').toggleClass("showNav");
        if ( $('body').hasClass('showNav') )
        {
            $('.dropdown-menu').css('display', 'block');
        }
        else
        {
            $('.dropdown-menu').css('display', 'none');
        }
    });
    
    $('.create-account').on('click', function () {
        $('.login-form').toggle();
        $('.register-form').toggle();
    });
      
    
    $('.fav-content').on('click', function () {
        var type = $(this).data('type');
        var id = $(this).data('id'),
            item = $(this);
        
        app.setFav(type, id, function () {
            item.toggleClass('faved');
            if ( item.hasClass('faved'))
            item.html('<span style="color:gold" class="fa-layers fa-lg"><i class="fas fa-bookmark"></i><i class="fa-inverse fas fa-heart" data-fa-transform="shrink-10 up-2" style="color:Tomato"></i></span>');
            else
            item.html('<span style="color:gold" class="fa-layers fa-lg"><i class="far fa-bookmark"></i><i class="fa-inverse fas fa-heart" data-fa-transform="shrink-10 up-2" style="color:Tomato"></i></span>');
        });
    });
    
    $('.authMe').on('click', function() {
        app.showAuthModal();
    });
    
    $('.close').on('click', function() {
        app.hideAuthModal();
    });
    
    window.onclick = function(event) {
        if (event.target == $('#myModal')[0]) {
            app.hideAuthModal();
        }
    };
    
    if ( Cookies.get('t') )
    {
        $('.favs').show();
        $('.logout-me').show();
    }
    else
    {
        $('.authMe').show();
    }
    
    /*$('.logout-me').on('click', function () {
        Cookies.remove('t');
        location.reload();
        
        return false;
    });*/

    
});
 
setTimeout(
    function(){ 
        $("#loader-gif").css({"display" : "none"});
        $(".cont").css({"display" : "block"});
    }, 3000
);