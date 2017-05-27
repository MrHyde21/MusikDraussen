
/*
$(".extendBtn").click(function () {

	$button = $(this);
    //getting the next element
    $content = $button.prev();
    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    $content.slideToggle(500, function () {
        //execute this after slideToggle is done
        //change text of header based on visibility of content div
        $button.text(function () {
            //change text based on condition
            return $content.is(":visible") ? "Less" : "More";
        });
    });

});*/

function confirmation(question) {
    var defer = $.Deferred();
    $('<div></div>')
        .html(question)
        .dialog({
            autoOpen: true,
            modal: true,
            title: 'Confirmation',
            buttons: {
                "Yes": function () {
                    defer.resolve("true");//this text 'true' can be anything. But for this usage, it should be true or false.
                    $(this).dialog("close");
                },
                "No": function () {
                    defer.resolve("false");//this text 'false' can be anything. But for this usage, it should be true or false.
                    $(this).dialog("close");
                }
            },
            close: function () {
              	$(this).dialog('destroy').remove()
            }
        });
    return defer.promise();
}

function removeArticle(){
	var question="Do you really want to delete the post";
	confimation(question).then(function (answer) {
        var ansbool = Boolean.parse(answer.toString());
        if(ansbool){
            alert("this is obviously " + ansbool);//TRUE
        } else {
            alert("and then there is " + ansbool);//FALSE
        }
    });
}
