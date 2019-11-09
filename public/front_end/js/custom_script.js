$(document).ready(function() {
    var login_form = $("#login");
    login_form.submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: login_form.attr("action"),
            type: "POST",
            data: login_form.serialize(),
            dataType: "JSON"
        })
            .done(function(response) {
                if (response.success) {
                    swal({
                        title: "Welcome back!",
                        text: response.success,
                        timer: 2000,
                        showConfirmButton: false,
                        type: "success"
                    });
                    window.location.replace(response.url);
                } else {
                    swal(
                        "Oops!",
                        "Tài khoản hoặc mật khẩu của bạn chưa hợp lệ",
                        "error"
                    );
                }
            })
            .fail(function() {
                swal("Fail!", "Không thể đăng nhập được!", "error");
            });
    });

    var registration = $("#registration");
    registration.submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: registration.attr("action"),
            method: "POST",
            data: registration.serialize(),
            dataType: "json"
        })
            .done(function(response) {
                if (response.success) {
                    swal({
                        title: "Hi " + response.name,
                        text: response.success,
                        timer: 2000,
                        showConfirmButton: false,
                        type: "success"
                    });
                    window.location.replace(response.url);
                } else {
                    swal(
                        "Oops!",
                        "Một trong các thông tin đăng kí của bạn không hợp lệ",
                        "error"
                    );
                }
            })
            .fail(function() {
                swal("Fails!", "Không thể đăng kí bây giờ", "error");
            });
    });

    var form_comment = $("#comment_form");
    loadComment();
    function loadComment() {
        $.ajax({
            url: $("#load-comment").val(),
            method: "POST",
            data: { idPost: $("#room").val() },
            success: function(data) {
                $("#display-comment").html(data);
            }
        });
    }

    form_comment.submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: form_comment.attr("action"),
            method: "POST",
            data: {
                name: $("#comment_name").val(),
                content: $("#comment_content").val(),
                idPost: $("#room").val()
            },
            dataType: "json"
        })
            .done(function(response) {
                if (response.success) {
                    loadComment();
                    swal({
                        title:
                            "Cảm ơn " +
                            response.name +
                            " đã bình luận bài viết",
                        text: "Bình luận của bạn đã được đăng thành công ^^",
                        timer: 2000,
                        showConfirmButton: false,
                        type: "success"
                    });
                    $("#comment_form")[0].reset();
                } else {
                    swal("Oop!", response.error, "error");
                }
            })
            .fail(function() {
                swal(
                    "Hmm!!",
                    "Thông tin không phù hợp, xin bạn nhập lại",
                    "error"
                );
            });
    });

    var form_create_room = $("#form_create_room");
    form_create_room.submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: form_create_room.attr("action"),
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            dataType: "json"
        })
            .done(function(response) {
                if (response.success) {
                    loadComment();
                    swal({
                        title: "Đăng thành công",
                        text: "Thông tin đã lưu thành công",
                        timer: 2000,
                        showConfirmButton: false,
                        type: "success"
                    });
                    $("#form_create_room")[0].reset();
                    setTimeout(function(){  window.history.go(-1); }, 2000);
                } else {
                    swal("Oop!", response.error, "error");
                }
            })
            .fail(function() {
                swal(
                    "Hmm!!",
                    "Thông tin không phù hợp, xin bạn nhập lại",
                    "error"
                );
            });
    });
});
