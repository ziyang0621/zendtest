var Mi_Util = {
	smlChangeBig: function(a) {
		var b = a.ele_small,
		c = a.ele_big,
		d = a.ele_small_bold,
		e = a.ele_loop,
		f = 0,
		g = a.ele_hashFlag,
		h = a.ele_big_b,
		i = a.ele_small_b;
		if (b.each(function(a) {
			$(this).click(function() {
				b.parent().attr("data-num", a),
				$(this).siblings().removeClass(d),
				$(this).addClass(d),
				c.hide().eq(a).show(),
				g && (location.hash = $(this).attr("data-hash")),
				h && h.hide().eq(a).show(),
				i && (i.siblings().removeClass(d), i.eq(a).addClass(d), $("html").animate({
					scrollTop: 0
				},
				500), $(document.body).animate({
					scrollTop: 0
				},
				500))
			})
		}), e) {
			var j = b.length,
			k = function() {
				f = parseInt(b.parent().attr("data-num")),
				f++,
				f == j && (f = 0),
				b.parent().attr("data-num", f),
				c.hide().eq(f).show(),
				b.siblings().removeClass(d),
				b.eq(f).addClass(d),
				h && h.hide().eq(f).show()
			};
			setInterval(k, 3e3)
		}
	},
	slide: function(a) {
		var b = this,
		c = a.ele_dot,
		d = a.ele_page,
		e = a.amount,
		f = a.ele_dot_class,
		g = a.ele_main,
		h = a.ele_descp,
		i = a.ele_shift,
		j = a.ele_children,
		k = function(a) {
			var j = b.isCss3(),
			k = -(a - 1) * i;
			j ? b.translate(g, k) : g.animate({
				marginLeft: k + "px"
			},
			200),
			c && c.removeClass(f).eq(a - 1).addClass(f),
			d && (1 == a ? (d.find(".J_prev").hide(), d.find(".J_next").show()) : a == e ? (d.find(".J_prev").show(), d.find(".J_next").hide()) : (d.find(".J_next").show(), d.find(".J_prev").show())),
			h && (h.hide(), h.eq(a - 1).show())
		};
		c && c.each(function(a) {
			$(this).click(function() {
				var b = a + 1;
				g.attr("data-num", b),
				k(b)
			})
		}),
		j && j.each(function(a) {
			$(this).click(function() {
				var b = a + 1;
				g.attr("data-num", b),
				k(b)
			})
		}),
		d && (d.find(".J_prev").click(function() {
			var a = parseInt(g.attr("data-num")),
			b = a - 1;
			1 > b && (b = 1),
			g.attr("data-num", b),
			k(b)
		}), d.find(".J_next").click(function() {
			var a = parseInt(g.attr("data-num")),
			b = a + 1;
			b > e - 1 && (b = e),
			g.attr("data-num", b),
			k(b)
		}))
	},
	pageChangeBig: function(a) {
		var b = a.ele_page,
		c = a.ele_big,
		d = a.ele_sml,
		e = function(a) {
			c.hide().eq(a).show(),
			d.hide().eq(a).show()
		};
		b.find(".J_prev").click(function() {
			var a = parseInt(c.parent().attr("data-num")),
			b = a - 1;
			0 > b && (b = 0),
			picMainObj.attr("data-num", b),
			e(b)
		}),
		b.find(".J_next").click(function() {
			var a = parseInt(c.parent().attr("data-num")),
			b = a + 1;
			b > amount - 1 && (b = amount - 1),
			picMainObj.attr("data-num", b),
			e(b)
		})
	},
	isCss3: function() {
		var a = document.createElement("p").style,
		b = ["ms", "O", "Moz", "Webkit"];
		if ("" === a.transition) return ! 0;
		for (; b.length;) return b.pop() + "Transition" in a ? !0 : !1
	},
	translate: function(a, b) {
		a.css("-webkit-transform", "translate3d(" + b + "px,0px,0px)").css("-moz-transform", "translate3d(" + b + "px,0px,0px)").css("-o-transform", "translate3d(" + b + "px,0px,0px)").css("transform", "translate3d(" + b + "px,0px,0px)")
	},
	eyeScroll: function(a) {
		var b = [],
		c = function() {
			for (var c in a) {
				var d = a[c];
				b.push(d.offset().top)
			}
		};
		c(),
		$(window).on("scroll",
		function() {
			var c = $(document).scrollTop();
			for (var d in b) {
				var e = b[d];
				if (c > e) {
					var f = c - e,
					g = f,
					h = g - 100;
					a[d].css("margin-top", h)
				}
			}
		})
	}
};
XIAOMI.namespace("pad"),
XIAOMI.pad = {
	config: function() {},
	init: function() {
		var a = this;
		a.config(),
		a.runAll()
	},
	runAll: function() {
		var a = this;
		a.bingClick(),
		a.checkUrl(),
		a.cpuClick(),
		a.videoClick(),
		a.animate()
	},
	bingClick: function() {
		var a = {
			ele_small: $("#J_head_rightCon").find(".tab"),
			ele_big: $(".J_pad_block"),
			ele_small_bold: "bold",
			ele_hashFlag: !0,
			ele_small_b: $("#J_head_rightCon_bottom").find(".tab")
		};
		Mi_Util.smlChangeBig(a);
		var b = {
			ele_small: $("#J_head_rightCon_bottom").find(".tab"),
			ele_big: $(".J_pad_block"),
			ele_small_bold: "bold",
			ele_hashFlag: !0,
			ele_small_b: $("#J_head_rightCon").find(".tab")
		};
		Mi_Util.smlChangeBig(b);
		var c = {
			ele_small: $(".J_pad_miui_video_nav").find("li"),
			ele_big: $(".J_pad_miui_list").find("li"),
			ele_small_bold: "bold",
			ele_loop: !0,
			ele_big_b: $(".J_pad_miui_font_list").find("li")
		};
		Mi_Util.smlChangeBig(c);
		var d = {
			ele_small: $(".J_miui_nav").find("li"),
			ele_big: $(".J_miui_list").find("img"),
			ele_small_bold: "bold",
			ele_big_b: $(".J_miui_nav_font").find("li")
		};
		Mi_Util.smlChangeBig(d);
		var e = {
			ele_main: $(".J_miui_game_list"),
			ele_page: $(".J_miui_game_forward"),
			ele_descp: $(".J_miui_game_content").find("li"),
			amount: $(".J_miui_game_list").find("li").length,
			ele_shift: 804,
			ele_children: $(".J_miui_game_list").find("li")
		};
		Mi_Util.slide(e);
		var f = {
			ele_main: $(".J_app_img_list"),
			ele_dot_class: "bold",
			ele_page: $(".J_app_img_page"),
			ele_dot: $(".J_app_img_nav").find("li"),
			amount: $(".J_app_img_list").find("li").length,
			ele_shift: 804
		};
		Mi_Util.slide(f)
	},
	checkUrl: function() {
		var a = location.hash,
		b = [];
		$(".J_toogleWin").click(function() {
			var a = $(this).attr("href");
			return c(a),
			$("html").animate({
				scrollTop: 0
			},
			500),
			$(document.body).animate({
				scrollTop: 0
			},
			500),
			!1
		});
		var c = function(a) {
			var c = a;
			location.hash = a;
			$("#J_head_rightCon").find(".tab").siblings().removeClass("bold");
			$("#J_head_rightCon").find(".tab").each(
				function(i){
					if ((i+1) == a){
						$(this).addClass("bold");
					}
				}
			); 
			$("#J_head_rightCon_bottom").find(".tab").siblings().removeClass("bold"); 
			
			$("#J_head_rightCon_bottom").find(".tab").each(
				function(i){
					if ((i+1) == a){
						$(this).addClass("bold");
					}
				}
			);
			$(".J_pad_block").hide();
			$(".pad-container .pad-"+a).show();
		};
		
	},
	scroll: function() {
		var a = [];
		a.push($(".J_pad_design_blue")),
		Mi_Util.eyeScroll(a)
	},
	cpuClick: function() {
		var a = 0,
		b = $(".J_pad_cpu_nav").find(".J_mid").find(".namelist"),
		c = b.length,
		d = function(a) {
			b.hide().eq(a).show(),
			$(".J_pad_cpu_show")[0].className = $(".J_pad_cpu_show")[0].className.replace(/\bshow_.*\b/g, "");
			var c = b.eq(a).attr("data-class"),
			d = b.eq(a).attr("data-amount-a"),
			e = b.eq(a).attr("data-amount-b");
			$(".J_pad_cpu_show").addClass(c),
			$(".J_pad_cpu_show").find(".green").find(".rightpart").html(d),
			$(".J_pad_cpu_show").find(".gray").find(".rightpart").html(e)
		};
		$(".J_pad_cpu_nav").find(".J_prev").click(function() {
			a--,
			0 > a && (a = c - 1),
			d(a)
		}),
		$(".J_pad_cpu_nav").find(".J_next").click(function() {
			a++,
			a > c - 1 && (a = 0),
			d(a)
		})
	},
	videoClick: function() {
		var a = function(a) {
			var b = "<embed allowfullscreen='true' allowscriptaccess='sameDomain' height='400' src='http://player.youku.com/player.php/sid/" + a + "/v.swf' type='application/x-shockwave-flash' width='530' quality='high' align='middle'/></embed>";
			return b
		};
		$(".J_pad_video").click(function() {
			var b = $(this).attr("data-video");
			if (b) {
				var c = $("#pad_videowrap .modal-body"),
				d = a(b);
				if (b) return c.html(""),
				c.append(d),
				$("#pad_videowrap").modal("show"),
				!1
			}
		})
	},
	animate: function() {
		var a = 0,
		b = $(".J_pad_cpu_show").offset().top;
		$(window).on("scroll",
		function() {
			var c = $(document).scrollTop(),
			d = location.hash;
			"#function" == d && c > b - 800 && (a++, 1 === a && $(".J_pad_cpu_show").addClass("show_a"))
		})
	}
},
$(function() {
	XIAOMI.pad.init()
}),
function() {
	var a, b, c;
	a = jQuery,
	c = function() {
		function a() {
			this.fadeDuration = 500,
			this.fitImagesInViewport = !0,
			this.resizeDuration = 700,
			this.showImageNumberLabel = !0,
			this.wrapAround = !1
		}
		return a.prototype.albumLabel = function(a, b) {
			return "Image " + a + " of " + b
		},
		a
	} (),
	b = function() {
		function b(a) {
			this.options = a,
			this.album = [],
			this.currentImageIndex = void 0,
			this.init()
		}
		return b.prototype.init = function() {
			return this.enable(),
			this.build()
		},
		b.prototype.enable = function() {
			var b = this;
			return a("body").on("click", "a[rel^=lightbox], area[rel^=lightbox], a[data-lightbox], area[data-lightbox]",
			function(c) {
				return console.log(c, "sss"),
				b.start(a(c.currentTarget)),
				!1
			})
		},
		b.prototype.build = function() {
			var b = this;
			return a("<div id='lightboxOverlay' class='lightboxOverlay'></div><div id='lightbox' class='lightbox'><div class='lb-outerContainer'><div class='lb-container'><img class='lb-image' src='' /><div class='lb-nav'><a class='lb-prev' href='' ></a><a class='lb-next' href='' ></a></div><div class='lb-loader'><a class='lb-cancel'></a></div></div></div><div class='lb-dataContainer'><div class='lb-data'><div class='lb-details'><span class='lb-caption'></span><span class='lb-number'></span></div><div class='lb-closeContainer'><a class='lb-close'></a></div></div></div></div>").appendTo(a("body")),
			this.$lightbox = a("#lightbox"),
			this.$overlay = a("#lightboxOverlay"),
			this.$outerContainer = this.$lightbox.find(".lb-outerContainer"),
			this.$container = this.$lightbox.find(".lb-container"),
			this.containerTopPadding = parseInt(this.$container.css("padding-top"), 10),
			this.containerRightPadding = parseInt(this.$container.css("padding-right"), 10),
			this.containerBottomPadding = parseInt(this.$container.css("padding-bottom"), 10),
			this.containerLeftPadding = parseInt(this.$container.css("padding-left"), 10),
			this.$overlay.hide().on("click",
			function() {
				return b.end(),
				!1
			}),
			this.$lightbox.hide().on("click",
			function(c) {
				return "lightbox" === a(c.target).attr("id") && b.end(),
				!1
			}),
			this.$outerContainer.on("click",
			function(c) {
				return "lightbox" === a(c.target).attr("id") && b.end(),
				!1
			}),
			this.$lightbox.find(".lb-prev").on("click",
			function() {
				return b.changeImage(0 === b.currentImageIndex ? b.album.length - 1 : b.currentImageIndex - 1),
				!1
			}),
			this.$lightbox.find(".lb-next").on("click",
			function() {
				return b.changeImage(b.currentImageIndex === b.album.length - 1 ? 0 : b.currentImageIndex + 1),
				!1
			}),
			this.$lightbox.find(".lb-loader, .lb-close").on("click",
			function() {
				return b.end(),
				!1
			})
		},
		b.prototype.start = function(b) {
			var c, d, e, f, g, h, i, j, k, l, m, n, o;
			if (a(window).on("resize", this.sizeOverlay), a("select, object, embed").css({
				visibility: "hidden"
			}), this.$overlay.width(a(document).width()).height(a(document).height()).fadeIn(this.options.fadeDuration), this.album = [], g = 0, e = b.attr("data-lightbox")) for (n = a(b.prop("tagName") + '[data-lightbox="' + e + '"]'), f = j = 0, l = n.length; l > j; f = ++j) d = n[f],
			this.album.push({
				link: a(d).attr("href"),
				title: a(d).attr("title")
			}),
			a(d).attr("href") === b.attr("href") && (g = f);
			else if ("lightbox" === b.attr("rel")) this.album.push({
				link: b.attr("href"),
				title: b.attr("title")
			});
			else for (o = a(b.prop("tagName") + '[rel="' + b.attr("rel") + '"]'), f = k = 0, m = o.length; m > k; f = ++k) d = o[f],
			this.album.push({
				link: a(d).attr("href"),
				title: a(d).attr("title")
			}),
			a(d).attr("href") === b.attr("href") && (g = f);
			c = a(window),
			i = c.scrollTop() + c.height() / 10,
			h = c.scrollLeft(),
			this.$lightbox.css({
				top: i + "px",
				left: h + "px"
			}).fadeIn(this.options.fadeDuration),
			this.changeImage(g)
		},
		b.prototype.changeImage = function(b) {
			var c, d, e = this;
			this.disableKeyboardNav(),
			c = this.$lightbox.find(".lb-image"),
			this.sizeOverlay(),
			this.$overlay.fadeIn(this.options.fadeDuration),
			a(".lb-loader").fadeIn("slow"),
			this.$lightbox.find(".lb-image, .lb-nav, .lb-prev, .lb-next, .lb-dataContainer, .lb-numbers, .lb-caption").hide(),
			this.$outerContainer.addClass("animating"),
			d = new Image,
			d.onload = function() {
				var f, g, h, i, j, k, l;
				return c.attr("src", e.album[b].link),
				f = a(d),
				c.width(d.width),
				c.height(d.height),
				e.options.fitImagesInViewport && (l = a(window).width(), k = a(window).height(), j = l - e.containerLeftPadding - e.containerRightPadding - 20, i = k - e.containerTopPadding - e.containerBottomPadding - 110, (d.width > j || d.height > i) && (d.width / j > d.height / i ? (h = j, g = parseInt(d.height / (d.width / h), 10), c.width(h), c.height(g)) : (g = i, h = parseInt(d.width / (d.height / g), 10), c.width(h), c.height(g)))),
				e.sizeContainer(c.width(), c.height())
			},
			d.src = this.album[b].link,
			this.currentImageIndex = b
		},
		b.prototype.sizeOverlay = function() {
			return a("#lightboxOverlay").width(a(document).width()).height(a(document).height())
		},
		b.prototype.sizeContainer = function(a, b) {
			var c, d, e, f, g = this;
			f = this.$outerContainer.outerWidth(),
			e = this.$outerContainer.outerHeight(),
			d = a + this.containerLeftPadding + this.containerRightPadding,
			c = b + this.containerTopPadding + this.containerBottomPadding,
			this.$outerContainer.animate({
				width: d,
				height: c
			},
			this.options.resizeDuration, "swing"),
			setTimeout(function() {
				g.$lightbox.find(".lb-dataContainer").width(d),
				g.$lightbox.find(".lb-prevLink").height(c),
				g.$lightbox.find(".lb-nextLink").height(c),
				g.showImage()
			},
			this.options.resizeDuration)
		},
		b.prototype.showImage = function() {
			this.$lightbox.find(".lb-loader").hide(),
			this.$lightbox.find(".lb-image").fadeIn("slow"),
			this.updateNav(),
			this.updateDetails(),
			this.preloadNeighboringImages(),
			this.enableKeyboardNav()
		},
		b.prototype.updateNav = function() {
			this.$lightbox.find(".lb-nav").show(),
			this.album.length > 1 && (this.options.wrapAround ? this.$lightbox.find(".lb-prev, .lb-next").show() : (this.currentImageIndex > 0 && this.$lightbox.find(".lb-prev").show(), this.currentImageIndex < this.album.length - 1 && this.$lightbox.find(".lb-next").show()))
		},
		b.prototype.updateDetails = function() {
			var a = this;
			"undefined" != typeof this.album[this.currentImageIndex].title && "" !== this.album[this.currentImageIndex].title && this.$lightbox.find(".lb-caption").html(this.album[this.currentImageIndex].title).fadeIn("fast"),
			this.album.length > 1 && this.options.showImageNumberLabel ? this.$lightbox.find(".lb-number").text(this.options.albumLabel(this.currentImageIndex + 1, this.album.length)).fadeIn("fast") : this.$lightbox.find(".lb-number").hide(),
			this.$outerContainer.removeClass("animating"),
			this.$lightbox.find(".lb-dataContainer").fadeIn(this.resizeDuration,
			function() {
				return a.sizeOverlay()
			})
		},
		b.prototype.preloadNeighboringImages = function() {
			var a, b;
			this.album.length > this.currentImageIndex + 1 && (a = new Image, a.src = this.album[this.currentImageIndex + 1].link),
			this.currentImageIndex > 0 && (b = new Image, b.src = this.album[this.currentImageIndex - 1].link)
		},
		b.prototype.enableKeyboardNav = function() {
			a(document).on("keyup.keyboard", a.proxy(this.keyboardAction, this))
		},
		b.prototype.disableKeyboardNav = function() {
			a(document).off(".keyboard")
		},
		b.prototype.keyboardAction = function(a) {
			var b, c, d, e, f;
			b = 27,
			c = 37,
			d = 39,
			f = a.keyCode,
			e = String.fromCharCode(f).toLowerCase(),
			f === b || e.match(/x|o|c/) ? this.end() : "p" === e || f === c ? 0 !== this.currentImageIndex && this.changeImage(this.currentImageIndex - 1) : ("n" === e || f === d) && this.currentImageIndex !== this.album.length - 1 && this.changeImage(this.currentImageIndex + 1)
		},
		b.prototype.end = function() {
			return this.disableKeyboardNav(),
			a(window).off("resize", this.sizeOverlay),
			this.$lightbox.fadeOut(this.options.fadeDuration),
			this.$overlay.fadeOut(this.options.fadeDuration),
			a("select, object, embed").css({
				visibility: "visible"
			})
		},
		b
	} (),
	a(function() {
		var a, d;
		return d = new c,
		a = new b(d)
	})
}.call(this);