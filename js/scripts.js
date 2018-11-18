$(function () {
    $("#search").click(function () {

        let searchTerm = $("#searchTerm").val();
        let errors = $('#errors');
		let result = $('#result');
        $(errors).html('');

        if (searchTerm.length < 1) {
            $(errors).append(
                "<div class='alert alert-danger' role='alert'>" +
                "<strong>Too short search term!</strong></div>"
            );
			result.html('');
        }
        else {

            let url = "https://en.wikipedia.org/w/api.php?action=opensearch&search=" + searchTerm + "&format=json&callback=?";
            $.ajax({
                method: 'GET',
                url: url,
                dataType: 'json',
                success: function (data) {

                    let length = data[1].length;         
                    let searchTerm = $('#searchTerm');

                    if (length < 1) {
                        $(errors).append(
                            "<div class='alert alert-danger' role='alert'>" +
                            "<strong>Enter correct search term!</strong></div>"
                        );
                        searchTerm.val("");
						result.html('');
                    }
                    else {
                        result.html('');
                        for (let i = 0; i < length; i++) {
                            $(result).append("<li><h4><a href=" + data[3][i] + " target='_blank'>" + data[1][i] + "</a></h4>" +
                                "<p>" + data[2][i] + "</p>" + "</li>");
                        }
                        searchTerm.val("");
                    }

                },
                error: function (errorMessage) {
                    $(errors).append(
                        "<div class='alert alert-danger' role='alert'>" +
                        "<strong>Error</strong></div>"
                    );
                }
            });
        }
    });

});