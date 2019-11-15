$(document).ready(function() {
    loadData();
    loadCity();
    function loadData(search = {}, page = 1, sort = "ASC") {
        let url = "/ShareRoom/public/load-room";
        $.ajax({
            url: url,
            method: "GET",
            data: {
                search: search,
                page: page,
                sort: sort,
                check: $("#checkIdUser").val()
            },
            success: function(data) {
                $("#product-data").html(data);
            }
        });
    }

    function loadCity() {
        var city_id = "";
        if ($("#city_hidden").val() != "") {
            city_id = $("#city_hidden").val();
        }
        let url = "/ShareRoom/public/load-city";
        $.ajax({
            url: url,
            method: "GET",
            data: { result: "city", city_id: city_id },
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
            let url = "/ShareRoom/public/load-category";
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

    $(".page").each(function() {
        $(this).click(function(e) {
            var city = $("#city");
            var district = $("#district");
            var street = $("#street");
            e.preventDefault();
            var page = $(this).attr("id");
            if (street.val() != "street") {
                loadData({ type: "street", id: street.val() }, page);
            } else if (district.val() != "district") {
                loadData({ type: "district", id: district.val() }, page);
            } else if (city.val() != "city") {
                loadData({ type: "city", id: city.val() }, page);
            } else {
                loadData({}, page);
            }
        });
    });

    $(".option").change(function() {
        var city = $("#city");
        var district = $("#district");
        var street = $("#street");
        var page = $(this).attr("id");
        if (street.val() != "street") {
            loadData({ type: "street", id: street.val() }, 1, $(this).val());
        } else if (district.val() != "district") {
            loadData(
                { type: "district", id: district.val() },
                1,
                $(this).val()
            );
        } else if (city.val() != "city") {
            loadData({ type: "city", id: city.val() }, 1, $(this).val());
        } else {
            loadData({}, 1, $(this).val());
        }
    });
});
