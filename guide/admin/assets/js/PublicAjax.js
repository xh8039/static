class PublicAjax {
    constructor(form_class, button) {
        // var form_class = this.escapeJquery(form_class);
        $(document).ready(() => {
            $(form_class).on('submit', function (event) {
                if ($(this)[0].checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    $(this).addClass('was-validated');
                    return false;
                }
                var loader;
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'post',
                    dataType: 'json',
                    data: $(this).serialize(),
                    // 请求发送前操作
                    beforeSend: () => {
                        loader = $(this).parent().parent().lyearloading({
                            opacity: 0.125,
                            spinnerSize: 'lg',
                            spinnerText: '提交中... 请勿刷新页面'
                        });
                    },
                    // 请求完成操作
                    complete() {
                        loader.destroy();
                    },
                    success(res) {
                        if (res.code == 200) {
                            if (self.frameElement && self.frameElement.tagName == "IFRAME") {
                                parent.$('table').bootstrapTable('refresh', {
                                    silent: true //静态刷新
                                });
                                parent.layer.closeAll('iframe'); //关闭所有的iframe层
                            }
                            if (res.message) {
                                var content = res.message;
                            } else {
                                var content = button + '成功，点击阴影处可关闭该弹窗';
                            }
                            $.alert({
                                title: res.title ? res.title : 'Hello',
                                content,
                                icon: 'mdi mdi-rocket',
                                animation: 'scale',
                                closeAnimation: 'scale',
                                width: '1000px',
                                draggable: true,
                                backgroundDismiss: true,
                                buttons: {
                                    back: {
                                        text: '返回上一页',
                                        btnClass: 'btn-blue',
                                        action: function () {
                                            history.back()
                                        }
                                    },
                                    reload: {
                                        text: '刷新页面',
                                        btnClass: 'btn-success',
                                        action: function () {
                                            location.reload()
                                        }
                                    }
                                }
                            });
                        } else {
                            $.notify({
                                message: button + '操作失败：' + res.message,
                            }, {
                                type: 'danger',
                                placement: {
                                    from: 'top',
                                    align: 'right'
                                },
                                z_index: 10800,
                                delay: 1500,
                                animate: {
                                    enter: 'animate__animated animate__shakeX',
                                    exit: 'animate__animated animate__fadeOutDown'
                                }
                            });
                        }
                    },
                    error(xhr) {
                        console.log(xhr.responseText)
                        $.notify({
                            message: '服务器错误',
                        }, {
                            type: 'danger',
                            placement: {
                                from: 'top',
                                align: 'right'
                            },
                            z_index: 10800,
                            delay: 1500,
                            animate: {
                                enter: 'animate__animated animate__shakeX',
                                exit: 'animate__animated animate__fadeOutDown'
                            }
                        });
                    }
                })
                return false;
            });
        })
    }
    escapeJquery(srcString) {
        // 转义之后的结果
        var escapseResult = srcString;
        // javascript正则表达式中的特殊字符
        var jsSpecialChars = ["\\", "^", "$", "*", "?", ".", "+", "(", ")", "[",
            "]", "|", "{", "}"
        ];
        // jquery中的特殊字符,不是正则表达式中的特殊字符
        var jquerySpecialChars = ["~", "`", "@", "#", "%", "&", "=", "'", "\"",
            ":", ";", "<", ">", ",", "/"
        ];
        for (var i = 0; i < jsSpecialChars.length; i++) {
            escapseResult = escapseResult.replace(new RegExp("\\" + jsSpecialChars[i], "g"), "\\" + jsSpecialChars[i]);
        }
        for (var i = 0; i < jquerySpecialChars.length; i++) {
            escapseResult = escapseResult.replace(new RegExp(jquerySpecialChars[i], "g"), "\\" + jquerySpecialChars[i]);
        }
        return escapseResult;
    }
}