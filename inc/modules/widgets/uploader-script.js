// CTA Image Uploader Script.
var cta_bg_img_file;
jQuery(function(a) {
    jQuery(document).on("click", "input.select-img", function(b) {
        var c = a(this);
        b.preventDefault();
        var d = wp.media.controller.Library.extend({ defaults: _.defaults({ id: "cta-bg-insert-image", title: c.data("uploader_title"), allowLocalEdits: !1, displaySettings: !0, displayUserSettings: !1, multiple: !1, library: wp.media.query({ type: "image" }) }, wp.media.controller.Library.prototype.defaults) });
        cta_bg_img_file = wp.media.frames.cta_bg_img_file = wp.media({ button: { text: jQuery(this).data("uploader_button_text") }, state: "cta-bg-insert-image", states: [new d], multiple: !1 }), cta_bg_img_file.on("select", function() {
            var a = cta_bg_img_file.state("cta-bg-insert-image"),
                b = a.get("selection"),
                d = a.display(b.first()).toJSON(),
                e = b.first().toJSON();
            d = wp.media.string.props(d, e);
            var f = c.siblings(".image-url"),
                g = d.src;
            f.val(g);
            var h = c.parent('p').siblings(".cta-bg-img-preview-wrap");
            h.show(), h.find("img").attr("src", g)
        }), cta_bg_img_file.open()
    })
});