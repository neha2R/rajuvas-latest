! function(s) {
    function t(t, e) {
        this.element = t, this.$elem = s(this.element), this.options = s.extend({}, a, e), this._defaults = a, this._name = i, this.init()
    }
    var i = "tabulous",
        a = {
            effect: "scale",
            target_class: "tab-content"
        };
    t.prototype = {
        init: function() {
            {
                var t = this.$elem.children("ul").find("a"),
                    i = this.$elem.find("li:first-child").find("a");
                this.$elem.find("ul.alltabs li:last-child").after('<span class="tabulousclear"></span>')
            }
            "scale" == this.options.effect ? tab_content = this.$elem.find("." + this.options.target_class).not(":first").not(":nth-child(1)").addClass("hidescale") : "slideLeft" == this.options.effect ? tab_content = this.$elem.find("." + this.options.target_class).not(":first").not(":nth-child(1)").addClass("hideleft") : "scaleUp" == this.options.effect ? tab_content = this.$elem.find("." + this.options.target_class).not(":first").not(":nth-child(1)").addClass("hidescaleup") : "flip" == this.options.effect && (tab_content = this.$elem.find("." + this.options.target_class).not(":first").not(":nth-child(1)").addClass("hideflip"));
            var a = this.$elem.find("#tabs_container"),
                e = a.find("div:first").height(),
                n = this.$elem.find("div:first").find("." + this.options.target_class);
            n.css({
                position: "absolute",
                top: "40px"
            }), a.css("height", e + "px"), i.addClass("tabulous_active"), t.bind("click", {
                myOptions: this.options
            }, function(i) {
                i.preventDefault();
                var e = i.data.myOptions,
                    d = e.effect,
                    l = s(this),
                    o = l.parent().parent().parent(),
                    h = l.attr("href");
                a.addClass("transition"), t.removeClass("tabulous_active"), l.addClass("tabulous_active"), thisdivwidth = o.find("div" + h).height(), "scale" == d ? (n.removeClass("showscale").addClass("make_transist").addClass("hidescale"), o.find("div" + h).addClass("make_transist").addClass("showscale")) : "slideLeft" == d ? (n.removeClass("showleft").addClass("make_transist").addClass("hideleft"), o.find("div" + h).addClass("make_transist").addClass("showleft")) : "scaleUp" == d ? (n.removeClass("showscaleup").addClass("make_transist").addClass("hidescaleup"), o.find("div" + h).addClass("make_transist").addClass("showscaleup")) : "flip" == d && (n.removeClass("showflip").addClass("make_transist").addClass("hideflip"), o.find("div" + h).addClass("make_transist").addClass("showflip")), a.css("height", thisdivwidth + "px")
            })
        },
        yourOtherFunction: function() {}
    }, s.fn[i] = function(s) {
        return this.each(function() {
            new t(this, s)
        })
    }
}(jQuery, window, document);