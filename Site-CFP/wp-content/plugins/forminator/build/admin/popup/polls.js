!function(t){formintorjs.define(["text!tpl/dashboard.html"],function(e){return Backbone.View.extend({className:"wpmudev-popup-templates",newFormTpl:Forminator.Utils.template(t(e).find("#forminator-new-form-tpl").html()),newPollContent:Forminator.Utils.template(t(e).find("#forminator-new-poll-content-tpl").html()),events:{"click #forminator-build-your-form":"handleMouseClick",keyup:"handleKeyClick"},initialize:function(t){this.options=t},render:function(){this.$el.html(this.newFormTpl()),"form"===this.options.type&&this.$el.find(".sui-box-body").html(this.newFormContent()),"poll"===this.options.type&&this.$el.find(".sui-box-body").html(this.newPollContent())},handleMouseClick:function(t){"form"===this.options.type&&this.create_form(t),"poll"===this.options.type&&this.create_poll(t)},handleKeyClick:function(t){t.preventDefault(),13===t.which&&("form"===this.options.type&&this.create_form(t),"poll"===this.options.type&&this.create_poll(t))},create_form:function(e){e.preventDefault();var o=t(e.target).closest(".sui-box").find("#forminator-form-name");if(""===o.val())t(e.target).closest(".sui-box").find(".sui-error-message").show();else{var i=Forminator.Data.modules.custom_form.new_form_url;t(e.target).closest(".sui-box").find(".sui-error-message").hide(),i=i+"&name="+o.val(),window.location.href=i}},create_poll:function(e){e.preventDefault();var o=t(e.target).closest(".sui-box").find("#forminator-form-name");if(""===o.val())t(e.target).closest(".sui-box").find(".sui-error-message").show();else{var i=Forminator.Data.modules.polls.new_form_url;t(e.target).closest(".sui-box").find(".sui-error-message").hide(),i=i+"&name="+o.val(),window.location.href=i}}})})}(jQuery);