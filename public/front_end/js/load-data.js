$(document).ready(function() {
    loadData();
    loadCity();
    function loadData(search = {}, page = 0) {
        let url = "/ShareRoom/public/load-room";
        $.ajax({
            url: url,
            method: "GET",
            data: { search: search, page: page },
            success: function(data) {
                $("#product-data").html(data);
            }
        });
    }

    function loadCity() {
        let url = "/ShareRoom/public/load-city";
        $.ajax({
            url: url,
            method: "GET",
            data: { result: "city" },
            success: function(data) {
                $("#city").html(data);
            }
        });
    }

    $(".action").change(function() {
        if ($(this).val() != "") {
            var action = $(this).attr("id");
            var value = $(this).val();
            var result = "city";
            if (action == "city") {
                result = "district";
            } else {
                result = "street";
            }
            let url = "load-category";
            $.ajax({
                url: url,
                data: { action: action, value: value, result: result },
                success: function(data) {
                    loadData({ type: action, id: value });
                    $("#" + result).html(data);
                }
            });
        }
    });

    
});
